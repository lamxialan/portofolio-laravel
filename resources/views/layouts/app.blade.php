<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Muh Febryant Hidayatullah | Web Developer' }}</title>
    <meta name="description" content="Portfolio of Muh Febryant Hidayatullah - Web Developer. Blending thoughtful UI design with clean, responsive development.">
    <meta name="keywords" content="Muh Febryant Hidayatullah, Web Developer, Laravel, Tailwind CSS, Web Development">
    <meta name="author" content="Muh Febryant Hidayatullah">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Swiper CSS & JS CDN for Coverflow Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkBg: '#000000',
                        darkCard: '#0d0d0d',
                        darkBorder: '#1c1c1c',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #000000;
            color: #d4d4d4;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        [x-cloak] { display: none !important; }

        /* Smooth Page Transition Styles */
        @keyframes pageFadeIn {
            0% {
                opacity: 0;
                transform: translateY(12px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .page-transition-wrapper {
            animation: pageFadeIn 0.55s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            will-change: opacity, transform;
        }
        .page-exit-anim {
            opacity: 0 !important;
            transform: translateY(-6px) scale(0.99) !important;
            transition: opacity 0.25s ease, transform 0.25s ease !important;
        }
    </style>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-black text-neutral-300 antialiased selection:bg-white selection:text-black min-h-screen relative overflow-x-hidden">

    <!-- Initial Screen Preloader (Davin style) -->
    <div 
        id="initial-preloader" 
        class="fixed inset-0 z-[100] bg-black flex flex-col items-center justify-center transition-all duration-700 ease-out select-none"
    >
        <!-- Centered Branding Text -->
        <div class="mb-5 flex items-center gap-0.5">
            <span class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Febryant</span>
            <span class="text-2xl sm:text-3xl font-extrabold text-blue-500 animate-pulse">.</span>
        </div>

        <!-- Progress Bar Container -->
        <div class="w-44 sm:w-56 h-1 bg-neutral-900 rounded-full overflow-hidden relative border border-neutral-800/80">
            <div 
                id="preloader-progress" 
                class="h-full bg-gradient-to-r from-blue-600 via-blue-400 to-white rounded-full transition-all duration-150 ease-out shadow-[0_0_10px_rgba(59,130,246,0.8)]" 
                style="width: 0%"
            ></div>
        </div>
    </div>

    <div id="page-wrapper" class="relative z-10 flex flex-col min-h-screen page-transition-wrapper">
        @yield('content')
    </div>

    <!-- Scroll To Top Button -->
    <div x-data="{ showTop: false }" @scroll.window="showTop = (window.pageYOffset > 400)" class="fixed bottom-6 right-6 z-50">
        <button 
            x-show="showTop" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-75"
            @click="window.scrollTo({top: 0, behavior: 'smooth'})"
            aria-label="Scroll to top"
            class="p-3 rounded-full bg-neutral-900 border border-neutral-800 text-white hover:bg-neutral-800 transition-all duration-300 shadow-xl focus:outline-none"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </div>

    <!-- Universal Reveal, Preloader & Smooth Navigation Transitions -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initial Access Preloader Animation
            const preloader = document.getElementById('initial-preloader');
            const progressBar = document.getElementById('preloader-progress');
            
            if (preloader && progressBar) {
                let progress = 0;
                const interval = setInterval(() => {
                    progress += Math.floor(Math.random() * 14) + 8;
                    if (progress > 100) progress = 100;
                    progressBar.style.width = progress + '%';
                    
                    if (progress >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            preloader.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                            setTimeout(() => {
                                preloader.remove();
                            }, 700);
                        }, 250);
                    }
                }, 60);
            }

            // Reveal on Scroll Observer
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -40px 0px',
                threshold: 0.05
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-6');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-reveal]').forEach(el => {
                el.classList.add('transition-all', 'duration-700', 'ease-out', 'opacity-0', 'translate-y-6');
                revealObserver.observe(el);
            });

            // Smooth Page Exit Transition Handler
            const pageWrapper = document.getElementById('page-wrapper');
            document.querySelectorAll('a[href]').forEach(link => {
                const href = link.getAttribute('href');
                if (href && href.startsWith('/') && !href.startsWith('#') && !link.target) {
                    link.addEventListener('click', (e) => {
                        if (window.location.pathname !== href) {
                            e.preventDefault();
                            if (pageWrapper) {
                                pageWrapper.classList.add('page-exit-anim');
                            }
                            setTimeout(() => {
                                window.location.href = href;
                            }, 200);
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>
