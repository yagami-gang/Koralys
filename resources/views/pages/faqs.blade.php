@extends('layouts.app')

@section('title', 'Foire Aux Questions - Koralys Construction')

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
                Foire Aux Questions
            </h1>
            <div class="w-24 h-1 bg-blue-700 mx-auto mb-8 transform -translate-x-full animate-slideRight" id="hero-line" style="transform: translateX(0px);"></div>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" id="hero-subtitle" style="opacity: 0;">
                Trouvez rapidement des réponses à vos questions sur nos services
            </p>
        </div>
    </section>
    
    <!-- FAQ Section -->
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
                
                <!-- Question 6 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Combien de temps dure généralement un projet de construction ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            La durée d'un projet varie considérablement en fonction de sa taille et de sa complexité. Une rénovation simple peut 
                            prendre quelques semaines, tandis qu'une construction neuve peut s'étendre sur plusieurs mois. Lors de notre première 
                            consultation, nous vous fournirons un calendrier détaillé avec des estimations précises pour votre projet spécifique.
                        </p>
                    </div>
                </div>
                
                <!-- Question 7 -->
                <div class="faq-card">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-secondary">Quelles sont les modalités de paiement ?</span>
                        <svg class="w-6 h-6 text-primary transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 py-4 bg-white hidden">
                        <p class="text-gray-600">
                            Nos modalités de paiement sont flexibles et adaptées à chaque projet. Généralement, nous demandons un acompte initial, 
                            suivi de paiements échelonnés en fonction de l'avancement des travaux. Tous les détails de paiement sont clairement 
                            définis dans le contrat avant le début des travaux pour assurer une transparence totale.
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
                Vous avez d'autres questions ?
            </h2>
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-10" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">
                Notre équipe est disponible pour répondre à toutes vos interrogations concernant nos services.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-orange-500 text-white rounded-lg shadow-lg hover:bg-orange-600 transition-all duration-300 font-semibold text-lg">
                    <i class="fas fa-envelope mr-2"></i> Contactez-nous
                </a>
                <a href="tel:+33123456789" class="px-8 py-4 bg-green-500 text-white rounded-lg shadow-lg hover:bg-green-600 transition-all duration-300 font-semibold text-lg">
                    <i class="fas fa-phone-alt mr-2"></i> Appelez-nous
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    #hero-title{
        text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
    }
    
    /* FAQ Section Styles */
    .faq-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        margin-bottom: 16px;
    }

    .faq-card:hover {
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    
    .faq-card button {
        border-radius: 12px;
    }
    
    .faq-card button:hover {
        background-color: rgba(37, 99, 235, 0.05);
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
    function toggleFAQ(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('svg');
        
        // Toggle la classe hidden pour afficher/masquer la réponse
        answer.classList.toggle('hidden');
        
        // Rotation de l'icône
        if (answer.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    }
</script>
@endpush