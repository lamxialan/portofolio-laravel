<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Muh Febryant Hidayatullah | Full-Stack Developer & UI/UX Designer' }}</title>
    <meta name="description" content="Portfolio of Muh Febryant Hidayatullah - Full-Stack Developer & UI/UX Designer specializing in Laravel, Tailwind CSS, modern JavaScript, and clean architecture.">
    <meta name="keywords" content="Muh Febryant Hidayatullah, Laravel Developer, UI/UX Designer, Full-Stack Developer, Tailwind CSS, Web Development, Indonesia">
    <meta name="author" content="Muh Febryant Hidayatullah">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Muh Febryant Hidayatullah | Full-Stack Developer & UI/UX Designer">
    <meta property="og:description" content="Sleek, high-performance web applications built with Laravel and modern design principles.">

    <!-- Favicon Initials SVG -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230d0d0d'/><text x='50' y='62' font-family='sans-serif' font-size='42' font-weight='800' fill='%23ffffff' text-anchor='middle'>MFH</text></svg>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Vite Styles & Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        colors: {
                            darkBg: '#080808',
                            darkSurface: '#0d0d0d',
                            darkCard: '#121212',
                            darkBorder: '#222222',
                        },
                        fontFamily: {
                            sans: ['Plus Jakarta Sans', 'sans-serif'],
                            mono: ['JetBrains Mono', 'monospace'],
                        }
                    }
                }
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
            html { scroll-behavior: smooth; background-color: #080808; color: #f3f4f6; font-family: 'Plus Jakarta Sans', sans-serif; }
            .glass-navbar { background: rgba(13, 13, 13, 0.85); backdrop-filter: blur(16px); border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
            .glass-card { background: rgba(18, 18, 18, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); }
            .glass-card:hover { border-color: rgba(255, 255, 255, 0.25); background: rgba(26, 26, 26, 0.9); transform: translateY(-4px); }
            .text-gradient { background: linear-gradient(135deg, #ffffff 0%, #a3a3a3 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
            .bg-grid-pattern { background-size: 40px 40px; background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px); }
            
            @keyframes textShimmer {
                0% { background-position: -200% 0; }
                100% { background-position: 200% 0; }
            }
            .animate-shimmer-monochrome {
                background: linear-gradient(90deg, #ffffff 0%, #ffffff 35%, #888888 50%, #ffffff 65%, #ffffff 100%);
                background-size: 200% auto;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: textShimmer 4s linear infinite;
            }
            .interactive-letter { display: inline-block; transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1), filter 0.25s ease; }
            .interactive-letter:hover { transform: translateY(-4px) scale(1.08); filter: drop-shadow(0 0 12px rgba(255, 255, 255, 0.9)); }
        </style>
    @endif

    <!-- Alpine.js Intersect Plugin & Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#080808] text-neutral-200 antialiased selection:bg-white selection:text-black min-h-screen relative overflow-x-hidden">

    <!-- Background Grid Pattern & Ambient Glows -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0 opacity-60"></div>
    <div class="fixed -top-40 -left-40 w-96 h-96 bg-white/5 rounded-full blur-3xl pointer-events-none z-0"></div>
    <div class="fixed top-1/2 -right-40 w-[500px] h-[500px] bg-white/[0.03] rounded-full blur-3xl pointer-events-none z-0"></div>

    <div class="relative z-10 flex flex-col min-h-screen">
        @yield('content')
    </div>

    <!-- Scroll To Top Button -->
    <div x-data="{ showTop: false }" @scroll.window="showTop = (window.pageYOffset > 500)" class="fixed bottom-6 right-6 z-50">
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
            class="p-3.5 rounded-full bg-[#161616] border border-neutral-700/80 text-white hover:bg-neutral-800 hover:border-neutral-500 shadow-xl transition-all duration-300 group focus:outline-none"
        >
            <svg class="w-5 h-5 group-hover:-translate-y-0.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        </button>
    </div>

    <!-- Universal Intersection Observer for Reveal-On-Scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -80px 0px',
                threshold: 0.1
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-reveal]').forEach(el => {
                el.classList.add('transition-all', 'duration-700', 'ease-out', 'opacity-0', 'translate-y-10');
                revealObserver.observe(el);
            });
        });
    </script>

</body>
</html>
