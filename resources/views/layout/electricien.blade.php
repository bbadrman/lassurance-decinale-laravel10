@extends('master')


@section('title', 'Assurance Décennale Électricien | Devis en Ligne dès 65€/mois')
  
@section('meta_description', 'Assurance décennale obligatoire pour électricien (artisan, auto-entrepreneur). Couverture des risques d\'incendie, surtension et non-conformité. Devis et attestation rapide.')

@section('canonical')
<link rel="canonical" href="https://www.lassurance-garantie-decennale.fr/assurance-decennale-electricien">

 
@endsection

@section('og_meta')
<meta property="og:title" content="Assurance Décennale Électricien | Sécurisez Vos Chantiers">
<meta property="og:description" content="Protégez vos installations électriques pendant 10 ans. Garanties complètes conformes à la norme NF C 15-100. Devis gratuit et attestation immédiate.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lassurance-garantie-decennale.fr/assurance-decennale-electricien">

<meta property="og:image" content="https://www.lassurance-garantie-decennale.fr/image/assurance-decinale.jpg">
@endsection

@section('content-electricien')

<!-- Hero Section -->
<section class="py-8 lg:py-6 bg-gradient-to-br from-light via-surfaceHover to-light hero-pattern relative overflow-hidden">
  <!-- Background decoration -->
  <div class="absolute inset-0 scanlines-bg opacity-30"></div>
  <div class="absolute top-5 left-5 floating-animation">
    <i class="fas fa-bolt text-yellow-600 text-4xl opacity-30"></i>
  </div>
  <div class="absolute bottom-5 right-5 floating-animation" style="animation-delay: -2s;">
    <i class="fas fa-plug text-yellow-700 text-5xl opacity-25"></i>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center">
      <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
        <i class="fas fa-lightbulb text-2xl text-dark"></i>
      </div>
      <h1 class="text-4xl lg:text-5xl font-bold text-gradient mb-4">Assurance Décennale Électricien</h1>
      <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto">
        Votre devis personnalisé à partir de 65€/mois. 
        Obtenez votre attestation en ligne et respectez vos obligations légales.
      </p>
      <div class="w-20 h-1 bg-gradient-to-r from-yellow-400 to-yellow-500 mx-auto rounded-full"></div>
    </div>
  </div>
</section>

