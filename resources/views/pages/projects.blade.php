@extends('layouts.app')

@section('title', 'Nos Projets - Koralys Construction')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[40vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/70"></div>
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5" alt="Projets" class="w-full h-full object-cover">
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Nos Réalisations</h1>
            <div class="w-24 h-1 bg-accent mx-auto mb-6"></div>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Découvrez nos projets les plus remarquables, témoignant de notre expertise et de notre engagement
            </p>
        </div>
    </section>

    <!-- Filtres de Projets -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center mb-8 flex-wrap gap-3">
                <button class="px-6 py-3 rounded-lg bg-primary text-white hover:bg-primary/90 transition-colors filter-btn active" data-filter="all">
                    Tous les projets
                </button>
                <button class="px-6 py-3 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors filter-btn" data-filter="residential">
                    Résidentiel
                </button>
                <button class="px-6 py-3 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors filter-btn" data-filter="commercial">
                    Commercial
                </button>
                <button class="px-6 py-3 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors filter-btn" data-filter="industrial">
                    Industriel
                </button>
                <button class="px-6 py-3 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors filter-btn" data-filter="renovation">
                    Rénovation
                </button>
            </div>
        </div>
    </section>

    <!-- Liste des Projets -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 project-grid">
                <!-- Projet 1 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="commercial">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab" 
                             alt="Centre Commercial Modern" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Commercial
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Centre Commercial Modern</h3>
                        <p class="text-gray-600 mb-4">Un espace commercial innovant avec une architecture contemporaine et des solutions durables.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2023</span>
                            <a href="{{ route('project.show', 'centre-commercial-modern') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 2 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="residential">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" 
                             alt="Résidence de Luxe" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-primary text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Résidentiel
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Résidence de Luxe</h3>
                        <p class="text-gray-600 mb-4">Une maison familiale élégante combinant confort moderne et design intemporel.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2022</span>
                            <a href="{{ url('/projects/residence-de-luxe') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 3 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="industrial">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12" 
                             alt="Complexe Industriel" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-secondary text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Industriel
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Complexe Industriel</h3>
                        <p class="text-gray-600 mb-4">Un espace industriel fonctionnel avec des solutions innovantes pour optimiser la production.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2021</span>
                            <a href="{{ url('/projects/complexe-industriel') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 4 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="renovation">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7" 
                             alt="Rénovation Appartement Haussmannien" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Rénovation
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Appartement Haussmannien</h3>
                        <p class="text-gray-600 mb-4">Rénovation complète d'un appartement historique alliant charme d'antan et confort moderne.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2022</span>
                            <a href="{{ url('/projects/appartement-haussmannien') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 5 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="commercial">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72" 
                             alt="Bureaux Modernes" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Commercial
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Bureaux Modernes</h3>
                        <p class="text-gray-600 mb-4">Espace de travail contemporain favorisant la collaboration et le bien-être des employés.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2023</span>
                            <a href="{{ url('/projects/bureaux-modernes') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Projet 6 -->
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden project-item" data-category="residential">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811" 
                             alt="Villa Contemporaine" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-primary text-white text-sm font-semibold px-3 py-1 rounded-full">
                            Résidentiel
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-secondary mb-2">Villa Contemporaine</h3>
                        <p class="text-gray-600 mb-4">Résidence de prestige avec piscine intérieure et technologies domotiques avancées.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Achevé en 2021</span>
                            <a href="{{ url('/projects/villa-contemporaine') }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                Voir détails
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 rounded-l-md">Précédent</a>
                    <a href="#" class="px-4 py-2 bg-primary text-white border border-primary">1</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">2</a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 rounded-r-md">Suivant</a>
                </nav>
            </div>
        </div>
    </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Vous avez un projet en tête?</h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10">
                    Contactez-nous dès aujourd'hui pour discuter de vos besoins et découvrir comment notre expertise peut transformer votre vision en réalité.
                </p>
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-primary rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 font-semibold text-lg inline-flex items-center">
                    Contactez-nous
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </section>
    @endsection
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filtrage des projets
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Retirer la classe active de tous les boutons
                    filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
                    filterButtons.forEach(btn => btn.classList.add('bg-gray-200', 'text-gray-700'));
                    
                    // Ajouter la classe active au bouton cliqué
                    this.classList.add('active', 'bg-primary', 'text-white');
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    // Filtrer les projets
                    projectItems.forEach(item => {
                        if (filter === 'all') {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            if (item.getAttribute('data-category') === filter) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                }, 50);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'scale(0.8)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300);
                            }
                        }
                    });
                });
            });
            
            // Animation au défilement
            const animateOnScroll = function() {
                const projects = document.querySelectorAll('.project-item');
                
                projects.forEach((project, index) => {
                    const projectPosition = project.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (projectPosition < screenPosition) {
                        setTimeout(() => {
                            project.classList.add('animate-fadeIn');
                            project.style.opacity = '1';
                        }, index * 100);
                    }
                });
            };
            
            // Exécuter l'animation au chargement et au défilement
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
    @endpush