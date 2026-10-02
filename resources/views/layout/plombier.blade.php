@extends('master')

@section('title', 'Assurance Décennale Polombier et Chauffagiste  - Devis en Ligne')

@section('meta_description', 'Couverture complète pour tous vos travaux de plomberie, chauffage et sanitaire. Devis gratuit et attestation rapide pour démarrer vos chantiers.')

@section('canonical')
<link rel="canonical" href="https://www.lassurance-garantie-decennale.fr/assurance-decennale-plombier-chauffagiste">
@endsection

@section('og_meta')
<meta property="og:title" content="Assurance Décennale Polombier et Chauffagiste  - Devis en Ligne">
<meta property="og:description" content="Couverture complète pour tous vos travaux de plomberie, chauffage et sanitaire. Devis gratuit et attestation rapide pour démarrer vos chantiers.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.lassurance-garantie-decennale.fr/assurance-decennale-plombier-chauffagiste">
<meta property="og:image" content="https://www.lassurance-garantie-decennale.fr/image/assurance-decinale.jpg">
@endsection


{{-- Twitter dans sa propre section, séparée de og_meta --}}
@section('twitter_meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@AksamAssurances">
<meta name="twitter:title" content="Assurance Décennale Polombier et Chauffagiste  - Devis en Ligne">
<meta name="twitter:description" content="Couverture complète pour tous vos travaux de plomberie, chauffage et sanitaire. Devis gratuit et attestation rapide pour démarrer vos chantiers.">
<meta name="twitter:url" content="https://www.lassurance-garantie-decennale.fr/assurance-decennale-plombier-chauffagiste">

@endsection

@section('content-plombier')

<!-- Hero Section -->
<section class="py-8 lg:py-6 bg-gradient-to-br from-light via-surfaceHover to-light hero-pattern relative overflow-hidden">
  <!-- Background decoration -->
  <div class="absolute inset-0 scanlines-bg opacity-30"></div>

  <div class="absolute top-5 left-5 floating-animation">
    <i class="fas fa-wrench text-yellow-600 text-4xl opacity-30"></i>
  </div>

  <div class="absolute bottom-5 right-5 floating-animation" style="animation-delay: -2s;">
    <i class="fas fa-tools text-yellow-700 text-5xl opacity-25"></i>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center">

      <div class="w-12 h-12 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-2xl mx-auto mb-4 flex items-center justify-center">
        <i class="fas fa-faucet text-2xl text-dark"></i>
      </div>

      <h1 class="text-4xl lg:text-5xl font-bold text-gradient mb-4">
        Assurance Décennale Plombier et Chauffagiste
      </h1>

      <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto">
        Obtenez votre devis personnalisé à partir de 79€/mois.
        Recevez votre attestation rapidement pour démarrer vos chantiers en toute sérénité.
      </p>

      <div class="w-20 h-1 bg-yellow-300 bg-yellow-300 bg-amber-400 mx-auto rounded-full"></div>

    </div>
  </div>
</section>


<!-- Content Section -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">

  <!-- Introduction -->
  <div class="bg-white rounded-xl shadow-xl p-8">
    <div class="prose max-w-none">

      <p class="text-lg text-gray-700 leading-relaxed mb-8">
        En tant qu'artisan plombier-chauffagiste, votre savoir-faire est la clé de votre réputation.
        Cependant, un dégât des eaux, une fuite sur une canalisation encastrée ou un système de chauffage
        défaillant peut avoir des conséquences financières désastreuses.
        <strong>L'assurance décennale plombier</strong> est bien plus qu'une simple obligation légale :
        c'est le bouclier qui protège votre entreprise, vos clients et votre patrimoine pour les 10 années
        qui suivent la réception des travaux.
      </p>

      <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
        <p class="text-base text-dark">
          <strong>Nous proposons des solutions sur mesure</strong>, que vous soyez auto-entrepreneur ou
          en société (SASU, EURL) et cela quels que soient vos antécédents d'assurances
          (spécialisé pour l'assurance décennale plombier résilié tout motifs confondu).
        </p>
      </div>

    </div>
  </div>


  <!-- Garanties Spécifiques -->
  <div class="bg-white rounded-xl shadow-xl p-8">

    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Des Garanties Spécifiquement Adaptées aux Risques du Plombier
    </h2>

    <p class="text-base text-gray-700 mb-8">
      Notre assurance décennale couvre l'ensemble de vos activités et les dommages qui peuvent compromettre
      la solidité de l'ouvrage ou le rendre impropre à sa destination.
    </p>

    <div class="grid md:grid-cols-2 gap-6">

      <!-- Dégâts des eaux -->
      <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 to-orange-200 rounded-xl p-6 border border-blue-200">
        <div class="flex items-start space-x-4">

          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-tint text-white text-xl"></i>
          </div>

          <div>
            <h3 class="text-lg font-bold text-blue-900 mb-3">
              Dégâts des eaux et fuites
            </h3>

            <p class="text-sm text-blue-800">
              Protection contre les fuites sur les canalisations d'alimentation ou d'évacuation
              (encastrées ou non), les infiltrations dues à des raccords ou soudures défectueux.
            </p>
          </div>

        </div>
      </div>


      <!-- Installations sanitaires -->
      <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 to-orange-200 rounded-xl p-6 border border-blue-200">

        <div class="flex items-start space-x-4">

          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-bath text-white text-xl"></i>
          </div>

          <div>
            <h3 class="text-lg font-bold text-green-900 mb-3">
              Installations sanitaires
            </h3>

            <p class="text-sm text-green-800">
              Couverture des malfaçons liées à l'installation d'équipements sanitaires
              (baignoires, douches, WC, robinetterie) rendant leur usage impossible.
            </p>
          </div>

        </div>
      </div>


      <!-- Systèmes de chauffage -->
      <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 to-orange-200 rounded-xl p-6 border border-blue-200">

        <div class="flex items-start space-x-4">

          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-fire text-white text-xl"></i>
          </div>

          <div>
            <h3 class="text-lg font-bold text-orange-900 mb-3">
              Systèmes de chauffage
            </h3>

            <p class="text-sm text-orange-800">
              Garantie sur l'ensemble de vos installations de chauffage central, chaudières
              (gaz, fioul, bois), pompes à chaleur, radiateurs et planchers chauffants.
            </p>
          </div>

        </div>
      </div>


      <!-- Ventilation et Climatisation -->
      <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 to-orange-200 rounded-xl p-6 border border-blue-200">

        <div class="flex items-start space-x-4">

          <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
            <i class="fas fa-wind text-white text-xl"></i>
          </div>

          <div>
            <h3 class="text-lg font-bold text-purple-900 mb-3">
              Ventilation et Climatisation
            </h3>

            <p class="text-sm text-purple-800">
              Prise en charge des désordres liés aux installations de VMC, climatiseurs
              et systèmes de traitement de l'air.
            </p>
          </div>

        </div>
      </div>

    </div>
  </div>


  <!-- Prix et Tarifs -->
  <div class="bg-white rounded-xl shadow-xl p-8">

    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-6">
      Quel est le prix d'une assurance décennale pour plombier ?
    </h2>

    <p class="text-base text-gray-700 mb-6">
      Le tarif de votre assurance décennale plombier est calculé sur-mesure. Il n'y a pas de prix unique,
      mais plusieurs facteurs sont pris en compte pour vous offrir le tarif le plus juste :
    </p>


    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">

      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-user-tie text-yellow-500"></i>
        <span class="text-sm text-gray-700">
          <strong>Votre statut :</strong> Auto-entrepreneur, EURL, SASU...
        </span>
      </div>

      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-calendar-alt text-yellow-500"></i>
        <span class="text-sm text-gray-700">
          <strong>Votre expérience :</strong> Nombre d'années dans le métier
        </span>
      </div>

      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-euro-sign text-yellow-500"></i>
        <span class="text-sm text-gray-700">
          <strong>Votre CA :</strong> Réalisé ou prévisionnel
        </span>
      </div>

      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-hammer text-yellow-500"></i>
        <span class="text-sm text-gray-700">
          <strong>Nature des travaux :</strong> Neuf, rénovation, particuliers...
        </span>
      </div>

      <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
        <i class="fas fa-shield-alt text-yellow-500"></i>
        <span class="text-sm text-gray-700">
          <strong>Garanties optionnelles :</strong> RC Pro, protection juridique...
        </span>
      </div>

    </div>


    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">

      <div class="flex items-start space-x-3">

        <i class="fas fa-info-circle text-yellow-600 mt-1"></i>

        <div>
          <h4 class="font-bold text-yellow-800 mb-2">
            Tarifs indicatifs:
          </h4>

          <p class="text-dark text-sm">
            Le tarif annuel moyen pour une assurance décennale plombier-chauffagiste débute autour de
            <strong>950 €</strong> pour un auto-entrepreneur et peut aller jusqu'à
            <strong>2 500 €</strong> pour une société avec un chiffre d'affaires plus conséquent.
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
      Nous savons que votre temps est précieux. Obtenir votre couverture est un processus rapide
      et sans paperasse inutile.
    </p>


    <div class="grid md:grid-cols-3 gap-8">

      <!-- Étape 1 -->
      <div class="text-center">

        <div class="w-20 h-20 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">1</span>
        </div>

        <h3 class="text-lg font-bold text-gray-900 mb-3">
          Remplissez le formulaire
        </h3>

        <p class="text-sm text-gray-600 mb-4">
          Décrivez simplement votre activité et votre parcours en ligne
        </p>

        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          3 minutes
        </div>

      </div>


      <!-- Étape 2 -->
      <div class="text-center">

        <div class="w-20 h-20 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">2</span>
        </div>

        <h3 class="text-lg font-bold text-gray-900 mb-3">
          Comparez votre devis
        </h3>

        <p class="text-sm text-gray-600 mb-4">
          Recevez une proposition claire et détaillée, sans engagement
        </p>

        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          Personnalisé
        </div>

      </div>


      <!-- Étape 3 -->
      <div class="text-center">

        <div class="w-20 h-20 bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-full mx-auto mb-4 flex items-center justify-center">
          <span class="text-white text-2xl font-bold">3</span>
        </div>

        <h3 class="text-lg font-bold text-gray-900 mb-3">
          Recevez votre attestation
        </h3>

        <p class="text-sm text-gray-600 mb-4">
          Une fois le contrat validé, attestation par email pour démarrer vos travaux
        </p>

        <div class="text-xs text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full inline-block">
          Immédiat
        </div>

      </div>

    </div>
  </div>


   <div class="bg-white rounded-xl shadow-xl p-8 mb-12 lg:mb-20">
    <div class="text-center mb-8">
      <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-8">
        Questions Fréquentes des Plombiers
      </h2>
      <div class="w-16 lg:w-24 h-1 bg-amber-400 mx-auto rounded-full"></div>
    </div>

    <div id="faq-container" class="space-y-6">
      <!-- FAQ 1 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-leaf text-yellow-500 mr-2"></i>
            La qualification RGE est-elle obligatoire pour un plombier chauffagiste ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            La mention RGE (Reconnu Garant de l'Environnement) n'est <strong>pas une obligation générale</strong> pour exercer le métier de
            plombier-chauffagiste. En revanche, elle est exigée pour que les clients bénéficient de certaines aides à la rénovation énergétique,
            lorsque le dispositif et les travaux concernés le prévoient. La qualification doit correspondre aux travaux réalisés. Elle ne
            garantit pas, à elle seule, l'attribution d'une aide : les autres conditions du dispositif doivent également être respectées.
          </p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
            La qualification RGE remplace-t-elle l'assurance décennale ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Non.</strong> La qualification RGE atteste des compétences de l'entreprise pour certains travaux de rénovation énergétique.
            L'assurance décennale couvre sa responsabilité décennale dans les conditions prévues au contrat. Un plombier-chauffagiste RGE doit
            vérifier que les activités réalisées, comme l'installation de pompes à chaleur, sont bien déclarées et couvertes. L'obtention
            d'une qualification RGE n'étend pas automatiquement les garanties d'assurance.
          </p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-search text-yellow-500 mr-2"></i>
            Comment vérifier la qualification RGE d'un plombier-chauffagiste ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Consultez l'annuaire officiel France pour vérifier les domaines de travaux et la validité de la qualification de l'entreprise.
            Demandez également son attestation d'assurance décennale et vérifiez qu'elle couvre les activités concernées. Le certificat RGE
            et l'attestation d'assurance sont deux documents complémentaires.
          </p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-tools text-yellow-500 mr-2"></i>
            Quels travaux un plombier-chauffagiste RGE peut-il réaliser ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Selon les catégories inscrites sur son certificat, la qualification RGE d'un plombier-chauffagiste peut notamment concerner
            l'installation de pompes à chaleur pour le chauffage, de chauffe-eau thermodynamique ou de systèmes solaires thermiques.
            La mention RGE porte sur des domaines précis : une entreprise qualifiée pour un équipement ne l'est pas automatiquement pour
            tous les travaux de rénovation énergétique. Vérifiez que la qualification correspond aux travaux prévus.
          </p>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-file-contract text-yellow-500 mr-2"></i>
            Faut-il adapter son assurance décennale avant d'installer des pompes à chaleur ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            Avant de commencer l'installation de pompes à chaleur, vérifiez auprès de votre assureur que cette activité est déclarée et
            couverte par votre contrat d'assurance décennale. Une assurance souscrite pour la plomberie ne couvre pas automatiquement la pose
            de pompes à chaleur. Si cette activité n'entre pas dans les garanties du contrat, une adaptation est nécessaire avant l'ouverture
            du chantier. Vérifiez également les équipements et les techniques couverts, même si votre entreprise possède déjà une
            qualification RGE.
          </p>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-gavel text-yellow-500 mr-2"></i>
            L'assurance décennale est-elle obligatoire pour un plombier auto-entrepreneur ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Oui, absolument.</strong> Dès que vos travaux touchent à la structure ou aux éléments indissociables du bâti 
            (canalisations encastrées, chauffage central...), l'assurance décennale est une obligation légale, quel que soit votre statut.
          </p>
        </div>
      </div>

      <!-- FAQ 7 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-shield-alt text-yellow-500 mr-2"></i>
            La RC Pro est-elle incluse dans l'assurance décennale ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Non</strong>, mais elle est souvent proposée en complément et est fortement recommandée. La RC Pro couvre les dommages 
            que vous pourriez causer à des tiers pendant vos travaux (ex: un dégât des eaux chez un voisin en cours de chantier), 
            tandis que la décennale couvre les dommages après la fin des travaux.
          </p>
        </div>
      </div>

      <!-- FAQ 8 -->
      <div class="faq-item border border-gray-200 rounded-xl p-6">
        <h3 class="faq-question text-lg font-bold text-gray-900 mb-3">
          <span>
            <i class="fas fa-credit-card text-yellow-500 mr-2"></i>
            Puis-je payer mon assurance décennale mensuellement ?
          </span>
          <span class="faq-arrow">
            <i class="fas fa-chevron-down"></i>
          </span>
        </h3>
        <div class="faq-answer">
          <p class="text-base text-gray-700">
            <strong>Oui</strong>, la plupart de nos partenaires assureurs proposent des facilités de paiement avec un fractionnement 
            mensuel, trimestriel ou semestriel de votre prime annuelle pour mieux gérer votre trésorerie.
          </p>
        </div>
      </div>

    </div>

    <div
      id="faq-pagination"
      class="flex justify-center items-center gap-2 mt-10 flex-wrap">
    </div>

  </div>



  </div>


  @include('layout.faq-assets')


  <!-- Final CTA -->
  <div class="bg-yellow-300 bg-yellow-300 bg-amber-400 rounded-3xl p-12 text-dark text-center relative overflow-hidden">

    <div class="absolute inset-0 bg-scanlines opacity-10"></div>

    <div class="relative">

      <div class="w-16 h-16 bg-dark/20 rounded-2xl mx-auto mb-6 flex items-center justify-center">
        <i class="fas fa-wrench text-3xl text-dark"></i>
      </div>

      <h2 class="text-4xl font-bold mb-6 text-dark">
        Protégez votre activité de plombier dès aujourd'hui
      </h2>

      <p class="text-xl mb-8 text-dark/90 max-w-3xl mx-auto leading-relaxed">
        Ne laissez pas un sinistre compromettre votre entreprise.
        Obtenez votre assurance décennale adaptée à votre métier de plombier-chauffagiste.
      </p>


      <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">

        <a href="/" class="inline-block bg-dark text-yellow-400 font-bold py-4 px-10 rounded-2xl hover:bg-primary transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-calculator mr-2"></i>
          Obtenir mon devis gratuit
        </a>

        <a href="tel:0182834800" class="inline-block bg-white text-dark font-bold py-4 px-10 rounded-2xl hover:bg-gray-100 transition-all transform hover:scale-105 shadow-2xl">
          <i class="fas fa-phone mr-2"></i>
          01 82 83 48 00
        </a>

      </div>


      <p class="text-sm text-dark/80 mt-6">
        Devis personnalisé et attestation rapide - À partir de 79€/mois
      </p>

    </div>
  </div>

</main>

@endsection