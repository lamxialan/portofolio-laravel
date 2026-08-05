@props(['about'])

<section id="about" class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Title Header -->
        <div data-reveal class="flex flex-col items-center text-center mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-neutral-900 border border-neutral-800 text-xs font-mono text-neutral-400 mb-3 uppercase tracking-wider">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span>About Me</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Engineering & Design Mindset
            </h2>
            <p class="text-neutral-400 text-base max-w-2xl">
                Combining architectural rigor in backend development with high-end aesthetic precision in UI/UX design.
            </p>
        </div>

        <!-- 2 Column Overview Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch mb-16">
            
            <!-- Left Bio Card (7 cols) -->
            <div data-reveal class="lg:col-span-7 glass-card rounded-3xl p-8 sm:p-10 flex flex-col justify-between relative overflow-hidden">
                <div class="relative z-10 space-y-6">
                    <h3 class="text-2xl font-bold text-white tracking-tight">
                        Crafting Modern Digital Products
                    </h3>
                    <p class="text-neutral-300 text-base leading-relaxed">
                        {{ $about['summary'] }}
                    </p>
                    
                    <div class="p-6 rounded-2xl bg-neutral-950/80 border border-neutral-800/80 my-6">
                        <div class="flex items-start gap-4">
                            <div class="p-2.5 rounded-xl bg-neutral-800 text-white shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-white font-mono uppercase tracking-wider mb-1">Core Philosophy</h4>
                                <p class="text-neutral-400 text-sm italic leading-relaxed">
                                    "{{ $about['philosophy'] }}"
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Key Strength Tags -->
                    <div class="pt-4 border-t border-neutral-800/80">
                        <span class="text-xs font-mono text-neutral-500 uppercase tracking-wider block mb-3">CORE COMPETENCIES</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 rounded-lg bg-neutral-900 text-neutral-300 text-xs font-medium border border-neutral-800">Clean Architecture</span>
                            <span class="px-3 py-1.5 rounded-lg bg-neutral-900 text-neutral-300 text-xs font-medium border border-neutral-800">Laravel Eloquent ORM</span>
                            <span class="px-3 py-1.5 rounded-lg bg-neutral-900 text-neutral-300 text-xs font-medium border border-neutral-800">Monochrome Dark UI</span>
                            <span class="px-3 py-1.5 rounded-lg bg-neutral-900 text-neutral-300 text-xs font-medium border border-neutral-800">REST API Design</span>
                            <span class="px-3 py-1.5 rounded-lg bg-neutral-900 text-neutral-300 text-xs font-medium border border-neutral-800">Responsive Web Layouts</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Timeline / Highlights (5 cols) -->
            <div data-reveal class="lg:col-span-5 flex flex-col gap-6">
                @foreach($about['highlights'] as $highlight)
                    <div class="p-6 rounded-3xl bg-[#0f0f0f] border border-neutral-800/80 hover:border-neutral-700 transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl bg-neutral-900 border border-neutral-800 text-white shrink-0">
                                @if($highlight['icon'] === 'code')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                @elseif($highlight['icon'] === 'palette')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                                    </svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                @endif
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-white mb-1.5">{{ $highlight['title'] }}</h4>
                                <p class="text-xs text-neutral-400 leading-relaxed">{{ $highlight['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <!-- Career / Experience Timeline Track -->
        <div data-reveal class="glass-card rounded-3xl p-8 sm:p-10">
            <h3 class="text-xl font-bold text-white mb-8 font-mono flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-white"></span>
                <span>Career & Experience Timeline</span>
            </h3>

            <div class="space-y-8 relative before:absolute before:inset-0 before:left-3.5 before:w-0.5 before:bg-neutral-800">
                @foreach($about['timeline'] as $item)
                    <div class="relative pl-10 group">
                        <span class="absolute left-2 top-1.5 w-3 h-3 rounded-full bg-neutral-900 border-2 border-neutral-500 group-hover:border-white group-hover:scale-125 transition-all"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 mb-1">
                            <h4 class="text-base font-bold text-white group-hover:text-neutral-200 transition-colors">
                                {{ $item['role'] }} <span class="text-neutral-500 font-normal">at {{ $item['company'] }}</span>
                            </h4>
                            <span class="text-xs font-mono text-neutral-400 bg-neutral-900 px-3 py-1 rounded-full border border-neutral-800 w-max">
                                {{ $item['period'] }}
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-neutral-400 leading-relaxed">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
