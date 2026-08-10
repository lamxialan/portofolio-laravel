@props(['about' => null, 'stats' => null])

<section id="about" class="py-20 bg-black text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header & Main Paragraph -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-reveal>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mb-4">
                About Me
            </h2>
            <p class="text-neutral-400 text-xs sm:text-sm leading-relaxed font-normal">
                I'm a web developer passionate about crafting clean, intuitive, and responsive digital experiences. I focus on turning ideas into seamless interfaces by understanding user needs, designing thoughtful UI layouts, and ensuring smooth interactions across devices.
            </p>
        </div>

        <!-- Subheading: My Approach -->
        <div class="mb-14" data-reveal>
            <h3 class="text-center text-white font-bold text-base sm:text-lg mb-8 tracking-tight">
                My Approach
            </h3>

            <!-- 3-Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                
                <!-- Step 01 -->
                <div class="bg-[#0b0b0b] border border-neutral-800/90 rounded-2xl p-4 flex items-center gap-3.5 hover:border-neutral-700 transition-all duration-300 shadow-md">
                    <span class="w-9 h-9 rounded-xl bg-neutral-800/90 text-white font-bold text-xs flex items-center justify-center flex-shrink-0">
                        01
                    </span>
                    <span class="text-neutral-200 text-xs sm:text-sm font-medium">
                        Understand users &amp; goals
                    </span>
                </div>

                <!-- Step 02 -->
                <div class="bg-[#0b0b0b] border border-neutral-800/90 rounded-2xl p-4 flex items-center gap-3.5 hover:border-neutral-700 transition-all duration-300 shadow-md">
                    <span class="w-9 h-9 rounded-xl bg-neutral-800/90 text-white font-bold text-xs flex items-center justify-center flex-shrink-0">
                        02
                    </span>
                    <span class="text-neutral-200 text-xs sm:text-sm font-medium">
                        Create clean UI layouts
                    </span>
                </div>

                <!-- Step 03 -->
                <div class="bg-[#0b0b0b] border border-neutral-800/90 rounded-2xl p-4 flex items-center gap-3.5 hover:border-neutral-700 transition-all duration-300 shadow-md">
                    <span class="w-9 h-9 rounded-xl bg-neutral-800/90 text-white font-bold text-xs flex items-center justify-center flex-shrink-0">
                        03
                    </span>
                    <span class="text-neutral-200 text-xs sm:text-sm font-medium">
                        Responsive experiences
                    </span>
                </div>

            </div>
        </div>

        <!-- Stats / Big Numbers Strip -->
        <div class="grid grid-cols-3 gap-6 text-center max-w-2xl mx-auto pt-6" data-reveal>
            <!-- Stat 1 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    2+
                </span>
                <span class="text-neutral-400 text-[11px] sm:text-xs font-medium mt-1">
                    Years Of Experience
                </span>
            </div>

            <!-- Stat 2 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    2+
                </span>
                <span class="text-neutral-400 text-[11px] sm:text-xs font-medium mt-1">
                    Projects Completed
                </span>
            </div>

            <!-- Stat 3 -->
            <div class="flex flex-col items-center">
                <span class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    1+
                </span>
                <span class="text-neutral-400 text-[11px] sm:text-xs font-medium mt-1">
                    Clients Served
                </span>
            </div>
        </div>

    </div>
</section>
