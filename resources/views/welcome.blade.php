<!-- Hero Section avec Slider Moderne -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Slider principal avec overlay amélioré -->
    <div class="absolute inset-0 z-0" id="hero-slider">
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/85 to-secondary/70"></div>
            <img src="https://images.unsplash.com/photo-1590381105924-c72589b9ef3f" alt="Construction Modern" class="w-full h-full object-cover scale-110 filter brightness-75">
        </div>
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 to-transparent"></div>
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd" alt="Architecture" class="w-full h-full object-cover">
        </div>
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 to-transparent"></div>
            <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece" alt="Innovation" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Contenu principal avec meilleur contraste -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Texte et CTA avec fond semi-transparent -->
            <div class="text-left p-10 rounded-2xl bg-secondary/70 backdrop-blur-md border border-white/10 shadow-2xl">
                <h1 class="text-5xl sm:text-7xl font-bold text-white mb-6 opacity-0 drop-shadow-lg" id="hero-title">
                    KORALYS <span class="text-accent font-extrabold">SARL</span>
                </h1>
                <div class="w-24 h-2 bg-accent mb-8 transform -translate-x-full shadow-lg" id="hero-line"></div>
                <p class="text-xl sm:text-2xl text-white mb-12 opacity-0 font-light max-w-xl text-shadow" id="hero-subtitle">
                    Excellence et innovation dans la construction, façonnant l'avenir de vos projets
                </p>
                <div class="flex flex-wrap gap-4 opacity-0" id="hero-cta">
                    <a href="#projects" class="group bg-accent text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-accent/90 transition-all duration-300 flex items-center gap-2 shadow-lg">
                        Nos Réalisations
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="#contact" class="group bg-white text-secondary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                        Contactez-nous
                    </a>
                </div>
            </div>

            <!-- Slider des services avec meilleur contraste -->
            <div class="hidden lg:block">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl" id="services-slider">
                    <div class="services-slide bg-secondary/80 backdrop-blur-md p-8 rounded-2xl border border-white/20 transform transition-all duration-500 hover:scale-105">
                        <div class="text-white">
                            <div class="w-16 h-16 bg-accent/20 rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-building text-4xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 text-shadow-sm">Construction Durable</h3>
                            <p class="text-white/90 leading-relaxed text-lg">Des projets innovants respectueux de l'environnement</p>
                        </div>
                    </div>
                    <div class="services-slide bg-secondary/80 backdrop-blur-md p-8 rounded-2xl border border-white/20 transform transition-all duration-500 hover:scale-105">
                        <div class="text-white">
                            <div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-drafting-compass text-4xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 text-shadow-sm">Design Architectural</h3>
                            <p class="text-white/90 leading-relaxed text-lg">Créativité et fonctionnalité pour vos espaces</p>
                        </div>
                    </div>
                    <div class="services-slide bg-secondary/80 backdrop-blur-md p-8 rounded-2xl border border-white/20 transform transition-all duration-500 hover:scale-105">
                        <div class="text-white">
                            <div class="w-16 h-16 bg-secondary/20 rounded-full flex items-center justify-center mb-6">
                                <i class="fas fa-hard-hat text-4xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 text-shadow-sm">Expertise BTP</h3>
                            <p class="text-white/90 leading-relaxed text-lg">Plus de 15 ans d'excellence dans la construction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicateurs de slide améliorés -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-4 z-20">
        <button class="w-4 h-4 rounded-full bg-white/30 hover:bg-white transition-colors duration-300 slider-dot active border-2 border-accent"></button>
        <button class="w-4 h-4 rounded-full bg-white/30 hover:bg-white transition-colors duration-300 slider-dot border-2 border-white/50"></button>
        <button class="w-4 h-4 rounded-full bg-white/30 hover:bg-white transition-colors duration-300 slider-dot border-2 border-white/50"></button>
    </div>
</section>
