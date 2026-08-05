@props(['profile'])

<footer class="py-12 border-t border-neutral-800/80 bg-[#060606] relative z-10 text-neutral-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <!-- Left Branding -->
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-neutral-900 border border-neutral-800 flex items-center justify-center font-bold text-white tracking-widest text-xs">
                    {{ $profile['initials'] ?? 'MFH' }}
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-white text-xs tracking-tight">
                        {{ $profile['name'] }}
                    </span>
                    <span class="text-[11px] font-mono text-neutral-500">
                        Full-Stack Developer & UI/UX Designer
                    </span>
                </div>
            </div>

            <!-- Center Navigation Links -->
            <div class="flex items-center gap-6 text-xs font-mono">
                <a href="#home" class="hover:text-white transition-colors">Home</a>
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#skills" class="hover:text-white transition-colors">Skills</a>
                <a href="#projects" class="hover:text-white transition-colors">Projects</a>
                <a href="#contact" class="hover:text-white transition-colors">Contact</a>
            </div>

            <!-- Right Copyright & Tech Badge -->
            <div class="text-right text-xs font-mono text-neutral-500">
                <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. All rights reserved.</p>
                <p class="text-[11px] text-neutral-600">Built with Laravel &amp; Tailwind CSS</p>
            </div>

        </div>
    </div>
</footer>
