@extends('master')
@section('contentform')
<main id="simulation" class="w-full">
    <!-- Hero Section -->
    <section class="relative w-full min-h-screen py-8 bg-white">
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-14">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start w-full">
                <!-- Left side: Image and Text -->
                <!-- Remplacez cette section dans votre code -->
                <!-- Option pour encore plus de hauteur sur mobile -->

                <div class="order-2 lg:order-1 lg:col-span-2 relative flex justify-center items-center rounded-xl overflow-hidden h-96 sm:h-[450px] md:h-[500px] lg:h-[550px] xl:h-[800px] " style="box-shadow: none !important; filter: none !important;">
                    <img
                        src="{{ asset('image/assurance-decinale.jpg')}}"
                        alt="Couple souriant et satisfait tenant un relevé de pension"
                        class="w-full h-full object-cover" />

                    <!-- Text content overlay on image -->
                    <div class="absolute inset-0 flex flex-col justify-end items-center text-white text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-t from-black/10 to-transparent">
                        <div class="inline-block p-2 rounded-lg bg-black/5"></div>
                    </div>
                </div>

                <!-- Right side - Form -->
                <div
                    class="bg-white/95 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden border border-white/20 order-1 lg:order-2 lg:col-span-1 flex flex-col h-full">
                    <div
                        class="bg-yellow-300 bg-yellow-300 bg-amber-400 px-6 py-4 flex-shrink-0">
                        <h3 class="text-xm font-semibold text-dark flex items-center">
                            <svg
                                class="w-6 h-6 mr-2"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Complétez ce formulaire pour obtenir votre devis
                        </h3>
                    </div>
                    <div class="p-6 flex-1 flex flex-col  overflow-y-auto">
                        <form
                            id="simulationForm"
                            class="space-y-3 flex-1 flex flex-col"
                            onsubmit="return handleFormSubmit(event)" action="/" method="POST">
                            @csrf
                            <!-- Personal Info -->
                            <div class="flex-1 space-y-3 ">
                                <div>
                                    <input
                                        type="text"
                                        name="nom"
                                        id="nom"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Nom..." />
                                </div>

                                <div>
                                    <input
                                        type="text"
                                        name="prenom"
                                        id="prenom"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Prénom..." />
                                </div>

                                <div>
                                    <input
                                        type="text"
                                        name="raison_sociale"
                                        id="raison_sociale"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Raison sociale..." />
                                </div>


                                <div>
                                    <select
                                        id="myselect00"
                                        name="demarrage"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        title="Démarrage d'activité">
                                        <option value="" selected>Démarrage d'activité</option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                    </select>
                                </div>

                                <div>
                                    <select
                                        id="myselect0"
                                        name="assure"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        title="Activité assurée actuellement">
                                        <option value="" selected>
                                            Activité assurée actuellement
                                        </option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                    </select>
                                </div>

                                <div>
                                    <select
                                        id="myselect1"
                                        name="ancienne"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        title="Assurance résilié">
                                        <option value="" selected>Assurance résilié</option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                    </select>
                                </div>

                                <div id="motif-container">
                                    <select
                                        id="myselect2"
                                        name="motif"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        title="Motif résiliation">
                                        <option value="" selected>Motif résiliation</option>
                                        <option value="Echéance">Echéance</option>
                                        <option value="Sinistre">Sinistre</option>
                                        <option value="Non paiement">
                                            Non paiement
                                        </option>
                                        <option value="Amiable">
                                            Amiable
                                        </option>


                                    </select>
                                </div>

                                <div>
                                    <input
                                        type="text"
                                        id="code"
                                        name="code"
                                        maxlength="5"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Code Postal..." />
                                </div>

                                <div>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Email..." />
                                </div>

                                <div>
                                    <input
                                        type="text"
                                        id="tele"
                                        name="tele"
                                        maxlength="10"
                                        class="w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent transition-colors duration-200 bg-white/80 text-sm"
                                        placeholder="Téléphone..." />
                                </div>

                                <p
                                    class="text-[10px] text-gray-600 bg-white/80 p-2 rounded-md border border-gray-200">
                                    En cliquant sur 'Comparer', vous acceptez de transmettre
                                    vos informations à AKSAM ASSURANCES, qui accepte de les
                                    utiliser conformément à sa politique de confidentialité
                                    dans le but de vous fournir des propositions de devis
                                    d'assurances adapté à votre recherche
                                </p>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-yellow-300 bg-yellow-300 bg-amber-400 text-dark font-semibold py-2 px-4 rounded-md transition-all duration-200 shadow-sm hover:shadow-md transform hover:-translate-y-0.5 flex items-center justify-center text-sm flex-shrink-0">
                                <svg
                                    class="w-4 h-4 mr-2"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Comparer maintenant
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Assurance decinale Section -->
    <section id="assurance-info" class="py-8 lg:py-20 bg-surface">
        <div class="container mx-auto px-2 lg:px-4">
            <div class="max-w-6xl mx-auto">
                <div class="fade-in">
                    <div class="text-center mb-8 lg:mb-16">
                        <h2 class="text-2xl lg:text-5xl font-bold text-jaune mb-4 lg:mb-6 leading-tight">Devis Assurance Décennale</h2>
                        <!-- <div class="w-16 lg:w-24 h-1 bg-yellow-300 bg-yellow-300 bg-amber-400 mx-auto rounded-full"></div> -->
                        <p class="text-sm lg:text-xl mb-6 lg:mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
                            Devis Assurance Décennale en Ligne : Obtenez votre tarif en ligne !
                        </p>
                        <div class="w-16 lg:w-24 h-1 bg-amber-400 from-blue-400 to-blue-500 mx-auto rounded-full"></div>

                    </div>

                    <!-- Feature Cards -->
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 mb-12 lg:mb-20">
                        <!-- Card 1 -->

                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <!-- Contenu du card -->
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-yellow-300 bg-yellow-300 bg-amber-400  rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-building text-white text-lg lg:text-2xl"></i>
                                </div>

                                <div class="flex-1">
                                    <h3 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Assurance décennale artisan.</h3>
                                    <p>Assurance décennale artisans et professionnels du bâtiment :</p>
                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('auto-entrepreneur') }}">Décennale auto-entrepreneur.</a></span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale pour TPE.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale pour PME.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Décennale architecte / bureau d’étude.</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- Bouton fixé en bas -->
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-yellow-300 bg-yellow-300 bg-amber-400  text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:opacity-90 transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Demandez votre devis gratuit en ligne
                                </a>
                            </div>
                        </div>


                        <!-- Card 2 -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <!-- Contenu du card -->
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-yellow-300 bg-yellow-300 bg-amber-400  rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-user text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Devis assurance décennale en ligne.</p>
                                        <ul class="space-y-2 lg:space-y-4">
                                            <li class="flex items-start space-x-2 lg:space-x-4">
                                                <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                                <span class="text-gray-700 text-sm lg:text-base">Devis Immédiat et 100% en Ligne.</span>
                                            </li>
                                            <li class="flex items-start space-x-2 lg:space-x-4">
                                                <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                                <span class="text-gray-700 text-sm lg:text-base">Spécialiste Tous Métiers.</span>
                                            </li>
                                            <li class="flex items-start space-x-2 lg:space-x-4">
                                                <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                                <span class="text-gray-700 text-sm lg:text-base">Attestation Provisoire Express.</span>
                                            </li>
                                            <li class="flex items-start space-x-2 lg:space-x-4">
                                                <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                                <span class="text-gray-700 text-sm lg:text-base">Tarifs Négociés.</span>
                                            </li>
                                        </ul>
                                </div>
                            </div>

                            <!-- Bouton fixé en bas -->
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-yellow-300 bg-yellow-300 bg-amber-400  text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-accent transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Demandez votre devis gratuit en ligne
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 mb-12 lg:mb-20">
                        <!-- Card 3 -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <!-- Contenu du card -->
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-shield-alt text-white text-lg lg:text-2xl"></i>
                                </div>

                                <div class="flex-1">
                                    <h3 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Assurance décennale adaptée à votre Métier.</h3>

                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">
                                                <a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors"
                                                    href="{{ url('assurance-decennale-electricien') }}">
                                                    Assurance décennale Électricien
                                                </a>
                                            </span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('maçon-grosœuvres') }}">Assurance décennale Maçonnerie et gros œuvre.</a></span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale Peinture et rénovation.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale Charpente et couverture.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale corps d&#39;état...</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- Bouton fixé en bas -->
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-yellow-300 bg-yellow-300 bg-amber-400  text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:opacity-90 transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Demandez votre devis gratuit en ligne
                                </a>
                            </div>
                        </div>


                        <!-- Card 4 -->
                        <div class="bg-surface rounded-xl lg:rounded-3xl p-4 lg:p-8 shadow-xl border border-gray-100 card-hover flex flex-col h-full">
                            <!-- Contenu du card -->
                            <div class="flex flex-col lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-6 flex-grow">
                                <div class="p-2 lg:p-4 bg-yellow-300 bg-yellow-300 bg-amber-400  rounded-xl lg:rounded-2xl shadow-lg self-start flex-shrink-0">
                                    <i class="fas fa-clipboard-check text-white text-lg lg:text-2xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg lg:text-2xl font-bold text-jaune mb-3 lg:mb-4">Quel que soit l’antécédent d’assurance</h3>

                                    <ul class="space-y-2 lg:space-y-4">
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale nouvelle création.</span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('resilie-nonpaiement') }}"> Assurance décennale résilié non-paiement.</a></span>
                                        </li>
                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base">Assurance décennale résilié sinistre.</span>
                                        </li>

                                        <li class="flex items-start space-x-2 lg:space-x-4">
                                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                                            <span class="text-gray-700 text-sm lg:text-base"><a class="text-primary-900 underline hover:text-primary hover:no-underline transition-colors" href="{{ url('reprise-du-passe-assurance-decennale') }}"> Assurance décennale reprise du passé.</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Bouton fixé en bas -->
                            <div class="text-center mt-auto pt-4">
                                <a href="#simulationForm" class="inline-block bg-yellow-300 bg-yellow-300 bg-amber-400  text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-accent transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                    <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                    Demandez votre devis gratuit en ligne
                                </a>
                            </div>
                        </div>
                    </div>




                    <!-- CTA Section -->
                    <div class="absolute inset-0 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-xl lg:rounded-3xl p-6 lg:p-12 text-dark text-center relative overflow-hidden">
                        <div class="relative">
                            <div class="w-10 h-10 lg:w-16 lg:h-16 bg-dark/20 rounded-xl lg:rounded-2xl mx-auto mb-4 lg:mb-6 flex items-center justify-center">
                                <i class="fas fa-calculator text-lg lg:text-3xl text-dark"></i>
                            </div>
                            <h2 class="text-xl lg:text-4xl font-bold mb-4 lg:mb-6 text-dark">Ne laissez pas l&#39;assurance décennale freiner vos chantiers.</h2>
                            <p class="text-sm lg:text-xl mb-6 lg:mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
                                L&#39;assurance de garantie décennale est une obligation légale pour exercer votre métier en toute
                                sérénité. Mais trouver le bon contrat, surtout quand on est pressé, peut vite devenir un
                                parcours du combattant. Notre mission : vous fournir une assurance décennale en
                                ligne claire, compétitive et une attestation rapide pour que vous puissiez vous concentrer sur
                                ce que vous faites de mieux : votre chantier.
                            </p>
                            <a href="#simulationForm" class="inline-block bg-orange text-dark font-bold py-2 lg:py-4 px-4 lg:px-10 rounded-lg lg:rounded-2xl hover:bg-accent transition-all transform hover:scale-105 shadow-2xl text-xs lg:text-base">
                                <i class="fas fa-arrow-up mr-1 lg:mr-2"></i>
                                Demandez votre devis gratuit en ligne
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@stop