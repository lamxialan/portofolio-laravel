@props(['profile' => null])

<section id="home" class="relative pt-36 pb-20 md:pt-44 md:pb-32 overflow-hidden bg-black text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Typography & CTAs (7 Columns) -->
            <div class="lg:col-span-7 flex flex-col items-start text-left">
                
                <!-- Small Intro Badge -->
                <span class="text-neutral-400 font-medium text-base sm:text-lg mb-3 tracking-wide">
                    I am {{ $profile['name'] ?? 'Muh Febryant Hidayatullah' }}
                </span>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-6xl lg:text-6xl font-extrabold tracking-tight text-white leading-[1.15] mb-6">
                    {{ $profile['role'] ?? 'Web Developer' }}
                </h1>

                <!-- Subtitle / Paragraph -->
                <p class="text-neutral-400 text-sm sm:text-base leading-relaxed max-w-lg mb-8">
                    {{ $profile['tagline'] ?? 'Blending thoughtful UI design with clean, responsive development to create websites that look great and perform flawlessly.' }}
                </p>



                <!-- Social Icons -->
                <div class="flex items-center gap-5 text-neutral-400">
                    <!-- Discord -->
                    <a 
                        href="{{ $profile['discord'] ?? 'https://discord.com' }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-white transition-colors p-1"
                        aria-label="Discord Profile"
                    >
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994.021-.041.001-.09-.041-.106a13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.893.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.028zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                    </a>
                    
                    <!-- GitHub -->
                    <a 
                        href="{{ $profile['github'] ?? 'https://github.com' }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-white transition-colors p-1"
                        aria-label="GitHub Profile"
                    >
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a 
                        href="{{ $profile['instagram'] ?? 'https://instagram.com' }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-white transition-colors p-1"
                        aria-label="Instagram Profile"
                    >
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>

                    <!-- TikTok -->
                    <a 
                        href="{{ $profile['tiktok'] ?? 'https://tiktok.com' }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="hover:text-white transition-colors p-1"
                        aria-label="TikTok Profile"
                    >
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.24-2.36.64-4.74 2.33-6.38 1.65-1.65 4.04-2.5 6.38-2.26.02 1.42-.02 2.84-.02 4.26-.95-.14-1.94-.02-2.8.36-.88.37-1.62 1.05-2.02 1.91-.45.92-.47 2.03-.12 2.99.34.96 1.08 1.73 2.01 2.11.96.4 2.07.38 3.01-.03.95-.4 1.69-1.18 2.02-2.15.22-.64.29-1.33.28-2.01.03-5.24.01-10.49.02-15.73z"/>
                        </svg>
                    </a>
                </div>

            </div>

            <!-- Right Grayscale Profile Photo (5 Columns) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div class="relative group max-w-sm w-full">
                    <!-- Photo Container -->
                    <div class="overflow-hidden rounded-3xl border border-neutral-800 bg-[#0d0d0d] shadow-2xl">
                        <img 
                            src="{{ asset($profile['profile_image'] ?? 'images/profile.png') }}" 
                            alt="Profile Photo" 
                            class="w-full h-[420px] object-cover hover:scale-105 transition-all duration-700 ease-out"
                        />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
