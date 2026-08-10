@props(['skills' => null])

<section id="skills" class="py-20 bg-black text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-14" data-reveal>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-2">
                Technical Skills
            </h2>
            <p class="text-neutral-400 text-xs sm:text-sm font-medium">
                Core technologies & tools used to build modern, scalable web applications
            </p>
        </div>

        <!-- 4-Column Grid Tailored for Web Developer -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Category 1: Frontend Development -->
            <div data-reveal class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl p-6 hover:border-neutral-700 transition-all duration-300 shadow-xl">
                <h3 class="text-white font-bold text-base mb-5 tracking-tight flex items-center gap-2">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    Frontend Dev
                </h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        HTML5 &amp; CSS3
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        JavaScript (ES6+)
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Tailwind CSS
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Blade Templating
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Alpine.js
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Responsive UI
                    </span>
                </div>
            </div>

            <!-- Category 2: Backend Development -->
            <div data-reveal class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl p-6 hover:border-neutral-700 transition-all duration-300 shadow-xl">
                <h3 class="text-white font-bold text-base mb-5 tracking-tight flex items-center gap-2">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"/>
                    </svg>
                    Backend Dev
                </h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Laravel Framework
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        PHP 8+
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        RESTful API
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        MySQL Database
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        MVC Architecture
                    </span>
                </div>
            </div>

            <!-- Category 3: Developer Tools -->
            <div data-reveal class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl p-6 hover:border-neutral-700 transition-all duration-300 shadow-xl">
                <h3 class="text-white font-bold text-base mb-5 tracking-tight flex items-center gap-2">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a2 2 0 01-2 2 2 2 0 01-2-2V4zm-6 8a2 2 0 114 0v1a2 2 0 01-2 2 2 2 0 01-2-2v-1zm12 0a2 2 0 114 0v1a2 2 0 01-2 2 2 2 0 01-2-2v-1z"/>
                    </svg>
                    Tools &amp; Workflow
                </h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Git &amp; GitHub
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        VS Code
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Vite
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        NPM &amp; Composer
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Postman API
                    </span>
                </div>
            </div>

            <!-- Category 4: Web Automation & Integrations -->
            <div data-reveal class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl p-6 hover:border-neutral-700 transition-all duration-300 shadow-xl">
                <h3 class="text-white font-bold text-base mb-5 tracking-tight flex items-center gap-2">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Automation &amp; API
                </h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Node.js
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Discord.js Bot Dev
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Webhook Integration
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        JSON APIs
                    </span>
                    <span class="px-3.5 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-300 text-xs font-medium">
                        Performance Optimization
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
