@props(['profile', 'stats'])

<section id="home" class="relative min-h-screen pt-32 pb-20 flex items-center justify-center overflow-hidden">
    <!-- Ambient Background Radial Glows -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[450px] bg-gradient-to-tr from-white/[0.04] to-transparent rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Left Typography & CTAs (7 cols) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left">

                <!-- Main Name Focal Point (Clean, Tight Spacing with Monochrome Wave Shimmer) -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white leading-[1.1] mb-4 animate-slide-up opacity-0 delay-100">
                    <span class="block mb-1 text-white">Muh Febryant</span>
                    <span class="block animate-shimmer-monochrome">Hidayatullah</span>
                </h1>

                <!-- Dynamic Role Sub-headline -->
                <div class="flex items-center gap-3 mb-6 animate-slide-up opacity-0 delay-200">
                    <span class="h-px w-10 bg-neutral-500"></span>
                    <h2 class="text-lg sm:text-2xl font-semibold text-neutral-300 font-mono tracking-tight">
                        {{ $profile['role'] ?? 'Full-Stack Developer & UI/UX Designer' }}
                    </h2>
                </div>

                <!-- Impactful Description -->
                <p class="text-base sm:text-lg text-neutral-400 font-normal leading-relaxed max-w-2xl mb-8 animate-slide-up opacity-0 delay-300">
                    {{ $profile['tagline'] ?? 'Architecting modern web applications with bulletproof Laravel backends and minimalist monochrome user interfaces.' }}
                </p>

                <!-- High Contrast Action CTA Buttons -->
                <div class="flex flex-wrap items-center gap-4 w-full sm:w-auto mb-12 animate-slide-up opacity-0 delay-400">
                    <a 
                        href="#projects" 
                        class="w-full sm:w-auto px-8 py-4 rounded-xl text-sm font-bold bg-white text-black hover:bg-neutral-200 hover:scale-[1.03] active:scale-[0.97] transition-all duration-300 shadow-xl shadow-white/10 flex items-center justify-center gap-3 group"
                    >
                        <span>Explore Projects</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>

                    <a 
                        href="#contact" 
                        class="w-full sm:w-auto px-8 py-4 rounded-xl text-sm font-semibold bg-[#121212] text-white border border-neutral-700 hover:bg-neutral-800 hover:border-neutral-400 hover:scale-[1.03] active:scale-[0.97] transition-all duration-300 shadow-lg flex items-center justify-center gap-3"
                    >
                        <span>Contact Me</span>
                        <svg class="w-4 h-4 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>

                <!-- Quick Tech Stack Badges Strip -->
                <div class="flex items-center gap-3 pt-4 border-t border-neutral-800/60 w-full animate-slide-up opacity-0 delay-500">
                    <span class="text-xs font-mono text-neutral-500 uppercase tracking-wider">CORE TECH:</span>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-neutral-600 transition-colors">Laravel 11</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-neutral-600 transition-colors">PHP 8.3</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-neutral-600 transition-colors">Tailwind CSS</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-neutral-600 transition-colors">MySQL</span>
                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300 hover:border-neutral-600 transition-colors">UI/UX</span>
                    </div>
                </div>

            </div>

            <!-- Hero Right Glass Graphic Card (5 cols) -->
            <div class="lg:col-span-5 relative flex justify-center animate-slide-up opacity-0 delay-300">
                
                <!-- Glowing Backdrop Box -->
                <div class="absolute inset-0 bg-gradient-to-tr from-white/10 to-transparent rounded-3xl blur-2xl opacity-40"></div>

                <!-- Glass Card Code Mockup -->
                <div class="w-full max-w-md glass-card rounded-3xl p-6 relative z-10 shadow-2xl border border-neutral-800/80">
                    
                    <!-- Window Controls -->
                    <div class="flex items-center justify-between pb-4 mb-4 border-b border-neutral-800">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-neutral-700"></span>
                            <span class="w-3 h-3 rounded-full bg-neutral-700"></span>
                            <span class="w-3 h-3 rounded-full bg-neutral-700"></span>
                        </div>
                        <span class="text-[11px] font-mono text-neutral-400">DeveloperProfile.php</span>
                        <div class="w-4"></div>
                    </div>

                    <!-- Code Snippet Visual -->
                    <div class="font-mono text-xs text-neutral-300 space-y-2 leading-relaxed">
                        <p class="text-neutral-500">// Muh Febryant Hidayatullah</p>
                        <p><span class="text-neutral-400">class</span> <span class="text-white font-bold">FebryantPortfolio</span> <span class="text-neutral-400">extends</span> <span class="text-neutral-300">LaravelEngineer</span></p>
                        <p class="text-neutral-400">{</p>
                        <div class="pl-4 space-y-1.5 border-l border-neutral-800 my-1">
                            <p><span class="text-neutral-500">public string</span> <span class="text-white">$role</span> = <span class="text-neutral-300">'Full-Stack & UI/UX'</span>;</p>
                            <p><span class="text-neutral-500">public array</span> <span class="text-white">$stack</span> = [</p>
                            <p class="pl-4 text-neutral-400">'Laravel', 'PHP', 'Tailwind', 'JS', 'MySQL'</p>
                            <p><span class="text-neutral-500">];</span></p>
                            <p><span class="text-neutral-500">public bool</span> <span class="text-white">$cleanCode</span> = <span class="text-emerald-400 font-bold">true</span>;</p>
                        </div>
                        <p class="text-neutral-400">}</p>
                    </div>

                    <!-- Mini Live Activity Indicator -->
                    <div class="mt-6 pt-4 border-t border-neutral-800/80 flex items-center justify-between text-xs font-mono text-neutral-400">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>System Status: Online</span>
                        </div>
                        <span class="text-neutral-500">Laravel v11.x</span>
                    </div>

                </div>

            </div>

        </div>

        <!-- Metrics & Stats Counter Strip -->
        <div data-reveal class="mt-20 pt-10 border-t border-neutral-800/80 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            @foreach($stats as $stat)
                <div class="p-6 rounded-2xl bg-[#0f0f0f] border border-neutral-800/60 hover:border-neutral-600 transition-all duration-300 hover:-translate-y-1">
                    <div class="text-3xl sm:text-4xl font-extrabold text-white font-mono mb-1">
                        {{ $stat['value'] }}
                    </div>
                    <div class="text-xs font-medium text-neutral-400 tracking-wide uppercase">
                        {{ $stat['label'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
