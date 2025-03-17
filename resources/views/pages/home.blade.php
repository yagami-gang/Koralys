@extends('layouts.app')

@section('title', 'Accueil')
@push('styles')
<style>
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .text-shadow-sm {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    .gradient-overlay {
        background: linear-gradient(135deg, #4f46e5 0%, #9333ea 100%);
        opacity: 0.9;
    }
    .section-pattern {
        background-color: #f8fafc;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232563eb' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .clip-path-diagonal {
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    }
    .clip-path-diagonal-reverse {
        clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%);
    }

    /* Section Chiffres Clés */
    .clip-path-diagonal {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    /* Hover effects for key figures */
    .key-figure {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .key-figure:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Button styles */
    .button-primary {
        background: linear-gradient(135deg, #4f46e5, #9333ea);
        color: white;
        transition: all 0.3s ease;
        border-radius: 8px;
        padding: 12px 24px;
        font-weight: bold;
    }

    .button-primary:hover {
        background: linear-gradient(135deg, #9333ea, #4f46e5);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Testimonials section */
    .testimonial-card {
        transition: transform 0.3s;
    }

    .testimonial-card:hover {
        transform: scale(1.02);
    }

    /* Map section */
    .map-iframe {
        border: 4px solid #4f46e5;
        border-radius: 8px;
    }
</style>
@endpush

@section('content')
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

    <!-- Section Chiffres Clés avec effet parallax -->
    <section class="relative py-16 bg-primary clip-path-diagonal text-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-70">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white mb-4 text-shadow-lg">Nos Chiffres Clés</h2>
                <div class="w-24 h-1 bg-accent mx-auto shadow-lg"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center p-8 rounded-xl bg-white/10 backdrop-blur-sm shadow-lg border border-white/10 hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-5xl font-bold text-accent mb-2 counter drop-shadow-lg" data-target="150">0</div>
                    <p class="text-white/90 font-medium drop-shadow">Projets Réalisés</p>
                </div>
                <div class="text-center p-8 rounded-xl bg-white/10 backdrop-blur-sm shadow-lg border border-white/10 hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl font-bold text-accent mb-2 counter drop-shadow-lg" data-target="15">0</div>
                    <p class="text-white/90 font-medium drop-shadow">Années d'Expérience</p>
                </div>
                <div class="text-center p-8 rounded-xl bg-white/10 backdrop-blur-sm shadow-lg border border-white/10 hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl font-bold text-accent mb-2 counter drop-shadow-lg" data-target="50">0</div>
                    <p class="text-white/90 font-medium drop-shadow">Professionnels</p>
                </div>
                <div class="text-center p-8 rounded-xl bg-white/10 backdrop-blur-sm shadow-lg border border-white/10 hover:bg-white/20 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-5xl font-bold text-accent mb-2 counter drop-shadow-lg" data-target="98">0</div>
                    <p class="text-white/90 font-medium drop-shadow">Clients Satisfaits</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À Propos -->
    <section class="py-24 section-pattern" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd" alt="Notre équipe" 
                         class="rounded-2xl shadow-2xl w-full h-[600px] object-cover">
                    <div class="absolute -bottom-8 -right-8 bg-accent p-8 rounded-2xl shadow-xl text-white">
                        <div class="text-4xl font-bold">15+</div>
                        <div class="text-white/90">Années d'expertise</div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h2 class="text-4xl font-bold text-secondary mb-6">Notre Engagement pour l'Excellence</h2>
                    <div class="w-24 h-1 bg-accent mb-8"></div>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Depuis plus de 15 ans, KORALYS SARL s'engage à transformer vos visions en réalités architecturales exceptionnelles.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                    <i class="fas fa-check text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary mb-2">Qualité Premium</h3>
                                <p class="text-gray-600">Des matériaux et finitions haut de gamme</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary mb-2">Délais Respectés</h3>
                                <p class="text-gray-600">Livraison dans les temps convenus</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary mb-2">Équipe Experte</h3>
                                <p class="text-gray-600">Des professionnels qualifiés et passionnés</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 bg-white p-6 rounded-xl shadow-lg card-hover">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                    <i class="fas fa-leaf text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary mb-2">Éco-responsable</h3>
                                <p class="text-gray-600">Engagement pour un avenir durable</p>
                            </div>
                        </div>
                    </div>
                    <a href="#services" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-accent to-primary text-white rounded-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 font-semibold text-lg">
                        Découvrir nos services
                        <svg class="w-6 h-6 ml-3 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services Détaillés -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-100 clip-path-diagonal-reverse" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary mb-4">Nos Services</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Une gamme complète de services pour répondre à tous vos besoins en construction et rénovation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border-t-4 border-primary" 
                     data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 bg-primary/10 rounded-xl flex items-center justify-center mb-6 
                                group-hover:bg-primary group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-building text-3xl text-primary group-hover:text-gray-200 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Construction Neuve</h3>
                    <p class="text-gray-700 mb-6">Des projets résidentiels et commerciaux sur mesure, conçus pour répondre à vos besoins spécifiques avec une attention particulière aux détails.</p>
                    <a href="#contact" class="inline-flex items-center text-primary font-semibold group-hover:text-accent">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" 
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
                <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border-t-4 border-accent" 
                     data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-accent/10 rounded-xl flex items-center justify-center mb-6 
                                group-hover:bg-accent group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-hammer text-3xl text-accent group-hover:text-gray-200 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Rénovation</h3>
                    <p class="text-gray-700 mb-6">Transformez vos espaces existants avec notre expertise en rénovation, alliant modernité et respect du caractère original de votre bâtiment.</p>
                    <a href="#contact" class="inline-flex items-center text-accent font-semibold group-hover:text-primary">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" 
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                
                <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 bg-white border-t-4 border-secondary" 
                     data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center mb-6 
                                group-hover:bg-secondary group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-drafting-compass text-3xl text-secondary group-hover:text-gray-200 transition-colors duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Design Architectural</h3>
                    <p class="text-gray-700 mb-6">Créez des espaces qui reflètent votre vision avec notre équipe de designers architecturaux, combinant esthétique et fonctionnalité.</p>
                    <a href="#contact" class="inline-flex items-center text-secondary font-semibold group-hover:text-accent">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" 
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets avec Filtres -->
    <section class="py-24 bg-gradient-to-b from-gray-900 to-secondary text-white" id="projects">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Nos Réalisations</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-white/80 max-w-3xl mx-auto">
                    Découvrez nos projets les plus remarquables, témoignant de notre savoir-faire et de notre engagement envers l'excellence.
                </p>
            </div>

            <div class="flex justify-center mb-12 space-x-4 flex-wrap">
                <button class="px-6 py-3 rounded-full bg-accent text-white hover:bg-accent/90 transition-colors mb-2" data-filter="all">
                    Tous les projets
                </button>
                <button class="px-6 py-3 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors mb-2" data-filter="residential">
                    Résidentiel
                </button>
                <button class="px-6 py-3 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors mb-2" data-filter="commercial">
                    Commercial
                </button>
                <button class="px-6 py-3 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors mb-2" data-filter="industrial">
                    Industriel
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Projet 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-category="commercial">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" 
                         alt="Centre Commercial Modern" 
                         class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Centre Commercial Modern</h3>
                            <p class="text-white/90">Construction neuve - 2023</p>
                            <a href="#" class="mt-4 inline-flex items-center text-accent font-medium">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100" data-category="residential">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" 
                         alt="Résidence de Luxe" 
                         class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Résidence de Luxe</h3>
                            <p class="text-white/90">Construction neuve - 2022</p>
                            <a href="#" class="mt-4 inline-flex items-center text-accent font-medium">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200" data-category="industrial">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12" 
                         alt="Complexe Industriel" 
                         class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/90 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Complexe Industriel</h3>
                            <p class="text-white/90">Construction neuve - 2021</p>
                            <a href="#" class="mt-4 inline-flex items-center text-accent font-medium">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="/projets" class="inline-flex items-center px-8 py-4 bg-accent text-white rounded-lg shadow-lg hover:bg-accent/90 transition-all duration-300">
                    Voir tous nos projets
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

        <!-- Section Témoignages avec Slider -->
        <section class="py-24 bg-gradient-to-b from-white to-gray-50 overflow-hidden" id="testimonials">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-secondary mb-4">Ce que disent nos clients</h2>
                    <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        La satisfaction de nos clients est notre priorité absolue. Découvrez leurs expériences avec KORALYS.
                    </p>
                </div>
    
                <div class="relative testimonials-slider">
                    <div class="swiper-wrapper">
                        <!-- Témoignage 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4 border-2 border-accent">
                                        <img src="https://i.pravatar.cc/150?img=1" alt="Client" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Jean Dupont</h4>
                                        <p class="text-gray-600">Directeur Général - Enterprise XYZ</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="fas fa-quote-right text-4xl text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex text-accent mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-700 italic">
                                    "Une équipe professionnelle qui a su mener notre projet avec excellence. 
                                    Les délais ont été respectés et le résultat dépasse nos attentes. Je recommande 
                                    vivement KORALYS pour tout projet de construction d'envergure."
                                </p>
                            </div>
                        </div>
                        
                        <!-- Témoignage 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4 border-2 border-accent">
                                        <img src="https://i.pravatar.cc/150?img=2" alt="Client" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Marie Laurent</h4>
                                        <p class="text-gray-600">Propriétaire - Résidence Privée</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="fas fa-quote-right text-4xl text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex text-accent mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <p class="text-gray-700 italic">
                                    "La rénovation de notre maison familiale a été transformée en une expérience 
                                    agréable grâce à l'équipe de KORALYS. Leur attention aux détails et leur 
                                    capacité à comprendre nos besoins ont fait toute la différence."
                                </p>
                            </div>
                        </div>
                        
                        <!-- Témoignage 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 rounded-full overflow-hidden mr-4 border-2 border-accent">
                                        <img src="https://i.pravatar.cc/150?img=3" alt="Client" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Philippe Martin</h4>
                                        <p class="text-gray-600">Architecte - Studio Design</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="fas fa-quote-right text-4xl text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex text-accent mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="text-gray-700 italic">
                                    "En tant qu'architecte, je suis particulièrement exigeant sur la qualité d'exécution. 
                                    KORALYS a dépassé mes attentes avec leur expertise technique et leur capacité 
                                    à concrétiser fidèlement les concepts architecturaux les plus complexes."
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation et pagination -->
                    <div class="swiper-pagination mt-10"></div>
                    <div class="hidden md:block">
                        <div class="swiper-button-prev absolute top-1/2 -left-12 transform -translate-y-1/2 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-colors z-10">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-button-next absolute top-1/2 -right-12 transform -translate-y-1/2 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-secondary hover:bg-primary hover:text-white transition-colors z-10">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Section Contact avec Carte -->
        <section class="relative py-24 bg-gradient-to-b from-gray-100 to-blue-50 text-gray-800" id="contact">
            <div class="absolute inset-0 z-0 opacity-10">
                <img src="https://images.unsplash.com/photo-1590644365607-5c9be5eeefae" 
                     alt="Background" 
                     class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-gray-100/90 to-blue-50/90"></div>
            
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-4xl font-bold mb-6 text-blue-800">Contactez-nous</h2>
                        <div class="w-24 h-1 bg-blue-500 mb-8"></div>
                        <p class="text-xl mb-12 text-blue-700">
                            Discutons de votre projet et voyons comment nous pouvons vous aider à le concrétiser.
                        </p>
                        
                        <div class="space-y-8 mb-12">
                            <div class="flex items-start gap-6">
                                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-blue-800">Notre adresse</h3>
                                    <p class="text-blue-600">123 Rue de la Construction, 75000 Paris</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-6">
                                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-blue-800">Téléphone</h3>
                                    <p class="text-blue-600">+33 1 23 45 67 89</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-6">
                                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-blue-800">Email</h3>
                                    <p class="text-blue-600">contact@koralys.fr</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors duration-300">
                                <i class="fab fa-facebook-f text-blue-600"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors duration-300">
                                <i class="fab fa-linkedin-in text-blue-600"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition-colors duration-300">
                                <i class="fab fa-instagram text-blue-600"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <div class="bg-white p-8 rounded-2xl shadow-2xl border border-blue-100">
                            <h3 class="text-2xl font-bold text-blue-800 mb-6">Envoyez-nous un message</h3>
                            <form action="#" method="POST" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-blue-700 mb-1">Nom complet</label>
                                        <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg bg-blue-50 border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-blue-700 mb-1">Email</label>
                                        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-blue-50 border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-blue-700 mb-1">Sujet</label>
                                    <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg bg-blue-50 border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300">
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-blue-700 mb-1">Message</label>
                                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg bg-blue-50 border border-blue-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-blue-600 text-white py-4 px-6 rounded-lg hover:bg-blue-700 transition-all duration-300 font-semibold text-lg flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        Envoyer le message
                                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Section Carte -->
        <section class="h-[500px] relative bg-gray-200">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.142!2d2.3488!3d48.8534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDUxJzEyLjIiTiAywrAyMCc1NS43IkU!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade" 
                class="absolute inset-0 z-10"
            ></iframe>
            <div class="absolute top-8 left-8 bg-white p-6 rounded-xl shadow-xl max-w-sm z-20">
                <h3 class="text-xl font-bold text-secondary mb-2">KORALYS SARL</h3>
                <p class="text-gray-600 mb-4">Votre partenaire de confiance pour tous vos projets de construction</p>
                <a href="#contact" class="inline-flex items-center text-primary font-semibold hover:text-accent">
                    Contactez-nous
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </section>
    @endsection
        
        @push('scripts')
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Initialisation des animations AOS
                    AOS.init({
                        duration: 800,
                        easing: 'ease-in-out',
                        once: true,
                        mirror: false
                    });
            
                    // Animation du hero
                    setTimeout(() => {
                        document.getElementById('hero-title').classList.add('animate-fadeIn');
                        document.getElementById('hero-title').style.opacity = '1';
                    }, 300);
            
                    setTimeout(() => {
                        document.getElementById('hero-line').classList.add('animate-slideRight');
                        document.getElementById('hero-line').style.transform = 'translateX(0)';
                    }, 600);
            
                    setTimeout(() => {
                        document.getElementById('hero-subtitle').classList.add('animate-fadeIn');
                        document.getElementById('hero-subtitle').style.opacity = '1';
                    }, 900);
            
                    setTimeout(() => {
                        document.getElementById('hero-cta').classList.add('animate-fadeIn');
                        document.getElementById('hero-cta').style.opacity = '1';
                    }, 1200);
            
                    // Slider Hero
                    let currentSlide = 0;
                    const slides = document.querySelectorAll('#hero-slider .slide');
                    const dots = document.querySelectorAll('.slider-dot');
                    
                    function showSlide(index) {
                        slides.forEach(slide => slide.style.opacity = '0');
                        dots.forEach(dot => dot.classList.remove('active', 'bg-white', 'border-accent'));
                        dots.forEach(dot => dot.classList.add('bg-white/30', 'border-white/50'));
                        
                        slides[index].style.opacity = '1';
                        dots[index].classList.add('active', 'bg-white', 'border-accent');
                        dots[index].classList.remove('bg-white/30', 'border-white/50');
                        
                        currentSlide = index;
                    }
                    
                    function nextSlide() {
                        currentSlide = (currentSlide + 1) % slides.length;
                        showSlide(currentSlide);
                    }
                    
                    // Initialiser le premier slide
                    showSlide(0);
                    
                    // Changer de slide toutes les 5 secondes
                    setInterval(nextSlide, 5000);
                    
                    // Ajouter des événements de clic aux points
                    dots.forEach((dot, index) => {
                        dot.addEventListener('click', () => showSlide(index));
                    });
            
                    // Slider des services
                    let serviceSlides = document.querySelectorAll('.services-slide');
                    let serviceCurrentSlide = 0;
                    
                    function showServiceSlide(index) {
                        serviceSlides.forEach(slide => {
                            slide.style.display = 'none';
                        });
                        serviceSlides[index].style.display = 'block';
                    }
                    
                    function nextServiceSlide() {
                        serviceCurrentSlide = (serviceCurrentSlide + 1) % serviceSlides.length;
                        showServiceSlide(serviceCurrentSlide);
                    }
                    
                    // Initialiser le premier slide de service
                    showServiceSlide(0);
                    
                    // Changer de slide toutes les 4 secondes
                    setInterval(nextServiceSlide, 4000);
            
                    // Animation au scroll pour les éléments avec data-aos
                    window.addEventListener('scroll', () => {
                        const scrolled = window.scrollY;
                        
                        // Parallax effect pour les sections avec images de fond
                        document.querySelectorAll('.parallax-bg').forEach(bg => {
                            const speed = bg.getAttribute('data-speed') || 0.5;
                            bg.style.transform = `translateY(${scrolled * speed}px)`;
                        });
                    });
            
                    // Animation des compteurs
                    const counters = document.querySelectorAll('.counter');
                    const speed = 200; // Plus la valeur est basse, plus c'est rapide
                    
                    const observerOptions = {
                        root: null,
                        rootMargin: '0px',
                        threshold: 0.1
                    };
                    
                    const observer = new IntersectionObserver(function(entries, observer) {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const counter = entry.target;
                                const target = parseInt(counter.getAttribute('data-target'));
                                let count = 0;
                                const updateCount = () => {
                                    const increment = target / speed;
                                    if (count < target) {
                                        count += increment;
                                        counter.innerText = Math.ceil(count);
                                        setTimeout(updateCount, 1);
                                    } else {
                                        counter.innerText = target;
                                    }
                                };
                                updateCount();
                                observer.unobserve(counter);
                            }
                        });
                    }, observerOptions);
                    
                    counters.forEach(counter => {
                        observer.observe(counter);
                    });
            
                    // Initialisation du slider de témoignages
                    const testimonialsSwiper = new Swiper('.testimonials-slider', {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        autoplay: {
                            delay: 5000,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        }
                    });
            
                    // Filtres de projets
                    const filterButtons = document.querySelectorAll('[data-filter]');
                    const projectItems = document.querySelectorAll('[data-category]');
                    
                    filterButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            // Réinitialiser les styles des boutons
                            filterButtons.forEach(btn => {
                                btn.classList.remove('bg-accent');
                                btn.classList.add('bg-white/10');
                            });
                            
                            // Appliquer le style actif au bouton cliqué
                            button.classList.remove('bg-white/10');
                            button.classList.add('bg-accent');
                            
                            const filter = button.getAttribute('data-filter');
                            
                            projectItems.forEach(item => {
                                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                                    item.style.display = 'block';
                                } else {
                                    item.style.display = 'none';
                                }
                            });
                        });
                    });
            
                    // Smooth scroll pour les liens d'ancrage
                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function (e) {
                            e.preventDefault();
                            
                            const targetId = this.getAttribute('href');
                            const targetElement = document.querySelector(targetId);
                            
                            if (targetElement) {
                                window.scrollTo({
                                    top: targetElement.offsetTop - 100,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    });
            
                    // Animation au scroll pour les éléments avec data-aos
                    window.addEventListener('scroll', () => {
                        const scrolled = window.scrollY;
                        
                        // Parallax effect pour les sections avec images de fond
                        document.querySelectorAll('.parallax-bg').forEach(bg => {
                            const speed = bg.getAttribute('data-speed') || 0.5;
                            bg.style.transform = `translateY(${scrolled * speed}px)`;
                        });
                    });
                });
            </script>
        @endpush