@props(['profile' => null])

<header 
    x-data="{ mobileMenu: false }"
    class="fixed top-0 left-0 right-0 z-50 py-6 transition-all duration-300 pointer-events-none"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pointer-events-auto">
        <div class="flex items-center justify-between">
            
            <!-- Left: Profile Logo Image (Transparent PNG) -->
            <a href="{{ route('about') }}" class="w-11 h-11 rounded-full border border-neutral-700/80 overflow-hidden flex items-center justify-center bg-neutral-900 shadow-lg group hover:border-neutral-400 transition-all duration-300">
                <img src="{{ asset('images/logo.png') }}" alt="Profile Logo" class="w-full h-full object-contain p-1 group-hover:scale-110 transition-transform duration-300" />
            </a>

            <!-- Center: Desktop Pill Navbar (Multi-Page Navigation) -->
            <nav class="hidden md:flex items-center gap-1 bg-[#0f0f0f]/90 border border-neutral-800/90 rounded-full px-4 py-2 backdrop-blur-md shadow-2xl">
                <!-- About Link -->
                <a 
                    href="{{ route('about') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 relative {{ request()->routeIs('about') ? 'text-white' : 'text-neutral-400 hover:text-white' }}"
                >
                    <span>About</span>
                    @if(request()->routeIs('about'))
                        <span class="absolute bottom-0 left-4 right-4 h-[2px] bg-white rounded-full"></span>
                    @endif
                </a>

                <!-- Skills Link -->
                <a 
                    href="{{ route('skills') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 relative {{ request()->routeIs('skills') ? 'text-white' : 'text-neutral-400 hover:text-white' }}"
                >
                    <span>Skills</span>
                    @if(request()->routeIs('skills'))
                        <span class="absolute bottom-0 left-4 right-4 h-[2px] bg-white rounded-full"></span>
                    @endif
                </a>

                <!-- Projects Link -->
                <a 
                    href="{{ route('projects') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 relative {{ request()->routeIs('projects') ? 'text-white' : 'text-neutral-400 hover:text-white' }}"
                >
                    <span>Projects</span>
                    @if(request()->routeIs('projects'))
                        <span class="absolute bottom-0 left-4 right-4 h-[2px] bg-white rounded-full"></span>
                    @endif
                </a>

                <!-- Contact Link -->
                <a 
                    href="{{ route('contact') }}"
                    class="px-4 py-1.5 rounded-full text-xs font-semibold transition-all duration-200 relative {{ request()->routeIs('contact') ? 'text-white' : 'text-neutral-400 hover:text-white' }}"
                >
                    <span>Contact</span>
                    @if(request()->routeIs('contact'))
                        <span class="absolute bottom-0 left-4 right-4 h-[2px] bg-white rounded-full"></span>
                    @endif
                </a>
            </nav>

            <!-- Right: CTA Button -->
            <div class="flex items-center gap-3">
                <a 
                    href="{{ route('contact') }}" 
                    class="px-5 py-2.5 rounded-full text-xs font-bold transition-all duration-200 shadow-md {{ request()->routeIs('contact') ? 'bg-white text-black scale-105' : 'bg-[#d6d6d6] text-black hover:bg-white hover:scale-105' }}"
                >
                    Let's Talk
                </a>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="mobileMenu = !mobileMenu"
                    type="button"
                    aria-label="Toggle Menu"
                    class="md:hidden p-2.5 rounded-full bg-neutral-900 border border-neutral-800 text-neutral-300 hover:text-white focus:outline-none"
                >
                    <svg x-show="!mobileMenu" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenu" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div 
            x-show="mobileMenu" 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            @click.away="mobileMenu = false"
            class="md:hidden mt-4 p-4 rounded-2xl bg-[#0e0e0e] border border-neutral-800 shadow-2xl flex flex-col gap-2 pointer-events-auto"
            x-cloak
        >
            <a 
                href="{{ route('about') }}"
                class="px-4 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center justify-between {{ request()->routeIs('about') ? 'bg-neutral-800 text-white font-semibold' : 'text-neutral-400 hover:text-white hover:bg-neutral-900' }}"
            >
                <span>About</span>
            </a>
            
            <a 
                href="{{ route('skills') }}"
                class="px-4 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center justify-between {{ request()->routeIs('skills') ? 'bg-neutral-800 text-white font-semibold' : 'text-neutral-400 hover:text-white hover:bg-neutral-900' }}"
            >
                <span>Skills</span>
            </a>

            <a 
                href="{{ route('projects') }}"
                class="px-4 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center justify-between {{ request()->routeIs('projects') ? 'bg-neutral-800 text-white font-semibold' : 'text-neutral-400 hover:text-white hover:bg-neutral-900' }}"
            >
                <span>Projects</span>
            </a>

            <a 
                href="{{ route('contact') }}"
                class="px-4 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center justify-between {{ request()->routeIs('contact') ? 'bg-neutral-800 text-white font-semibold' : 'text-neutral-400 hover:text-white hover:bg-neutral-900' }}"
            >
                <span>Contact (Let's Talk)</span>
            </a>
        </div>
    </div>
</header>
