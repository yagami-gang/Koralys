@extends('layouts.app')

@section('title', 'Nos Services - Koralys Construction')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 bg-gradient-to-r overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" 
                 alt="Background" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-800 "></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-blue-700 mb-6" id="hero-title" style="opacity: 0;">
                Nos Services
            </h1>
            <div class="w-24 h-1 bg-blue-700 mx-auto mb-8 transform -translate-x-full" id="hero-line"></div>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" id="hero-subtitle" style="opacity: 0;">
                Des solutions complètes pour tous vos projets de construction
            </p>
        </div>
    </section>

    <!-- Introduction aux Services -->
    <section class="py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Expertise à Votre Service</h2>
                <div class="w-24 h-1 bg-blue-700 mx-auto mb-8"></div>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                    Chez KORALYS, nous offrons une gamme complète de services de construction pour répondre à tous vos besoins, 
                    qu'il s'agisse de projets résidentiels, commerciaux ou industriels.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Principaux -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Service 1: Construction Neuve -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24" data-aos="fade-up">
                <div class="order-2 lg:order-1">
                    <div class="inline-block bg-blue-700/10 px-4 py-2 rounded-lg text-blue-700 font-semibold mb-4">
                        Service Premium
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Construction Neuve</h2>
                    <div class="w-24 h-1 bg-blue-700 mb-8"></div>
                    <p class="text-lg text-gray-800 mb-6">
                        Notre service de construction neuve offre une solution complète pour transformer votre vision en réalité. 
                        De la conception initiale à la livraison finale, notre équipe d'experts vous accompagne à chaque étape du processus.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Conception architecturale personnalisée</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Gestion complète du projet de construction</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Utilisation de matériaux de haute qualité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Respect des normes environnementales et énergétiques</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Garantie décennale sur tous nos travaux</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="order-1 lg:order-2 relative" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5" 
                         alt="Construction Neuve" 
                         class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-xl">
                        <i class="fas fa-hard-hat text-blue-500 text-3xl"></i>
                    </div>
                </div>
            </div>
            
            <!-- Service 2: Rénovation -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24" data-aos="fade-up">
                <div class="relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12" 
                         alt="Rénovation" 
                         class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl">
                        <i class="fas fa-pencil-ruler text-blue-500 text-3xl"></i>
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-blue-700/10 px-4 py-2 rounded-lg text-blue-700 font-semibold mb-4">
                        Transformation
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Rénovation</h2>
                    <div class="w-24 h-1 bg-blue-700 mb-8"></div>
                    <p class="text-lg text-gray-800 mb-6">
                        Donnez une nouvelle vie à votre espace avec nos services de rénovation de haute qualité. 
                        Que vous souhaitiez moderniser votre maison, agrandir votre espace commercial ou restaurer un bâtiment historique, 
                        notre équipe possède l'expertise nécessaire pour réaliser vos projets.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Rénovation complète ou partielle</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Modernisation des installations</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Optimisation de l'espace et de la fonctionnalité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Amélioration de l'efficacité énergétique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Restauration respectueuse du patrimoine</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service 3: Architecture et Design -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24" data-aos="fade-up">
                <div class="order-2 lg:order-1">
                    <div class="inline-block bg-blue-700/10 px-4 py-2 rounded-lg text-blue-700 font-semibold mb-4">
                        Conception
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Architecture et Design</h2>
                    <div class="w-24 h-1 bg-blue-700 mb-8"></div>
                    <p class="text-lg text-gray-800 mb-6">
                        Notre équipe d'architectes et de designers travaille en étroite collaboration avec vous pour créer des espaces 
                        qui reflètent votre vision tout en optimisant la fonctionnalité, l'esthétique et la durabilité.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Conception architecturale innovante</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Design d'intérieur personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Modélisation 3D et visualisation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Plans détaillés et documentation technique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Intégration de solutions durables</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300">
                        Demander un devis
                        <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
                <div class="order-1 lg:order-2 relative" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" 
                         alt="Architecture et Design" 
                         class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-xl shadow-xl">
                        <i class="fas fa-cogs text-blue-500 text-3xl"></i> <!-- Example icon -->
                    </div>
                </div>
            </div>
            
            <!-- Service 4: Gestion de Projet -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center" data-aos="fade-up">
                <div class="relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf" 
                         alt="Gestion de Projet" 
                         class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl">
                        <i class="fas fa-building text-blue-500 text-3xl"></i>
                    </div>
                </div>
                <div>
                    <div class="inline-block bg-blue-700/10 px-4 py-2 rounded-lg text-blue-700 font-semibold mb-4">
                        Coordination
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Gestion de Projet</h2>
                    <div class="w-24 h-1 bg-blue-700 mb-8"></div>
                    <p class="text-lg text-gray-800 mb-6">
                        Notre service de gestion de projet assure une exécution fluide et efficace de votre projet de construction, 
                        de la planification initiale à la livraison finale, en respectant les délais et les budgets.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Planification détaillée et calendrier d'exécution</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Coordination des sous-traitants et fournisseurs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Contrôle qualité rigoureux</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Gestion budgétaire transparente</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span class="text-gray-800">Rapports réguliers et communication proactive</span>
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300">
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
    <section class="py-24 bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Services Spécialisés</h2>
                <div class="w-24 h-1 bg-blue-800 mx-auto mb-8"></div>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    En plus de nos services principaux, nous proposons des solutions spécialisées pour répondre à des besoins spécifiques.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Spécialisé 1 -->
                <div class="bg-gray-100 rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72" 
                             alt="Aménagement d'Intérieur" 
                             class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Aménagement d'Intérieur</h3>
                        <p class="text-gray-800 mb-6">
                            Transformez votre espace intérieur avec nos services d'aménagement personnalisés, 
                            alliant esthétique, fonctionnalité et confort.
                        </p>
                        <a href="/contact" class="inline-flex items-center text-blue-700 font-semibold hover:text-blue-600 transition-colors">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Spécialisé 2 -->
                <div class="bg-gray-100 rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09" 
                             alt="Construction Durable" 
                             class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Construction Durable</h3>
                        <p class="text-gray-800 mb-6">
                            Nos solutions de construction écologique intègrent des matériaux durables et des technologies économes en énergie pour réduire l'impact environnemental.
                        </p>
                        <a href="/contact" class="inline-flex items-center text-blue-700 font-semibold hover:text-blue-600 transition-colors">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Spécialisé 3 -->
                <div class="bg-gray-100 rounded-2xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952" 
                             alt="Consultation Technique" 
                             class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Consultation Technique</h3>
                        <p class="text-gray-800 mb-6">
                            Bénéficiez de l'expertise de nos ingénieurs et consultants pour des conseils techniques, des évaluations structurelles et des solutions innovantes.
                        </p>
                        <a href="/contact" class="inline-flex items-center text-blue-700 font-semibold hover:text-blue-600 transition-colors">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Processus</h2>
                <div class="w-24 h-1 bg-blue-700 mx-auto mb-8"></div>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                    Une approche méthodique et transparente pour garantir la réussite de votre projet.
                </p>
            </div>

            <div class="relative">
                <!-- Ligne de progression -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-700/20 hidden md:block"></div>
                
                <!-- Étape 1 -->
                <div class="relative z-10 mb-16" data-aos="fade-up">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 text-center md:text-right">
                            <div class="bg-white p-8 rounded-2xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">1. Consultation Initiale</h3>
                                <p class="text-gray-800">
                                    Nous commençons par comprendre votre vision, vos besoins et vos objectifs lors d'une consultation approfondie.
                                </p>
                            </div>
                        </div>
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold z-20 mx-8 shadow-xl">
                            1
                        </div>
                        <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                    </div>
                </div>
                
                <!-- Étape 2 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold z-20 mx-8 shadow-xl">
                            2
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 text-center md:text-left">
                            <div class="bg-white p-8 rounded-2xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">2. Conception et Planification</h3>
                                <p class="text-gray-800">
                                    Notre équipe élabore des plans détaillés, des conceptions et un calendrier d'exécution adapté à votre projet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Étape 3 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 text-center md:text-right">
                            <div class="bg-white p-8 rounded-2xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">3. Proposition et Devis</h3>
                                <p class="text-gray-800">
                                    Nous vous présentons une proposition détaillée incluant les spécifications, le calendrier et un devis transparent.
                                </p>
                            </div>
                        </div>
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold z-20 mx-8 shadow-xl">
                            3
                        </div>
                        <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                    </div>
                </div>
                
                <!-- Étape 4 -->
                <div class="relative z-10 mb-16" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 hidden md:block"></div>
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold z-20 mx-8 shadow-xl">
                            4
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 text-center md:text-left">
                            <div class="bg-white p-8 rounded-2xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">4. Exécution du Projet</h3>
                                <p class="text-gray-800">
                                    Notre équipe qualifiée met en œuvre le plan avec précision, en respectant les normes de qualité les plus élevées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Étape 5 -->
                <div class="relative z-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0 text-center md:text-right">
                            <div class="bg-white p-8 rounded-2xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">5. Livraison et Suivi</h3>
                                <p class="text-gray-800">
                                    Nous livrons votre projet terminé et assurons un suivi pour garantir votre entière satisfaction.
                                </p>
                            </div>
                        </div>
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-xl font-bold z-20 mx-8 shadow-xl">
                            5
                        </div>
                        <div class="md:w-1/2 md:pl-12 hidden md:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce Que Disent Nos Clients</h2>
                <div class="w-24 h-1 bg-blue-700 mx-auto mb-8"></div>
                <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                    Découvrez les expériences de nos clients satisfaits avec nos services de construction.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-6 italic">
                        "KORALYS a transformé notre vision en réalité. Leur équipe professionnelle a géré notre projet de construction résidentielle avec une attention méticuleuse aux détails et un engagement envers la qualité."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Pierre Durand</h4>
                            <p class="text-gray-800 text-sm">Projet Résidentiel</p>
                        </div>
                    </div>
                </div>
                
                <!-- Témoignage 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-6 italic">
                        "En tant que propriétaire d'entreprise, j'avais besoin d'un espace commercial qui reflète notre marque. KORALYS a dépassé mes attentes avec leur approche créative et leur exécution impeccable."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Marie Laurent</h4>
                            <p class="text-gray-800 text-sm">Projet Commercial</p>
                        </div>
                    </div>
                </div>
                
                <!-- Témoignage 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="text-blue-700">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-800 mb-6 italic">
                        "La rénovation de notre maison historique était un projet complexe, mais l'équipe de KORALYS a relevé le défi avec expertise. Leur respect du patrimoine tout en intégrant des éléments modernes était remarquable."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Jean Moreau</h4>
                            <p class="text-gray-800 text-sm">Projet de Rénovation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à démarrer votre projet avec nous?</h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10">
                Contactez-nous dès aujourd'hui pour discuter de vos besoins et découvrir comment nos services peuvent transformer votre vision en réalité.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact" class="px-8 py-4 bg-white text-blue-700 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 font-semibold text-lg">
                    Contactez-nous
                </a>
                <a href="/projects" class="px-8 py-4 bg-blue-700 text-white rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300 font-semibold text-lg">
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