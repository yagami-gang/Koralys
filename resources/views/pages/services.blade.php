@extends('layouts.app')

@section('title', 'Nos Services - Koralys Construction')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 overflow-hidden bg-gradient-to-r">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/photo-1503387762-592deb58ef4e.jpeg') }}"
                 alt="Background"
                 class="object-cover w-full h-full">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-800 "></div>

        <div class="relative z-10 px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h1 class="mb-6 text-5xl font-bold text-blue-700" id="hero-title" style="opacity: 0;">
                Nos Services
            </h1>
            <div class="w-24 h-1 mx-auto mb-8 transform -translate-x-full bg-blue-700" id="hero-line"></div>
            <p class="max-w-3xl mx-auto mb-10 text-xl text-white/90" id="hero-subtitle" style="opacity: 0;">
                Des solutions complètes pour tous vos projets de construction
            </p>
        </div>
    </section>

    <!-- Introduction aux Services -->
    <section class="py-24 bg-gray-100">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-gray-900">Notre Expertise à Votre Service</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-blue-700"></div>
                <p class="max-w-3xl mx-auto text-xl text-gray-800">
                    Chez KORALYS, nous offrons une gamme complète de services de construction pour répondre à tous vos besoins,
                    qu'il s'agisse de projets résidentiels, commerciaux ou industriels.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Principaux -->
    <section class="py-16 bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Service 1: Construction Neuve -->
            <div class="grid items-center grid-cols-1 gap-16 mb-24 lg:grid-cols-2" data-aos="fade-up">
                <div class="order-2 lg:order-1">
                    <div class="inline-block px-4 py-2 mb-4 font-semibold text-blue-700 rounded-lg bg-blue-700/10">
                        Service Premium
                    </div>
                    <h2 class="mb-6 text-3xl font-bold text-gray-900">Construction Neuve</h2>
                    <div class="w-24 h-1 mb-8 bg-blue-700"></div>
                    <p class="mb-6 text-lg text-gray-800">
                        Notre service de construction neuve offre une solution complète pour transformer votre vision en réalité.
                        De la conception initiale à la livraison finale, notre équipe d'experts vous accompagne à chaque étape du processus.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Conception architecturale personnalisée</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Gestion complète du projet de construction</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Utilisation de matériaux de haute qualité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Respect des normes environnementales et énergétiques</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Garantie décennale sur tous nos travaux</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 text-white transition-all duration-300 bg-blue-700 rounded-lg shadow-lg hover:bg-blue-600">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="relative order-1 lg:order-2" data-aos="fade-left">
                    <img src="{{ asset('images/photo-1541888946425-d81bb19240f5') }}"
                         alt="Construction Neuve"
                         class="w-full shadow-2xl rounded-2xl">
                    <div class="absolute p-4 bg-white shadow-xl -bottom-6 -right-6 rounded-xl">
                        <i class="text-3xl text-blue-500 fas fa-hard-hat"></i>
                    </div>
                </div>
            </div>

            <!-- Service 2: Rénovation -->
            <div class="grid items-center grid-cols-1 gap-16 mb-24 lg:grid-cols-2" data-aos="fade-up">
                <div class="relative" data-aos="fade-right">
                    <img src="{{ asset('images/photo-1581094794329-c8112a89af12.jpeg') }}"
                         alt="Rénovation"
                         class="w-full shadow-2xl rounded-2xl">
                    <div class="absolute p-4 bg-white shadow-xl -bottom-6 -left-6 rounded-xl">
                        <i class="text-3xl text-blue-500 fas fa-pencil-ruler"></i>
                    </div>
                </div>
                <div>
                    <div class="inline-block px-4 py-2 mb-4 font-semibold text-blue-700 rounded-lg bg-blue-700/10">
                        Transformation
                    </div>
                    <h2 class="mb-6 text-3xl font-bold text-gray-900">Rénovation</h2>
                    <div class="w-24 h-1 mb-8 bg-blue-700"></div>
                    <p class="mb-6 text-lg text-gray-800">
                        Donnez une nouvelle vie à votre espace avec nos services de rénovation de haute qualité.
                        Que vous souhaitiez moderniser votre maison, agrandir votre espace commercial ou restaurer un bâtiment historique,
                        notre équipe possède l'expertise nécessaire pour réaliser vos projets.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Rénovation complète ou partielle</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Modernisation des installations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Optimisation de l'espace et de la fonctionnalité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Amélioration de l'efficacité énergétique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Restauration respectueuse du patrimoine</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 text-white transition-all duration-300 bg-blue-700 rounded-lg shadow-lg hover:bg-blue-600">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service 3: Architecture et Design -->
            <div class="grid items-center grid-cols-1 gap-16 mb-24 lg:grid-cols-2" data-aos="fade-up">
                <div class="order-2 lg:order-1">
                    <div class="inline-block px-4 py-2 mb-4 font-semibold text-blue-700 rounded-lg bg-blue-700/10">
                        Conception
                    </div>
                    <h2 class="mb-6 text-3xl font-bold text-gray-900">Architecture et Design</h2>
                    <div class="w-24 h-1 mb-8 bg-blue-700"></div>
                    <p class="mb-6 text-lg text-gray-800">
                        Notre équipe d'architectes et de designers travaille en étroite collaboration avec vous pour créer des espaces
                        qui reflètent votre vision tout en optimisant la fonctionnalité, l'esthétique et la durabilité.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Conception architecturale innovante</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Design d'intérieur personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Modélisation 3D et visualisation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Plans détaillés et documentation technique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Intégration de solutions durables</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 text-white transition-all duration-300 bg-blue-700 rounded-lg shadow-lg hover:bg-blue-600">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="relative order-1 lg:order-2" data-aos="fade-left">
                    <img src="{{asset('images/photo-1503387762-592deb58ef4e.jpeg') }}"
                         alt="Architecture et Design"
                         class="w-full shadow-2xl rounded-2xl">
                    <div class="absolute p-4 bg-white shadow-xl -bottom-6 -right-6 rounded-xl">
                        <i class="text-3xl text-blue-500 fas fa-cogs"></i> <!-- Example icon -->
                    </div>
                </div>
            </div>

            <!-- Service 4: Gestion de Projet -->
            <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2" data-aos="fade-up">
                <div class="relative" data-aos="fade-right">
                    <img src="{{ asset('images/photo-1600880292203-757bb62b4baf.jpeg') }}"
                         alt="Gestion de Projet"
                         class="w-full shadow-2xl rounded-2xl">
                    <div class="absolute p-4 bg-white shadow-xl -bottom-6 -left-6 rounded-xl">
                        <i class="text-3xl text-blue-500 fas fa-building"></i>
                    </div>
                </div>
                <div>
                    <div class="inline-block px-4 py-2 mb-4 font-semibold text-blue-700 rounded-lg bg-blue-700/10">
                        Coordination
                    </div>
                    <h2 class="mb-6 text-3xl font-bold text-gray-900">Gestion de Projet</h2>
                    <div class="w-24 h-1 mb-8 bg-blue-700"></div>
                    <p class="mb-6 text-lg text-gray-800">
                        Notre service de gestion de projet assure une exécution fluide et efficace de votre projet de construction,
                        de la planification initiale à la livraison finale, en respectant les délais et les budgets.
                    </p>
                    <ul class="mb-8 space-y-3">
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Planification détaillée et calendrier d'exécution</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Coordination des sous-traitants et fournisseurs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Contrôle qualité rigoureux</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Gestion budgétaire transparente</span>
                        </li>
                        <li class="flex items-start">
                            <i class="mt-1 mr-3 text-blue-700 fas fa-check-circle"></i>
                            <span class="text-gray-800">Rapports réguliers et communication proactive</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 text-white transition-all duration-300 bg-blue-700 rounded-lg shadow-lg hover:bg-blue-600">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Spécialisés -->
    <section class="py-24 text-white bg-blue-700">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-white">Services Spécialisés</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-blue-800"></div>
                <p class="max-w-3xl mx-auto text-xl text-white/90">
                    En plus de nos services principaux, nous proposons des solutions spécialisées pour répondre à des besoins spécifiques.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Spécialisé 1 -->
                <div class="overflow-hidden bg-gray-100 shadow-lg rounded-2xl group" data-aos="fade-up">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/photo-1497366754035-f200968a6e72.jpeg') }}"
                             alt="Aménagement d'Intérieur"
                             class="object-cover object-center w-full h-full transition-transform duration-500 transform group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Aménagement d'Intérieur</h3>
                        <p class="mb-6 text-gray-800">
                            Transformez votre espace intérieur avec nos services d'aménagement personnalisés,
                            alliant esthétique, fonctionnalité et confort.
                        </p>
                        <a href="/contact" class="inline-flex items-center font-semibold text-blue-700 transition-colors hover:text-blue-600">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Spécialisé 2 -->
                <div class="overflow-hidden bg-gray-100 shadow-lg rounded-2xl group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09"
                             alt="Construction Durable"
                             class="object-cover object-center w-full h-full transition-transform duration-500 transform group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Construction Durable</h3>
                        <p class="mb-6 text-gray-800">
                            Nos solutions de construction écologique intègrent des matériaux durables et des technologies économes en énergie pour réduire l'impact environnemental.
                        </p>
                        <a href="/contact" class="inline-flex items-center font-semibold text-blue-700 transition-colors hover:text-blue-600">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Spécialisé 3 -->
                <div class="overflow-hidden bg-gray-100 shadow-lg rounded-2xl group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952"
                             alt="Consultation Technique"
                             class="object-cover object-center w-full h-full transition-transform duration-500 transform group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Consultation Technique</h3>
                        <p class="mb-6 text-gray-800">
                            Bénéficiez de l'expertise de nos ingénieurs et consultants pour des conseils techniques, des évaluations structurelles et des solutions innovantes.
                        </p>
                        <a href="/contact" class="inline-flex items-center font-semibold text-blue-700 transition-colors hover:text-blue-600">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus de Travail -->
    <section class="py-24 bg-gray-100">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-gray-900">Notre Processus</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-blue-700"></div>
                <p class="max-w-3xl mx-auto text-xl text-gray-800">
                    Une approche méthodique et transparente pour garantir la réussite de votre projet.
                </p>
            </div>

            <div class="relative">
                <!-- Ligne de progression -->
                <div class="absolute hidden w-1 h-full transform -translate-x-1/2 left-1/2 bg-blue-700/20 md:block"></div>

                <!-- Étape 1 -->
                <div class="relative z-10 mb-16" data-aos="fade-up">
                    <div class="flex flex-col items-center md:flex-row">
                        <div class="mb-8 text-center md:w-1/2 md:pr-12 md:mb-0 md:text-right">
                            <div class="inline-block p-8 bg-white shadow-lg rounded-2xl">
                                <h3 class="mb-4 text-2xl font-bold text-gray-900">1. Consultation Initiale</h3>
                                <p class="text-gray-800">
                                    Nous commençons par comprendre votre vision, vos besoins et vos objectifs lors d'une consultation approfondie.
                                </p>
                            </div>
                        </div>
                        <div class="z-20 flex items-center justify-center w-16 h-16 mx-8 text-xl font-bold text-white bg-blue-700 rounded-full shadow-xl">
                            1
                        </div>
                        <div class="hidden md:w-1/2 md:pl-12 md:block"></div>
                    </div>
                </div>

                <!-- Étape 2 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col items-center md:flex-row">
                        <div class="hidden md:w-1/2 md:pr-12 md:block"></div>
                        <div class="z-20 flex items-center justify-center w-16 h-16 mx-8 text-xl font-bold text-white bg-blue-700 rounded-full shadow-xl">
                            2
                        </div>
                        <div class="mb-8 text-center md:w-1/2 md:pl-12 md:mb-0 md:text-left">
                            <div class="inline-block p-8 bg-white shadow-lg rounded-2xl">
                                <h3 class="mb-4 text-2xl font-bold text-gray-900">2. Conception et Planification</h3>
                                <p class="text-gray-800">
                                    Notre équipe élabore des plans détaillés, des conceptions et un calendrier d'exécution adapté à votre projet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 3 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col items-center md:flex-row">
                        <div class="mb-8 text-center md:w-1/2 md:pr-12 md:mb-0 md:text-right">
                            <div class="inline-block p-8 bg-white shadow-lg rounded-2xl">
                                <h3 class="mb-4 text-2xl font-bold text-gray-900">3. Proposition et Devis</h3>
                                <p class="text-gray-800">
                                    Nous vous présentons une proposition détaillée incluant les spécifications, le calendrier et un devis transparent.
                                </p>
                            </div>
                        </div>
                        <div class="z-20 flex items-center justify-center w-16 h-16 mx-8 text-xl font-bold text-white bg-blue-700 rounded-full shadow-xl">
                            3
                        </div>
                        <div class="hidden md:w-1/2 md:pl-12 md:block"></div>
                    </div>
                </div>

                <!-- Étape 4 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex flex-col items-center md:flex-row">
                        <div class="hidden md:w-1/2 md:pr-12 md:block"></div>
                        <div class="z-20 flex items-center justify-center w-16 h-16 mx-8 text-xl font-bold text-white bg-blue-700 rounded-full shadow-xl">
                            4
                        </div>
                        <div class="mb-8 text-center md:w-1/2 md:pl-12 md:mb-0 md:text-left">
                            <div class="inline-block p-8 bg-white shadow-lg rounded-2xl">
                                <h3 class="mb-4 text-2xl font-bold text-gray-900">4. Exécution du Projet</h3>
                                <p class="text-gray-800">
                                    Notre équipe qualifiée met en œuvre le plan avec précision, en respectant les normes de qualité les plus élevées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Étape 5 -->
                <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex flex-col items-center md:flex-row">
                        <div class="mb-8 text-center md:w-1/2 md:pr-12 md:mb-0 md:text-right">
                            <div class="inline-block p-8 bg-white shadow-lg rounded-2xl">
                                <h3 class="mb-4 text-2xl font-bold text-gray-900">5. Livraison et Suivi</h3>
                                <p class="text-gray-800">
                                    Nous livrons votre projet terminé et assurons un suivi pour garantir votre entière satisfaction.
                                </p>
                            </div>
                        </div>
                        <div class="z-20 flex items-center justify-center w-16 h-16 mx-8 text-xl font-bold text-white bg-blue-700 rounded-full shadow-xl">
                            5
                        </div>
                        <div class="hidden md:w-1/2 md:pl-12 md:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="py-24 bg-gray-100">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-4xl font-bold text-gray-900">Ce Que Disent Nos Clients</h2>
                <div class="w-24 h-1 mx-auto mb-8 bg-blue-700"></div>
                <p class="max-w-3xl mx-auto text-xl text-gray-800">
                    Découvrez les expériences de nos clients satisfaits avec nos services de construction.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Témoignage 1 -->
                <div class="p-8 shadow-lg bg-gray-50 rounded-2xl" data-aos="fade-up">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="mb-6 italic text-gray-800">
                        "KORALYS a transformé notre vision en réalité. Leur équipe professionnelle a géré notre projet de construction résidentielle avec une attention méticuleuse aux détails et un engagement envers la qualité."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 mr-4 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Pierre Durand</h4>
                            <p class="text-sm text-gray-800">Projet Résidentiel</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="p-8 shadow-lg bg-gray-50 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="mb-6 italic text-gray-800">
                        "En tant que propriétaire d'entreprise, j'avais besoin d'un espace commercial qui reflète notre marque. KORALYS a dépassé mes attentes avec leur approche créative et leur exécution impeccable."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 mr-4 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Marie Laurent</h4>
                            <p class="text-sm text-gray-800">Projet Commercial</p>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="p-8 shadow-lg bg-gray-50 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="mb-6 italic text-gray-800">
                        "La rénovation de notre maison historique était un projet complexe, mais l'équipe de KORALYS a relevé le défi avec expertise. Leur respect du patrimoine tout en intégrant des éléments modernes était remarquable."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-12 h-12 mr-4 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-900">Jean Moreau</h4>
                            <p class="text-sm text-gray-800">Projet de Rénovation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 text-white bg-blue-700">
        <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-6 text-3xl font-bold md:text-4xl">Prêt à démarrer votre projet avec nous?</h2>
            <p class="max-w-3xl mx-auto mb-10 text-xl text-white/90">
                Contactez-nous dès aujourd'hui pour discuter de vos besoins et découvrir comment nos services peuvent transformer votre vision en réalité.
            </p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a href="/contact" class="px-8 py-4 text-lg font-semibold text-blue-700 transition-all duration-300 bg-white rounded-lg shadow-lg hover:bg-gray-100">
                    Contactez-nous
                </a>
                <a href="/projects" class="px-8 py-4 text-lg font-semibold text-white transition-all duration-300 bg-blue-700 rounded-lg shadow-lg hover:bg-blue-600">
                    Voir nos projets
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
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
    });
</script>
@endpush
@push('styles')
<style>
    /* Section Services Styles */
    .bg-services {
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.7), rgba(37, 99, 235, 0.5)), url('https://images.unsplash.com/photo-1503387762-592deb58ef4e') no-repeat center center;
        background-size: cover;
    }

    #hero-title {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    #hero-subtitle {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    .hero-line {
        background: linear-gradient(135deg, rgba(37, 99, 235, 1), rgba(37, 99, 235, 0.7));
    }
</style>
@endpush
