<?php

/*
|--------------------------------------------------------------------------
| Nomenclature des qualifications BTP (Qualibat - Nomenclature 2026 v1)
|--------------------------------------------------------------------------
|
| Généré depuis le fichier "Nomenclature_Activité.xlsx".
| Famille -> Activité -> Spécialité -> Qualification (code + intitulé).
| Utilisé par les selects dynamiques de /qualification-certification-btp.
|
*/

return [
    [
        'code' => '1',
        'label' => 'Préparation du site et infrastructure',
        'activities' => [
            [
                'code' => '11',
                'label' => 'Démolition - Déconstruction',
                'specialities' => [
                    [
                        'code' => '111',
                        'label' => 'Travaux de démolition - déconstruction',
                        'qualifications' => [
                            [
                                'code' => '1111',
                                'label' => 'Démolition - Déconstruction (technicité courante)',
                            ],
                            [
                                'code' => '1112',
                                'label' => 'Démolition - Déconstruction (technicité confirmée)',
                            ],
                            [
                                'code' => '1113',
                                'label' => 'Démolition - Déconstruction (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '114',
                        'label' => 'Démolition par carottage ou sciage',
                        'qualifications' => [
                            [
                                'code' => '1142',
                                'label' => 'Démolition par carottage ou sciage (technicité confirmée)',
                            ],
                            [
                                'code' => '1143',
                                'label' => 'Démolition par carottage ou sciage (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '115',
                        'label' => 'Démolition par explosifs',
                        'qualifications' => [
                            [
                                'code' => '1153',
                                'label' => 'Démolition par explosifs',
                            ],
                        ],
                    ],
                    [
                        'code' => '116',
                        'label' => 'Curage - Déconstruction sélective',
                        'qualifications' => [
                            [
                                'code' => '1161',
                                'label' => 'Travaux de curage',
                            ],
                            [
                                'code' => '1162',
                                'label' => 'Déconstruction sélective',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '12',
                'label' => 'Fondations - Soutènement',
                'specialities' => [
                    [
                        'code' => '121',
                        'label' => 'Puits et tranchées blindés',
                        'qualifications' => [
                            [
                                'code' => '1213',
                                'label' => 'Puits et tranchées blindés',
                            ],
                        ],
                    ],
                    [
                        'code' => '122',
                        'label' => 'Reprises en sous-œuvre',
                        'qualifications' => [
                            [
                                'code' => '1221',
                                'label' => 'Reprises en sous-œuvre (technicité courante)',
                            ],
                            [
                                'code' => '1223',
                                'label' => 'Reprises en sous-œuvre (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '123',
                        'label' => 'Micropieux et pieux dans le sol',
                        'qualifications' => [
                            [
                                'code' => '1231',
                                'label' => 'Micropieux',
                            ],
                            [
                                'code' => '1233',
                                'label' => 'Pieux',
                            ],
                        ],
                    ],
                    [
                        'code' => '124',
                        'label' => 'Parois moulées dans le sol',
                        'qualifications' => [
                            [
                                'code' => '1243',
                                'label' => 'Parois moulées',
                            ],
                        ],
                    ],
                    [
                        'code' => '125',
                        'label' => 'Tirants d\'ancrage',
                        'qualifications' => [
                            [
                                'code' => '1253',
                                'label' => 'Tirants d\'ancrage',
                            ],
                        ],
                    ],
                    [
                        'code' => '126',
                        'label' => 'Consolidation des sols',
                        'qualifications' => [
                            [
                                'code' => '1263',
                                'label' => 'Consolidation des sols',
                            ],
                        ],
                    ],
                    [
                        'code' => '127',
                        'label' => 'Palplanches',
                        'qualifications' => [
                            [
                                'code' => '1273',
                                'label' => 'Palplanches',
                            ],
                        ],
                    ],
                    [
                        'code' => '128',
                        'label' => 'Rabattement de nappe aquifère',
                        'qualifications' => [
                            [
                                'code' => '1281',
                                'label' => 'Rabattement de nappe',
                            ],
                        ],
                    ],
                    [
                        'code' => '129',
                        'label' => 'Soutènement',
                        'qualifications' => [
                            [
                                'code' => '1291',
                                'label' => 'Soutènement (technicité courante)',
                            ],
                            [
                                'code' => '1292',
                                'label' => 'Soutènement (technicité confirmée)',
                            ],
                            [
                                'code' => '1293',
                                'label' => 'Soutènement (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '13',
                'label' => 'Aménagements du site',
                'specialities' => [
                    [
                        'code' => '130',
                        'label' => 'Travaux d\'enrochement',
                        'qualifications' => [
                            [
                                'code' => '1302',
                                'label' => 'Travaux d\'enrochement',
                            ],
                        ],
                    ],
                    [
                        'code' => '131',
                        'label' => 'Terrassements - fouilles',
                        'qualifications' => [
                            [
                                'code' => '1311',
                                'label' => 'Terrassements - fouilles (technicité courante)',
                            ],
                            [
                                'code' => '1312',
                                'label' => 'Terrassements - fouilles (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '132',
                        'label' => 'Canalisations - assainissement',
                        'qualifications' => [
                            [
                                'code' => '1321',
                                'label' => 'Canalisations d\'assainissement (technicité courante)',
                            ],
                            [
                                'code' => '1322',
                                'label' => 'Assainissement autonome (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '133',
                        'label' => 'Poteaux et clôtures',
                        'qualifications' => [
                            [
                                'code' => '1331',
                                'label' => 'Poteaux et clôtures',
                            ],
                        ],
                    ],
                    [
                        'code' => '134',
                        'label' => 'Chaussées - trottoirs - pavage',
                        'qualifications' => [
                            [
                                'code' => '1341',
                                'label' => 'Aménagement de chaussées et trottoirs',
                            ],
                            [
                                'code' => '1342',
                                'label' => 'Pavage',
                            ],
                        ],
                    ],
                    [
                        'code' => '135',
                        'label' => 'Espaces verts',
                        'qualifications' => [
                            [
                                'code' => '1351',
                                'label' => 'Espaces verts',
                            ],
                        ],
                    ],
                    [
                        'code' => '136',
                        'label' => 'Système d\'arrosage',
                        'qualifications' => [
                            [
                                'code' => '1361',
                                'label' => 'Système d\'arrosage',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '14',
                'label' => 'Montage d\'échafaudage, plates-formes de travail, étaiements et travaux d\'accès difficile en hauteur',
                'specialities' => [
                    [
                        'code' => '141',
                        'label' => 'Montage d\'échafaudages',
                        'qualifications' => [
                            [
                                'code' => '1411',
                                'label' => 'Échafaudages courants (technicité courante)',
                            ],
                            [
                                'code' => '1412',
                                'label' => 'Échafaudages courants nécessitant un calcul spécifique (technicité confirmée)',
                            ],
                            [
                                'code' => '1413',
                                'label' => 'Échafaudages complexes (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '142',
                        'label' => 'Montage de plates-formes de travail',
                        'qualifications' => [
                            [
                                'code' => '1421',
                                'label' => 'Plates-formes suspendues',
                            ],
                            [
                                'code' => '1422',
                                'label' => 'Plates-formes sur mâts',
                            ],
                        ],
                    ],
                    [
                        'code' => '144',
                        'label' => 'Montage d\'étaiements',
                        'qualifications' => [
                            [
                                'code' => '1441',
                                'label' => 'Étaiements courants (technicité courante)',
                            ],
                            [
                                'code' => '1442',
                                'label' => 'Étaiements courants nécessitant un calcul spécifique (technicité confirmée)',
                            ],
                            [
                                'code' => '1443',
                                'label' => 'Étaiements complexes (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '145',
                        'label' => 'Travaux d\'accès difficile en hauteur',
                        'qualifications' => [
                            [
                                'code' => '1452',
                                'label' => 'Travaux sur cordes',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '15',
                'label' => 'Décontamination et traitement curatif et préventif',
                'specialities' => [
                    [
                        'code' => '152',
                        'label' => 'Insectes à larves xylophages - termites',
                        'qualifications' => [
                            [
                                'code' => '1522',
                                'label' => 'Traitement curatif et préventif contre les insectes à larves xylophages',
                            ],
                            [
                                'code' => '1523',
                                'label' => 'Traitement curatif et préventif contre les termites',
                            ],
                        ],
                    ],
                    [
                        'code' => '153',
                        'label' => 'Champignons',
                        'qualifications' => [
                            [
                                'code' => '1532',
                                'label' => 'Traitement curatif et préventif contre les champignons lignivores, dont la mérule',
                            ],
                        ],
                    ],
                    [
                        'code' => '154',
                        'label' => 'Assèchement des murs',
                        'qualifications' => [
                            [
                                'code' => '1542',
                                'label' => 'Assèchement des murs par traitement des remontées capillaires',
                            ],
                        ],
                    ],
                    [
                        'code' => '155',
                        'label' => 'Amiante',
                        'qualifications' => [
                            [
                                'code' => '1552',
                                'label' => 'Traitement de l\'amiante',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '2',
        'label' => 'Structure et gros œuvre',
        'activities' => [
            [
                'code' => '21',
                'label' => 'Maçonnerie et béton armé',
                'specialities' => [
                    [
                        'code' => '211',
                        'label' => 'Maçonnerie et ouvrages en béton armé',
                        'qualifications' => [
                            [
                                'code' => '2111',
                                'label' => 'Maçonnerie et ouvrage en béton armé (technicité courante)',
                            ],
                            [
                                'code' => '2112',
                                'label' => 'Maçonnerie et ouvrage en béton armé (technicité confirmée)',
                            ],
                            [
                                'code' => '2113',
                                'label' => 'Maçonnerie et ouvrage en béton armé (technicité supérieure)',
                            ],
                            [
                                'code' => '2114',
                                'label' => 'Réhabilitation lourde ou restructuration en maçonnerie et ouvrage en béton armé courant (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '212',
                        'label' => 'Ravalement en maçonnerie',
                        'qualifications' => [
                            [
                                'code' => '2121',
                                'label' => 'Ravalement en maçonnerie',
                            ],
                        ],
                    ],
                    [
                        'code' => '213',
                        'label' => 'Enduits',
                        'qualifications' => [
                            [
                                'code' => '2132',
                                'label' => 'Enduits aux liants hydrauliques',
                            ],
                        ],
                    ],
                    [
                        'code' => '214',
                        'label' => 'Transformation en maçonnerie',
                        'qualifications' => [
                            [
                                'code' => '2141',
                                'label' => 'Transformation en maçonnerie',
                            ],
                            [
                                'code' => '2142',
                                'label' => 'Réparations en maçonnerie et en béton armé',
                            ],
                        ],
                    ],
                    [
                        'code' => '215',
                        'label' => 'Dallages',
                        'qualifications' => [
                            [
                                'code' => '2151',
                                'label' => 'Dallage courant (technicité courante)',
                            ],
                            [
                                'code' => '2153',
                                'label' => 'Dallage à usage industriel (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '216',
                        'label' => 'Dallages ou dalles béton ciré',
                        'qualifications' => [
                            [
                                'code' => '2163',
                                'label' => 'Dallages et dalles béton ciré',
                            ],
                        ],
                    ],
                    [
                        'code' => '217',
                        'label' => 'Taille et pose de pierre',
                        'qualifications' => [
                            [
                                'code' => '2171',
                                'label' => 'Taille et pose de pierre',
                            ],
                        ],
                    ],
                    [
                        'code' => '218',
                        'label' => 'Restauration du patrimoine',
                        'qualifications' => [
                            [
                                'code' => '2181',
                                'label' => 'Restauration maçonnerie du patrimoine',
                            ],
                            [
                                'code' => '2182',
                                'label' => 'Restauration béton du patrimoine',
                            ],
                            [
                                'code' => '2183',
                                'label' => 'Restauration pierre de taille et maçonnerie du patrimoine',
                            ],
                        ],
                    ],
                    [
                        'code' => '219',
                        'label' => 'Restauration des monuments historiques',
                        'qualifications' => [
                            [
                                'code' => '2192',
                                'label' => 'Restauration maçonnerie des monuments historiques',
                            ],
                            [
                                'code' => '2193',
                                'label' => 'Restauration béton des monuments historiques',
                            ],
                            [
                                'code' => '2194',
                                'label' => 'Restauration pierre de taille et maçonnerie des monuments historiques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '22',
                'label' => 'Béton armé et béton précontraint',
                'specialities' => [
                    [
                        'code' => '221',
                        'label' => 'Béton armé et béton précontraint',
                        'qualifications' => [
                            [
                                'code' => '2211',
                                'label' => 'Béton armé et béton précontraint (technicité courante)',
                            ],
                            [
                                'code' => '2212',
                                'label' => 'Béton armé et béton précontraint (technicité confirmée)',
                            ],
                            [
                                'code' => '2213',
                                'label' => 'Béton armé et béton précontraint (technicité supérieure)',
                            ],
                            [
                                'code' => '2214',
                                'label' => 'Béton armé et béton précontraint (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '224',
                        'label' => 'Éléments préfabriqués en béton armé et béton précontraint',
                        'qualifications' => [
                            [
                                'code' => '2241',
                                'label' => 'Fourniture et pose d\'éléments en béton armé et béton précontraint',
                            ],
                            [
                                'code' => '2242',
                                'label' => 'Fabrication et pose d\'éléments en béton armé et béton précontraint',
                            ],
                        ],
                    ],
                    [
                        'code' => '225',
                        'label' => 'Ouvrages étanches, au sol ou enterrés ou en élévation',
                        'qualifications' => [
                            [
                                'code' => '2251',
                                'label' => 'Ouvrages étanches en béton armé et béton précontraint (technicité courante)',
                            ],
                            [
                                'code' => '2252',
                                'label' => 'Ouvrages étanches en béton armé et béton précontraint (technicité confirmée)',
                            ],
                            [
                                'code' => '2253',
                                'label' => 'Ouvrages étanches en élévation en béton armé et béton précontraint',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '23',
                'label' => 'Charpente et structure en bois',
                'specialities' => [
                    [
                        'code' => '230',
                        'label' => 'Fourniture et pose de charpente traditionnelle, en bois lamellé-collé et structure en bois',
                        'qualifications' => [
                            [
                                'code' => '2301',
                                'label' => 'Fourniture et pose de charpente traditionnelle, en bois lamellé-collé et structure en bois (technicité courante)',
                            ],
                            [
                                'code' => '2302',
                                'label' => 'Fourniture et pose de charpente traditionnelle, en bois lamellé-collé et structure en bois (technicité confirmée)',
                            ],
                            [
                                'code' => '2303',
                                'label' => 'Fourniture et pose de charpente traditionnelle, en bois lamellé-collé et structure en bois (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '231',
                        'label' => 'Fabrication et pose de charpente traditionnelle et structure en bois',
                        'qualifications' => [
                            [
                                'code' => '2312',
                                'label' => 'Fabrication et pose de charpente traditionnelle et structure en bois (technicité confirmée)',
                            ],
                            [
                                'code' => '2313',
                                'label' => 'Fabrication et pose de charpente traditionnelle et structure en bois (technicité supérieure)',
                            ],
                            [
                                'code' => '2314',
                                'label' => 'Fabrication et pose de charpente traditionnelle et structure en bois (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '234',
                        'label' => 'Fabrication et pose de charpentes et structures en bois lamellé-collé',
                        'qualifications' => [
                            [
                                'code' => '2342',
                                'label' => 'Fabrication et pose de charpentes en bois lamellé-collé (technicité confirmée)',
                            ],
                            [
                                'code' => '2343',
                                'label' => 'Fabrication et pose de charpentes en bois lamellé-collé (technicité supérieure)',
                            ],
                            [
                                'code' => '2344',
                                'label' => 'Fabrication et pose de charpentes en bois lamellé-collé (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '235',
                        'label' => 'Fourniture et pose de bâtiments à ossature bois',
                        'qualifications' => [
                            [
                                'code' => '2351',
                                'label' => 'Fourniture et pose de bâtiments à ossature bois (technicité courante)',
                            ],
                            [
                                'code' => '2352',
                                'label' => 'Fourniture et pose de bâtiments à ossature bois (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '236',
                        'label' => 'Fabrication et pose de bâtiments à ossature bois ou panneaux de bois massifs croisés',
                        'qualifications' => [
                            [
                                'code' => '2361',
                                'label' => 'Fabrication et pose de bâtiments à ossature bois ou panneaux de bois massifs croisés (technicité courante)',
                            ],
                            [
                                'code' => '2362',
                                'label' => 'Fabrication et pose de bâtiments à ossature bois ou panneaux de bois massifs croisés (technicité confirmée)',
                            ],
                            [
                                'code' => '2363',
                                'label' => 'Fabrication et pose de bâtiments à ossature bois ou panneaux de bois massifs croisés (technicité supérieure)',
                            ],
                            [
                                'code' => '2364',
                                'label' => 'Fabrication et pose de bâtiments à ossature bois ou panneaux de bois massifs croisés (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '237',
                        'label' => 'Fourniture et pose de charpente et structures industrialisées en bois',
                        'qualifications' => [
                            [
                                'code' => '2371',
                                'label' => 'Fourniture et pose de charpente et structures industrialisées en bois (technicité courante)',
                            ],
                            [
                                'code' => '2372',
                                'label' => 'Fourniture et pose de charpente et structures industrialisées en bois (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '238',
                        'label' => 'Fourniture et pose de bâtiments en panneaux bois massifs croisés',
                        'qualifications' => [
                            [
                                'code' => '2381',
                                'label' => 'Fourniture et pose de bâtiments en panneaux bois massifs croisés (technicité courante)',
                            ],
                            [
                                'code' => '2382',
                                'label' => 'Fourniture et pose de bâtiments en panneaux bois massifs croisés (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '239',
                        'label' => 'Réparation et restauration de charpente',
                        'qualifications' => [
                            [
                                'code' => '2391',
                                'label' => 'Réparation et renforcement d\'ouvrages de charpentes',
                            ],
                            [
                                'code' => '2392',
                                'label' => 'Restauration de charpente du patrimoine',
                            ],
                            [
                                'code' => '2393',
                                'label' => 'Restauration de charpente des monuments historiques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '24',
                'label' => 'Constructions métalliques de bâtiment',
                'specialities' => [
                    [
                        'code' => '241',
                        'label' => 'Constructions métalliques de bâtiment',
                        'qualifications' => [
                            [
                                'code' => '2411',
                                'label' => 'Constructions métalliques de bâtiment (technicité courante)',
                            ],
                            [
                                'code' => '2412',
                                'label' => 'Constructions métalliques de bâtiment (technicité confirmée)',
                            ],
                            [
                                'code' => '2413',
                                'label' => 'Constructions métalliques de bâtiment (technicité supérieure)',
                            ],
                            [
                                'code' => '2414',
                                'label' => 'Constructions métalliques de bâtiment (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '242',
                        'label' => 'Ouvrages métallo-textiles',
                        'qualifications' => [
                            [
                                'code' => '2423',
                                'label' => 'Ouvrages métallo-textiles',
                            ],
                        ],
                    ],
                    [
                        'code' => '243',
                        'label' => 'Constructions industrialisées ou modulaires',
                        'qualifications' => [
                            [
                                'code' => '2432',
                                'label' => 'Fourniture et pose de constructions industrialisées ou modulaires',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '25',
                'label' => 'Ouvrages métalliques de génie civil',
                'specialities' => [
                    [
                        'code' => '251',
                        'label' => 'Ponts et passerelles rigides',
                        'qualifications' => [
                            [
                                'code' => '2512',
                                'label' => 'Ponts et passerelles rigides (technicité confirmée)',
                            ],
                            [
                                'code' => '2513',
                                'label' => 'Ponts et passerelles rigides (technicité supérieure)',
                            ],
                            [
                                'code' => '2514',
                                'label' => 'Ponts et passerelles rigides, suspendus ou à haubans (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '253',
                        'label' => 'Ponts et passerelles mobiles',
                        'qualifications' => [
                            [
                                'code' => '2533',
                                'label' => 'Ponts et passerelles mobiles',
                            ],
                        ],
                    ],
                    [
                        'code' => '254',
                        'label' => 'Renforcement et réparation d\'ouvrages d\'art',
                        'qualifications' => [
                            [
                                'code' => '2543',
                                'label' => 'Renforcement et réparation d\'ouvrages d\'art',
                            ],
                        ],
                    ],
                    [
                        'code' => '255',
                        'label' => 'Organes de retenue d\'eau',
                        'qualifications' => [
                            [
                                'code' => '2553',
                                'label' => 'Organes de retenue d\'eau',
                            ],
                        ],
                    ],
                    [
                        'code' => '256',
                        'label' => 'Silos et organes de stockage',
                        'qualifications' => [
                            [
                                'code' => '2563',
                                'label' => 'Silos et organes de stockage',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '27',
                'label' => 'Montage-levage',
                'specialities' => [
                    [
                        'code' => '271',
                        'label' => 'Montage-levage de constructions métalliques de bâtiment et/ou d\'ouvrages métalliques de génie civil',
                        'qualifications' => [
                            [
                                'code' => '2711',
                                'label' => 'Montage-levage de constructions métalliques de bâtiment (technicité courante)',
                            ],
                            [
                                'code' => '2712',
                                'label' => 'Montage-levage de constructions métalliques de bâtiment et/ou d\'ouvrages métalliques de génie civil (technicité confirmée)',
                            ],
                            [
                                'code' => '2713',
                                'label' => 'Montage-levage de constructions métalliques de bâtiment et/ou d\'ouvrages métalliques de génie civil (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '3',
        'label' => 'Enveloppe extérieure',
        'activities' => [
            [
                'code' => '31',
                'label' => 'Couverture',
                'specialities' => [
                    [
                        'code' => '310',
                        'label' => 'Couverture en tuiles à emboîtement ou à glissement',
                        'qualifications' => [
                            [
                                'code' => '3101',
                                'label' => 'Tuiles à emboîtement ou à glissement',
                            ],
                        ],
                    ],
                    [
                        'code' => '311',
                        'label' => 'Couverture en tuiles canal',
                        'qualifications' => [
                            [
                                'code' => '3111',
                                'label' => 'Tuiles canal (technicité courante)',
                            ],
                            [
                                'code' => '3113',
                                'label' => 'Tuiles canal (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '312',
                        'label' => 'Couverture en tuiles plates',
                        'qualifications' => [
                            [
                                'code' => '3121',
                                'label' => 'Tuiles plates (technicité courante)',
                            ],
                            [
                                'code' => '3123',
                                'label' => 'Tuiles plates (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '313',
                        'label' => 'Couverture en ardoises',
                        'qualifications' => [
                            [
                                'code' => '3132',
                                'label' => 'Ardoises (technicité confirmée)',
                            ],
                            [
                                'code' => '3133',
                                'label' => 'Ardoises (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '314',
                        'label' => 'Travaux accessoires de couverture',
                        'qualifications' => [
                            [
                                'code' => '3141',
                                'label' => 'Éléments accessoires de couverture',
                            ],
                            [
                                'code' => '3142',
                                'label' => 'Revêtements de balcons et accessoires en plomb',
                            ],
                            [
                                'code' => '3143',
                                'label' => 'Fenêtres de toit en pente',
                            ],
                        ],
                    ],
                    [
                        'code' => '315',
                        'label' => 'Couverture en métaux sauf plomb',
                        'qualifications' => [
                            [
                                'code' => '3152',
                                'label' => 'Couverture en métaux sauf plomb (technicité confirmée)',
                            ],
                            [
                                'code' => '3153',
                                'label' => 'Couverture en métaux sauf plomb (technicité supérieure)',
                            ],
                            [
                                'code' => '3154',
                                'label' => 'Paratonnerres',
                            ],
                        ],
                    ],
                    [
                        'code' => '316',
                        'label' => 'Couverture en plomb',
                        'qualifications' => [
                            [
                                'code' => '3162',
                                'label' => 'Couverture en plomb (technicité confirmée)',
                            ],
                            [
                                'code' => '3163',
                                'label' => 'Couverture en plomb (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '317',
                        'label' => 'Couverture en bardeaux bitumés ou matériaux régionaux',
                        'qualifications' => [
                            [
                                'code' => '3171',
                                'label' => 'Couverture en bardeaux bitumés',
                            ],
                            [
                                'code' => '3172',
                                'label' => 'Couverture en matériaux régionaux (technicité confirmée)',
                            ],
                            [
                                'code' => '3173',
                                'label' => 'Couverture en matériaux régionaux (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '318',
                        'label' => 'Couverture en plaques nervurées ou ondulées',
                        'qualifications' => [
                            [
                                'code' => '3181',
                                'label' => 'Couverture en plaques nervurées ou ondulées',
                            ],
                        ],
                    ],
                    [
                        'code' => '319',
                        'label' => 'Couverture du patrimoine et des monuments historiques',
                        'qualifications' => [
                            [
                                'code' => '3193',
                                'label' => 'Couverture du patrimoine',
                            ],
                            [
                                'code' => '3194',
                                'label' => 'Couverture des monuments historiques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '32',
                'label' => 'Étanchéité',
                'specialities' => [
                    [
                        'code' => '321',
                        'label' => 'Étanchéité en matériaux bitumineux en feuilles',
                        'qualifications' => [
                            [
                                'code' => '3211',
                                'label' => 'Étanchéité en matériaux bitumineux en feuilles (technicité courante)',
                            ],
                            [
                                'code' => '3212',
                                'label' => 'Étanchéité en matériaux bitumineux en feuilles (technicité confirmée)',
                            ],
                            [
                                'code' => '3213',
                                'label' => 'Étanchéité en matériaux bitumineux en feuilles (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '322',
                        'label' => 'Étanchéité en matériaux de synthèse en feuilles',
                        'qualifications' => [
                            [
                                'code' => '3221',
                                'label' => 'Étanchéité en matériaux de synthèse en feuilles (technicité courante)',
                            ],
                            [
                                'code' => '3222',
                                'label' => 'Étanchéité en matériaux de synthèse en feuilles (technicité confirmée)',
                            ],
                            [
                                'code' => '3223',
                                'label' => 'Étanchéité en matériaux de synthèse en feuilles (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '323',
                        'label' => 'Étanchéité en asphaltes coulés',
                        'qualifications' => [
                            [
                                'code' => '3233',
                                'label' => 'Étanchéité en asphaltes coulés',
                            ],
                        ],
                    ],
                    [
                        'code' => '324',
                        'label' => 'Étanchéité liquide (S.E.L.)',
                        'qualifications' => [
                            [
                                'code' => '3241',
                                'label' => 'Étanchéité liquide (S.E.L.) (technicité courante)',
                            ],
                            [
                                'code' => '3242',
                                'label' => 'Étanchéité liquide (S.E.L.) (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '327',
                        'label' => 'Tôle d\'acier nervurée avec étanchéité',
                        'qualifications' => [
                            [
                                'code' => '3271',
                                'label' => 'Tôle d\'Acier Nervurée (TAN) avec étanchéité en membrane en feuilles (technicité courante)',
                            ],
                            [
                                'code' => '3272',
                                'label' => 'Tôle d\'Acier Nervurée (TAN) avec étanchéité en membrane en feuilles (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '329',
                        'label' => 'Toitures terrasses spécialisées',
                        'qualifications' => [
                            [
                                'code' => '3292',
                                'label' => 'Toitures terrasses spécialisées végétalisées',
                            ],
                            [
                                'code' => '3293',
                                'label' => 'Toitures terrasses avec systèmes d\'intégration de modules photovoltaïques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '33',
                'label' => 'Étanchéité et imperméabilisation de cuvelages, réservoirs, cuves et bassins de piscines',
                'specialities' => [
                    [
                        'code' => '331',
                        'label' => 'Étanchéité de cuvelage par l\'extérieur',
                        'qualifications' => [
                            [
                                'code' => '3311',
                                'label' => 'Étanchéité de cuvelage par l\'extérieur',
                            ],
                        ],
                    ],
                    [
                        'code' => '332',
                        'label' => 'Imperméabilisation de cuvelage au moyen de mortier de ciment hydrofuge ou de revêtement de minéralisation',
                        'qualifications' => [
                            [
                                'code' => '3322',
                                'label' => 'Imperméabilisation de cuvelage au moyen de mortier de ciment hydrofuge ou de revêtement de minéralisation (technicité confirmée)',
                            ],
                            [
                                'code' => '3323',
                                'label' => 'Imperméabilisation de cuvelage au moyen de mortier de ciment hydrofuge ou de revêtement de minéralisation (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '335',
                        'label' => 'Imperméabilisation et/ou étanchéité de cuvelage au moyen de résine synthétique',
                        'qualifications' => [
                            [
                                'code' => '3352',
                                'label' => 'Imperméabilisation et/ou étanchéité de cuvelage au moyen de résine synthétique',
                            ],
                        ],
                    ],
                    [
                        'code' => '336',
                        'label' => 'Reprise de cuvelage par injection',
                        'qualifications' => [
                            [
                                'code' => '3362',
                                'label' => 'Reprise de cuvelage par injection',
                            ],
                        ],
                    ],
                    [
                        'code' => '337',
                        'label' => 'Imperméabilisation et/ou étanchéité de réservoirs, cuves et bassins de piscines',
                        'qualifications' => [
                            [
                                'code' => '3372',
                                'label' => 'Imperméabilisation et/ou étanchéité de réservoirs, cuves et bassins de piscines (technicité confirmée)',
                            ],
                            [
                                'code' => '3373',
                                'label' => 'Imperméabilisation et/ou étanchéité de réservoirs, cuves et bassins de piscines (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '34',
                'label' => 'Calfeutrement et protection des façades',
                'specialities' => [
                    [
                        'code' => '341',
                        'label' => 'Calfeutrement de joints de construction',
                        'qualifications' => [
                            [
                                'code' => '3412',
                                'label' => 'Calfeutrement de joints de construction (technicité confirmée)',
                            ],
                            [
                                'code' => '3413',
                                'label' => 'Calfeutrement de joints de construction (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '342',
                        'label' => 'Protection des façades par imperméabilité classe I1, I2, I3, I4',
                        'qualifications' => [
                            [
                                'code' => '3421',
                                'label' => 'Imperméabilité des façades (technicité courante)',
                            ],
                            [
                                'code' => '3422',
                                'label' => 'Imperméabilité des façades (technicité confirmée)',
                            ],
                            [
                                'code' => '3423',
                                'label' => 'Imperméabilité des façades (technicité supérieure)',
                            ],
                            [
                                'code' => '3424',
                                'label' => 'Imperméabilité des façades (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '35',
                'label' => 'Menuiseries extérieures',
                'specialities' => [
                    [
                        'code' => '351',
                        'label' => 'Fourniture et pose de menuiseries extérieures',
                        'qualifications' => [
                            [
                                'code' => '3511',
                                'label' => 'Fourniture et pose de menuiseries extérieures (technicité courante)',
                            ],
                            [
                                'code' => '3512',
                                'label' => 'Fourniture et pose de menuiseries extérieures (technicité confirmée)',
                            ],
                            [
                                'code' => '3513',
                                'label' => 'Fourniture et pose certifiées de menuiseries extérieures',
                            ],
                        ],
                    ],
                    [
                        'code' => '352',
                        'label' => 'Fabrication et pose de menuiseries extérieures en aluminium',
                        'qualifications' => [
                            [
                                'code' => '3521',
                                'label' => 'Fabrication et pose de menuiseries extérieures en aluminium (technicité courante)',
                            ],
                            [
                                'code' => '3522',
                                'label' => 'Fabrication et pose de menuiseries extérieures en aluminium (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '353',
                        'label' => 'Fabrication et pose de menuiseries extérieures en acier',
                        'qualifications' => [
                            [
                                'code' => '3531',
                                'label' => 'Fabrication et pose de menuiseries extérieures en acier (technicité courante)',
                            ],
                            [
                                'code' => '3532',
                                'label' => 'Fabrication et pose de menuiseries extérieures en acier (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '354',
                        'label' => 'Fabrication et pose de menuiseries extérieures en PVC',
                        'qualifications' => [
                            [
                                'code' => '3541',
                                'label' => 'Fabrication et pose de menuiseries extérieures en PVC (technicité courante)',
                            ],
                            [
                                'code' => '3542',
                                'label' => 'Fabrication et pose de menuiseries extérieures en PVC (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '355',
                        'label' => 'Fabrication et pose de menuiseries extérieures en bois',
                        'qualifications' => [
                            [
                                'code' => '3551',
                                'label' => 'Fabrication et pose de menuiseries extérieures en bois (technicité courante)',
                            ],
                            [
                                'code' => '3552',
                                'label' => 'Fabrication et pose de menuiseries extérieures en bois (technicité confirmée)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '37',
                'label' => 'Façades-rideaux',
                'specialities' => [
                    [
                        'code' => '371',
                        'label' => 'Fourniture et pose de façades-rideaux métalliques',
                        'qualifications' => [
                            [
                                'code' => '3712',
                                'label' => 'Fourniture et pose de façades-rideaux métalliques (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '372',
                        'label' => 'Fabrication et pose de façades-rideaux métalliques',
                        'qualifications' => [
                            [
                                'code' => '3721',
                                'label' => 'Fabrication et pose de façades-rideaux métalliques (technicité courante)',
                            ],
                            [
                                'code' => '3722',
                                'label' => 'Fabrication et pose de façades-rideaux métalliques (technicité confirmée)',
                            ],
                            [
                                'code' => '3723',
                                'label' => 'Fabrication et pose de façades-rideaux métalliques (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '38',
                'label' => 'Parois en bardage',
                'specialities' => [
                    [
                        'code' => '381',
                        'label' => 'Bardages',
                        'qualifications' => [
                            [
                                'code' => '3811',
                                'label' => 'Parois en bardages simples (technicité courante)',
                            ],
                            [
                                'code' => '3813',
                                'label' => 'Parois en bardages complexes (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '4',
        'label' => 'Clos - Divisions - Aménagements',
        'activities' => [
            [
                'code' => '41',
                'label' => 'Plâtrerie (plafonds, cloisons, doublages, isolation)',
                'specialities' => [
                    [
                        'code' => '411',
                        'label' => 'Plâtrerie à base de poudre et de liants hydrauliques',
                        'qualifications' => [
                            [
                                'code' => '4112',
                                'label' => 'Plâtrerie (technicité confirmée)',
                            ],
                            [
                                'code' => '4113',
                                'label' => 'Plâtrerie (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '413',
                        'label' => 'Plâtrerie à base de plaques de plâtre',
                        'qualifications' => [
                            [
                                'code' => '4131',
                                'label' => 'Plaques de plâtre (technicité courante)',
                            ],
                            [
                                'code' => '4132',
                                'label' => 'Plaques de plâtre (technicité confirmée)',
                            ],
                            [
                                'code' => '4133',
                                'label' => 'Plaques de plâtre (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '42',
                'label' => 'Cloisons à structures métalliques',
                'specialities' => [
                    [
                        'code' => '421',
                        'label' => 'Cloisons démontables, amovibles ou mobiles',
                        'qualifications' => [
                            [
                                'code' => '4211',
                                'label' => 'Fourniture et pose de cloisons démontables, amovibles ou mobiles',
                            ],
                            [
                                'code' => '4212',
                                'label' => 'Fabrication et pose de cloisons démontables, amovibles ou mobiles',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '43',
                'label' => 'Menuiserie intérieure en bois, escaliers, parquets, clôtures et treillages',
                'specialities' => [
                    [
                        'code' => '431',
                        'label' => 'Fourniture et pose de menuiserie intérieure en bois',
                        'qualifications' => [
                            [
                                'code' => '4312',
                                'label' => 'Fourniture et pose de menuiserie intérieure en bois',
                            ],
                        ],
                    ],
                    [
                        'code' => '432',
                        'label' => 'Fabrication et pose de menuiserie intérieure en bois',
                        'qualifications' => [
                            [
                                'code' => '4322',
                                'label' => 'Fabrication et pose de menuiserie intérieure en bois (technicité confirmée)',
                            ],
                            [
                                'code' => '4323',
                                'label' => 'Fabrication et pose de menuiserie intérieure en bois (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '433',
                        'label' => 'Fabrication et pose d\'escaliers intérieurs en bois',
                        'qualifications' => [
                            [
                                'code' => '4332',
                                'label' => 'Fabrication et pose d\'escalier intérieur en bois',
                            ],
                        ],
                    ],
                    [
                        'code' => '434',
                        'label' => 'Parquets',
                        'qualifications' => [
                            [
                                'code' => '4341',
                                'label' => 'Parquets collés et flottants (technicité courante)',
                            ],
                            [
                                'code' => '4342',
                                'label' => 'Parquets de grande surface (technicité confirmée)',
                            ],
                            [
                                'code' => '4343',
                                'label' => 'Parquets traditionnels et parquetage (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '436',
                        'label' => 'Fourniture et pose d\'ouvrage extérieur en bois',
                        'qualifications' => [
                            [
                                'code' => '4361',
                                'label' => 'Fourniture et pose de terrasses en bois',
                            ],
                            [
                                'code' => '4362',
                                'label' => 'Fourniture et pose d\'ouvrages extérieurs en bois',
                            ],
                        ],
                    ],
                    [
                        'code' => '438',
                        'label' => 'Fabrication et pose d\'ouvrage extérieur en bois',
                        'qualifications' => [
                            [
                                'code' => '4381',
                                'label' => 'Fabrication et pose d\'ouvrages extérieurs en bois (technicité courante)',
                            ],
                            [
                                'code' => '4382',
                                'label' => 'Fabrication et pose d\'ouvrages extérieurs en bois (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '439',
                        'label' => 'Menuiserie du patrimoine et des monuments historiques',
                        'qualifications' => [
                            [
                                'code' => '4392',
                                'label' => 'Restauration des menuiseries du patrimoine',
                            ],
                            [
                                'code' => '4393',
                                'label' => 'Restauration des menuiseries des monuments historiques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '44',
                'label' => 'Métallerie',
                'specialities' => [
                    [
                        'code' => '441',
                        'label' => 'Travaux de métallerie',
                        'qualifications' => [
                            [
                                'code' => '4411',
                                'label' => 'Serrurerie-métallerie (technicité courante)',
                            ],
                            [
                                'code' => '4412',
                                'label' => 'Métallerie (technicité confirmée)',
                            ],
                            [
                                'code' => '4413',
                                'label' => 'Métallerie (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '442',
                        'label' => 'Travaux de structures métalliques',
                        'qualifications' => [
                            [
                                'code' => '4421',
                                'label' => 'Structures métalliques',
                            ],
                        ],
                    ],
                    [
                        'code' => '444',
                        'label' => 'Aménagements extérieurs : clôtures métalliques',
                        'qualifications' => [
                            [
                                'code' => '4441',
                                'label' => 'Clôtures métalliques',
                            ],
                        ],
                    ],
                    [
                        'code' => '445',
                        'label' => 'Métallerie résistant au feu',
                        'qualifications' => [
                            [
                                'code' => '4453',
                                'label' => 'Fabrication et mise en œuvre d\'ouvrages de métallerie résistant au feu',
                            ],
                        ],
                    ],
                    [
                        'code' => '449',
                        'label' => 'Ferronnerie',
                        'qualifications' => [
                            [
                                'code' => '4492',
                                'label' => 'Ferronnerie',
                            ],
                            [
                                'code' => '4493',
                                'label' => 'Ferronnerie d\'art',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '45',
                'label' => 'Fermetures et stores',
                'specialities' => [
                    [
                        'code' => '451',
                        'label' => 'Fourniture et pose de volets, stores, portails, rideaux, grilles, portes de garage et portes sectionnelles',
                        'qualifications' => [
                            [
                                'code' => '4511',
                                'label' => 'Fourniture et pose volets, stores, portails, rideaux, grilles, portes de garage et portes sectionnelles - Résidentiel et Tertiaire',
                            ],
                            [
                                'code' => '4512',
                                'label' => 'Fourniture et pose volets, stores, portails, rideaux, grilles, portes de garage et portes sectionnelles - Collectif, Tertiaire et Industriel',
                            ],
                        ],
                    ],
                    [
                        'code' => '452',
                        'label' => 'Fabrication et pose de volets, jalousies et brise-soleil',
                        'qualifications' => [
                            [
                                'code' => '4522',
                                'label' => 'Fabrication et pose de persiennes, volets roulants, battants et coulissants, jalousies, brise-soleils orientables - Résidentiel et Tertiaire',
                            ],
                        ],
                    ],
                    [
                        'code' => '453',
                        'label' => 'Fabrication et pose de stores',
                        'qualifications' => [
                            [
                                'code' => '4532',
                                'label' => 'Fabrication et pose de stores - Collectif, Résidentiel, Tertiaire et Industriel',
                            ],
                        ],
                    ],
                    [
                        'code' => '454',
                        'label' => 'Fabrication et pose de portes et portails',
                        'qualifications' => [
                            [
                                'code' => '4542',
                                'label' => 'Fabrication et pose de portes et portails - Collectif, Tertiaire et Industriel',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '47',
                'label' => 'Vitrerie - Miroiterie',
                'specialities' => [
                    [
                        'code' => '471',
                        'label' => 'Mise en œuvre de produits verriers complexes',
                        'qualifications' => [
                            [
                                'code' => '4711',
                                'label' => 'Produits verriers (technicité courante)',
                            ],
                            [
                                'code' => '4712',
                                'label' => 'Produits verriers (technicité confirmée)',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '5',
        'label' => 'Énergies et fluides',
        'activities' => [
            [
                'code' => '51',
                'label' => 'Plomberie eau chaude sanitaire',
                'specialities' => [
                    [
                        'code' => '511',
                        'label' => 'Installations de plomberie (EF, ECS, EU, EV, EP, appareils sanitaires)',
                        'qualifications' => [
                            [
                                'code' => '5111',
                                'label' => 'Installation de plomberie sanitaire en habitat individuel, collectif ou autre bâtiment inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5112',
                                'label' => 'Installation de plomberie sanitaire dans tout type de bâtiment supérieur à 1000 m² sans surpresseur',
                            ],
                            [
                                'code' => '5113',
                                'label' => 'Installation de plomberie sanitaire dans tout type de bâtiment avec surpresseur ou dans l\'industrie',
                            ],
                        ],
                    ],
                    [
                        'code' => '512',
                        'label' => 'Installations de plomberie spécifiques',
                        'qualifications' => [
                            [
                                'code' => '5121',
                                'label' => 'Installation de réseaux de fluides spéciaux',
                            ],
                            [
                                'code' => '5122',
                                'label' => 'Installation de réseaux de fluides médicaux',
                            ],
                        ],
                    ],
                    [
                        'code' => '513',
                        'label' => 'Installations de chauffe-eau à énergie renouvelable',
                        'qualifications' => [
                            [
                                'code' => '5131',
                                'label' => 'Installation de chauffe-eau solaire en habitat individuel, collectif ou autre bâtiment inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5132',
                                'label' => 'Installation de chauffe-eau solaire dans tout type de bâtiment supérieur à 1000 m²',
                            ],
                            [
                                'code' => '5133',
                                'label' => 'Installation de chauffe-eau thermodynamique',
                            ],
                        ],
                    ],
                    [
                        'code' => '514',
                        'label' => 'Entretien et maintenance',
                        'qualifications' => [
                            [
                                'code' => '5141',
                                'label' => 'Maintenance de compteurs d\'eau et de robinetterie',
                            ],
                            [
                                'code' => '5142',
                                'label' => 'Maintenance sanitaire des dispositifs de protection de l\'eau (disconnecteurs)',
                            ],
                            [
                                'code' => '5143',
                                'label' => 'Maintenance d\'installation solaire thermique',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '52',
                'label' => 'Chauffage et rafraîchissement',
                'specialities' => [
                    [
                        'code' => '521',
                        'label' => 'Installations de chauffage à combustible gaz/fuel',
                        'qualifications' => [
                            [
                                'code' => '5211',
                                'label' => 'Remplacement de chaudière gaz/fuel en logement individuel',
                            ],
                            [
                                'code' => '5212',
                                'label' => 'Installation de chauffage avec chaudière gaz/fuel en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5213',
                                'label' => 'Installation de chauffage avec chaudière gaz/fuel en habitat individuel, collectif et tertiaire supérieur à 1000 m²',
                            ],
                            [
                                'code' => '5214',
                                'label' => 'Installation de chauffage à gaz décentralisée : aérotherme, radiants, générateur d\'air chaud',
                            ],
                        ],
                    ],
                    [
                        'code' => '522',
                        'label' => 'Installations de chauffage à combustible bois',
                        'qualifications' => [
                            [
                                'code' => '5221',
                                'label' => 'Installation d\'appareil de chauffage à bois indépendant : poêle et insert',
                            ],
                            [
                                'code' => '5222',
                                'label' => 'Installation de chauffage avec chaudière bois en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5223',
                                'label' => 'Installation de chauffage avec chaudière bois en habitat individuel, collectif et tertiaire supérieur à 1000 m²',
                            ],
                        ],
                    ],
                    [
                        'code' => '523',
                        'label' => 'Installations de pompe à chaleur et groupe froid',
                        'qualifications' => [
                            [
                                'code' => '5231',
                                'label' => 'Installation de pompe à chaleur et groupe froid en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5232',
                                'label' => 'Installation de pompe à chaleur et groupe froid en habitat individuel, collectif et tertiaire supérieur à 1000 m²',
                            ],
                        ],
                    ],
                    [
                        'code' => '524',
                        'label' => 'Installations de chauffage solaire',
                        'qualifications' => [
                            [
                                'code' => '5241',
                                'label' => 'Installation de chauffage solaire et ECS',
                            ],
                        ],
                    ],
                    [
                        'code' => '525',
                        'label' => 'Installations de réseaux de chauffage ou de rafraîchissement spécifiques',
                        'qualifications' => [
                            [
                                'code' => '5251',
                                'label' => 'Installation de chauffage ou de froid raccordée sur réseau urbain',
                            ],
                            [
                                'code' => '5252',
                                'label' => 'Installation de distribution de chauffage ou de rafraîchissement avec centrale de traitement d\'air',
                            ],
                            [
                                'code' => '5253',
                                'label' => 'Installation de réseaux à haute pression ou à haute température',
                            ],
                        ],
                    ],
                    [
                        'code' => '526',
                        'label' => 'Entretien et maintenance d\'installations de chauffage et de rafraîchissement',
                        'qualifications' => [
                            [
                                'code' => '5261',
                                'label' => 'Entretien et maintenance d\'installations de chauffage avec chaudière en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5262',
                                'label' => 'Maintenance d\'installation de chauffage avec chaudière dans tout type de bâtiment supérieur à 1000 m²',
                            ],
                            [
                                'code' => '5263',
                                'label' => 'Maintenance d\'installation de pompe à chaleur et groupe froid en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5264',
                                'label' => 'Maintenance d\'installation de pompe à chaleur et groupe froid dans tout type de bâtiment supérieur à 1000 m²',
                            ],
                        ],
                    ],
                    [
                        'code' => '527',
                        'label' => 'Exploitation d\'installations de chauffage et de rafraîchissement',
                        'qualifications' => [
                            [
                                'code' => '5271',
                                'label' => 'Exploitation d\'installation de chauffage et de rafraîchissement avec obligation de résultat en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5272',
                                'label' => 'Exploitation d\'installation de chauffage et de rafraîchissement avec obligation de résultat dans tout type de bâtiment ou industrie supérieur à 1000 m²',
                            ],
                            [
                                'code' => '5273',
                                'label' => 'Exploitation d\'installation de chauffage et de rafraîchissement avec garantie totale en habitat individuel, collectif et tertiaire inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5274',
                                'label' => 'Exploitation d\'installation de chauffage et de rafraîchissement avec garantie totale dans tout type de bâtiment supérieur à 1000 m²',
                            ],
                        ],
                    ],
                    [
                        'code' => '528',
                        'label' => 'Exploitation de réseau de chaleur et de froid',
                        'qualifications' => [
                            [
                                'code' => '5281',
                                'label' => 'Exploitation de réseaux de chaleur et de froid urbain – Puissance < 6 MW',
                            ],
                            [
                                'code' => '5282',
                                'label' => 'Exploitation de réseaux de chaleur et de froid urbain – Puissance > 6 MW ou avec D.S.P.',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '53',
                'label' => 'Ventilation - Désenfumage - Traitement d\'air',
                'specialities' => [
                    [
                        'code' => '531',
                        'label' => 'Installations de ventilation et traitement d\'air',
                        'qualifications' => [
                            [
                                'code' => '5311',
                                'label' => 'Installation de VMC en habitat individuel, collectif ou autre bâtiment inférieur à 1000 m²',
                            ],
                            [
                                'code' => '5312',
                                'label' => 'Installation de VMC dans tout type de bâtiment supérieur à 1000 m²',
                            ],
                            [
                                'code' => '5313',
                                'label' => 'Traitement d\'air d\'une salle blanche',
                            ],
                        ],
                    ],
                    [
                        'code' => '532',
                        'label' => 'Installations de désenfumage',
                        'qualifications' => [
                            [
                                'code' => '5321',
                                'label' => 'Installation de désenfumage naturel',
                            ],
                            [
                                'code' => '5322',
                                'label' => 'Installation de désenfumage mécanique',
                            ],
                        ],
                    ],
                    [
                        'code' => '533',
                        'label' => 'Entretien et maintenance',
                        'qualifications' => [
                            [
                                'code' => '5331',
                                'label' => 'Nettoyage de réseaux aérauliques',
                            ],
                            [
                                'code' => '5332',
                                'label' => 'Nettoyage et décontamination de réseaux aérauliques',
                            ],
                            [
                                'code' => '5333',
                                'label' => 'Maintenance des réseaux aérauliques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '54',
                'label' => 'Cheminées et conduits de fumée',
                'specialities' => [
                    [
                        'code' => '541',
                        'label' => 'Cheminées et conduits de fumée',
                        'qualifications' => [
                            [
                                'code' => '5411',
                                'label' => 'Installation de conduit de fumée et tubage en habitat individuel',
                            ],
                            [
                                'code' => '5412',
                                'label' => 'Installation de conduit de fumée et tubage en habitat collectif et tertiaire',
                            ],
                            [
                                'code' => '5413',
                                'label' => 'Chemisage de conduits de fumée',
                            ],
                            [
                                'code' => '5414',
                                'label' => 'Réalisation de cheminée industrielle et revêtement réfractaire',
                            ],
                        ],
                    ],
                    [
                        'code' => '542',
                        'label' => 'Entretien et maintenance de conduits de cheminée',
                        'qualifications' => [
                            [
                                'code' => '5421',
                                'label' => 'Ramonage en habitat individuel',
                            ],
                            [
                                'code' => '5422',
                                'label' => 'Ramonage en habitat collectif et tertiaire',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '55',
                'label' => 'Gestion technique centralisée',
                'specialities' => [
                    [
                        'code' => '551',
                        'label' => 'Gestion technique centralisée (GTC)',
                        'qualifications' => [
                            [
                                'code' => '5511',
                                'label' => 'Installation de systèmes de Gestion Technique Centralisée (GTC)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '59',
                'label' => 'Installations photovoltaïques',
                'specialities' => [
                    [
                        'code' => '591',
                        'label' => 'Installations photovoltaïques',
                        'qualifications' => [
                            [
                                'code' => '5911',
                                'label' => 'Installations photovoltaïques de puissance de raccordement ≤ 36 kVA (technicité courante)',
                            ],
                            [
                                'code' => '5912',
                                'label' => 'Installations photovoltaïques de puissance de raccordement ≤ 250 kVA (technicité confirmée)',
                            ],
                            [
                                'code' => '5913',
                                'label' => 'Installations photovoltaïques de puissance de raccordement ≤ 500 kVA (technicité supérieure)',
                            ],
                            [
                                'code' => '5914',
                                'label' => 'Installations photovoltaïques de puissance de raccordement > 500 kVA',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '6',
        'label' => 'Finitions',
        'activities' => [
            [
                'code' => '61',
                'label' => 'Peinture - Ravalement',
                'specialities' => [
                    [
                        'code' => '611',
                        'label' => 'Peinture - Ravalement',
                        'qualifications' => [
                            [
                                'code' => '6111',
                                'label' => 'Peinture et ravalement (technicité courante)',
                            ],
                            [
                                'code' => '6112',
                                'label' => 'Peinture et ravalement (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '612',
                        'label' => 'Ravalement en peinture',
                        'qualifications' => [
                            [
                                'code' => '6121',
                                'label' => 'Ravalement en peinture',
                            ],
                        ],
                    ],
                    [
                        'code' => '613',
                        'label' => 'Peinture industrielle',
                        'qualifications' => [
                            [
                                'code' => '6133',
                                'label' => 'Peinture industrielle',
                            ],
                        ],
                    ],
                    [
                        'code' => '614',
                        'label' => 'Filage - Décoration - Dorure',
                        'qualifications' => [
                            [
                                'code' => '6142',
                                'label' => 'Filage - Décoration - Dorure',
                            ],
                            [
                                'code' => '6143',
                                'label' => 'Dorure des monuments historiques',
                            ],
                        ],
                    ],
                    [
                        'code' => '615',
                        'label' => 'Peinture en lettres et attributs',
                        'qualifications' => [
                            [
                                'code' => '6153',
                                'label' => 'Peinture en lettres et attributs',
                            ],
                        ],
                    ],
                    [
                        'code' => '619',
                        'label' => 'Enseignes',
                        'qualifications' => [
                            [
                                'code' => '6191',
                                'label' => 'Enseignes',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '62',
                'label' => 'Revêtements de sols et de murs',
                'specialities' => [
                    [
                        'code' => '621',
                        'label' => 'Revêtements textiles',
                        'qualifications' => [
                            [
                                'code' => '6211',
                                'label' => 'Revêtements textiles en dalles',
                            ],
                            [
                                'code' => '6212',
                                'label' => 'Revêtements textiles en lés',
                            ],
                            [
                                'code' => '6213',
                                'label' => 'Revêtements textiles tendus',
                            ],
                        ],
                    ],
                    [
                        'code' => '622',
                        'label' => 'Revêtements résilients',
                        'qualifications' => [
                            [
                                'code' => '6222',
                                'label' => 'Revêtements résilients PVC (technicité confirmée)',
                            ],
                            [
                                'code' => '6223',
                                'label' => 'Revêtements résilients (PVC, caoutchouc, linoléum et assimilés) (technicité supérieure)',
                            ],
                            [
                                'code' => '6224',
                                'label' => 'Revêtements résilients "système douche"',
                            ],
                        ],
                    ],
                    [
                        'code' => '623',
                        'label' => 'Revêtements coulés à base de résine de synthèse',
                        'qualifications' => [
                            [
                                'code' => '6232',
                                'label' => 'Revêtements coulés à base de résine de synthèse (technicité confirmée)',
                            ],
                            [
                                'code' => '6233',
                                'label' => 'Revêtements coulés à base de résine de synthèse (technicité supérieure)',
                            ],
                            [
                                'code' => '6234',
                                'label' => 'Revêtements coulés à base de résine de synthèse pour locaux à risques identifiés (technicité exceptionnelle)',
                            ],
                        ],
                    ],
                    [
                        'code' => '624',
                        'label' => 'Revêtements coulés à base de liants hydrauliques',
                        'qualifications' => [
                            [
                                'code' => '6241',
                                'label' => 'Revêtements coulés à base de liants hydrauliques (technicité courante)',
                            ],
                            [
                                'code' => '6242',
                                'label' => 'Revêtements poncés coulés en matériaux naturels (technicité confirmée)',
                            ],
                        ],
                    ],
                    [
                        'code' => '625',
                        'label' => 'Revêtements à fonctions spécifiques',
                        'qualifications' => [
                            [
                                'code' => '6251',
                                'label' => 'Revêtements à finition décorative',
                            ],
                            [
                                'code' => '6252',
                                'label' => 'Revêtements sportifs "systèmes combinés"',
                            ],
                            [
                                'code' => '6253',
                                'label' => 'Revêtements à propriétés électriques',
                            ],
                            [
                                'code' => '6254',
                                'label' => 'Revêtements spéciaux et anticorrosion',
                            ],
                        ],
                    ],
                    [
                        'code' => '626',
                        'label' => 'Chapes',
                        'qualifications' => [
                            [
                                'code' => '6261',
                                'label' => 'Chapes',
                            ],
                            [
                                'code' => '6262',
                                'label' => 'Chapes fluides',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '63',
                'label' => 'Carrelages - Revêtements - Mosaïques - Marbrerie',
                'specialities' => [
                    [
                        'code' => '631',
                        'label' => 'Carrelages - Revêtements - Mosaïques',
                        'qualifications' => [
                            [
                                'code' => '6311',
                                'label' => 'Carrelages - revêtements (technicité courante)',
                            ],
                            [
                                'code' => '6312',
                                'label' => 'Carrelages - revêtements - mosaïques (technicité confirmée)',
                            ],
                            [
                                'code' => '6313',
                                'label' => 'Carrelages - revêtements - mosaïques (technicité supérieure)',
                            ],
                            [
                                'code' => '6314',
                                'label' => 'Carrelages - revêtements dans les locaux à fortes sollicitations particulières',
                            ],
                        ],
                    ],
                    [
                        'code' => '632',
                        'label' => 'Carrelages - Travaux d\'étanchéité',
                        'qualifications' => [
                            [
                                'code' => '6323',
                                'label' => 'Carrelages - Travaux d\'étanchéité',
                            ],
                        ],
                    ],
                    [
                        'code' => '634',
                        'label' => 'Marbrerie et revêtements muraux attachés',
                        'qualifications' => [
                            [
                                'code' => '6341',
                                'label' => 'Marbrerie (technicité courante)',
                            ],
                            [
                                'code' => '6342',
                                'label' => 'Marbrerie (technicité confirmée)',
                            ],
                            [
                                'code' => '6343',
                                'label' => 'Revêtements muraux attachés',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '65',
                'label' => 'Staff - Stuc - Sculpture - Gypserie',
                'specialities' => [
                    [
                        'code' => '651',
                        'label' => 'Staff',
                        'qualifications' => [
                            [
                                'code' => '6511',
                                'label' => 'Fourniture et pose de staff',
                            ],
                            [
                                'code' => '6512',
                                'label' => 'Travaux de staff',
                            ],
                            [
                                'code' => '6513',
                                'label' => 'Restauration de staff des monuments historiques',
                            ],
                        ],
                    ],
                    [
                        'code' => '652',
                        'label' => 'Stuc',
                        'qualifications' => [
                            [
                                'code' => '6522',
                                'label' => 'Travaux de stuc',
                            ],
                            [
                                'code' => '6523',
                                'label' => 'Restauration de stuc des monuments historiques',
                            ],
                        ],
                    ],
                    [
                        'code' => '658',
                        'label' => 'Sculpture',
                        'qualifications' => [
                            [
                                'code' => '6583',
                                'label' => 'Sculpture d\'attributs',
                            ],
                        ],
                    ],
                    [
                        'code' => '659',
                        'label' => 'Gypserie',
                        'qualifications' => [
                            [
                                'code' => '6592',
                                'label' => 'Restauration plâtres et chaux',
                            ],
                            [
                                'code' => '6593',
                                'label' => 'Restauration plâtres et chaux des monuments historiques',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '66',
                'label' => 'Plafonds suspendus modulaires et tendus, planchers surélevés',
                'specialities' => [
                    [
                        'code' => '661',
                        'label' => 'Plafonds suspendus modulaires et tendus',
                        'qualifications' => [
                            [
                                'code' => '6611',
                                'label' => 'Fourniture et pose de plafonds suspendus modulaires (technicité courante)',
                            ],
                            [
                                'code' => '6612',
                                'label' => 'Fourniture et pose de plafonds suspendus modulaires (technicité confirmée)',
                            ],
                            [
                                'code' => '6613',
                                'label' => 'Plafonds tendus',
                            ],
                        ],
                    ],
                    [
                        'code' => '662',
                        'label' => 'Planchers surélevés',
                        'qualifications' => [
                            [
                                'code' => '6622',
                                'label' => 'Planchers surélevés',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '7',
        'label' => 'Isolation thermique - acoustique - frigorifique',
        'activities' => [
            [
                'code' => '71',
                'label' => 'Isolation - thermique - acoustique',
                'specialities' => [
                    [
                        'code' => '711',
                        'label' => 'Calorifugeage',
                        'qualifications' => [
                            [
                                'code' => '7112',
                                'label' => 'Calorifugeage (technicité confirmée)',
                            ],
                            [
                                'code' => '7113',
                                'label' => 'Calorifugeage (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '712',
                        'label' => 'Isolation thermique par l\'intérieur',
                        'qualifications' => [
                            [
                                'code' => '7121',
                                'label' => 'Isolation thermique et acoustique par soufflage',
                            ],
                            [
                                'code' => '7122',
                                'label' => 'Isolation thermique par l\'intérieur',
                            ],
                        ],
                    ],
                    [
                        'code' => '713',
                        'label' => 'Isolation thermique par l\'extérieur',
                        'qualifications' => [
                            [
                                'code' => '7131',
                                'label' => 'Isolation thermique par l\'extérieur (technicité courante)',
                            ],
                            [
                                'code' => '7132',
                                'label' => 'Isolation thermique par l\'extérieur (technicité confirmée)',
                            ],
                            [
                                'code' => '7133',
                                'label' => 'Isolation thermique par l\'extérieur (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '714',
                        'label' => 'Isolation par projection - injection - sécurité passive contre l\'incendie',
                        'qualifications' => [
                            [
                                'code' => '7142',
                                'label' => 'Isolation thermique - correction acoustique par projection - injection',
                            ],
                            [
                                'code' => '7143',
                                'label' => 'Sécurité passive contre l\'incendie',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '72',
                'label' => 'Isolation et traitement acoustique',
                'specialities' => [
                    [
                        'code' => '721',
                        'label' => 'Isolation et traitement acoustique',
                        'qualifications' => [
                            [
                                'code' => '7212',
                                'label' => 'Isolation et traitement acoustique (technicité confirmée)',
                            ],
                            [
                                'code' => '7213',
                                'label' => 'Isolation et traitement acoustique (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '73',
                'label' => 'Isolation frigorifique',
                'specialities' => [
                    [
                        'code' => '731',
                        'label' => 'Isolation frigorifique - locaux - bâtiments',
                        'qualifications' => [
                            [
                                'code' => '7311',
                                'label' => 'Isolation frigorifique (technicité courante)',
                            ],
                            [
                                'code' => '7312',
                                'label' => 'Isolation frigorifique (technicité confirmée)',
                            ],
                            [
                                'code' => '7313',
                                'label' => 'Isolation frigorifique (technicité supérieure)',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '8',
        'label' => 'Performance énergétique',
        'activities' => [
            [
                'code' => '86',
                'label' => 'Efficacité énergétique',
                'specialities' => [
                    [
                        'code' => '861',
                        'label' => 'Efficacité énergétique - "ECO Artisan®"',
                        'qualifications' => [
                            [
                                'code' => '8611',
                                'label' => 'Efficacité énergétique - "ECO Artisan®"',
                            ],
                        ],
                    ],
                    [
                        'code' => '862',
                        'label' => 'Efficacité énergétique - "Les pros de la performance énergétique®"',
                        'qualifications' => [
                            [
                                'code' => '8621',
                                'label' => 'Efficacité énergétique - "Les pros de la performance énergétique®"',
                            ],
                        ],
                    ],
                    [
                        'code' => '863',
                        'label' => 'Efficacité énergétique - "Offre globale"',
                        'qualifications' => [
                            [
                                'code' => '8632',
                                'label' => 'Efficacité énergétique - "Offre globale"',
                            ],
                            [
                                'code' => '8633',
                                'label' => 'Efficacité énergétique - "Offre globale" (avec bureau d\'études, y compris tertiaire)',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'code' => '87',
                'label' => 'Mesurage et audit énergétique dans le bâtiment',
                'specialities' => [
                    [
                        'code' => '871',
                        'label' => 'Perméabilité à l\'air de l\'enveloppe',
                        'qualifications' => [
                            [
                                'code' => '8711',
                                'label' => 'Mise en place d\'un système de mesures et réalisation des mesures de perméabilité à l\'air de l\'enveloppe des bâtiments',
                            ],
                        ],
                    ],
                    [
                        'code' => '872',
                        'label' => 'Perméabilité à l\'air des réseaux aérauliques',
                        'qualifications' => [
                            [
                                'code' => '8721',
                                'label' => 'Mise en place d\'un système de mesures et réalisation des mesures de perméabilité à l\'air des réseaux aérauliques',
                            ],
                        ],
                    ],
                    [
                        'code' => '873',
                        'label' => 'Audits énergétiques',
                        'qualifications' => [
                            [
                                'code' => '8731',
                                'label' => 'Réalisation d\'audit énergétique en maison individuelle',
                            ],
                        ],
                    ],
                    [
                        'code' => '874',
                        'label' => 'Vérifications et mesures des systèmes de ventilation',
                        'qualifications' => [
                            [
                                'code' => '8741',
                                'label' => 'Vérifications et mesures des systèmes de ventilation mécanique pour les bâtiments résidentiels neufs',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'code' => '9',
        'label' => 'Agencement et aménagement',
        'activities' => [
            [
                'code' => '91',
                'label' => 'Agencement et aménagement de locaux',
                'specialities' => [
                    [
                        'code' => '911',
                        'label' => 'Agencement',
                        'qualifications' => [
                            [
                                'code' => '9112',
                                'label' => 'Agencement (technicité confirmée)',
                            ],
                            [
                                'code' => '9113',
                                'label' => 'Agencement (technicité supérieure)',
                            ],
                        ],
                    ],
                    [
                        'code' => '912',
                        'label' => 'Agencement de salles de bains et de cuisines',
                        'qualifications' => [
                            [
                                'code' => '9121',
                                'label' => 'Salles de bains et cuisines domestiques',
                            ],
                            [
                                'code' => '9123',
                                'label' => 'Cuisines de collectivités',
                            ],
                        ],
                    ],
                    [
                        'code' => '913',
                        'label' => 'Agencement de laboratoires',
                        'qualifications' => [
                            [
                                'code' => '9132',
                                'label' => 'Laboratoires',
                            ],
                        ],
                    ],
                    [
                        'code' => '914',
                        'label' => 'Vérandas',
                        'qualifications' => [
                            [
                                'code' => '9141',
                                'label' => 'Fourniture et pose de vérandas à structure aluminium',
                            ],
                            [
                                'code' => '9142',
                                'label' => 'Fabrication et pose de vérandas à structure aluminium',
                            ],
                            [
                                'code' => '9143',
                                'label' => 'Vérandas tous matériaux (hors aluminium)',
                            ],
                        ],
                    ],
                    [
                        'code' => '915',
                        'label' => 'Piscines d\'habitations privées',
                        'qualifications' => [
                            [
                                'code' => '9152',
                                'label' => 'Piscines d\'habitations privées',
                            ],
                        ],
                    ],
                    [
                        'code' => '916',
                        'label' => 'Agencement de combles',
                        'qualifications' => [
                            [
                                'code' => '9161',
                                'label' => 'Transformation et aménagement de combles',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
