/* ===== SCRIPTS.JS ===== */

// Configuration Tailwind CSS
if (typeof tailwind !== 'undefined') {
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: "#1E3A8A",
                    secondary: "#38BDF8",
                    accent: "#F59E0B",
                    jaune: "#FFCE1B",
                    success: "#10B981",
                    warning: "#FB923C",
                    danger: "#EF4444",
                    dark: "#0F172A",
                    light: "#F8FAFC",
                    surface: "#FFFFFF",
                    surfaceHover: "#F1F5F9"
                },
                fontFamily: {
                    sans: ["Plus Jakarta Sans", "sans-serif"]
                }
            }
        }
    };
}

// Variables globales
const gaProperty = 'GTM-PTHF4V94';
const disableStr = 'ga-disable-' + gaProperty;

// ===== GESTION DES COOKIES =====

/**
 * Récupère la valeur d'un cookie
 * @param {string} cname - Nom du cookie
 * @returns {string} - Valeur du cookie ou chaîne vide
 */
function getCookie(cname) {
    const name = cname + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');

    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/**
 * Accepte les cookies et met à jour les paramètres
 */
function acceptCookies() {
    const expiryDate = new Date();
    expiryDate.setMonth(expiryDate.getMonth() + 1);
    document.cookie = 'aksamPerformance=1; path=/; expires=' + expiryDate.toGMTString();

    // Supprimer la bannière de cookies
    const banner = document.querySelector('.fixed.bottom-6');
    if (banner) {
        banner.remove();
    }

    // Mettre à jour le consentement Google Analytics
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'update', {
            'ad_storage': 'granted',
            'analytics_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
        });
    }
}

/**
 * Refuse les cookies
 */
function refuseCookies() {
    const banner = document.querySelector('.fixed.bottom-6');
    if (banner) {
        banner.remove();
    }
}

/**
 * Crée et affiche la bannière de cookies
 */
