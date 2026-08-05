@props(['skills'])

<section id="skills" x-data="{ currentCategory: 'All' }" class="py-24 relative overflow-hidden bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div data-reveal class="flex flex-col items-center text-center mb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-neutral-900 border border-neutral-800 text-xs font-mono text-neutral-400 mb-3 uppercase tracking-wider">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
                <span>Tech Stack & Tools</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Skills & Technical Expertise
            </h2>
            <p class="text-neutral-400 text-base max-w-2xl">
                A comprehensive showcase of languages, frameworks, design systems, and tools I use to deliver end-to-end web applications.
            </p>
        </div>

        <!-- Filter Tabs Bar -->
        <div data-reveal class="flex items-center justify-center mb-12">
            <div class="inline-flex flex-wrap items-center justify-center gap-2 p-1.5 rounded-2xl bg-[#141414] border border-neutral-800">
                <template x-for="cat in ['All', 'Backend', 'Frontend', 'Design', 'Database', 'Tools']">
                    <button 
                        @click="currentCategory = cat"
                        class="px-4 py-2 rounded-xl text-xs font-medium font-mono transition-all duration-200"
                        :class="currentCategory === cat 
                            ? 'bg-white text-black font-semibold shadow-md' 
                            : 'text-neutral-400 hover:text-white hover:bg-neutral-800'"
                        x-text="cat"
                    ></button>
                </template>
            </div>
        </div>

        <!-- Skills Grid -->
        <div data-reveal class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($skills as $skill)
                <div 
                    x-show="currentCategory === 'All' || currentCategory === '{{ $skill['category'] }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="glass-card rounded-2xl p-6 relative group border border-neutral-800/80 hover:border-neutral-600 transition-all duration-300"
                >
                    <!-- Top Icon & Badge -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-900 border border-neutral-800 flex items-center justify-center text-white group-hover:scale-110 group-hover:bg-neutral-800 transition-all duration-300">
                            @if($skill['icon'] === 'laravel')
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            @elseif($skill['icon'] === 'php')
                                <span class="font-bold text-xs font-mono">PHP</span>
                            @elseif($skill['icon'] === 'tailwind')
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 6c-3.3 0-5.3 1.6-6 4.9 1.3-1.3 2.8-1.8 4.5-1.4 1 .2 1.7 1 2.5 1.8C14.3 12.7 16.1 14 20 14c3.3 0 5.3-1.6 6-4.9-1.3 1.3-2.8 1.8-4.5 1.4-1-.2-1.7-1-2.5-1.8C17.7 7.3 15.9 6 12 6zM6 14c-3.3 0-5.3 1.6-6 4.9 1.3-1.3 2.8-1.8 4.5-1.4 1 .2 1.7 1 2.5 1.8C8.3 20.7 10.1 22 14 22c3.3 0 5.3-1.6 6-4.9-1.3 1.3-2.8 1.8-4.5 1.4-1-.2-1.7-1-2.5-1.8C11.7 15.3 9.9 14 6 14z"/></svg>
                            @elseif($skill['icon'] === 'javascript')
                                <span class="font-bold text-xs font-mono">JS</span>
                            @elseif($skill['icon'] === 'mysql')
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                            @elseif($skill['icon'] === 'design')
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343"/></svg>
                            @elseif($skill['icon'] === 'figma')
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 2h4a4 4 0 0 1 0 8H8V2zm0 8h4a4 4 0 0 1 4 4 4 4 0 0 1-4 4H8v-8zm0 8h4a4 4 0 0 1 0 8 4 4 0 0 1-4-4v-4zM4 10a4 4 0 0 1 4-4v4H4zm0 0a4 4 0 0 0 4 4V10H4z"/></svg>
                            @else
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            @endif
                        </div>

                        <span class="px-2.5 py-1 rounded-full text-[10px] font-mono font-semibold bg-neutral-900 border border-neutral-800 text-neutral-300">
                            {{ $skill['level'] }}
                        </span>
                    </div>

                    <!-- Skill Title & Description -->
                    <h3 class="text-lg font-bold text-white mb-1 group-hover:text-neutral-200 transition-colors">
                        {{ $skill['name'] }}
                    </h3>
                    <p class="text-xs text-neutral-400 mb-4 leading-relaxed line-clamp-2">
                        {{ $skill['desc'] }}
                    </p>

                    <!-- Progress Bar Indicator -->
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between text-[11px] font-mono text-neutral-400">
                            <span>Proficiency</span>
                            <span class="text-white font-semibold">{{ $skill['percentage'] }}%</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-neutral-900 overflow-hidden border border-neutral-800">
                            <div 
                                class="h-full rounded-full bg-white transition-all duration-1000 ease-out" 
                                style="width: {{ $skill['percentage'] }}%"
                            ></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
