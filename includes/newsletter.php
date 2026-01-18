<section id="newsletter" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto bg-brand-text rounded-[2rem] p-8 md:p-16 relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-purple opacity-10 rounded-full blur-2xl -translate-x-1/4 translate-y-1/4"></div>

            <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <span class="inline-block py-1 px-3 rounded-full bg-brand-purple bg-opacity-30 text-brand-purple-light text-xs font-bold uppercase tracking-wider mb-4 border border-brand-purple border-opacity-30">Newsletter</span>
                    <h2 class="text-3xl md:text-4xl font-title font-bold mb-6 leading-tight">Des conseils félins <br>directement dans votre poche</h2>
                    <p class="text-gray-300 mb-8 text-lg">Rejoignez la communauté Nat'Patoune ! Recevez mes astuces bien-être, des idées de jeux DIY et soyez prévenu de mes disponibilités pour les vacances.</p>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand-purple mr-2"></i> 1 email par mois maximum</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand-purple mr-2"></i> Pas de spam, promis !</li>
                    </ul>
                </div>

                <div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg">
                    <form id="newsletterForm" class="space-y-5" action="#" method="post">
                        <div>
                            <label for="newsletterEmail" class="sr-only">Votre adresse email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="newsletterEmail" name="email" placeholder="votre@email.com" required 
                                       class="w-full pl-11 pr-4 py-4 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 outline-none transition text-gray-800 placeholder-gray-400">
                            </div>
                        </div>

                        <div class="hidden" aria-hidden="true">
                            <input type="text" name="bzz_honey" tabindex="-1" autocomplete="off">
                        </div>
                        
                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="newsletterConsent" name="consent" required 
                                   class="mt-1.5 w-4 h-4 text-brand-purple rounded border-gray-300 focus:ring-brand-purple">
                            <label for="newsletterConsent" class="text-xs text-gray-500 leading-relaxed">
                                J'accepte de recevoir l'infolettre. Je peux me désinscrire à tout moment. 
                                <a href="#" onclick="alert('Lien vers votre page Politique de Confidentialité'); return false;" class="underline hover:text-brand-purple transition">Politique de confidentialité</a>.
                            </label>
                        </div>
                        
                        <button type="submit" class="w-full bg-brand-purple text-white font-bold py-4 rounded-xl hover:bg-brand-purple-dark transition shadow-lg shadow-brand-purple/30 flex items-center justify-center gap-2">
                            <span>S'inscrire maintenant</span>
                            <i class="fas fa-paper-plane text-sm"></i>
                        </button>
                    </form>

                    <div id="newsletterSuccess" class="hidden text-center py-10">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce">
                            <i class="fas fa-check text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Bienvenue !</h3>
                        <p class="text-gray-600 text-sm">Votre inscription est confirmée.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
