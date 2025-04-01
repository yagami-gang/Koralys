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
    <section class="relative flex items-center min-h-screen overflow-hidden">
        <!-- Slider principal avec overlay amélioré -->
        <div class="absolute inset-0 z-0" id="hero-slider">
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 via-secondary/85 to-secondary/70"></div>
                <img src="{{asset('images/photo-1590381105924-c72589b9ef3f.jpeg') }}" alt="Construction Modern" class="object-cover w-full h-full scale-110 filter brightness-75">
            </div>
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 to-transparent"></div>
                <img src="{{asset('images/photo-1504307651254-35680f356dfd.jpeg') }}" alt="Architecture" class="object-cover w-full h-full">
            </div>
            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/90 to-transparent"></div>
                <img src="{{ asset('images/photo-1581094288338-2314dddb7ece.jpeg') }}" alt="Innovation" class="object-cover w-full h-full">
            </div>
        </div>

        <!-- Contenu principal avec meilleur contraste -->
        <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Texte et CTA avec fond semi-transparent -->
                <div class="p-10 text-left border shadow-2xl rounded-2xl bg-secondary/70 backdrop-blur-md border-white/10">
                    <h1 class="mb-6 text-5xl font-bold text-white opacity-0 sm:text-7xl drop-shadow-lg" id="hero-title">
                        KORALYS <span class="font-extrabold text-accent">SARL</span>
                    </h1>
                    <div class="w-24 h-2 mb-8 transform -translate-x-full shadow-lg bg-accent" id="hero-line"></div>
                    <p class="max-w-xl mb-12 text-xl font-light text-white opacity-0 sm:text-2xl text-shadow" id="hero-subtitle">
                        Excellence et innovation dans la construction, façonnant l'avenir de vos projets
                    </p>
                    <div class="flex flex-wrap gap-4 opacity-0" id="hero-cta">
                        <a href="#projects" class="flex items-center gap-2 px-8 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-lg shadow-lg group bg-accent hover:bg-accent/90">
                            Nos Réalisations
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-transform transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        <a href="#contact" class="px-8 py-4 text-lg font-semibold transition-all duration-300 bg-white rounded-lg shadow-lg group text-secondary hover:bg-gray-100">
                            Contactez-nous
                        </a>
                    </div>
                </div>

                <!-- Slider des services avec meilleur contraste -->
                <div class="hidden lg:block">
                    <div class="relative overflow-hidden shadow-2xl rounded-2xl" id="services-slider">
                        <div class="p-8 transition-all duration-500 transform border services-slide bg-secondary/80 backdrop-blur-md rounded-2xl border-white/20 hover:scale-105">
                            <div class="text-white">
                                <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-full bg-accent/20">
                                    <i class="text-4xl text-white fas fa-building"></i>
                                </div>
                                <h3 class="mb-3 text-2xl font-bold text-shadow-sm">Construction Durable</h3>
                                <p class="text-lg leading-relaxed text-white/90">Des projets innovants respectueux de l'environnement</p>
                            </div>
                        </div>
                        <div class="p-8 transition-all duration-500 transform border services-slide bg-secondary/80 backdrop-blur-md rounded-2xl border-white/20 hover:scale-105">
                            <div class="text-white">
                                <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-full bg-primary/20">
                                    <i class="text-4xl text-white fas fa-drafting-compass"></i>
                                </div>
                                <h3 class="mb-3 text-2xl font-bold text-shadow-sm">Design Architectural</h3>
                                <p class="text-lg leading-relaxed text-white/90">Créativité et fonctionnalité pour vos espaces</p>
                            </div>
                        </div>
                        <div class="p-8 transition-all duration-500 transform border services-slide bg-secondary/80 backdrop-blur-md rounded-2xl border-white/20 hover:scale-105">
                            <div class="text-white">
                                <div class="flex items-center justify-center w-16 h-16 mb-6 rounded-full bg-secondary/20">
                                    <i class="text-4xl text-white fas fa-hard-hat"></i>
                                </div>
                                <h3 class="mb-3 text-2xl font-bold text-shadow-sm">Expertise BTP</h3>
                                <p class="text-lg leading-relaxed text-white/90">Plus de 15 ans d'excellence dans la construction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Indicateurs de slide améliorés -->
        <div class="absolute z-20 flex space-x-4 transform -translate-x-1/2 bottom-8 left-1/2">
            <button class="w-4 h-4 transition-colors duration-300 border-2 rounded-full bg-white/30 hover:bg-white slider-dot active border-accent"></button>
            <button class="w-4 h-4 transition-colors duration-300 border-2 rounded-full bg-white/30 hover:bg-white slider-dot border-white/50"></button>
            <button class="w-4 h-4 transition-colors duration-300 border-2 rounded-full bg-white/30 hover:bg-white slider-dot border-white/50"></button>
        </div>
    </section>

    <!-- Section Chiffres Clés avec effet parallax -->
    <section class="relative py-16 overflow-hidden text-white bg-primary clip-path-diagonal">
        <div class="absolute inset-0 z-0 opacity-70">
            <img src="{{ asset('images/photo-1541888946425-d81bb19240f5.jpeg') }}" alt="Background" class="object-cover w-full h-full">
        </div>
        <div class="relative z-10 px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-4xl font-bold text-white text-shadow-lg">Nos Chiffres Clés</h2>
                <div class="w-24 h-1 mx-auto shadow-lg bg-accent"></div>
            </div>
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="p-8 text-center transition-all duration-300 border shadow-lg rounded-xl bg-white/10 backdrop-blur-sm border-white/10 hover:bg-white/20" data-aos="fade-up" data-aos-delay="0">
                    <div class="mb-2 text-5xl font-bold text-accent counter drop-shadow-lg" data-target="150">0</div>
                    <p class="font-medium text-white/90 drop-shadow">Projets Réalisés</p>
                </div>
                <div class="p-8 text-center transition-all duration-300 border shadow-lg rounded-xl bg-white/10 backdrop-blur-sm border-white/10 hover:bg-white/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-2 text-5xl font-bold text-accent counter drop-shadow-lg" data-target="15">0</div>
                    <p class="font-medium text-white/90 drop-shadow">Années d'Expérience</p>
                </div>
                <div class="p-8 text-center transition-all duration-300 border shadow-lg rounded-xl bg-white/10 backdrop-blur-sm border-white/10 hover:bg-white/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-2 text-5xl font-bold text-accent counter drop-shadow-lg" data-target="50">0</div>
                    <p class="font-medium text-white/90 drop-shadow">Professionnels</p>
                </div>
                <div class="p-8 text-center transition-all duration-300 border shadow-lg rounded-xl bg-white/10 backdrop-blur-sm border-white/10 hover:bg-white/20" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-2 text-5xl font-bold text-accent counter drop-shadow-lg" data-target="98">0</div>
                    <p class="font-medium text-white/90 drop-shadow">Clients Satisfaits</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section À Propos -->
    <section class="py-24 section-pattern" id="about">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
                <div class="relative" data-aos="fade-right">
                    <img src="{{ asset('images/photo-1504307651254-35680f356dfd.jpeg') }}" alt="Notre équipe"
                         class="rounded-2xl shadow-2xl w-full h-[600px] object-cover">
                    <div class="absolute p-8 text-white shadow-xl -bottom-8 -right-8 bg-accent rounded-2xl">
                        <div class="text-4xl font-bold">15+</div>
                        <div class="text-white/90">Années d'expertise</div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h2 class="mb-6 text-4xl font-bold text-secondary">Notre Engagement pour l'Excellence</h2>
                    <div class="w-24 h-1 mb-8 bg-accent"></div>
                    <p class="mb-8 text-xl leading-relaxed text-gray-600">
                        Depuis plus de 15 ans, KORALYS SARL s'engage à transformer vos visions en réalités architecturales exceptionnelles.
                    </p>
                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2">
                        <div class="flex items-start p-6 space-x-4 bg-white shadow-lg rounded-xl card-hover">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-primary">
                                    <i class="text-xl fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="mb-2 text-lg font-semibold text-secondary">Qualité Premium</h3>
                                <p class="text-gray-600">Des matériaux et finitions haut de gamme</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 space-x-4 bg-white shadow-lg rounded-xl card-hover">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-primary">
                                    <i class="text-xl fas fa-clock"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="mb-2 text-lg font-semibold text-secondary">Délais Respectés</h3>
                                <p class="text-gray-600">Livraison dans les temps convenus</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 space-x-4 bg-white shadow-lg rounded-xl card-hover">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-primary">
                                    <i class="text-xl fas fa-users"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="mb-2 text-lg font-semibold text-secondary">Équipe Experte</h3>
                                <p class="text-gray-600">Des professionnels qualifiés et passionnés</p>
                            </div>
                        </div>
                        <div class="flex items-start p-6 space-x-4 bg-white shadow-lg rounded-xl card-hover">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-primary">
                                    <i class="text-xl fas fa-leaf"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="mb-2 text-lg font-semibold text-secondary">Éco-responsable</h3>
                                <p class="text-gray-600">Engagement pour un avenir durable</p>
                            </div>
                        </div>
                    </div>
                    <a href="#services" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white transition-all duration-300 transform rounded-lg shadow-xl bg-gradient-to-r from-accent to-primary hover:shadow-2xl hover:-translate-y-1">
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
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-secondary">Nos Services</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-accent"></div>
                <p class="max-w-3xl mx-auto text-xl text-gray-700">
                    Une gamme complète de services pour répondre à tous vos besoins en construction et rénovation.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="p-8 transition-all duration-500 bg-white border-t-4 shadow-lg group rounded-2xl hover:shadow-2xl border-primary"
                     data-aos="fade-up" data-aos-delay="0">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 transition-all duration-300 bg-primary/10 rounded-xl group-hover:bg-primary group-hover:rotate-6">
                        <i class="text-3xl transition-colors duration-300 fas fa-building text-primary group-hover:text-gray-200"></i>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold text-secondary">Construction Neuve</h3>
                    <p class="mb-6 text-gray-700">Des projets résidentiels et commerciaux sur mesure, conçus pour répondre à vos besoins spécifiques avec une attention particulière aux détails.</p>
                    <a href="#contact" class="inline-flex items-center font-semibold text-primary group-hover:text-accent">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transition-transform transform group-hover:translate-x-2"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="p-8 transition-all duration-500 bg-white border-t-4 shadow-lg group rounded-2xl hover:shadow-2xl border-accent"
                     data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 transition-all duration-300 bg-accent/10 rounded-xl group-hover:bg-accent group-hover:rotate-6">
                        <i class="text-3xl transition-colors duration-300 fas fa-hammer text-accent group-hover:text-gray-200"></i>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold text-secondary">Rénovation</h3>
                    <p class="mb-6 text-gray-700">Transformez vos espaces existants avec notre expertise en rénovation, alliant modernité et respect du caractère original de votre bâtiment.</p>
                    <a href="#contact" class="inline-flex items-center font-semibold text-accent group-hover:text-primary">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transition-transform transform group-hover:translate-x-2"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <div class="p-8 transition-all duration-500 bg-white border-t-4 shadow-lg group rounded-2xl hover:shadow-2xl border-secondary"
                     data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center justify-center w-16 h-16 mb-6 transition-all duration-300 bg-secondary/10 rounded-xl group-hover:bg-secondary group-hover:rotate-6">
                        <i class="text-3xl transition-colors duration-300 fas fa-drafting-compass text-secondary group-hover:text-gray-200"></i>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold text-secondary">Design Architectural</h3>
                    <p class="mb-6 text-gray-700">Créez des espaces qui reflètent votre vision avec notre équipe de designers architecturaux, combinant esthétique et fonctionnalité.</p>
                    <a href="#contact" class="inline-flex items-center font-semibold text-secondary group-hover:text-accent">
                        En savoir plus
                        <svg class="w-5 h-5 ml-2 transition-transform transform group-hover:translate-x-2"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets avec Filtres -->
    <section class="py-24 text-white bg-gradient-to-b from-gray-900 to-secondary" id="projects">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-white">Nos Réalisations</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-accent"></div>
                <p class="max-w-3xl mx-auto text-xl text-white/80">
                    Découvrez nos projets les plus remarquables, témoignant de notre savoir-faire et de notre engagement envers l'excellence.
                </p>
            </div>

            <div class="flex flex-wrap justify-center mb-12 space-x-4">
                <button class="px-6 py-3 mb-2 text-white transition-colors rounded-full bg-accent hover:bg-accent/90" data-filter="all">
                    Tous les projets
                </button>
                <button class="px-6 py-3 mb-2 text-white transition-colors rounded-full bg-white/10 hover:bg-white/20" data-filter="residential">
                    Résidentiel
                </button>
                <button class="px-6 py-3 mb-2 text-white transition-colors rounded-full bg-white/10 hover:bg-white/20" data-filter="commercial">
                    Commercial
                </button>
                <button class="px-6 py-3 mb-2 text-white transition-colors rounded-full bg-white/10 hover:bg-white/20" data-filter="industrial">
                    Industriel
                </button>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Projet 1 -->
                <div class="relative overflow-hidden shadow-lg group rounded-2xl" data-aos="fade-up" data-category="commercial">
                    <img src="{{ asset('images/photo-1503387762-592deb58ef4e.jpeg') }}"
                         alt="Centre Commercial Modern"
                         class="object-cover w-full transition-transform duration-500 transform h-80 group-hover:scale-110">
                    <div class="absolute inset-0 transition-all duration-300 opacity-0 bg-gradient-to-t from-secondary/90 to-transparent group-hover:opacity-100">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="mb-2 text-2xl font-bold text-white">Centre Commercial Modern</h3>
                            <p class="text-white/90">Construction neuve - 2023</p>
                            <a href="#" class="inline-flex items-center mt-4 font-medium text-accent">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="relative overflow-hidden shadow-lg group rounded-2xl" data-aos="fade-up" data-aos-delay="100" data-category="residential">
                    <img src="{{ asset('images/photo-1600585154340-be6161a56a0c.jpeg') }}"
                         alt="Résidence de Luxe"
                         class="object-cover w-full transition-transform duration-500 transform h-80 group-hover:scale-110">
                    <div class="absolute inset-0 transition-all duration-300 opacity-0 bg-gradient-to-t from-secondary/90 to-transparent group-hover:opacity-100">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="mb-2 text-2xl font-bold text-white">Résidence de Luxe</h3>
                            <p class="text-white/90">Construction neuve - 2022</p>
                            <a href="#" class="inline-flex items-center mt-4 font-medium text-accent">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="relative overflow-hidden shadow-lg group rounded-2xl" data-aos="fade-up" data-aos-delay="200" data-category="industrial">
                    <img src="{{ asset('images/photo-1581094794329-c8112a89af1244.jpeg') }}"
                         alt="Complexe Industriel"
                         class="object-cover w-full transition-transform duration-500 transform h-80 group-hover:scale-110">
                    <div class="absolute inset-0 transition-all duration-300 opacity-0 bg-gradient-to-t from-secondary/90 to-transparent group-hover:opacity-100">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="mb-2 text-2xl font-bold text-white">Complexe Industriel</h3>
                            <p class="text-white/90">Construction neuve - 2021</p>
                            <a href="#" class="inline-flex items-center mt-4 font-medium text-accent">
                                Voir le projet
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="/projets" class="inline-flex items-center px-8 py-4 text-white transition-all duration-300 rounded-lg shadow-lg bg-accent hover:bg-accent/90">
                    Voir tous nos projets
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

        <!-- Section Témoignages avec Slider -->
        <section class="py-24 overflow-hidden bg-gradient-to-b from-white to-gray-50" id="testimonials">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-4xl font-bold text-secondary">Ce que disent nos clients</h2>
                    <div class="w-24 h-1 mx-auto mb-8 bg-accent"></div>
                    <p class="max-w-3xl mx-auto text-xl text-gray-600">
                        La satisfaction de nos clients est notre priorité absolue. Découvrez leurs expériences avec KORALYS.
                    </p>
                </div>

                <div class="relative testimonials-slider">
                    <div class="swiper-wrapper">
                        <!-- Témoignage 1 -->
                        <div class="swiper-slide">
                            <div class="p-8 bg-white border border-gray-100 shadow-xl rounded-2xl">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 mr-4 overflow-hidden border-2 rounded-full border-accent">
                                        <img src="{{ asset('images/150.jpeg') }}" alt="Client" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Jean Dupont</h4>
                                        <p class="text-gray-600">Directeur Général - Enterprise XYZ</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="text-4xl fas fa-quote-right text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex mb-2 text-accent">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="italic text-gray-700">
                                    "Une équipe professionnelle qui a su mener notre projet avec excellence.
                                    Les délais ont été respectés et le résultat dépasse nos attentes. Je recommande
                                    vivement KORALYS pour tout projet de construction d'envergure."
                                </p>
                            </div>
                        </div>

                        <!-- Témoignage 2 -->
                        <div class="swiper-slide">
                            <div class="p-8 bg-white border border-gray-100 shadow-xl rounded-2xl">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 mr-4 overflow-hidden border-2 rounded-full border-accent">
                                        <img src="{{ asset('images/151.jpeg') }}" alt="Client" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Marie Laurent</h4>
                                        <p class="text-gray-600">Propriétaire - Résidence Privée</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="text-4xl fas fa-quote-right text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex mb-2 text-accent">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <p class="italic text-gray-700">
                                    "La rénovation de notre maison familiale a été transformée en une expérience
                                    agréable grâce à l'équipe de KORALYS. Leur attention aux détails et leur
                                    capacité à comprendre nos besoins ont fait toute la différence."
                                </p>
                            </div>
                        </div>

                        <!-- Témoignage 3 -->
                        <div class="swiper-slide">
                            <div class="p-8 bg-white border border-gray-100 shadow-xl rounded-2xl">
                                <div class="flex items-center mb-6">
                                    <div class="w-16 h-16 mr-4 overflow-hidden border-2 rounded-full border-accent">
                                        <img src="{{ asset('images/152.jpeg') }}" alt="Client" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-semibold text-secondary">Philippe Martin</h4>
                                        <p class="text-gray-600">Architecte - Studio Design</p>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="text-4xl fas fa-quote-right text-accent/20"></i>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class="flex mb-2 text-accent">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="italic text-gray-700">
                                    "En tant qu'architecte, je suis particulièrement exigeant sur la qualité d'exécution.
                                    KORALYS a dépassé mes attentes avec leur expertise technique et leur capacité
                                    à concrétiser fidèlement les concepts architecturaux les plus complexes."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation et pagination -->
                    <div class="mt-10 swiper-pagination"></div>
                    <div class="hidden md:block">
                        <div class="absolute z-10 flex items-center justify-center w-12 h-12 transition-colors transform -translate-y-1/2 bg-white rounded-full shadow-lg swiper-button-prev top-1/2 -left-12 text-secondary hover:bg-primary hover:text-white">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="absolute z-10 flex items-center justify-center w-12 h-12 transition-colors transform -translate-y-1/2 bg-white rounded-full shadow-lg swiper-button-next top-1/2 -right-12 text-secondary hover:bg-primary hover:text-white">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Contact avec Carte -->
        <section class="relative py-24 text-gray-800 bg-gradient-to-b from-gray-100 to-blue-50" id="contact">
            <div class="absolute inset-0 z-0 opacity-10">
                <img src="https://images.unsplash.com/photo-1590644365607-5c9be5eeefae"
                     alt="Background"
                     class="object-cover w-full h-full">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-gray-100/90 to-blue-50/90"></div>

            <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-16 lg:grid-cols-2">
                    <div>
                        <h2 class="mb-6 text-4xl font-bold text-blue-800">Contactez-nous</h2>
                        <div class="w-24 h-1 mb-8 bg-blue-500"></div>
                        <p class="mb-12 text-xl text-blue-700">
                            Discutons de votre projet et voyons comment nous pouvons vous aider à le concrétiser.
                        </p>

                        <div class="mb-12 space-y-8">
                            <div class="flex items-start gap-6">
                                <div class="flex items-center justify-center flex-shrink-0 bg-blue-100 rounded-full w-14 h-14">
                                    <i class="text-xl text-blue-600 fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3 class="mb-2 text-xl font-bold text-blue-800">Notre adresse</h3>
                                    <p class="text-blue-600">123 Rue de la Construction, 75000 Paris</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6">
                                <div class="flex items-center justify-center flex-shrink-0 bg-blue-100 rounded-full w-14 h-14">
                                    <i class="text-xl text-blue-600 fas fa-phone"></i>
                                </div>
                                <div>
                                    <h3 class="mb-2 text-xl font-bold text-blue-800">Téléphone</h3>
                                    <p class="text-blue-600">+33 1 23 45 67 89</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-6">
                                <div class="flex items-center justify-center flex-shrink-0 bg-blue-100 rounded-full w-14 h-14">
                                    <i class="text-xl text-blue-600 fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="mb-2 text-xl font-bold text-blue-800">Email</h3>
                                    <p class="text-blue-600">contact@koralys.fr</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <a href="#" class="flex items-center justify-center w-12 h-12 transition-colors duration-300 bg-blue-100 rounded-full hover:bg-blue-200">
                                <i class="text-blue-600 fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="flex items-center justify-center w-12 h-12 transition-colors duration-300 bg-blue-100 rounded-full hover:bg-blue-200">
                                <i class="text-blue-600 fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="flex items-center justify-center w-12 h-12 transition-colors duration-300 bg-blue-100 rounded-full hover:bg-blue-200">
                                <i class="text-blue-600 fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="p-8 bg-white border border-blue-100 shadow-2xl rounded-2xl">
                            <h3 class="mb-6 text-2xl font-bold text-blue-800">Envoyez-nous un message</h3>
                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                                @csrf

                                @if(session('success'))
                                    <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                                        <span class="block sm:inline">{{ session('success') }}</span>
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="relative px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                                        <span class="block sm:inline">{{ session('error') }}</span>
                                    </div>
                                @endif

                                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                    <div>
                                        <label for="name" class="block mb-1 text-sm font-medium text-blue-700">Nom complet</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-lg bg-blue-50 border @error('name') border-red-500 @else border-blue-200 @enderror focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300" required>
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-1 text-sm font-medium text-blue-700">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-lg bg-blue-50 border @error('email') border-red-500 @else border-blue-200 @enderror focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-blue-700 placeholder-blue-300" required>
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block mb-1 text-sm font-medium text-blue-700">Sujet</label>
                                    <select id="subject" name="subject" class="w-full px-4 py-3 text-blue-700 transition-all duration-300 border border-blue-200 rounded-lg bg-blue-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="">Sélectionnez un sujet</option>
                                        <option value="devis">Demande de devis</option>
                                        <option value="information">Demande d'information</option>
                                        <option value="recrutement">Recrutement</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="message" class="block mb-1 text-sm font-medium text-blue-700">Message</label>
                                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 text-blue-700 placeholder-blue-300 transition-all duration-300 border border-blue-200 rounded-lg bg-blue-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
                                </div>
                                <div class="flex items-start">
                                    <input type="checkbox" id="privacy" name="privacy" class="mt-1 mr-2" required>
                                    <label for="privacy" class="text-sm text-blue-700">
                                        J'accepte que mes données soient traitées conformément à la <a href="#" class="text-blue-600 hover:underline">politique de confidentialité</a>.
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="flex items-center justify-center w-full px-6 py-4 text-lg font-semibold text-white transition-all duration-300 transform bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-1">
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
