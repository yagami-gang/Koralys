@extends('layouts.app')

@section('title', 'À propos de Koralys - Votre partenaire en construction')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 bg-gradient-to-r from-secondary to-primary overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5" 
                 alt="Background" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 to-primary/90"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white mb-6" id="hero-title" style="opacity: 0;">
                À propos de KORALYS
            </h1>
            <div class="w-24 h-1 bg-accent mx-auto mb-8 transform -translate-x-full" id="hero-line"></div>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" id="hero-subtitle" style="opacity: 0;">
                Découvrez notre histoire, notre mission et notre engagement envers l'excellence
            </p>
        </div>
    </section>

    <!-- Notre Histoire -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-4xl font-bold text-secondary mb-6">Notre Histoire</h2>
                    <div class="w-24 h-1 bg-accent mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6">
                        Fondée en 2008, KORALYS est née de la passion de deux ingénieurs en bâtiment déterminés à créer une entreprise de construction qui placerait la qualité et la satisfaction client au cœur de chaque projet.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Au fil des années, notre entreprise s'est développée, passant d'une petite équipe spécialisée dans les projets résidentiels à une entreprise complète offrant une gamme étendue de services de construction pour des projets résidentiels, commerciaux et industriels.
                    </p>
                    <p class="text-lg text-gray-700">
                        Aujourd'hui, avec plus de 15 ans d'expérience et des centaines de projets réussis, KORALYS est reconnue comme un leader dans le secteur de la construction en France, combinant expertise technique, innovation et engagement envers l'excellence.
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd" 
                         alt="Histoire de Koralys" 
                         class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-accent rounded-2xl flex items-center justify-center text-white text-center p-4 shadow-xl">
                        <div>
                            <span class="block text-3xl font-bold">15+</span>
                            <span class="text-sm">Années d'excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Mission et Valeurs -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary mb-4">Notre Mission & Nos Valeurs</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Guidés par des principes solides, nous nous efforçons d'offrir des services de construction exceptionnels qui dépassent les attentes.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-primary" data-aos="fade-up">
                    <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Notre Mission</h3>
                    <p class="text-gray-600">
                        Fournir des services de construction de la plus haute qualité, en respectant les délais et les budgets, tout en créant des espaces qui améliorent la vie de nos clients et contribuent positivement à l'environnement bâti.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-accent" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-3xl text-accent"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Notre Vision</h3>
                    <p class="text-gray-600">
                        Être reconnu comme le leader de l'industrie de la construction, en établissant de nouvelles normes d'excellence, d'innovation et de durabilité dans chaque projet que nous entreprenons.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-3xl text-secondary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Nos Valeurs</h3>
                    <p class="text-gray-600">
                        Intégrité, excellence, innovation, durabilité et orientation client sont les valeurs fondamentales qui guident chaque aspect de notre travail et de nos relations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Équipe -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary mb-4">Notre Équipe</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des professionnels passionnés et expérimentés dédiés à l'excellence dans chaque projet.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Membre d'équipe 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a" 
                             alt="Directeur Général" 
                             class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                            <div class="p-6 w-full">
                                <div class="flex space-x-3 justify-center">
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-linkedin-in text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fas fa-envelope text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-secondary">Thomas Dubois</h3>
                        <p class="text-accent">Directeur Général</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2" 
                             alt="Directrice des Opérations" 
                             class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                            <div class="p-6 w-full">
                                <div class="flex space-x-3 justify-center">
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-linkedin-in text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fas fa-envelope text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-secondary">Sophie Martin</h3>
                        <p class="text-accent">Directrice des Opérations</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" 
                             alt="Architecte Principal" 
                             class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                            <div class="p-6 w-full">
                                <div class="flex space-x-3 justify-center">
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-linkedin-in text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                        <i class="fas fa-envelope text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-secondary">Marc Leroy</h3>
                        <p class="text-accent">Architecte Principal</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956" 
                             alt="Responsable de Projet" 
                             class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                            <div class="p-6 w-full">
                                <div class="flex space-x-3 justify-center">