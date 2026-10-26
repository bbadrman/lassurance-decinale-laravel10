{{--
  Sélecteur dynamique de la nomenclature Qualibat (config/qualibat.php), sans changer de page :
  Famille -> Activité -> Spécialité -> Qualification, puis formulaire de rappel sur place.
  Attend $nomenclature.
--}}
@php
  $selectClass = 'w-full px-3 py-3 border border-gray-200 rounded-md bg-yellow-50 focus:ring-1 focus:ring-accent focus:border-accent disabled:opacity-50 disabled:cursor-not-allowed';
  $inputClass = 'w-full px-3 py-2 border border-gray-200 rounded-md focus:ring-1 focus:ring-accent focus:border-accent';
  $hasFormErrors = $errors->any() && old('qualification_form');
@endphp

<div id="qualif" class="bg-white rounded-xl shadow-xl p-8">
  <div class="text-center mb-8">
    <h2 class="text-2xl md:text-3xl font-bold text-gradient mb-4">Trouvez votre qualification BTP</h2>
    <p class="text-base text-gray-700 max-w-3xl mx-auto">
      Sélectionnez votre famille de métier, votre activité puis votre spécialité pour afficher les qualifications
      correspondantes de la nomenclature 2026.
    </p>
  </div>
  
  {{-- Recherche rapide par code ou mot-clé --}}
  <div class="mb-6 relative">
    <label for="qualif-search" class="block text-sm font-semibold text-blue-900 mb-1">
      <i class="fas fa-search mr-1"></i> Recherche rapide (code ou mot-clé)
    </label>
    <input type="search" id="qualif-search" autocomplete="off" placeholder="Ex. 1111, plomberie, charpente…" class="{{ $inputClass }}">
    <ul id="qualif-search-results"
        class="hidden absolute z-20 left-0 right-0 mt-1 bg-white border border-gray-200 rounded-md shadow-lg max-h-72 overflow-y-auto text-sm"></ul>
  </div>

  {{-- Selects dynamiques --}}
  <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div>
      <label for="qualif-family" class="block text-sm font-semibold text-blue-900 mb-1">1. Famille</label>
      <select id="qualif-family" class="{{ $selectClass }}">
        <option value="">Choisissez une famille</option>
        @foreach ($nomenclature as $family)
          <option value="{{ $family['code'] }}">{{ $family['code'] }} – {{ $family['label'] }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label for="qualif-activity" class="block text-sm font-semibold text-blue-900 mb-1">2. Activité</label>
      <select id="qualif-activity" class="{{ $selectClass }}" disabled></select>
    </div>
    <div>
      <label for="qualif-speciality" class="block text-sm font-semibold text-blue-900 mb-1">3. Spécialité</label>
      <select id="qualif-speciality" class="{{ $selectClass }}" disabled></select>
    </div>
    <div>
      <label for="qualif-qualification" class="block text-sm font-semibold text-blue-900 mb-1">4. Qualification</label>
      <select id="qualif-qualification" class="{{ $selectClass }}" disabled></select>
    </div>
  </div>

  {{-- Aucune sélection --}}
  <div id="qualif-empty" class="text-center text-gray-500 border border-dashed border-gray-300 rounded-2xl p-8">
    <i class="fas fa-hand-pointer text-3xl text-yellow-400 mb-3"></i>
    <p>Choisissez une qualification pour afficher sa fiche.</p>
  </div>

  {{-- Fiche de la qualification choisie --}}
  <article id="qualif-detail" class="hidden border border-gray-200 rounded-2xl p-6 md:p-8" aria-live="polite">
    <p id="qualif-path" class="text-sm text-gray-500 mb-3"></p>

    <div class="flex items-start space-x-4 mb-6">
      <div class="w-16 h-16 bg-yellow-300 rounded-xl flex flex-col items-center justify-center flex-shrink-0">
        <span class="text-[10px] font-semibold text-dark uppercase leading-none">Code</span>
        <span id="qualif-code" class="text-lg font-bold text-dark leading-tight"></span>
      </div>
      <div>
        <h3 id="qualif-title" class="text-xl md:text-2xl font-bold text-blue-900 mb-2"></h3>
        <span id="qualif-level" class="hidden inline-block bg-amber-100 text-amber-800 text-xs font-semibold px-3 py-1 rounded-full"></span>
      </div>
    </div>

    <div id="qualif-siblings-box" class="hidden mb-6">
      <p class="text-sm font-semibold text-blue-900 mb-2">Toutes les qualifications de cette spécialité :</p>
      <ul id="qualif-siblings" class="flex flex-wrap gap-2"></ul>
      <p class="text-xs text-gray-500 mt-3">
        Une entreprise qualifiée peut toujours réaliser des travaux d'un niveau de technicité inférieur au sien.
      </p>
    </div>

    {{-- CTA --}}
    <div class="bg-yellow-100 border border-yellow-300 rounded-2xl p-6 flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
      <div class="w-14 h-14 bg-yellow-300 rounded-full flex items-center justify-center flex-shrink-0">
        <i class="fas fa-phone-alt text-white text-2xl"></i>
      </div>
      <div class="flex-1">
        <p class="text-lg font-bold text-blue-900 mb-1">Assurer votre activité « <span id="qualif-cta-label"></span> » ?</p>
        <p class="text-sm text-gray-700">Laissez vos coordonnées, un de nos experts vous rappelle pour une assurance décennale adaptée à votre qualification.</p>
      </div>
      <button type="button" id="qualif-cta"
              class="inline-flex items-center bg-amber-400 text-dark font-bold py-3 px-6 rounded-xl shadow-md hover:bg-yellow-500 transition-all transform hover:scale-105 whitespace-nowrap">
        Plus d'informations <i class="fas fa-chevron-down ml-2"></i>
      </button>
    </div>

    {{-- Formulaire de rappel (sur place) --}}
    <form id="qualif-form" data-no-anim method="POST" action="{{ route('qualification.store') }}"
          class="space-y-4 mt-6 {{ $hasFormErrors ? '' : 'hidden' }}">
      @csrf
      <input type="hidden" name="qualification_form" value="1">
      <input type="hidden" name="qualification" id="qualif-form-code" value="{{ old('qualification') }}">

      @if ($hasFormErrors)
        <div class="bg-red-50 border border-red-200 text-red-700 text-sm p-3 rounded-md">
          @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      @endif

      <div class="grid sm:grid-cols-2 gap-4">
        <div>
          <label for="qualif-nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
          <input type="text" name="nom" id="qualif-nom" required maxlength="255" autocomplete="family-name"
                 class="{{ $inputClass }}" value="{{ $hasFormErrors ? old('nom') : '' }}" />
        </div>
        <div>
          <label for="qualif-prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
          <input type="text" name="prenom" id="qualif-prenom" required maxlength="255" autocomplete="given-name"
                 class="{{ $inputClass }}" value="{{ $hasFormErrors ? old('prenom') : '' }}" />
        </div>
        <div>
          <label for="qualif-email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" name="email" id="qualif-email" required maxlength="255" autocomplete="email"
                 class="{{ $inputClass }}" value="{{ $hasFormErrors ? old('email') : '' }}" />
        </div>
        <div>
          <label for="qualif-tele" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
          <input type="tel" name="tele" id="qualif-tele" required minlength="10" maxlength="10" pattern="[0-9]{10}" autocomplete="tel"
                 placeholder="0612345678" class="{{ $inputClass }}" value="{{ $hasFormErrors ? old('tele') : '' }}" />
        </div>
      </div>

      <p class="text-xs text-gray-600 bg-gray-50 p-3 rounded-md border border-gray-200">
        En cliquant sur « Être rappelé », vous acceptez de transmettre vos informations à AKSAM ASSURANCES, qui accepte de les utiliser conformément à sa
        <a href="/politique-legale" class="underline hover:text-blue-900">politique de confidentialité</a> afin de vous recontacter au sujet de votre demande.
      </p>

      <button type="submit"
              class="w-full bg-amber-400 text-dark font-bold py-3 px-4 rounded-md shadow-sm hover:shadow-md hover:bg-yellow-500 transition-all flex items-center justify-center">
        <i class="fas fa-phone-alt mr-2"></i> Être rappelé
      </button>
    </form>
  </article>
</div>

<script>
  (function () {
    const families = @json($nomenclature);
    const initialCode = @json(old('qualification'));

    const $ = (id) => document.getElementById(id);
    const sel = {
      family: $('qualif-family'),
      activity: $('qualif-activity'),
      speciality: $('qualif-speciality'),
      qualification: $('qualif-qualification'),
    };

    // Index code -> chemin complet, pour la recherche et la restauration après erreur
    const index = [];
    families.forEach((f) => f.activities.forEach((a) => a.specialities.forEach((s) => s.qualifications.forEach((q) => {
      index.push({ f, a, s, q, text: (q.code + ' ' + q.label + ' ' + s.label + ' ' + a.label).toLowerCase() });
    }))));

    const find = (list, code) => list.find((x) => x.code === code);
    const current = () => {
      const f = find(families, sel.family.value);
      const a = f && find(f.activities, sel.activity.value);
      const s = a && find(a.specialities, sel.speciality.value);
      const q = s && find(s.qualifications, sel.qualification.value);
      return { f, a, s, q };
    };

    function fill(select, items, placeholder, selected) {
      select.innerHTML = '';
      select.add(new Option(placeholder, ''));
      (items || []).forEach((item) => select.add(new Option(item.code + ' – ' + item.label, item.code)));
      select.disabled = !items || !items.length;
      // Un seul choix possible : on le sélectionne directement
      if (items && items.length === 1) selected = items[0].code;
      select.value = selected || '';
    }

    function onFamily(a, s, q) {
      const { f } = current();
      fill(sel.activity, f && f.activities, 'Choisissez une activité', a);
      onActivity(s, q);
    }
    function onActivity(s, q) {
      const { a } = current();
      fill(sel.speciality, a && a.specialities, 'Choisissez une spécialité', s);
      onSpeciality(q);
    }
    function onSpeciality(q) {
      const { s } = current();
      fill(sel.qualification, s && s.qualifications, 'Choisissez une qualification', q);
      render();
    }

    function render() {
      const { f, a, s, q } = current();
      $('qualif-empty').classList.toggle('hidden', !!q);
      $('qualif-detail').classList.toggle('hidden', !q);
      $('qualif-form-code').value = q ? q.code : '';
      if (!q) return;

      $('qualif-path').textContent = [f.label, a.label, s.label].join(' › ');
      $('qualif-code').textContent = q.code;
      $('qualif-title').textContent = q.label;
      $('qualif-cta-label').textContent = s.label;

      const level = q.label.match(/technicité\s+([^\s)]+)/i);
      $('qualif-level').classList.toggle('hidden', !level);
      $('qualif-level').textContent = level ? 'Technicité ' + level[1] : '';

      const siblings = $('qualif-siblings');
      siblings.innerHTML = '';
      s.qualifications.forEach((item) => {
        const li = document.createElement('li');
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.textContent = item.code + ' – ' + item.label;
        btn.className = 'text-xs px-3 py-1 rounded-full border transition ' +
          (item.code === q.code ? 'bg-amber-400 border-amber-400 text-dark font-semibold' : 'bg-white border-gray-300 text-gray-700 hover:bg-yellow-100');
        btn.addEventListener('click', () => { sel.qualification.value = item.code; render(); });
        li.appendChild(btn);
        siblings.appendChild(li);
      });
      $('qualif-siblings-box').classList.toggle('hidden', s.qualifications.length < 2);
    }

    function selectByCode(code) {
      const hit = index.find((x) => x.q.code === code);
      if (!hit) return false;
      sel.family.value = hit.f.code;
      onFamily(hit.a.code, hit.s.code, hit.q.code);
      return true;
    }

    sel.family.addEventListener('change', () => onFamily());
    sel.activity.addEventListener('change', () => onActivity());
    sel.speciality.addEventListener('change', () => onSpeciality());
    sel.qualification.addEventListener('change', render);

    $('qualif-cta').addEventListener('click', () => {
      $('qualif-form').classList.remove('hidden');
      $('qualif-nom').focus();
    });

    // Recherche rapide
    const search = $('qualif-search');
    const results = $('qualif-search-results');
    search.addEventListener('input', () => {
      const terms = search.value.trim().toLowerCase().split(/\s+/).filter(Boolean);
      results.innerHTML = '';
      if (!terms.length) { results.classList.add('hidden'); return; }
      const hits = index.filter((x) => terms.every((t) => x.text.includes(t))).slice(0, 30);
      if (!hits.length) {
        results.innerHTML = '<li class="px-3 py-2 text-gray-500">Aucune qualification trouvée</li>';
      }
      hits.forEach((hit) => {
        const li = document.createElement('li');
        li.className = 'px-3 py-2 cursor-pointer hover:bg-yellow-100 border-b border-gray-100';
        li.innerHTML = '<span class="font-semibold text-blue-900"></span> <span></span><br><span class="text-xs text-gray-500"></span>';
        li.children[0].textContent = hit.q.code;
        li.children[1].textContent = hit.q.label;
        li.children[3].textContent = hit.a.label + ' › ' + hit.s.label;
        li.addEventListener('click', () => {
          selectByCode(hit.q.code);
          search.value = '';
          results.classList.add('hidden');
        });
        results.appendChild(li);
      });
      results.classList.remove('hidden');
    });
    document.addEventListener('click', (e) => {
      if (!results.contains(e.target) && e.target !== search) results.classList.add('hidden');
    });

    // Initialisation (et restauration après une erreur de validation)
    fill(sel.activity, null, 'Choisissez une activité');
    fill(sel.speciality, null, 'Choisissez une spécialité');
    fill(sel.qualification, null, 'Choisissez une qualification');
    if (initialCode && selectByCode(initialCode)) {
      $('qualif').scrollIntoView();
    }
  })();
</script>