function createCookieBanner() {
    if (document.cookie.indexOf('aksamPerformance') >= 0) {
        return; // Les cookies sont déjà acceptés
    }

    const banner = document.createElement('div');
    banner.innerHTML = `
        <div class="fixed bottom-6 left-6 right-6 bg-surface p-4 lg:p-6 rounded-2xl shadow-2xl z-50 max-w-md mx-auto border border-primary/20 cookie-banner">
            <div class="flex items-start space-x-3 lg:space-x-4">
                <div class="p-2 bg-yellow-100 rounded-xl flex-shrink-0">
                    <i class="fas fa-cookie-bite text-yellow-500 text-lg lg:text-xl"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-dark mb-2 text-sm lg:text-base">Cookies et confidentialité</h4>
                    <p class="text-xs lg:text-sm text-gray-600 mb-4">
                        www.lassurance-garantie-decennale.fr utilise des cookies pour vous offrir le meilleur service.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                        <button onclick="acceptCookies()" 
                                class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-dark px-3 lg:px-4 py-2 rounded-xl text-xs lg:text-sm font-medium transition-all hover:scale-105 shadow-md">
                            <i class="fas fa-check mr-1"></i>J'accepte
                        </button>
                        <button onclick="refuseCookies()" 
                                class="bg-gray-200 text-gray-700 px-3 lg:px-4 py-2 rounded-xl text-xs lg:text-sm transition-all hover:bg-gray-300">
                            Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(banner);
}

// ===== GESTION DES FORMULAIRES =====

/**
 * Gère la soumission du formulaire de simulation
 * @param {Event} event - Événement de soumission
 * @returns {boolean} - false pour empêcher la soumission par défaut
 */
function handleFormSubmit(event) {
    event.preventDefault();

    const button = event.target.querySelector('button[type="submit"]');
    const originalHTML = button.innerHTML;
    const form = event.target;

    // Animation du bouton
    button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Traitement en cours...';
    button.disabled = true;

    // Simulation AJAX
    fetch(form.action || window.location.href, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    }).then(response => {
        if (response.ok) {
            button.innerHTML = '<i class="fas fa-check mr-2"></i>Devis envoyé avec succès !';
            button.className = button.className.replace('from-yellow-400 to-yellow-500', 'from-green-400 to-green-500');

            setTimeout(() => {
                window.location.href = '/reponse';
            }, 2000);
        } else {
            throw new Error('Erreur de soumission');
        }
    }).catch(error => {
        console.error('Erreur:', error);
        button.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i>Erreur, veuillez réessayer';
        button.className = button.className.replace('from-yellow-400 to-yellow-500', 'from-red-400 to-red-500');

        setTimeout(() => {
            button.innerHTML = originalHTML;
            button.className = button.className.replace('from-red-400 to-red-500', 'from-yellow-400 to-yellow-500');
            button.disabled = false;
        }, 3000);
    });

    return false;
}

/**
 * Affiche/cache le champ motif de résiliation
 * @param {HTMLSelectElement} select - Élément select
 */
function showDiv(select) {
    const hiddenDiv = document.getElementById('hidden_div');
    if (hiddenDiv) {
        if (select.value === 'oui') {
            hiddenDiv.style.display = "block";
        } else {
            hiddenDiv.style.display = "none";
        }
    }
}

/**
 * Toggle du champ motif pour les formulaires
 * @param {HTMLSelectElement} select - Élément select
 */
function toggleMotifField(select) {
    const motifContainer = document.getElementById('motif-container');
    if (motifContainer) {
        if (select.value === 'OUI') {
            motifContainer.style.display = 'block';
        } else {
            motifContainer.style.display = 'none';
        }
    }
}

// ===== GESTION DU SCROLL SMOOTH =====

/**
 * Initialise le scroll smooth pour les liens d'ancre
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ===== GESTION DE GOOGLE ANALYTICS =====

/**
 * Initialise le consentement Google Analytics
 */
function initGoogleAnalytics() {
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'wait_for_update': 500
        });

        // Vérifier si les cookies sont acceptés
        if (document.cookie.indexOf('displayCookieConsent=y') >= 0) {
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'analytics_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
            });
        }
    }

    // Désactiver le tracking si nécessaire
    if (document.cookie.indexOf('displayCookieConsent=y') < 0) {
        window[disableStr] = true;
    }
}

// ===== ANIMATIONS GSAP =====

/**
 * Initialise les animations GSAP si disponible
 */
function initGSAPAnimations() {
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Animation des cards au scroll
        gsap.from(".card-hover", {
            duration: 1,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            scrollTrigger: {
                trigger: ".card-hover",
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            }
        });

        // Animation du hero
        gsap.from(".hero-content", {
            duration: 1.5,
            y: 100,
            opacity: 0,
            ease: "power3.out"
        });
    }
}

// ===== GESTIONNAIRES D'ÉVÉNEMENTS =====

/**
 * Initialise tous les gestionnaires d'événements
 */
function initEventListeners() {
    // Gestion des formulaires
    const simulationForm = document.getElementById('simulationForm');
    if (simulationForm) {
        simulationForm.addEventListener('submit', handleFormSubmit);
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmit);
    }

    // Gestion des selects conditionnels
    const ancienneSelect = document.querySelector('select[name="ancienne"]');
    if (ancienneSelect) {
        ancienneSelect.addEventListener('change', function () {
            showDiv(this);
        });
    }

    const resilieSelect = document.querySelector('select[title="Assurance résilié"]');
    if (resilieSelect) {
        resilieSelect.addEventListener('change', function () {
            toggleMotifField(this);
        });
    }
}

// ===== INITIALISATION =====

/**
 * Fonction d'initialisation principale
 */
function initApp() {
    console.log('🚀 Initialisation de l\'application...');

    // Initialiser Google Analytics
    initGoogleAnalytics();

    // Créer la bannière de cookies
    createCookieBanner();

    // Initialiser le scroll smooth
    initSmoothScroll();

    // Initialiser les gestionnaires d'événements
    initEventListeners();

    // Initialiser les animations GSAP
    initGSAPAnimations();

    console.log('✅ Application initialisée avec succès');
}

// ===== EVENT LISTENERS GLOBAUX =====

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', initApp);

// Gestion des erreurs globales
window.addEventListener('error', function (e) {
    console.error('Erreur JavaScript:', e.error);
});

// Gestion des promesses rejetées
window.addEventListener('unhandledrejection', function (e) {
    console.error('Promise rejetée:', e.reason);
});

// Export des fonctions pour usage global
window.acceptCookies = acceptCookies;
window.refuseCookies = refuseCookies;
window.handleFormSubmit = handleFormSubmit;
window.showDiv = showDiv;
window.toggleMotifField = toggleMotifField;