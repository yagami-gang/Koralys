@extends('layouts.app')

@section('title', '{{ $project->title }} - Koralys Construction')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/80 to-secondary/60"></div>
            <img src="{{ $project->featured_image }}" alt="{{ $project->title }}" class="w-full h-full object-cover">
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inline-block bg-accent text-white text-sm font-semibold px-4 py-1 rounded-full mb-4">
                {{ $project->category }}
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $project->title }}</h1>
            <div class="w-24 h-1 bg-accent mb-6"></div>
            <p class="text-xl text-white/90 max-w-3xl">
                {{ $project->short_description }}
            </p>
        </div>
    </section>

    <!-- Project Details -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-bold text-secondary mb-6">À propos du projet</h2>
                    
                    <div class="prose prose-lg max-w-none mb-10">
                        {!! $project->description !!}
                    </div>
                    
                    <!-- Project Gallery -->
                    <h3 class="text-2xl font-bold text-secondary mb-6">Galerie du projet</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        @foreach($project->gallery as $image)
                        <div class="overflow-hidden rounded-xl shadow-md h-64 group cursor-pointer gallery-item">
                            <img src="{{ $image }}" alt="{{ $project->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Testimonial if available -->
                    @if(isset($project->testimonial))
                    <div class="bg-gray-50 p-8 rounded-xl border-l-4 border-accent mb-10">
                        <p class="text-gray-700 italic mb-4">"{{ $project->testimonial['content'] }}"</p>
                        <div class="flex items-center">
                            @if(isset($project->testimonial['avatar']))
                            <img src="{{ $project->testimonial['avatar'] }}" alt="{{ $project->testimonial['author'] }}" class="w-12 h-12 rounded-full mr-4">
                            @endif
                            <div>
                                <p class="font-bold text-secondary">{{ $project->testimonial['author'] }}</p>
                                <p class="text-gray-600 text-sm">{{ $project->testimonial['position'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm mb-8">
                        <h3 class="text-xl font-bold text-secondary mb-6">Informations du projet</h3>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between pb-3 border-b border-gray-200">
                                <span class="text-gray-600">Client</span>
                                <span class="font-semibold text-secondary">{{ $project->client }}</span>
                            </div>
                            <div class="flex justify-between pb-3 border-b border-gray-200">
                                <span class="text-gray-600">Catégorie</span>
                                <span class="font-semibold text-secondary">{{ $project->category }}</span>
                            </div>
                            <div class="flex justify-between pb-3 border-b border-gray-200">
                                <span class="text-gray-600">Date de livraison</span>
                                <span class="font-semibold text-secondary">{{ $project->completion_date }}</span>
                            </div>
                            <div class="flex justify-between pb-3 border-b border-gray-200">
                                <span class="text-gray-600">Localisation</span>
                                <span class="font-semibold text-secondary">{{ $project->location }}</span>
                            </div>
                            <div class="flex justify-between pb-3 border-b border-gray-200">
                                <span class="text-gray-600">Surface</span>
                                <span class="font-semibold text-secondary">{{ $project->area }} m²</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Services Provided -->
                    <div class="bg-gray-50 rounded-xl p-8 shadow-sm mb-8">
                        <h3 class="text-xl font-bold text-secondary mb-6">Services fournis</h3>
                        <ul class="space-y-3">
                            @foreach($project->services as $service)
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>{{ $service }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- CTA -->
                    <div class="bg-primary rounded-xl p-8 text-white">
                        <h3 class="text-xl font-bold mb-4">Vous avez un projet similaire?</h3>
                        <p class="mb-6">Contactez-nous pour discuter de vos besoins et obtenir un devis personnalisé.</p>
                        <a href="{{ route('contact') }}" class="block w-full py-3 px-4 bg-white text-primary text-center rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Demander un devis
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Related Projects -->
            <div class="mt-20">
                <h2 class="text-3xl font-bold text-secondary mb-10 text-center">Projets similaires</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $relatedProject)
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $relatedProject->featured_image }}" 
                                 alt="{{ $relatedProject->title }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 right-4 bg-accent text-white text-sm font-semibold px-3 py-1 rounded-full">
                                {{ $relatedProject->category }}
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-secondary mb-2">{{ $relatedProject->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $relatedProject->short_description }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-500">{{ $relatedProject->completion_date }}</span>
                                <a href="{{ url('/projects/' . $relatedProject->slug) }}" class="inline-flex items-center text-primary font-semibold hover:text-accent transition-colors">
                                    Voir détails
                                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à démarrer votre projet?</h2>
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
        // Lightbox pour la galerie
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                const imgSrc = this.querySelector('img').src;
                
                // Créer un lightbox
                const lightbox = document.createElement('div');
                lightbox.classList.add('fixed', 'inset-0', 'bg-black/90', 'z-50', 'flex', 'items-center', 'justify-center', 'p-4');
                
                // Ajouter l'image
                const img = document.createElement('img');
                img.src = imgSrc;
                img.classList.add('max-w-full', 'max-h-[90vh]', 'object-contain');
                
                // Ajouter un bouton de fermeture
                const closeBtn = document.createElement('button');
                closeBtn.classList.add('absolute', 'top-4', 'right-4', 'text-white', 'text-3xl');
                closeBtn.innerHTML = '&times;';
                closeBtn.addEventListener('click', function() {
                    document.body.removeChild(lightbox);
                });
                
                // Fermer le lightbox en cliquant n'importe où
                lightbox.addEventListener('click', function(e) {
                    if (e.target === lightbox) {
                        document.body.removeChild(lightbox);
                    }
                });
                
                // Ajouter les éléments au lightbox
                lightbox.appendChild(img);
                lightbox.appendChild(closeBtn);
                
                // Ajouter le lightbox au body
                document.body.appendChild(lightbox);
            });
        });
        
        // Animation au défilement
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.prose > p, .prose > h2, .prose > h3, .gallery-item');
            
            elements.forEach((element, index) => {
                const position = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (position < screenPosition) {
                    setTimeout(() => {
                        element.classList.add('animate-fadeIn');
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

@push('styles')
<style>
    .prose p, .prose h2, .prose h3, .gallery-item {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
    }
    
    .prose p.animate-fadeIn, .prose h2.animate-fadeIn, .prose h3.animate-fadeIn, .gallery-item.animate-fadeIn {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush