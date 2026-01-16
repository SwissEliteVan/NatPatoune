<section id="newsletter" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-brand-cream rounded-3xl p-8 md:p-12 shadow-soft">
            <div class="mb-8">
                <h2 class="text-3xl font-title font-bold text-brand-text mb-4">Newsletter</h2>
                <p class="text-gray-600">Recevez des conseils pratiques pour le bien-être de votre chat et des rappels utiles avant vos départs.</p>
                <p class="text-gray-600">1 à 2 e-mails par mois, avec désinscription en un clic.</p>
            </div>

            <form id="newsletterForm" class="space-y-4" action="#" method="post">
                <div>
                    <label for="newsletterPrenom" class="block text-sm font-bold text-gray-700 mb-2">Prénom (optionnel)</label>
                    <input type="text" id="newsletterPrenom" name="prenom" autocomplete="given-name" class="w-full p-3 bg-white rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none">
                </div>
                <div>
                    <label for="newsletterEmail" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" id="newsletterEmail" name="email" autocomplete="email" required class="w-full p-3 bg-white rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none">
                </div>

                <div class="hidden" aria-hidden="true">
                    <label for="newsletterCompany" class="block text-sm font-bold text-gray-700 mb-2">Ne pas remplir</label>
                    <input type="text" id="newsletterCompany" name="company" tabindex="-1" autocomplete="off" class="w-full p-3 bg-white rounded-xl border border-gray-200">
                </div>

                <label class="flex items-start gap-3 text-sm text-gray-600">
                    <input type="checkbox" id="newsletterConsent" name="consent" required class="mt-1">
                    <span>J'accepte de recevoir des e-mails de Nat'Patoune et je peux me désinscrire à tout moment.</span>
                </label>

                <button type="submit" class="w-full bg-brand-purple text-white font-bold py-3 rounded-xl hover:bg-brand-purple-dark transition">Je m'inscris</button>

                <p class="text-xs text-gray-500">
                    Double opt-in recommandé si votre plateforme le permet.
                    <button type="button" onclick="openModal('modal-privacy')" class="underline hover:text-brand-purple bg-transparent border-none p-0 cursor-pointer inline">Politique de confidentialité</button>
                </p>
            </form>

            <div id="newsletterSuccess" class="hidden text-center py-6" aria-live="polite">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-2xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-title font-bold text-brand-text mb-2">Merci pour votre inscription !</h3>
                <p class="text-gray-600 text-sm">Vous recevrez un e-mail de confirmation. Pensez à vérifier vos spams si besoin.</p>
            </div>
        </div>
    </div>
</section>