<!-- Content Section -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">
  
  <!-- Introduction -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <div class="prose max-w-none">
      <p class="text-lg text-gray-700 leading-relaxed mb-8">
        En tant qu'électricien professionnel, votre responsabilité est immense. Une installation défectueuse ou non conforme 
        à la norme NF C 15-100 peut entraîner des conséquences graves comme un incendie ou des dommages irréversibles aux équipements. 
        <strong>L'assurance décennale électricien</strong> est l'unique protection qui sécurise votre entreprise contre les malfaçons 
        pouvant apparaître jusqu'à 10 ans après la fin de vos travaux.
      </p>
      <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
        <p class="text-base text-yellow-800">
          <strong>Que vous exercez en auto-entrepreneur ou en société</strong>, nous avons le contrat adapté à vos besoins 
          pour vous permettre de travailler en toute sérénité.
        </p>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center">
      <a href="/" class="inline-block bg-yellow-400 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        OBTENIR MON TARIF PERSONNALISÉ
      </a>
    </div>
  </div>

  <!-- Garanties Spécifiques -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Des garanties essentielles pour votre métier d'électricien
    </h2>
    <p class="text-base text-gray-700 mb-8">
      Notre assurance décennale vous couvre contre les dommages qui compromettent la solidité de l'ouvrage ou le rendent 
      impropre à sa destination. Pour un électricien, cela inclut :
    </p>
    
    <div class="grid md:grid-cols-2 gap-6">
      <!-- Risques d'incendie -->
     <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-xl p-6 border border-red-200">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-fire text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Risques d'incendie et de surtension</h3>
             <p class="text-sm text-dark-800">
              Protection contre les courts-circuits, surchauffes du tableau électrique, câblages défectueux 
              et tout dommage matériel consécutif à une défaillance de votre installation.
            </p>
          </div>
        </div>
      </div>

      <!-- Non-conformité aux normes -->
       <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-xl p-6 border border-blue-200">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-certificate text-white text-xl"></i>
          </div>
          <div>
           <h3 class="text-lg font-bold text-blue-900 mb-3">Non-conformité aux normes</h3>
             <p class="text-sm text-dark-800">
              Garantie de vos travaux face aux exigences de la norme NF C 15-100, 
              un point essentiel en cas d'expertise après un sinistre.
            </p>
          </div>
        </div>
      </div>

      <!-- Domotique et VMC -->
     <div class="bg-yellow-300 bg-yellow-300 bg-amber-400  rounded-xl p-6 border border-cyan-200">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-home text-white text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Systèmes de domotique et VMC</h3>
             <p class="text-sm text-dark-800">
              Couverture de vos installations de maison connectée, automatismes (portails, volets), 
              systèmes de ventilation et de chauffage électrique.
            </p>
          </div>
        </div>
      </div>

      <!-- Dommages aux appareils -->
       <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-xl p-6 border border-green-200">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-tv text-white text-xl"></i>
          </div>
          <div>
           <h3 class="text-lg font-bold text-blue-900 mb-3">Dommages aux appareils</h3>
             <p class="text-sm text-dark-800">
              Prise en charge des dommages causés aux appareils électriques et électroniques des occupants 
              à la suite d'une surtension provenant de votre installation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Prix et Tarifs -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Quel est le prix d'une assurance décennale pour un électricien ?
    </h2>
    
    <p class="text-base text-gray-700 mb-6">
      Le tarif de votre assurance décennale électricien est calculé sur-mesure selon votre profil. 
      Les principaux éléments pris en compte sont :
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-user-tie text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Statut juridique :</strong> Auto-entrepreneur, EURL, SASU...</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-graduation-cap text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Expérience & qualifications :</strong> Diplômes, années d'expérience</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-euro-sign text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Chiffre d'affaires :</strong> Réalisé ou prévisionnel</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-microchip text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Activités spécifiques :</strong> Courants forts/faibles, alarmes, domotique</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-shield-alt text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Garanties complémentaires :</strong> RC Pro, protection juridique</span>
      </div>
    </div>

    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
      <div class="flex items-start space-x-3">
        <i class="fas fa-info-circle text-yellow-600 mt-1"></i>
        <div>
          <h4 class="font-bold text-yellow-800 mb-2">Tarifs indicatifs pour électricien :</h4>
          <p class="text-dark text-sm">
            Le tarif annuel moyen pour un électricien débute aux alentours de <strong>780 €</strong> 
            pour un auto-entrepreneur et peut s'élever à <strong>2 200 €</strong> ou plus pour une société 
            avec des chantiers plus importants.
          </p>
        </div>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center">
      <a href="/" class="inline-block bg-yellow-400 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        OBTENIR MON TARIF PERSONNALISÉ
      </a>
    </div>
  </div>

  <!-- Processus en 3 étapes -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Obtenez Votre Attestation Décennale en 3 Étapes Simples
    </h2>
    <p class="text-base text-gray-700 mb-8 text-center">
      Nous savons que l'obtention de votre attestation est souvent une urgence pour débloquer un chantier.
    </p>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Étape 1 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">1</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Remplissez notre formulaire</h3>
        <p class="text-sm text-gray-600 mb-4">
          Décrivez votre activité et votre expérience en ligne
        </p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          3 minutes
        </div>
      </div>

      <!-- Étape 2 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">2</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Recevez et comparez votre devis</h3>
        <p class="text-sm text-gray-600 mb-4">
          Nous vous envoyons une proposition claire, sans engagement
        </p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          Sans engagement
        </div>
      </div>

      <!-- Étape 3 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">3</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Validez et recevez votre attestation</h3>
        <p class="text-sm text-gray-600 mb-4">
          Après souscription, votre attestation par courriel, prête à être utilisée
        </p>
        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          Immédiat
        </div>
      </div>
    </div>
  </div>

  <!-- Questions Fréquentes -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-8">
      Questions Fréquentes des Électriciens
    </h2>
    
    <div class="space-y-6">
      <!-- Question 1 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-gavel text-yellow-500 mr-2"></i>
          La décennale est-elle obligatoire pour de la simple rénovation électrique ?
        </h3>
        <p class="text-base text-gray-700">
          <strong>Oui.</strong> Dès que vous intervenez sur une installation existante (remplacement d'un tableau, 
          tirage de nouvelles lignes...), votre responsabilité décennale est engagée. L'assurance est donc obligatoire.
        </p>
      </div>

      <!-- Question 2 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-graduation-cap text-yellow-500 mr-2"></i>
          Quelles qualifications sont nécessaires pour souscrire ?
        </h3>
        <p class="text-base text-gray-700">
          Les assureurs exigent généralement un <strong>diplôme dans le domaine de l'électricité</strong> (CAP, BEP, etc.) 
          <strong>OU</strong> une preuve d'expérience en tant qu'électricien salarié ou indépendant d'au moins <strong>3 ans</strong>.
        </p>
      </div>

      <!-- Question 3 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
          La Responsabilité Civile Professionnelle (RC Pro) est-elle incluse ?
        </h3>
        <p class="text-base text-gray-700">
          Elle est souvent proposée en option et est <strong>indispensable</strong>. La RC Pro couvre les dommages causés à des tiers 
          pendant vos travaux (ex: vous percez une canalisation par erreur). La décennale, elle, couvre les dommages 
          <strong>après</strong> la fin du chantier.
        </p>
      </div>
    </div>
  </div>

  <!-- Section NF C 15-100 -->
  <div class="rounded-xl p-8 text-white">
    <div class="text-center">
      <div class="w-16 h-16 bg-yellow-400 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-certificate text-2xl text-dark"></i>
      </div>
      <h2 class="text-2xl md:text-3xl font-bold mb-4 text-dark" >Conformité NF C 15-100 garantie</h2>
      <p class="text-lg text-dark mb-6 max-w-3xl mx-auto">
        Notre assurance décennale électricien vous protège spécifiquement contre les risques de non-conformité 
        à la norme NF C 15-100, élément crucial en cas d'expertise après sinistre.
      </p>
      <p class="text-base text-dark mb-8">
        Sécurisez vos installations et votre entreprise avec une couverture adaptée aux spécificités de votre métier.
      </p>
      <a href="/" class="inline-block bg-yellow-400 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        OBTENIR MON TARIF PERSONNALISÉ
      </a>
    </div>
  </div>

  <!-- Final CTA -->
  <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-3xl p-12 text-dark text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-scanlines opacity-10"></div>
    <div class="relative">
      <div class="w-16 h-16 bg-dark/20 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-bolt text-3xl text-dark"></i>
      </div>
      <h2 class="text-4xl font-bold mb-6 text-dark">Sécurisez vos installations électriques</h2>
      <p class="text-xl mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
        En tant qu'électricien, un court-circuit ou une installation défectueuse peut avoir des conséquences graves. 
        Ne prenez pas de risques avec votre entreprise.
      </p>
      <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
        <a href="/" class="inline-block bg-dark text-yellow-400 font-bold py-4 px-10 rounded-2xl hover:bg-primary transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-calculator mr-2"></i>
          Obtenir mon devis électricien
        </a>
        <a href="tel:0182834800" class="inline-block bg-white text-dark font-bold py-4 px-10 rounded-2xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-phone mr-2"></i>
          01 82 83 48 00
        </a>
      </div>
      <p class="text-sm text-dark/80 mt-6">
        Devis personnalisé pour électricien - À partir de 65€/mois
      </p>
    </div>
  </div>

</main>

@endsection