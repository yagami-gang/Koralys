<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KORALYS SARL - @yield('title')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
    @stack('styles')
    <style>
        :root {
            --primary: #4f46e5;      /* Indigo 600 */
            --primary-light: #818cf8; /* Indigo 400 */
            --primary-dark: #3730a3;  /* Indigo 700 */
            --secondary: #9333ea;    /* Purple 600 */
            --accent: #f59e0b;       /* Amber 500 */
            --accent-light: #fbbf24; /* Amber 400 */
            --text-dark: #1f2937;    /* Gray 800 */
            --text-light: #f3f4f6;   /* Gray 100 */
            --background: #f9fafb;   /* Gray 50 */
            --success: #10b981;      /* Emerald 500 */
            --warning: #f97316;      /* Orange 500 */
            --error: #ef4444;        /* Red 500 */
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background);
            color: var(--text-dark);
            scroll-behavior: smooth;
        }

        .nav-link.active {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            position: relative;
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-container {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .nav-scrolled {
            padding: 0.5rem 0;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .nav-link:hover::after {
            width: 80%;
        }

        .button-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .button-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--accent), var(--accent-light));
            transition: all 0.5s ease;
            z-index: -1;
        }
        
        .button-primary:hover::before {
            width: 100%;
        }

        .button-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.2);
        }
        
        .footer-link {
            transition: all 0.3s ease;
        }
        
        .footer-link:hover {
            transform: translateX(5px);
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Header/Navigation -->
    <nav class="nav-container fixed w-full z-50" id="main-nav">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center space-x-2">
                        <img class="h-14" src="https://i.ibb.co/3CtQ8Gp/construction-logo.png" alt="Koralys SARL">
                        <span class="font-bold text-xl text-secondary">KORALYS <span class="text-accent">SARL</span></span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('page.show') }}" class="nav-link flex items-center space-x-2 px-3 py-2 transition-all duration-300">
                            <i class="fas fa-home text-accent"></i>
                            <span>Accueil</span>
                        </a>
                        <a href="{{ route('page.show', 'services') }}" class="nav-link flex items-center space-x-2 px-3 py-2 transition-all duration-300">
                            <i class="fas fa-tools text-accent"></i>
                            <span>Services</span>
                        </a>
                        <a href="{{ route('page.show', 'projets') }}" class="nav-link flex items-center space-x-2 px-3 py-2 transition-all duration-300">
                            <i class="fas fa-building text-accent"></i>
                            <span>Projets</span>
                        </a>
                        <a href="{{ route('contact') }}" class="button-primary flex items-center space-x-2 px-8 py-3 rounded-full shadow-lg">
                            <i class="fas fa-envelope"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button p-2 rounded-md text-gray-600 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div class="md:hidden mobile-menu hidden">
                <div class="px-2 pt-2 pb-4 space-y-1 bg-white rounded-lg shadow-lg mt-2">
                    <a href="{{ route('page.show') }}" class="nav-link block px-3 py-4 rounded-md text-base font-medium border-b border-gray-100">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-home text-accent"></i>
                            <span>Accueil</span>
                        </div>
                    </a>
                    <a href="{{ route('page.show', 'services') }}" class="nav-link block px-3 py-4 rounded-md text-base font-medium border-b border-gray-100">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-tools text-accent"></i>
                            <span>Services</span>
                        </div>
                    </a>
                    <a href="{{ route('page.show', 'projets') }}" class="nav-link block px-3 py-4 rounded-md text-base font-medium border-b border-gray-100">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-building text-accent"></i>
                            <span>Projets</span>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}" class="block px-3 py-4 rounded-md text-base font-medium">
                        <div class="flex items-center space-x-3 text-primary">
                            <i class="fas fa-envelope text-accent"></i>
                            <span>Contact</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center space-x-3 mb-6">
                        <img class="h-10" src="https://i.ibb.co/3CtQ8Gp/construction-logo.png" alt="Koralys SARL">
                        <h3 class="text-2xl font-bold text-primary">KORALYS</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-6">Votre partenaire de confiance dans le BTP, engagé pour l'excellence et l'innovation.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-facebook-f text-primary hover:text-white"></i>
                        </a>
                        <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-linkedin-in text-primary hover:text-white"></i>
                        </a>
                        <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-instagram text-primary hover:text-white"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-secondary">Liens Rapides</h3>
                    <ul class="space-y-4">
                        <li><a href="/" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Accueil</a></li>
                        <li><a href="/services" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Services</a></li>
                        <li><a href="/projets" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Projets</a></li>
                        <li><a href="/contact" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-secondary">Services</h3>
                    <ul class="space-y-4">
                        <li><a href="/services#construction" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Construction Neuve</a></li>
                        <li><a href="/services#renovation" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Rénovation</a></li>
                        <li><a href="/services#design" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Design Architectural</a></li>
                        <li><a href="/services#consultation" class="text-gray-600 hover:text-primary footer-link flex items-center"><i class="fas fa-chevron-right mr-2 text-xs text-primary"></i> Consultation</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6 text-secondary">Contact</h3>
                    <div class="space-y-4">
                        <a href="mailto:contact@koralys.fr" class="text-gray-600 flex items-center space-x-3 hover:text-primary transition-colors group">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary">
                                <i class="fas fa-envelope text-primary group-hover:text-white transition-colors"></i>
                            </div>
                            <span>contact@koralys.fr</span>
                        </a>
                        <a href="tel:+33123456789" class="text-gray-600 flex items-center space-x-3 hover:text-primary transition-colors group">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary">
                                <i class="fas fa-phone text-primary group-hover:text-white transition-colors"></i>
                            </div>
                            <span>+33 1 23 45 67 89</span>
                        </a>
                        <div class="text-gray-600 flex items-center space-x-3 group">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <i class="fas fa-location-dot text-primary"></i>
                            </div>
                            <span>123 Rue de la Construction, 75000 Paris</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">
                    &copy; 2023 KORALYS SARL. Tous droits réservés.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-primary transition-colors">Mentions légales</a>
                    <a href="#" class="text-gray-500 hover:text-primary transition-colors">Politique de confidentialité</a>
                    <a href="#" class="text-gray-500 hover:text-primary transition-colors">CGV</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 z-50 w-12 h-12 rounded-full bg-primary text-white shadow-lg flex items-center justify-center transform scale-0 hover:bg-primary-dark transition-all duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialisation AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
            
            // Navigation active state
            const navLinks = document.querySelectorAll('.nav-link');
            const currentPath = window.location.pathname;
            
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPath || 
                    (href !== '/' && currentPath.startsWith(href))) {
                    link.classList.add('active');
                }
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    
                    // Animation du menu mobile
                    if (!mobileMenu.classList.contains('hidden')) {
                        gsap.from('.mobile-menu a', {
                            y: 20,
                            opacity: 0,
                            stagger: 0.1,
                            duration: 0.4,
                            ease: 'power2.out'
                        });
                    }
                });
            }
            
            // Navbar scroll effect
            const navbar = document.getElementById('main-nav');
            
            if (navbar) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add('nav-scrolled');
                    } else {
                        navbar.classList.remove('nav-scrolled');
                    }
                });
            }
            
            // Back to top button
            const backToTopButton = document.getElementById('back-to-top');
            
            if (backToTopButton) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        gsap.to(backToTopButton, {
                            scale: 1,
                            duration: 0.3,
                            ease: 'power2.out'
                        });
                    } else {
                        gsap.to(backToTopButton, {
                            scale: 0,
                            duration: 0.3,
                            ease: 'power2.in'
                        });
                    }
                });
                
                backToTopButton.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
            
            // Smooth scroll pour les ancres
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
