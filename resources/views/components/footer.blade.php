@props(['profile' => null])

<footer class="py-12 border-t border-neutral-900 bg-black text-neutral-400">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <!-- Left Branding with Profile Image Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('about') }}" class="w-9 h-9 rounded-full border border-neutral-700/80 overflow-hidden flex items-center justify-center bg-neutral-900 shadow-md hover:border-neutral-400 transition-colors">
                    <img src="{{ asset('images/profile.png') }}" alt="Profile Logo" class="w-full h-full object-cover" />
                </a>
                <div class="flex flex-col">
                    <span class="font-bold text-white text-xs tracking-tight">
                        {{ $profile['name'] ?? 'Muh Febryant Hidayatullah' }}
                    </span>
                    <span class="text-[10px] text-neutral-500 font-mono">
                        {{ $profile['role'] ?? 'Web Developer' }}
                    </span>
                </div>
            </div>

            <!-- Center Multi-Page Links -->
            <div class="flex items-center gap-6 text-xs">
                <a href="{{ route('about') }}" class="hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-white font-semibold' : '' }}">About</a>
                <a href="{{ route('skills') }}" class="hover:text-white transition-colors {{ request()->routeIs('skills') ? 'text-white font-semibold' : '' }}">Skills</a>
                <a href="{{ route('projects') }}" class="hover:text-white transition-colors {{ request()->routeIs('projects') ? 'text-white font-semibold' : '' }}">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-white transition-colors {{ request()->routeIs('contact') ? 'text-white font-semibold' : '' }}">Contact</a>
            </div>

            <!-- Right Copyright -->
            <div class="text-xs text-neutral-500 font-mono text-center md:text-right">
                <p>&copy; {{ date('Y') }} {{ $profile['name'] ?? 'Muh Febryant Hidayatullah' }}. All rights reserved.</p>
            </div>

        </div>
    </div>
</footer>
