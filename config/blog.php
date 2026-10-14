<?php

/*
|--------------------------------------------------------------------------
| Contenu du blog
|--------------------------------------------------------------------------
|
| Structure : catégories -> sujets (6 par catégorie) -> articles (1 ou +).
| Les clés de chaque tableau servent de slug dans l'URL :
|   /blog/{categorie}/{sujet}/{article}
|
| Pour ajouter un article : ajoutez une entrée dans 'articles' du sujet.
|
*/

return [

    'risques-electriques' => [
        'title' => 'Risques électriques & incendie',
        'icon' => 'fa-fire',
        'excerpt' => 'Courts-circuits, surchauffes du tableau électrique, câblages défectueux : les sinistres les plus fréquents et comment votre décennale vous protège.',
        'topics' => [
            'court-circuit' => [
                'title' => 'Court-circuit',
                'icon' => 'fa-bolt',
                'excerpt' => 'Origines, conséquences et prise en charge d\'un court-circuit après travaux.',
                'articles' => [
                    'court-circuit-responsabilite' => [
                        'title' => 'Court-circuit après chantier : qui est responsable ?',
                        'excerpt' => 'Comprendre quand la responsabilité décennale de l\'électricien est engagée.',
                        'date' => '2026-10-01',
                        'content' => '<p>Un court-circuit survenant après la réception des travaux peut engager la responsabilité décennale de l\'électricien s\'il rend l\'ouvrage impropre à sa destination.</p><p>L\'expertise déterminera si la cause provient d\'un défaut d\'exécution (mauvais serrage, section de câble inadaptée) ou d\'une mauvaise utilisation par l\'occupant.</p>',
                    ],
                    'court-circuit-prevention' => [
                        'title' => '5 bonnes pratiques pour éviter les courts-circuits',
                        'excerpt' => 'Les gestes techniques qui limitent le risque de sinistre.',
                        'date' => '2026-10-02',
                        'content' => '<p>Respecter les sections de conducteurs, contrôler les serrages, protéger chaque circuit par un disjoncteur adapté, tester l\'isolement et documenter l\'installation sont les bases d\'un chantier sans sinistre.</p>',
                    ],
                ],
            ],
            'surchauffe-tableau' => [
                'title' => 'Surchauffe du tableau',
                'icon' => 'fa-temperature-high',
                'excerpt' => 'Pourquoi un tableau électrique chauffe et quels dommages sont couverts.',
                'articles' => [
                    'surchauffe-tableau-causes' => [
                        'title' => 'Tableau électrique qui chauffe : causes et garanties',
                        'excerpt' => 'Les causes techniques d\'une surchauffe et la couverture associée.',
                        'date' => '2026-10-01',
                        'content' => '<p>Une surchauffe provient le plus souvent d\'un mauvais serrage des bornes, d\'un calibre de protection inadapté ou d\'une surcharge. Lorsque l\'origine est un défaut de mise en œuvre, la garantie décennale peut être mobilisée.</p>',
                    ],
                ],
            ],
            'cablage-defectueux' => [
                'title' => 'Câblage défectueux',
                'icon' => 'fa-plug',
                'excerpt' => 'Les erreurs de câblage les plus coûteuses en cas de sinistre.',
                'articles' => [
                    'cablage-defectueux-erreurs' => [
                        'title' => 'Les erreurs de câblage les plus sinistrées',
                        'excerpt' => 'Inversions, sections sous-dimensionnées, connexions non conformes.',
                        'date' => '2026-10-01',
                        'content' => '<p>Inversion phase/neutre, absence de liaison équipotentielle ou connexions dans des boîtes non accessibles : ces défauts sont régulièrement relevés par les experts après sinistre.</p>',
                    ],
                ],
            ],
            'incendie-electrique' => [
                'title' => 'Incendie d\'origine électrique',
                'icon' => 'fa-fire-extinguisher',
                'excerpt' => 'Comment se déroule l\'expertise après un incendie lié à l\'installation.',
                'articles' => [
                    'incendie-electrique-expertise' => [
                        'title' => 'Incendie électrique : le déroulement de l\'expertise',
                        'excerpt' => 'Les étapes clés, de la déclaration à l\'indemnisation.',
                        'date' => '2026-10-01',
                        'content' => '<p>Après un incendie, l\'assureur mandate un expert qui recherche le point de départ du feu. Conservez vos factures, schémas et attestations Consuel : ils seront déterminants.</p>',
                    ],
                ],
            ],
            'dommages-materiels' => [
                'title' => 'Dommages matériels',
                'icon' => 'fa-house-damage',
                'excerpt' => 'Ce que couvre la décennale sur les dommages consécutifs.',
                'articles' => [
                    'dommages-materiels-couverture' => [
                        'title' => 'Dommages matériels consécutifs : ce qui est couvert',
                        'excerpt' => 'Distinguer dommages à l\'ouvrage et dommages aux biens.',
                        'date' => '2026-10-01',
                        'content' => '<p>La décennale couvre la réparation de l\'ouvrage. Les dommages aux biens mobiliers des occupants relèvent généralement de la RC Pro ou de garanties complémentaires.</p>',
                    ],
                ],
            ],
            'declaration-sinistre' => [
                'title' => 'Déclarer un sinistre',
                'icon' => 'fa-file-signature',
                'excerpt' => 'Délais, pièces à fournir et bons réflexes.',
                'articles' => [
                    'declaration-sinistre-etapes' => [
                        'title' => 'Déclarer un sinistre en 4 étapes',
                        'excerpt' => 'Le guide pratique pour l\'artisan électricien.',
                        'date' => '2026-10-01',
                        'content' => '<p>1. Prévenez votre assureur rapidement. 2. Rassemblez factures et attestations. 3. Ne réparez rien avant l\'expertise. 4. Suivez le rapport d\'expertise et les échanges avec le maître d\'ouvrage.</p>',
                    ],
                ],
            ],
        ],
    ],

    'conformite-nf-c-15-100' => [
        'title' => 'Conformité NF C 15-100',
        'icon' => 'fa-certificate',
        'excerpt' => 'Garantie de vos travaux face aux exigences de la norme NF C 15-100, un point essentiel en cas d\'expertise après un sinistre.',
        'topics' => [
            'norme-essentiel' => [
                'title' => 'L\'essentiel de la norme',
                'icon' => 'fa-book',
                'excerpt' => 'Les grandes règles de la NF C 15-100.',
                'articles' => [
                    'nf-c-15-100-resume' => [
                        'title' => 'NF C 15-100 : le résumé pour les artisans',
                        'excerpt' => 'Les points clés à maîtriser sur chaque chantier.',
                        'date' => '2026-10-01',
                        'content' => '<p>La norme fixe les règles de conception et de réalisation des installations basse tension : nombre de prises par pièce, protection différentielle, volumes de salle de bain, etc.</p>',
                    ],
                ],
            ],
            'consuel' => [
                'title' => 'Attestation Consuel',
                'icon' => 'fa-stamp',
                'excerpt' => 'Quand et comment obtenir le Consuel.',
                'articles' => [
                    'consuel-obtenir' => [
                        'title' => 'Obtenir l\'attestation Consuel',
                        'excerpt' => 'Démarches, délais et motifs de refus.',
                        'date' => '2026-10-01',
                        'content' => '<p>L\'attestation de conformité Consuel est obligatoire pour toute installation neuve ou entièrement rénovée avant la mise sous tension par le distributeur.</p>',
                    ],
                ],
            ],
            'salle-de-bain' => [
                'title' => 'Volumes salle de bain',
                'icon' => 'fa-bath',
                'excerpt' => 'Les règles des volumes 0, 1 et 2.',
                'articles' => [
                    'salle-de-bain-volumes' => [
                        'title' => 'Électricité en salle de bain : les volumes expliqués',
                        'excerpt' => 'Quels équipements dans quel volume.',
                        'date' => '2026-10-01',
                        'content' => '<p>Chaque volume impose un indice de protection et une classe d\'appareil. Le non-respect de ces règles est une cause fréquente de mise en cause après sinistre.</p>',
                    ],
                ],
            ],
            'protection-differentielle' => [
                'title' => 'Protection différentielle',
                'icon' => 'fa-shield-alt',
                'excerpt' => 'Choisir et répartir les interrupteurs différentiels.',
                'articles' => [
                    'differentiel-choix' => [
                        'title' => 'Type AC, A ou F : bien choisir son différentiel',
                        'excerpt' => 'Le bon différentiel pour chaque circuit.',
                        'date' => '2026-10-01',
                        'content' => '<p>Le type A est requis pour les circuits plaques de cuisson et lave-linge, le type F pour certaines bornes de recharge ou pompes à chaleur.</p>',
                    ],
                ],
            ],
            'mise-a-la-terre' => [
                'title' => 'Mise à la terre',
                'icon' => 'fa-globe-europe',
                'excerpt' => 'Prise de terre et liaisons équipotentielles.',
                'articles' => [
                    'mise-a-la-terre-regles' => [
                        'title' => 'Mise à la terre : règles et contrôles',
                        'excerpt' => 'Valeur de résistance et mesures à réaliser.',
                        'date' => '2026-10-01',
                        'content' => '<p>Une prise de terre conforme et des liaisons équipotentielles correctes sont indispensables à la sécurité des personnes et à la validité de votre garantie.</p>',
                    ],
                ],
            ],
            'expertise-conformite' => [
                'title' => 'Expertise & conformité',
                'icon' => 'fa-search',
                'excerpt' => 'Le rôle de la norme lors d\'une expertise.',
                'articles' => [
                    'expertise-conformite-role' => [
                        'title' => 'Pourquoi la conformité pèse lors d\'une expertise',
                        'excerpt' => 'La norme comme référence de l\'expert.',
                        'date' => '2026-10-01',
                        'content' => '<p>L\'expert compare l\'installation aux règles de l\'art, dont la NF C 15-100 est la référence. Une installation conforme facilite grandement la défense de l\'artisan.</p>',
                    ],
                ],
            ],
        ],
    ],

    'domotique-automatismes' => [
        'title' => 'Domotique & automatismes',
        'icon' => 'fa-home',
        'excerpt' => 'Couverture de vos installations de maison connectée, automatismes (portails, volets), systèmes de ventilation et de chauffage électrique.',
        'topics' => [
            'maison-connectee' => [
                'title' => 'Maison connectée',
                'icon' => 'fa-wifi',
                'excerpt' => 'Box domotique, capteurs et pilotage à distance.',
                'articles' => [
                    'maison-connectee-garantie' => [
                        'title' => 'Domotique : quelle garantie pour l\'installateur ?',
                        'excerpt' => 'Ce qui relève de la décennale ou de la biennale.',
                        'date' => '2026-10-01',
                        'content' => '<p>Les équipements dissociables relèvent souvent de la garantie biennale, tandis que le câblage encastré relève de la décennale.</p>',
                    ],
                ],
            ],
            'portails' => [
                'title' => 'Portails motorisés',
                'icon' => 'fa-door-open',
                'excerpt' => 'Motorisation et sécurité des portails.',
                'articles' => [
                    'portails-securite' => [
                        'title' => 'Motorisation de portail : risques et responsabilités',
                        'excerpt' => 'Les obligations de sécurité de l\'installateur.',
                        'date' => '2026-10-01',
                        'content' => '<p>Cellules photoélectriques, feu clignotant et détection d\'obstacle sont obligatoires. Leur absence engage directement la responsabilité de l\'installateur.</p>',
                    ],
                ],
            ],
            'volets-roulants' => [
                'title' => 'Volets roulants',
                'icon' => 'fa-bars',
                'excerpt' => 'Motorisation et câblage des volets.',
                'articles' => [
                    'volets-roulants-pannes' => [
                        'title' => 'Volets roulants électriques : les pannes les plus fréquentes',
                        'excerpt' => 'Origines et prise en charge.',
                        'date' => '2026-10-01',
                        'content' => '<p>Une alimentation mal protégée ou un câblage exposé à l\'humidité sont des causes classiques de pannes à répétition.</p>',
                    ],
                ],
            ],
            'ventilation' => [
                'title' => 'Ventilation (VMC)',
                'icon' => 'fa-fan',
                'excerpt' => 'Raccordement électrique des VMC.',
                'articles' => [
                    'vmc-raccordement' => [
                        'title' => 'Raccorder une VMC dans les règles',
                        'excerpt' => 'Circuit dédié et protection adaptée.',
                        'date' => '2026-10-01',
                        'content' => '<p>La VMC doit disposer d\'un circuit dédié protégé par un disjoncteur 2A. Une VMC défaillante peut rendre un logement impropre à sa destination.</p>',
                    ],
                ],
            ],
            'chauffage-electrique' => [
                'title' => 'Chauffage électrique',
                'icon' => 'fa-thermometer-half',
                'excerpt' => 'Radiateurs, planchers chauffants et pompes à chaleur.',
                'articles' => [
                    'chauffage-electrique-dimensionnement' => [
                        'title' => 'Chauffage électrique : bien dimensionner ses circuits',
                        'excerpt' => 'Sections et protections selon la puissance.',
                        'date' => '2026-10-01',
                        'content' => '<p>Chaque circuit de chauffage est limité en puissance selon la section du câble. Un sous-dimensionnement est une source majeure d\'échauffement.</p>',
                    ],
                ],
            ],
            'borne-recharge' => [
                'title' => 'Borne de recharge (IRVE)',
                'icon' => 'fa-charging-station',
                'excerpt' => 'Installation de bornes pour véhicules électriques.',
                'articles' => [
                    'irve-qualification' => [
                        'title' => 'IRVE : qualification obligatoire et assurance',
                        'excerpt' => 'Ce que les assureurs exigent pour couvrir les bornes.',
                        'date' => '2026-10-01',
                        'content' => '<p>Au-delà de 3,7 kW, l\'installation d\'une borne exige une qualification IRVE. Pensez à déclarer cette activité à votre assureur décennal.</p>',
                    ],
                ],
            ],
        ],
    ],

    'surtensions-appareils' => [
        'title' => 'Surtensions & appareils',
        'icon' => 'fa-tv',
        'excerpt' => 'Prise en charge des dommages causés aux appareils électriques et électroniques des occupants à la suite d\'une surtension provenant de votre installation.',
        'topics' => [
            'surtension-origine' => [
                'title' => 'Origines des surtensions',
                'icon' => 'fa-bolt',
                'excerpt' => 'Foudre, réseau ou défaut d\'installation.',
                'articles' => [
                    'surtension-causes' => [
                        'title' => 'D\'où viennent les surtensions ?',
                        'excerpt' => 'Distinguer causes externes et défauts d\'installation.',
                        'date' => '2026-10-01',
                        'content' => '<p>Une surtension peut venir de la foudre, du réseau public ou d\'un défaut de neutre dans l\'installation. Seul ce dernier cas engage l\'électricien.</p>',
                    ],
                ],
            ],
            'parafoudre' => [
                'title' => 'Parafoudre',
                'icon' => 'fa-cloud-showers-heavy',
                'excerpt' => 'Quand le parafoudre est obligatoire.',
                'articles' => [
                    'parafoudre-obligation' => [
                        'title' => 'Parafoudre : obligatoire ou recommandé ?',
                        'excerpt' => 'Les zones et cas d\'obligation.',
                        'date' => '2026-10-01',
                        'content' => '<p>Le parafoudre est obligatoire dans certaines zones à forte densité de foudroiement et pour certains bâtiments. Ailleurs, il est fortement recommandé.</p>',
                    ],
                ],
            ],
            'appareils-electroniques' => [
                'title' => 'Appareils électroniques',
                'icon' => 'fa-laptop',
                'excerpt' => 'TV, informatique, électroménager endommagés.',
                'articles' => [
                    'appareils-indemnisation' => [
                        'title' => 'Appareils grillés : comment se passe l\'indemnisation ?',
                        'excerpt' => 'Vétusté, justificatifs et garanties mobilisées.',
                        'date' => '2026-10-01',
                        'content' => '<p>Les appareils endommagés sont indemnisés selon leur valeur, déduction faite de la vétusté. Les factures d\'achat facilitent le traitement.</p>',
                    ],
                ],
            ],
            'rupture-neutre' => [
                'title' => 'Rupture de neutre',
                'icon' => 'fa-unlink',
                'excerpt' => 'Un défaut grave aux conséquences lourdes.',
                'articles' => [
                    'rupture-neutre-consequences' => [
                        'title' => 'Rupture de neutre : conséquences et responsabilité',
                        'excerpt' => 'Pourquoi ce défaut détruit les appareils.',
                        'date' => '2026-10-01',
                        'content' => '<p>Une rupture de neutre provoque un déséquilibre de tension pouvant atteindre 400 V sur certains circuits, détruisant les appareils branchés.</p>',
                    ],
                ],
            ],
            'rc-pro-vs-decennale' => [
                'title' => 'RC Pro ou décennale ?',
                'icon' => 'fa-balance-scale',
                'excerpt' => 'Quelle garantie joue pour les appareils.',
                'articles' => [
                    'rc-pro-decennale-difference' => [
                        'title' => 'RC Pro et décennale : qui paie les appareils endommagés ?',
                        'excerpt' => 'La répartition entre les deux garanties.',
                        'date' => '2026-10-01',
                        'content' => '<p>Les dommages aux biens des tiers relèvent en principe de la RC Pro, tandis que la décennale couvre l\'ouvrage lui-même.</p>',
                    ],
                ],
            ],
            'prevention-surtension' => [
                'title' => 'Prévenir les surtensions',
                'icon' => 'fa-shield-alt',
                'excerpt' => 'Les équipements de protection à proposer.',
                'articles' => [
                    'prevention-surtension-equipements' => [
                        'title' => 'Protéger une installation contre les surtensions',
                        'excerpt' => 'Parafoudres, multiprises protégées et bonnes pratiques.',
                        'date' => '2026-10-01',
                        'content' => '<p>Associer un parafoudre de tête, une bonne mise à la terre et des protections locales pour les équipements sensibles réduit fortement le risque.</p>',
                    ],
                ],
            ],
        ],
    ],

];
