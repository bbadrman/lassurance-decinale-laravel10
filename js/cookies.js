function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookieValue(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0)
            return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function showCookieBanner() {
    // Vérifier les deux cookies pour compatibilité
    var consent = getCookieValue("siteCookieConsent");
    var oldConsent = getCookieValue("aksamPerformance");
    if (!consent && !oldConsent) {
        document.getElementById("cookieConsentBanner").classList.remove("hidden");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    showCookieBanner();
    var acceptBtn = document.getElementById("acceptCookies");
    if (acceptBtn) {
        acceptBtn.addEventListener("click", function () {
            // Définir le nouveau cookie
            setCookie("siteCookieConsent", "accepted", 365);
            // Définir aussi l'ancien cookie pour compatibilité
            setCookie("aksamPerformance", "accepted", 365);
            setCookie("displayCookieConsent", "y", 365);

            document.getElementById("cookieConsentBanner").classList.add("hidden");

            // Mettre à jour le consentement Google Analytics/Tag Manager
            if (typeof gtag !== 'undefined') {
                gtag("consent", "update", {
                    ad_storage: "granted",
                    analytics_storage: "granted",
                    ad_user_data: "granted",
                    ad_personalization: "granted",
                });
            }
        });
    }
});