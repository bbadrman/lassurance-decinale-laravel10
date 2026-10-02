/* ==========================================================================
   FAQ ACCORDION & PAGINATION — JavaScript partagé
   Extracted from layout/form.blade.php
   Applied to all pages containing a FAQ section:
   - form.blade.php
   - reprise.blade.php
   - entrepreneur.blade.php
   - electricien.blade.php
   - maçon.blade.php
   - plombier.blade.php
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function () {

    var faqContainer = document.getElementById('faq-container');
    var pagination = document.getElementById('faq-pagination');

    if (!faqContainer) {
        return;
    }

    /*
     * Toutes les FAQ
     */
    var faqItems = Array.from(
        faqContainer.querySelectorAll('.faq-item')
    );

    /*
     * 5 questions par page
     */
    var itemsPerPage = 5;

    /*
     * Nombre total de pages
     */
    var totalPages = Math.ceil(
        faqItems.length / itemsPerPage
    );

    /*
     * Page actuelle
     */
    var currentPage = 1;



    /* ==========================================================
       ACCORDION
       ========================================================== */

    faqItems.forEach(function (faq) {

        var question = faq.querySelector('.faq-question');

        if (!question) {
            return;
        }

        question.addEventListener('click', function () {

            /*
             * Vérifier si cette FAQ est déjà ouverte
             */
            var isOpen = faq.classList.contains('active');

            /*
             * Fermer toutes les FAQ
             */
            faqItems.forEach(function (item) {
                item.classList.remove('active');
            });

            /*
             * Si elle était fermée, on l'ouvre
             */
            if (!isOpen) {
                faq.classList.add('active');
            }

        });

    });



    /* ==========================================================
       AFFICHER UNE PAGE
       ========================================================== */

    function showPage(page) {

        currentPage = page;

        /*
         * Fermer toutes les FAQ quand on change de page
         */
        faqItems.forEach(function (faq) {
            faq.classList.remove('active');
            faq.style.display = 'none';
        });

        /*
         * Calcul
         */
        var start = (page - 1) * itemsPerPage;
        var end = start + itemsPerPage;

        /*
         * Afficher les FAQ de cette page
         */
        faqItems.slice(start, end).forEach(function (faq) {
            faq.style.display = '';
        });

        /*
         * Mettre à jour pagination
         */
        renderPagination();

    }



    /* ==========================================================
       PAGINATION
       ========================================================== */

    function renderPagination() {

        if (!pagination) {
            return;
        }

        /*
         * Nettoyer
         */
        pagination.innerHTML = '';

        /* ======================================================
           PREVIOUS
           ====================================================== */

        var previous = document.createElement('button');
        previous.type = 'button';
        previous.innerHTML = '<i class="fas fa-chevron-left"></i>';
        previous.setAttribute('aria-label', 'Page précédente');

        previous.className = [
            'w-10 h-10 rounded-lg border flex items-center',
            'justify-center transition-all duration-200',
            currentPage === 1
                ? 'border-gray-200 text-gray-300 cursor-not-allowed'
                : 'border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
        ].join(' ');

        previous.disabled = currentPage === 1;

        previous.addEventListener('click', function () {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        });

        pagination.appendChild(previous);

        /* ======================================================
           NUMBERS
           ====================================================== */

        for (var page = 1; page <= totalPages; page++) {

            var button = document.createElement('button');
            button.type = 'button';
            button.textContent = page;
            button.setAttribute('aria-label', 'Page ' + page);

            button.className = [
                'w-10 h-10 rounded-lg font-semibold',
                'transition-all duration-200',
                page === currentPage
                    ? 'bg-yellow-400 text-white shadow-md cursor-default'
                    : 'bg-white border border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
            ].join(' ');

            button.addEventListener('click', function () {
                if (page !== currentPage) {
                    showPage(page);
                }
            });

            pagination.appendChild(button);
        }

        /* ======================================================
           NEXT
           ====================================================== */

        var next = document.createElement('button');
        next.type = 'button';
        next.innerHTML = '<i class="fas fa-chevron-right"></i>';
        next.setAttribute('aria-label', 'Page suivante');

        next.className = [
            'w-10 h-10 rounded-lg border flex items-center',
            'justify-center transition-all duration-200',
            currentPage === totalPages
                ? 'border-gray-200 text-gray-300 cursor-not-allowed'
                : 'border-gray-300 text-gray-700 hover:bg-yellow-400 hover:text-white hover:border-yellow-400 cursor-pointer'
        ].join(' ');

        next.disabled = currentPage === totalPages;

        next.addEventListener('click', function () {
            if (currentPage < totalPages) {
                showPage(currentPage + 1);
            }
        });

        pagination.appendChild(next);
    }

    /* ==========================================================
       INITIALISATION
       ========================================================== */

    if (faqItems.length > 0) {
        showPage(1);
    }

});
