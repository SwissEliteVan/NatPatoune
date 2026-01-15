 <!-- Blog -->
    <section id="blog" class="py-16 md:py-24 bg-white" aria-labelledby="blog-heading">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <span class="text-brand-purple font-bold tracking-wider uppercase text-sm">Conseils d'experte</span>
                <h2 id="blog-heading" class="text-3xl md:text-4xl font-title font-bold text-brand-text mt-2 mb-4">Le Guide du Chat Heureux</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Des articles courts, concrets et testés sur le terrain pour mieux comprendre les besoins de votre chat.</p>
                <div class="flex flex-wrap justify-center gap-3 mt-6 text-sm text-brand-text">
                    <span class="inline-flex items-center gap-2 bg-brand-purple/10 text-brand-purple px-4 py-1.5 rounded-full font-semibold"><i class="fas fa-check-circle"></i> Checklists pratiques</span>
                    <span class="inline-flex items-center gap-2 bg-brand-pink/15 text-brand-purple px-4 py-1.5 rounded-full font-semibold"><i class="fas fa-heart"></i> Bien-être quotidien</span>
                    <span class="inline-flex items-center gap-2 bg-brand-purple/10 text-brand-purple px-4 py-1.5 rounded-full font-semibold"><i class="fas fa-calendar-alt"></i> Préparer les vacances</span>
                </div>
            </div>

            <div class="bg-brand-purple/5 border border-brand-purple/10 rounded-3xl p-6 md:p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 mb-10">
                <div>
                    <p class="text-sm uppercase tracking-widest text-brand-purple font-semibold">Astuce rapide</p>
                    <h3 class="text-xl md:text-2xl font-title font-bold text-brand-text mt-2">Planifiez une routine stable avant votre départ.</h3>
                    <p class="text-gray-600 mt-2 max-w-2xl">En installant les visites et la nourriture sur les mêmes horaires dès la semaine précédente, votre chat vivra l’absence plus sereinement.</p>
                </div>
                <a href="#contact" class="inline-flex items-center justify-center gap-2 bg-brand-purple text-white font-bold px-6 py-3 rounded-xl hover:bg-brand-purple-dark transition">Demander un conseil</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <article onclick="openModal('article-1')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                    <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                        <img src="assets/img/garde-chat-domicile-sans-stress-vaud.webp" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat détendu pendant garde à domicile" loading="lazy">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Bien-être</div>
                    </figure>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                            <span class="inline-flex items-center gap-1"><i class="far fa-clock"></i> 4 min</span>
                            <span class="inline-flex items-center gap-1"><i class="far fa-calendar"></i> Mis à jour 2024</span>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Pourquoi la garde à domicile réduit-elle le stress de votre chat&nbsp;?</h3>
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">La garde à domicile s'avère être une solution apaisante pour les chats, qui sont très sensibles aux changements de territoire.</p>
                        <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                    </div>
                </article>
                 <article onclick="openModal('article-2')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                    <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                        <img src="assets/img/cat-sitting-domicile-vacances-suisse.webp" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat relax chez lui pendant vacances" loading="lazy">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Vacances</div>
                    </figure>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                            <span class="inline-flex items-center gap-1"><i class="far fa-clock"></i> 5 min</span>
                            <span class="inline-flex items-center gap-1"><i class="far fa-calendar"></i> Conseils vacances</span>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud</h3>
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal.</p>
                        <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                    </div>
                </article>
                 <article onclick="openModal('article-3')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                    <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                        <img src="assets/img/chaton-cache-couverture.webp" width="1200" height="675" class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-110" alt="Soin médical à domicile pour chat" loading="lazy">
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Soins Spécifiques</div>
                    </figure>
                    <div class="flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                            <span class="inline-flex items-center gap-1"><i class="far fa-clock"></i> 6 min</span>
                            <span class="inline-flex items-center gap-1"><i class="far fa-calendar"></i> Chats sensibles</span>
                        </div>
                        <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable</h3>
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">Les chats âgés ont des habitudes profondément ancrées. Un changement de routine ou d'environnement peut accentuer des pathologies existantes.</p>
                        <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                    </div>
                </article>
            </div>
        </div>
    </section>
