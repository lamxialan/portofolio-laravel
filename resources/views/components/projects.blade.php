@props(['projects'])

<section 
    id="projects" 
    x-data="{ 
        currentCategory: 'All', 
        activeModal: null,
        canScrollLeft: false,
        canScrollRight: true,
        scrollProgress: 0,
        scrollLeft() {
            $refs.slider.scrollBy({ left: -380, behavior: 'smooth' });
        },
        scrollRight() {
            $refs.slider.scrollBy({ left: 380, behavior: 'smooth' });
        },
        updateScrollState() {
            const el = $refs.slider;
            if (!el) return;
            this.canScrollLeft = el.scrollLeft > 10;
            this.canScrollRight = el.scrollLeft < (el.scrollWidth - el.clientWidth - 10);
            const maxScroll = el.scrollWidth - el.clientWidth;
            this.scrollProgress = maxScroll > 0 ? (el.scrollLeft / maxScroll) * 100 : 0;
        }
    }" 
    x-init="updateScrollState(); window.addEventListener('resize', () => updateScrollState())"
    class="py-24 relative overflow-hidden"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div data-reveal class="flex flex-col items-center text-center mb-12">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-neutral-900 border border-neutral-800 text-xs font-mono text-neutral-400 mb-3 uppercase tracking-wider">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                <span>Portfolio Showcase</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Featured Projects & Systems
            </h2>
            <p class="text-neutral-400 text-base max-w-2xl">
                Explore custom Laravel platforms, web applications, and UI/UX design systems engineered for scale and beauty.
            </p>
        </div>

        <!-- Filter Category Tabs & Slider Controls Header -->
        <div data-reveal class="flex flex-col md:flex-row items-center justify-between gap-6 mb-10">
            
            <!-- Filter Tabs Bar -->
            <div class="inline-flex flex-wrap items-center justify-center gap-2 p-1.5 rounded-2xl bg-[#141414] border border-neutral-800">
                <template x-for="cat in ['All', 'Laravel System', 'Web Apps', 'UI/UX Design']">
                    <button 
                        @click="currentCategory = cat; $nextTick(() => { $refs.slider.scrollLeft = 0; updateScrollState(); })"
                        class="px-4 py-2 rounded-xl text-xs font-medium font-mono transition-all duration-200"
                        :class="currentCategory === cat 
                            ? 'bg-white text-black font-semibold shadow-md' 
                            : 'text-neutral-400 hover:text-white hover:bg-neutral-800'"
                        x-text="cat"
                    ></button>
                </template>
            </div>

            <!-- Carousel Navigation Arrows (Desktop & Mobile) -->
            <div class="hidden sm:flex items-center gap-3">
                <button 
                    @click="scrollLeft()" 
                    :disabled="!canScrollLeft"
                    aria-label="Previous Slide"
                    class="p-3 rounded-full bg-[#141414] border border-neutral-800 text-white hover:bg-neutral-800 hover:border-neutral-600 disabled:opacity-30 disabled:cursor-not-allowed transition-all duration-200 focus:outline-none"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button 
                    @click="scrollRight()" 
                    :disabled="!canScrollRight"
                    aria-label="Next Slide"
                    class="p-3 rounded-full bg-[#141414] border border-neutral-800 text-white hover:bg-neutral-800 hover:border-neutral-600 disabled:opacity-30 disabled:cursor-not-allowed transition-all duration-200 focus:outline-none"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

        </div>

        <!-- Modern Touch-Enabled Horizontal Slider Container -->
        <div data-reveal class="relative group">
            
            <div 
                x-ref="slider"
                @scroll.debounce.15ms="updateScrollState()"
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 pt-2 no-scrollbar px-1"
            >
                @foreach($projects as $project)
                    <div 
                        x-show="currentCategory === 'All' || currentCategory === '{{ $project['category'] }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        class="snap-start shrink-0 w-[290px] sm:w-[360px] md:w-[380px] glass-card rounded-3xl overflow-hidden flex flex-col justify-between group/card border border-neutral-800/80 hover:border-neutral-600 transition-all duration-300"
                    >
                        <div>
                            <!-- Project Card Image Header with Zoom Effect -->
                            <div class="relative h-52 w-full overflow-hidden bg-neutral-900">
                                <img 
                                    src="{{ $project['image'] }}" 
                                    alt="{{ $project['title'] }}" 
                                    class="w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-500 opacity-90 group-hover/card:opacity-100"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-[#121212] via-transparent to-transparent opacity-80"></div>
                                
                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[11px] font-mono font-semibold bg-neutral-950/80 backdrop-blur-md border border-neutral-700 text-neutral-200">
                                        {{ $project['category'] }}
                                    </span>
                                </div>

                                <!-- Year Pill -->
                                <div class="absolute top-4 right-4">
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono bg-neutral-900/90 text-neutral-400 border border-neutral-800">
                                        {{ $project['year'] }}
                                    </span>
                                </div>
                            </div>

                            <!-- Card Content -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2 group-hover/card:text-neutral-200 transition-colors">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="text-xs sm:text-sm text-neutral-400 leading-relaxed mb-6 line-clamp-3">
                                    {{ $project['short_desc'] }}
                                </p>

                                <!-- Tech Stack Badges -->
                                <div class="flex flex-wrap gap-1.5 mb-6">
                                    @foreach($project['tags'] as $tag)
                                        <span class="px-2.5 py-1 rounded-md text-[11px] font-mono bg-neutral-900 border border-neutral-800 text-neutral-300">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Card Action Footer -->
                        <div class="px-6 pb-6 pt-2 border-t border-neutral-800/80 flex items-center justify-between gap-3">
                            <button 
                                @click="activeModal = {{ json_encode($project) }}"
                                class="text-xs font-semibold font-mono text-neutral-300 hover:text-white flex items-center gap-1.5 group/btn"
                            >
                                <span>View Details</span>
                                <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>

                            <div class="flex items-center gap-2">
                                @if(isset($project['github_url']))
                                    <a 
                                        href="{{ $project['github_url'] }}" 
                                        target="_blank" 
                                        rel="noopener noreferrer"
                                        aria-label="View Source Code"
                                        class="p-2 rounded-xl bg-neutral-900 border border-neutral-800 text-neutral-400 hover:text-white hover:border-neutral-700 transition-colors"
                                    >
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                    </a>
                                @endif
                                
                                @if(isset($project['demo_url']))
                                    <a 
                                        href="{{ $project['demo_url'] }}" 
                                        target="_blank" 
                                        rel="noopener noreferrer"
                                        class="px-3 py-1.5 rounded-xl bg-white text-black text-xs font-bold hover:bg-neutral-200 transition-colors flex items-center gap-1"
                                    >
                                        <span>Live Demo</span>
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Minimalist Scroll Progress Track Indicator -->
            <div class="mt-4 flex items-center justify-between px-2">
                <div class="w-48 sm:w-64 h-1 rounded-full bg-neutral-900 overflow-hidden border border-neutral-800">
                    <div 
                        class="h-full bg-white rounded-full transition-all duration-150 ease-out"
                        :style="'width: ' + Math.max(15, scrollProgress) + '%'"
                    ></div>
                </div>

                <!-- Mobile Swipe Hint -->
                <span class="text-[11px] font-mono text-neutral-500 flex items-center gap-1">
                    <span>Swipe or scroll</span>
                    <svg class="w-3.5 h-3.5 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </div>

        </div>

        <!-- Project Detail Modal Popup -->
        <div 
            x-show="activeModal" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-md"
            x-cloak
        >
            <div 
                @click.away="activeModal = null"
                class="bg-[#0f0f0f] border border-neutral-800 rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl relative flex flex-col max-h-[90vh]"
            >
                <!-- Modal Header Image -->
                <div class="relative h-64 w-full bg-neutral-900 shrink-0">
                    <img :src="activeModal?.image" :alt="activeModal?.title" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f0f0f] via-transparent to-transparent"></div>
                    
                    <button 
                        @click="activeModal = null" 
                        class="absolute top-4 right-4 p-2.5 rounded-full bg-black/60 text-white hover:bg-neutral-800 transition-colors border border-neutral-700 focus:outline-none"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6 sm:p-8 overflow-y-auto space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 rounded-full text-xs font-mono bg-neutral-900 text-neutral-300 border border-neutral-800" x-text="activeModal?.category"></span>
                        <span class="text-xs font-mono text-neutral-500" x-text="activeModal?.year"></span>
                    </div>

                    <h3 class="text-2xl font-bold text-white" x-text="activeModal?.title"></h3>

                    <p class="text-sm text-neutral-300 leading-relaxed" x-text="activeModal?.full_desc || activeModal?.short_desc"></p>

                    <div>
                        <h4 class="text-xs font-mono text-neutral-400 uppercase mb-3">Technologies Used</h4>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="tag in activeModal?.tags || []">
                                <span class="px-3 py-1 rounded-lg text-xs font-mono bg-neutral-900 border border-neutral-800 text-neutral-200" x-text="tag"></span>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="p-6 border-t border-neutral-800/80 bg-[#121212] flex items-center justify-end gap-3 shrink-0">
                    <button @click="activeModal = null" class="px-5 py-2 rounded-xl text-xs font-mono text-neutral-400 hover:text-white">Close</button>
                    <a :href="activeModal?.github_url" target="_blank" class="px-4 py-2 rounded-xl bg-neutral-900 border border-neutral-800 text-white text-xs font-bold hover:bg-neutral-800">Source Code</a>
                    <a :href="activeModal?.demo_url" target="_blank" class="px-5 py-2 rounded-xl bg-white text-black text-xs font-bold hover:bg-neutral-200">Live Demo</a>
                </div>
            </div>
        </div>

    </div>
</section>
