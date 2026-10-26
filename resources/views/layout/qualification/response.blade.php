@extends('master')

@section('title', 'Demande envoyée | Qualification BTP')
@section('meta_description', 'Votre demande a bien été prise en compte, un expert Aksam Assurances va vous appeler.')

@section('canonical')
<meta name="robots" content="noindex, nofollow">
@endsection

@section('content-merci')
<section class="relative bg-scanlines min-h-[calc(100vh-56px)] w-full flex items-center justify-center px-4">
  <div class="absolute inset-0 bg-black/40"></div>

  <div class="relative z-10 text-center text-white max-w-xl px-6 py-10 rounded-2xl backdrop-blur-md bg-white/10 border border-white/20 shadow-xl">
    <div class="flex justify-center mb-4">
      <div class="bg-white/20 p-3 rounded-full">
        <svg class="w-8 h-8 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
      </div>
    </div>

    <h2 class="text-2xl sm:text-3xl font-bold mb-4">Merci, votre demande est bien envoyée</h2>

    <p class="text-base sm:text-lg text-gray-100 mb-6">
      L'un de nos experts va vous appeler très prochainement
      @if ($topicTitle)
        pour répondre à vos questions sur « {{ $topicTitle }} »
      @else
        pour répondre à vos questions
      @endif
      et vous accompagner dans votre projet d'assurance décennale.
    </p>

    <div class="flex flex-col sm:flex-row gap-3 justify-center">
      <a href="{{ route('qualification.index') }}" class="inline-block px-6 py-3 bg-accent text-white font-medium rounded-full shadow-md hover:bg-accent/90 transition">
        Retour qualification BTP
      </a>
      <a href="/" class="inline-block px-6 py-3 bg-white/20 text-white font-medium rounded-full shadow-md hover:bg-white/30 transition">
        Revenir à l'accueil
      </a>
    </div>
  </div>
</section>
@endsection
