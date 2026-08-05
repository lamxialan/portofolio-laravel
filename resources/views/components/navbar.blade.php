@props(['profile'])

<header 
    x-data="{ 
        scrolled: false, 
        mobileMenu: false,
        activeSection: 'home',
        init() {
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 20;
                
                const sections = ['home', 'about', 'skills', 'projects', 'contact'];
                const scrollPos = window.scrollY + 200;
                
                for (const section of sections) {
                    const el = document.getElementById(section);
                    if (el && el.offsetTop <= scrollPos && (el.offsetTop + el.offsetHeight) > scrollPos) {
                        this.activeSection = section;
                        break;
                    }
                }
            });
        }
    }"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="scrolled ? 'glass-navbar py-3.5 shadow-2xl' : 'bg-transparent py-6'"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            
            <!-- Logo Monogram -->
            <a href="#home" class="flex items-center gap-3 group focus:outline-none">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-neutral-800 to-neutral-950 border border-neutral-700/80 flex items-center justify-center font-bold text-white tracking-widest text-sm shadow-md group-hover:border-neutral-400 group-hover:shadow-white/10 transition-all duration-300">
                    {{ $profile['initials'] ?? 'MFH' }}
                </div>
                <div class="hidden sm:flex flex-col">
                    <span class="font-bold text-white text-sm tracking-tight group-hover:text-neutral-300 transition-colors">
                        {{ $profile['nickname'] ?? 'Febryant' }}
                    </span>
                    <span class="text-[11px] text-neutral-400 font-mono tracking-wider">PORTFOLIO</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 bg-[#121212]/80 backdrop-blur-md border border-neutral-800 rounded-full px-4 py-1.5 shadow-inner">
                <template x-for="item in [
                    { id: 'home', label: 'Home' },
                    { id: 'about', label: 'About' },
                    { id: 'skills', label: 'Skills' },
                    { id: 'projects', label: 'Projects' },
                    { id: 'contact', label: 'Contact' }
                ]">
                    <a 
                        :href="'#' + item.id"
                        @click="activeSection = item.id"
                        class="px-4 py-1.5 rounded-full text-xs font-medium transition-all duration-200"
                        :class="activeSection === item.id 
                            ? 'bg-white text-black font-semibold shadow-md' 
                            : 'text-neutral-400 hover:text-white hover:bg-neutral-800/60'"
                        x-text="item.label"
                    ></a>
                </template>
            </nav>

            <!-- Right Action CTA & Mobile Menu Button -->
            <div class="flex items-center gap-3">
                <a 
                    href="#contact" 
                    class="hidden sm:inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full text-xs font-semibold bg-white text-black hover:bg-neutral-200 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 shadow-lg shadow-white/5"
                >
                    <span>Hire Me</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="mobileMenu = !mobileMenu"
                    type="button"
                    aria-label="Toggle Navigation Menu"
                    class="md:hidden p-2 rounded-lg bg-neutral-900 border border-neutral-800 text-neutral-300 hover:text-white hover:border-neutral-700 focus:outline-none"
                >
                    <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenu" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu Overlay -->
        <div 
            x-show="mobileMenu" 
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            @click.away="mobileMenu = false"
            class="md:hidden mt-4 p-4 rounded-2xl bg-[#0d0d0d] border border-neutral-800 shadow-2xl flex flex-col gap-2"
            x-cloak
        >
            <template x-for="item in [
                { id: 'home', label: 'Home' },
                { id: 'about', label: 'About' },
                { id: 'skills', label: 'Skills' },
                { id: 'projects', label: 'Projects' },
                { id: 'contact', label: 'Contact' }
            ]">
                <a 
                    :href="'#' + item.id"
                    @click="activeSection = item.id; mobileMenu = false"
                    class="px-4 py-2.5 rounded-xl text-sm font-medium transition-colors flex items-center justify-between"
                    :class="activeSection === item.id 
                        ? 'bg-neutral-800 text-white font-semibold border border-neutral-700' 
                        : 'text-neutral-400 hover:text-white hover:bg-neutral-900'"
                >
                    <span x-text="item.label"></span>
                    <svg class="w-4 h-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </template>
            <div class="pt-2 border-t border-neutral-800">
                <a 
                    href="#contact" 
                    @click="mobileMenu = false"
                    class="w-full py-3 rounded-xl text-center text-sm font-bold bg-white text-black block hover:bg-neutral-200 transition-colors shadow-md"
                >
                    Contact Me Now
                </a>
            </div>
        </div>
    </div>
</header>
