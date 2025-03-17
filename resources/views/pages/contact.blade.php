@extends('layouts.app')

@section('title', 'Contact - Koralys Construction')

@section('content')
    
    <!-- Hero Section -->
    <section class="relative pt-40 pb-24 bg-gradient-to-r from-blue-800 to-blue-600 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4" 
                 alt="Background" 
                 class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-800 "></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-blue-700 mb-6" id="hero-title" style="opacity: 1;">
                Contactez-nous
            </h1>
            <div class="w-24 h-1 bg-blue-700 mx-auto mb-8 transform -translate-x-full animate-slideRight" id="hero-line" style="transform: translateX(0px);"></div>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" id="hero-subtitle" style="opacity: 0;">
                Nous sommes à votre écoute pour répondre à toutes vos questions
            </p>
        </div>
    </section>
    
    <!-- Coordonnées et Formulaire -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Coordonnées -->
                <div data-aos="fade-right" class="contact-info">
                    <h2 class="text-3xl font-bold text-secondary mb-6">Nos Coordonnées</h2>
                    <div class="w-24 h-1 bg-accent mb-10"></div>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-secondary mb-2">Adresse</h3>
                                <p class="text-gray-600">
                                    123 Avenue de la Construction<br>
                                    75001 Paris, France
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-phone-alt text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-secondary mb-2">Téléphone</h3>
                                <p class="text-gray-600">
                                    +33 (0)1 23 45 67 89<br>
                                    Lun - Ven: 8h30 - 18h00
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-envelope text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-secondary mb-2">Email</h3>
                                <p class="text-gray-600">
                                    info@koralys-construction.com<br>
                                    commercial@koralys-construction.com
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-secondary mb-2">Horaires d'ouverture</h3>
                                <p class="text-gray-600">
                                    Lundi - Vendredi: 8h30 - 18h00<br>
                                    Samedi: 9h00 - 12h00<br>
                                    Dimanche: Fermé
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <h3 class="text-xl font-semibold text-secondary mb-4">Suivez-nous</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-facebook-f text-primary hover:text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-twitter text-primary hover:text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-linkedin-in text-primary hover:text-white"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center hover:bg-accent transition-colors">
                                <i class="fab fa-instagram text-primary hover:text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Formulaire de Contact -->
                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold text-secondary mb-6">Envoyez-nous un message</h2>
                    <div class="w-24 h-1 bg-accent mb-10"></div>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nom complet</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-input w-full px-4 py-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-input w-full px-4 py-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
                                <select id="subject" name="subject" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                    <option value="">Sélectionnez un sujet</option>
                                    <option value="devis">Demande de devis</option>
                                    <option value="information">Demande d'information</option>
                                    <option value="recrutement">Recrutement</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                        </div>
                        
                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" class="mt-1 mr-2" required>
                            <label for="privacy" class="text-gray-600 text-sm">
                                J'accepte que mes données soient traitées conformément à la <a href="#" class="text-primary hover:underline">politique de confidentialité</a>.
                            </label>
                        </div>
                        
                        <div>
                            <button type="submit" class="submit-button px-8 py-4 bg-accent text-white rounded-lg shadow-lg hover:bg-accent/90 transition-all duration-300 font-semibold text-lg">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Carte -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary mb-4">Notre Emplacement</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Venez nous rencontrer dans nos bureaux pour discuter de votre projet.
                </p>
            </div>
            
            <div class="h-96 rounded-2xl overflow-hidden shadow-xl" data-aos="zoom-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937604!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1621956217240!5m2!1sfr!2sfr" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary mb-4">Questions Fréquentes</h2>
                <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Trouvez rapidement des réponses aux questions les plus courantes.
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6" data-aos="fade-up">
                <!-- Question 1 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Comment puis-je obtenir un devis pour mon projet ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Vous pouvez obtenir un devis en nous contactant par téléphone, par email ou en remplissant le formulaire de contact ci-dessus. 
                            Nous vous répondrons dans les 24 à 48 heures ouvrables pour organiser une consultation initiale et établir un devis personnalisé.
                        </p>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Quelles sont les étapes d'un projet de construction avec KORALYS ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Notre processus comprend généralement 5 étapes principales : consultation initiale, conception et planification, 
                            proposition et devis, exécution du projet, et livraison avec suivi. Chaque étape est réalisée en étroite collaboration 
                            avec vous pour garantir que le résultat final répond parfaitement à vos attentes.
                        </p>
                    </div>
                </div>
                
                <!-- Question 3 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Quelles garanties offrez-vous sur vos travaux ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Tous nos travaux sont couverts par une garantie décennale conformément à la législation française. 
                            De plus, nous offrons une garantie de parfait achèvement d'un an sur l'ensemble de nos réalisations. 
                            Nous sommes également assurés pour la responsabilité civile professionnelle.
                        </p>
                    </div>
                </div>
                
                <!-- Question 4 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Travaillez-vous sur des projets de toutes tailles ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Oui, nous travaillons sur des projets de toutes tailles, des petites rénovations aux grandes constructions neuves. 
                            Notre équipe est dimensionnée pour s'adapter à l'ampleur de chaque projet, garantissant ainsi la même qualité 
                            d'exécution et d'attention aux détails, quelle que soit la taille du projet.
                        </p>
                    </div>
                </div>
                
                <!-- Question 5 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Proposez-vous des solutions de construction écologique ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Absolument. Nous sommes engagés dans une démarche de construction durable et proposons une gamme complète 
                            de solutions écologiques, incluant l'utilisation de matériaux durables, des systèmes d'économie d'énergie, 
                            et des méthodes de construction respectueuses de l'environnement. Nous pouvons également vous conseiller sur 
                            les certifications environnementales disponibles pour votre projet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                Prêt à transformer votre vision en réalité ?
            </h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">
                Notre équipe est prête à vous accompagner dans votre projet de construction ou de rénovation.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+33123456789" class="px-8 py-4 bg-orange-500 text-white rounded-lg shadow-lg hover:bg-orange-600 transition-all duration-300 font-semibold text-lg">
                    <i class="fas fa-phone-alt mr-2"></i> Appelez-nous
                </a>
                <a href="#" class="px-8 py-4 bg-green-500 text-white rounded-lg shadow-lg hover:bg-green-600 transition-all duration-300 font-semibold text-lg">
                    <i class="fas fa-calendar-alt mr-2"></i> Prendre rendez-vous
                </a>
            </div>
        </div>
    </section>
@endsection


@push('styles')
<style>
    #hero-title{
        text-shadow: 2px 2px 4px rgba(0,0,0.7)
    }
    /* Hero Section Styles */
    .bg-gradient-contact {
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.8), rgba(37, 99, 235, 0.5)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4') no-repeat center center;
        background-size: cover;
    }

    /* Contact Information Styles */
    .contact-info {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Form Styles */
    .form-input {
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }

    .form-input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 5px rgba(37, 99, 235, 0.5);
    }

    .submit-button {
        transition: background-color 0.3s, transform 0.3s;
    }

    .submit-button:hover {
        background-color: rgba(37, 99, 235, 0.9);
        transform: translateY(-2px);
    }

    /* FAQ Section Styles */
    .faq-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }

    .faq-card:hover {
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .hero-line {
        background: linear-gradient(135deg, rgba(37, 99, 235, 1), rgba(37, 99, 235, 0.7));
    }
</style>
@endpush
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

    // Fonction pour basculer l'affichage des réponses FAQ
    function toggleFAQ(element) {
        const answer = element.nextElementSibling;
        const icon = element.querySelector('svg');
        
        // Toggle answer visibility
        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            answer.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>
@endpush