@props(['projects' => null])

<section id="projects" class="py-12 md:py-20 bg-black text-white relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12" data-reveal>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-3">
                Featured Projects
            </h2>
            <p class="text-neutral-400 text-xs sm:text-sm font-medium">
                Selected works crafted with modern web technologies. Drag, swipe or click any card to explore.
            </p>
        </div>

    </div>

    <!-- Carousel Container with Side Navigation Buttons -->
    <div class="w-full relative max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        
        <!-- Side Navigation Button: Left (Previous) -->
        <button 
            type="button" 
            aria-label="Previous Slide" 
            class="projects-btn-prev absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-neutral-900/90 border border-neutral-700/80 text-white backdrop-blur-md flex items-center justify-center shadow-2xl hover:bg-white hover:text-black transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none cursor-pointer"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <!-- Side Navigation Button: Right (Next) -->
        <button 
            type="button" 
            aria-label="Next Slide" 
            class="projects-btn-next absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-neutral-900/90 border border-neutral-700/80 text-white backdrop-blur-md flex items-center justify-center shadow-2xl hover:bg-white hover:text-black transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none cursor-pointer"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Swiper 3D Coverflow Carousel Container -->
        <div class="swiper projects-coverflow-swiper !py-8 !px-2 select-none">
            <div class="swiper-wrapper">
                @if(isset($projects) && count($projects) > 0)
                    @foreach($projects as $project)
                        <div class="swiper-slide !w-[300px] sm:!w-[370px] md:!w-[420px] cursor-pointer">
                            
                            <!-- Project Card Item -->
                            <div class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl overflow-hidden flex flex-col justify-between h-[460px] shadow-2xl hover:border-neutral-500 transition-all duration-500 ease-out group">
                                
                                <!-- Thumbnail Image -->
                                <div class="relative overflow-hidden h-52 bg-neutral-900">
                                    <img 
                                        src="{{ $project['image'] }}" 
                                        alt="{{ $project['title'] }}" 
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
                                        draggable="false"
                                    />
                                    <div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-neutral-700/80 text-[11px] font-semibold text-neutral-300 pointer-events-none">
                                        {{ $project['category'] ?? 'Web App' }}
                                    </div>
                                </div>

                                <!-- Card Content -->
                                <div class="p-6 flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-white font-bold text-base sm:text-lg mb-2 leading-snug group-hover:text-neutral-200 transition-colors">
                                            {{ $project['title'] }}
                                        </h3>
                                        <p class="text-neutral-400 text-xs leading-relaxed mb-4 line-clamp-2">
                                            {{ $project['short_desc'] ?? $project['full_desc'] }}
                                        </p>
                                    </div>

                                    <!-- Tags & Action Links -->
                                    <div>
                                        <div class="flex flex-wrap gap-1.5 mb-4">
                                            @foreach(array_slice($project['tags'], 0, 4) as $tag)
                                                <span class="px-2.5 py-1 rounded-full bg-[#161616] border border-neutral-800 text-neutral-400 text-[10px] font-medium">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>

                                        <div class="pt-3 border-t border-neutral-800/80 flex items-center justify-between">
                                            <a 
                                                href="{{ $project['demo_url'] ?? '#' }}" 
                                                target="_blank" 
                                                rel="noopener noreferrer"
                                                class="text-xs font-semibold text-white hover:text-neutral-300 inline-flex items-center gap-1.5 transition-colors"
                                            >
                                                <span>View Project</span>
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                                </svg>
                                            </a>

                                            <a 
                                                href="{{ $project['github_url'] ?? '#' }}" 
                                                target="_blank" 
                                                rel="noopener noreferrer"
                                                class="text-neutral-500 hover:text-white transition-colors"
                                                aria-label="GitHub Repository"
                                            >
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                                    <path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Swiper Pagination Bullets -->
            <div class="swiper-pagination projects-swiper-pagination !relative !bottom-0 mt-8 flex justify-center gap-1"></div>
        </div>

    </div>
</section>

<!-- Coverflow Custom CSS & JS Initialization -->
<style>
    .projects-coverflow-swiper .swiper-pagination-bullet {
        background: #555555;
        opacity: 0.4;
        width: 8px;
        height: 8px;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .projects-coverflow-swiper .swiper-pagination-bullet-active {
        background: #ffffff;
        opacity: 1;
        width: 28px;
        border-radius: 9999px;
    }
    .projects-coverflow-swiper .swiper-slide {
        transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1), filter 0.7s ease;
        opacity: 0.35;
        filter: brightness(0.65) blur(0.5px);
    }
    .projects-coverflow-swiper .swiper-slide-active {
        opacity: 1 !important;
        filter: brightness(1) blur(0px) !important;
        z-index: 20;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const initSwiper = () => {
            if (typeof Swiper !== 'undefined') {
                new Swiper('.projects-coverflow-swiper', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    initialSlide: 0,
                    loop: false,
                    rewind: true,
                    speed: 600,
                    slideToClickedSlide: true,
                    simulateTouch: true,
                    allowTouchMove: true,
                    coverflowEffect: {
                        rotate: 14,
                        stretch: 0,
                        depth: 140,
                        modifier: 1.1,
                        slideShadows: false,
                    },
                    pagination: {
                        el: '.projects-swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.projects-btn-next',
                        prevEl: '.projects-btn-prev',
                    },
                });
            }
        };

        if (typeof Swiper !== 'undefined') {
            initSwiper();
        } else {
            window.addEventListener('load', initSwiper);
        }
    });
</script>
