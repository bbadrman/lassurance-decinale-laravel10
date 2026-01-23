@extends('master')



@section('title', 'Assurance Décennale Maçon | Protégez le Gros Œuvre')
  
@section('meta_description', 'Assurance décennale obligatoire pour maçon  (artisan, entreprise). Couverture des fondations, murs porteurs, fissures et malfaçons. Obtenez votre devis et attestation.')

@section('canonical')
<link rel="canonical" href="https://www.lassurance-garantie-decennale.fr/assurance-decennale-macon">
 
@endsection

@section('og_meta')
<meta property="og:title" content="Assurance Décennale Maçon | La Garantie de Vos Fondations">
<meta property="og:description" content="Spécialiste de l'assurance décennale pour les travaux de maçonnerie et de gros œuvre. Protégez votre entreprise contre les risques structurels. Devis gratuit.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lassurance-garantie-decennale.fr/assurance-decennale-macon"> 
<meta property="og:image" content="https://www.lassurance-garantie-decennale.fr/image/assurance-decinale.jpg">
@endsection

@section('content-maçon')

<!-- Hero Section -->
<section class="py-8 lg:py-6 bg-gradient-to-br from-light via-surfaceHover to-light hero-pattern relative overflow-hidden">
  <!-- Background decoration -->
  <div class="absolute inset-0 scanlines-bg opacity-30"></div>
  <div class="absolute top-5 left-5 floating-animation">
    <i class="fas fa-hammer text-yellow-600 text-4xl opacity-30"></i>
  </div>
  <div class="absolute bottom-5 right-5 floating-animation" style="animation-delay: -2s;">
    <i class="fas fa-building text-yellow-700 text-5xl opacity-25"></i>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center">
      <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
        <i class="fas fa-hard-hat text-2xl text-dark"></i>
      </div>
      <h1 class="text-4xl lg:text-5xl font-bold text-gradient mb-4">Assurance Décennale Maçon</h1>
      <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto">
        La garantie essentielle pour tous vos travaux de gros œuvre. 
        Obtenez votre devis personnalisé en ligne.
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
        En tant que maçon, vous êtes le pilier de chaque construction. Fondations, murs porteurs, dalles : votre travail garantit 
        la solidité de l'ouvrage. C'est pourquoi <strong>l'assurance décennale maçon</strong> est la plus importante et la plus 
        scrutée des garanties du BTP. Elle n'est pas une option, mais une obligation légale qui protège votre entreprise face aux 
        risques majeurs pouvant survenir jusqu'à 10 ans après la fin du chantier.
      </p>
      <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
        <p class="text-base text-dark">
          <strong>Que vous soyez artisan indépendant, auto-entrepreneur ou à la tête d'une entreprise de maçonnerie</strong>, 
          nous vous proposons une couverture solide, à la hauteur de vos responsabilités.
        </p>
      </div>
    </div>
  </div>

  <!-- Garanties Spécifiques -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Des Garanties à la hauteur de vos responsabilités
    </h2>
    <p class="text-base text-gray-700 mb-8">
      Le métier de maçon engage directement la structure et la pérennité du bâtiment. Notre assurance décennale est 
      spécifiquement conçue pour couvrir les risques liés au gros œuvre :
    </p>
    
    <div class="grid md:grid-cols-2 gap-6">
      <!-- Défauts de fondation -->
      <div class="bg-yellow-100 rounded-xl p-6 border ">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-mountain text-primary text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Défauts de fondation et de structure</h3>
            <p class="text-sm text-dark-800">
              Couverture contre les fissures structurelles, les problèmes d'affaissement de terrain, 
              les malfaçons sur les fondations qui compromettent la stabilité de l'édifice.
            </p>
          </div>
        </div>
      </div>

      <!-- Murs porteurs et dalles -->
      <div class="bg-yellow-100 rounded-xl p-6 border ">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-cubes text-primary text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Malfaçons sur les murs porteurs et dalles</h3>
            <p class="text-sm text-dark-800">
              Garantie sur les erreurs de conception ou de réalisation des éléments porteurs 
              (murs, poutres, linteaux, planchers en béton...).
            </p>
          </div>
        </div>
      </div>

      <!-- Étanchéité et humidité -->
      <div class="bg-yellow-100 rounded-xl p-6 border ">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-tint text-primary text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Problèmes d'étanchéité et d'humidité</h3>
            <p class="text-sm text-dark-800">
              Protection contre les infiltrations d'eau et les remontées capillaires dues à une mauvaise exécution 
              des soubassements, des murs enterrés ou des chapes.
            </p>
          </div>
        </div>
      </div>

      <!-- Maçonnerie générale -->
      <div class="bg-yellow-100 rounded-xl p-6 border ">
        <div class="flex items-start space-x-4">
          <div class="w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-hard-hat text-primary text-xl"></i>

          </div>
          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">Travaux de maçonnerie générale</h3>
            <p class="text-sm text-dark-800">
              Couverture de l'ensemble de vos activités, incluant le montage de parpaings ou de briques, 
              la réalisation de chapes et d'enduits de façade.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Prix et Tarifs -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Quel est le tarif d'une assurance décennale maçonnerie ?
    </h2>
    
    <p class="text-base text-gray-700 mb-6">
      Le métier de maçon est considéré comme une activité à risque élevé, ce qui influe sur le coût de l'assurance. 
      Le tarif de votre <strong>assurance décennale maçon</strong> est calculé sur-mesure en fonction de plusieurs critères :
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-user-tie text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Votre statut :</strong> Auto-entrepreneur, EURL, SASU...</span>
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
        <i class="fas fa-tools text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Techniques de construction :</strong> Méthodes employées</span>
      </div>
      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-shield-alt text-yellow-500"></i>
        <span class="text-sm text-gray-700"><strong>Garanties optionnelles :</strong> RC Pro, protection juridique</span>
      </div>
    </div>

    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
      <div class="flex items-start space-x-3">
        <i class="fas fa-exclamation-triangle text-yellow-600 mt-1"></i>
        <div>
          <h4 class="font-bold text-yellow-800 mb-2">Tarifs indicatifs pour la maçonnerie :</h4>
          <p class="text-dark text-sm">
            Le tarif annuel moyen pour une entreprise de maçonnerie débute entre <strong>2 500 € et 4 500 €</strong> 
            pour un artisan débutant ou une micro-entreprise, et peut évoluer en fonction de la taille de l'entreprise 
            et de l'étendue de ses chantiers.
          </p>
        </div>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center">
      <a href="/" class="inline-block bg-yellow-100 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-400 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        DEMANDER MON DEVIS DÉCENNALE MAÇON
      </a>
    </div>
  </div>

  <!-- Processus en 3 étapes -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Obtenez votre attestation en 3 étapes simples
    </h2>
    <p class="text-base text-gray-700 mb-8 text-center">
      Nous savons que l'attestation d'assurance décennale est le document indispensable pour accéder à vos chantiers.
    </p>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Étape 1 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-black text-2xl font-bold">1</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Décrivez votre activité</h3>
        <p class="text-sm text-gray-600 mb-4">
          Remplissez notre formulaire en ligne en précisant votre expérience
        </p>
        <div class="text-xs text-black px-3 py-1 rounded-full inline-block">
          3 minutes
        </div>
      </div>

      <!-- Étape 2 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-black text-2xl font-bold">2</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Recevez votre devis</h3>
        <p class="text-sm text-gray-600 mb-4">
          Nous vous envoyons une proposition détaillée et compétitive
        </p>
        <div class="text-xs text-black px-3 py-1 rounded-full inline-block">
          Personnalisé
        </div>
      </div>

      <!-- Étape 3 -->
      <div class="text-center">
        <div class="w-20 h-20 bg-yellow-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-black text-2xl font-bold">3</span>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-3">Validez et recevez votre attestation</h3>
        <p class="text-sm text-gray-600 mb-4">
          Une fois le contrat souscrit, votre attestation vous est envoyée par courriel
        </p>
        <div class="text-xs text-black px-3 py-1 rounded-full inline-block">
          Immédiat
        </div>
      </div>
    </div>
  </div>

  <!-- Questions Fréquentes -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-8">
      Questions Fréquentes des Maçons
    </h2>
    
    <div class="space-y-6">
      <!-- Question 1 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-gavel text-yellow-500 mr-2"></i>
          La décennale est-elle obligatoire pour des petits travaux de maçonnerie ?
        </h3>
        <p class="text-base text-gray-700">
          <strong>Oui</strong>, dès que votre intervention peut affecter la solidité de l'ouvrage ou l'un de ses éléments 
          indissociables. L'ouverture d'un mur porteur ou la création d'une chape, par exemple, sont des actes qui exigent 
          obligatoirement une couverture décennale.
        </p>
      </div>

      <!-- Question 2 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-graduation-cap text-yellow-500 mr-2"></i>
          Quelles qualifications sont nécessaires pour être assuré en tant que maçon ?
        </h3>
        <p class="text-base text-gray-700">
          Les assureurs demandent une justification de votre compétence professionnelle. Généralement, il s'agit d'un 
          <strong>diplôme (CAP/BEP Maçonnerie)</strong> ou d'une preuve d'expérience professionnelle d'au moins 
          <strong>3 ans</strong> dans le domaine.
        </p>
      </div>

      <!-- Question 3 -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-3">
          <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
          La Responsabilité Civile Professionnelle (RC Pro) est-elle suffisante ?
        </h3>
        <p class="text-base text-gray-700">
          <strong>Non</strong>, elle est complémentaire mais ne remplace pas la décennale. La RC Pro couvre les dommages 
          causés aux tiers pendant vos travaux (ex: la chute d'un outil sur une voiture). La décennale couvre les malfaçons 
          qui apparaissent après la fin du chantier.
        </p>
      </div>
    </div>
  </div>

  <!-- Section expertise -->
  <div class=" rounded-xl p-8 text-white">
    <div class="text-center">
      <div class="w-16 h-16 bg-yellow-100 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-user-tie text-2xl text-dark"></i>
      </div>
      <h2 class="text-2xl md:text-3xl font-bold mb-4 text-dark">L'expertise au service de votre métier</h2>
      <p class="text-lg text-dark mb-6 max-w-3xl mx-auto">
        Une assurance décennale maçonnerie est un contrat d'assurance très technique qui nécessite l'avis d'un expert 
        pour être négociée au meilleur prix et avec les meilleures garanties.
      </p>
      <p class="text-base text-dark mb-8">
        Contactez nos spécialistes pour une analyse gratuite de votre situation et un devis sans engagement.
      </p>
      <a href="/" class="inline-block bg-yellow-100 text-dark font-bold py-3 px-8 rounded-xl hover:bg-yellow-400 transition-all transform hover:scale-105 shadow-lg">
        <i class="fas fa-calculator mr-2"></i>
        DEMANDER MON DEVIS DÉCENNALE MAÇON
      </a>
    </div>
  </div>

  <!-- Final CTA -->
  <div class="bg-yellow-100  rounded-3xl p-12 text-dark text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-scanlines opacity-10"></div>
    <div class="relative">
      <div class="w-16 h-16 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-hard-hat text-3xl text-dark"></i>
      </div>
      <h2 class="text-4xl font-bold mb-6 text-dark">Protégez la solidité de vos constructions</h2>
      <p class="text-xl mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
        En tant que maçon, vous êtes responsable de la structure. Ne laissez pas un défaut de fondation 
        ou une malfaçon compromettre votre entreprise.
      </p>
      <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
        <a href="/" class="inline-block bg-dark text-yellow-400 font-bold py-4 px-10 rounded-2xl hover:bg-primary transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-calculator mr-2"></i>
          Obtenir mon devis spécialisé
        </a>
        <a href="tel:0182834800" class="inline-block bg-white text-dark font-bold py-4 px-10 rounded-2xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-phone mr-2"></i>
          01 82 83 48 00
        </a>
      </div>
      <p class="text-sm text-dark/80 mt-6">
        Devis personnalisé pour maçon - À partir de 2 500€/an
      </p>
    </div>
  </div>

</main>

@endsection