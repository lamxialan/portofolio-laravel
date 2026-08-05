@props(['profile'])

<section id="contact" x-data="{ 
    loading: false, 
    successMsg: '', 
    errorMsg: '',
    copied: false,
    copyEmail() {
        navigator.clipboard.writeText('{{ $profile['email'] }}');
        this.copied = true;
        setTimeout(() => this.copied = false, 2500);
    },
    async submitForm(e) {
        this.loading = true;
        this.successMsg = '';
        this.errorMsg = '';
        const formData = new FormData(e.target);
        
        try {
            const res = await fetch('{{ route('contact.submit') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            });
            const data = await res.json();
            if (res.ok && data.success) {
                this.successMsg = data.message;
                e.target.reset();
            } else {
                this.errorMsg = data.message || 'Please check your inputs and try again.';
            }
        } catch (err) {
            this.errorMsg = 'An unexpected error occurred. Please try again later.';
        } finally {
            this.loading = false;
        }
    }
}" class="py-24 relative overflow-hidden bg-[#090909]">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div data-reveal class="flex flex-col items-center text-center mb-16">
            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-neutral-900 border border-neutral-800 text-xs font-mono text-neutral-400 mb-3 uppercase tracking-wider">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Get In Touch</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                Let's Build Something Great
            </h2>
            <p class="text-neutral-400 text-base max-w-2xl">
                Have a project in mind, need a full-stack Laravel engineer, or want to discuss design system ideas? Drop a message below!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left Contact Cards & Info (5 cols) -->
            <div data-reveal class="lg:col-span-5 space-y-6">
                
                <!-- Status Pill -->
                <div class="p-6 rounded-3xl glass-card border border-neutral-800 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                        </span>
                        <div>
                            <h4 class="text-xs font-mono text-neutral-400 uppercase tracking-wider">Status</h4>
                            <p class="text-sm font-semibold text-white">{{ $profile['availability'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Email Direct Card with Copy Action -->
                <div class="p-6 rounded-3xl glass-card border border-neutral-800 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono text-neutral-400 uppercase tracking-wider">Direct Email</span>
                        <button 
                            @click="copyEmail()" 
                            class="text-xs font-mono text-neutral-400 hover:text-white flex items-center gap-1 transition-colors"
                        >
                            <span x-text="copied ? 'Copied!' : 'Copy Email'"></span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </button>
                    </div>
                    <a href="mailto:{{ $profile['email'] }}" class="text-base sm:text-lg font-bold text-white hover:text-neutral-300 font-mono transition-colors block break-all">
                        {{ $profile['email'] }}
                    </a>
                </div>

                <!-- Location & Phone Card -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-5 rounded-2xl bg-[#121212] border border-neutral-800">
                        <span class="text-[11px] font-mono text-neutral-500 uppercase block mb-1">LOCATION</span>
                        <span class="text-sm font-semibold text-white font-mono">{{ $profile['location'] }}</span>
                    </div>
                    <div class="p-5 rounded-2xl bg-[#121212] border border-neutral-800">
                        <span class="text-[11px] font-mono text-neutral-500 uppercase block mb-1">PHONE</span>
                        <span class="text-sm font-semibold text-white font-mono">{{ $profile['phone'] }}</span>
                    </div>
                </div>

                <!-- Social Links Grid -->
                <div class="p-6 rounded-3xl glass-card border border-neutral-800">
                    <span class="text-xs font-mono text-neutral-400 uppercase tracking-wider block mb-4">SOCIAL NETWORKS</span>
                    <div class="flex items-center gap-3">
                        <a 
                            href="{{ $profile['github'] }}" 
                            target="_blank"
                            class="flex-1 py-3 rounded-xl bg-neutral-900 border border-neutral-800 hover:border-neutral-600 text-white flex items-center justify-center gap-2 text-xs font-mono transition-all"
                        >
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                            <span>GitHub</span>
                        </a>

                        <a 
                            href="{{ $profile['linkedin'] }}" 
                            target="_blank"
                            class="flex-1 py-3 rounded-xl bg-neutral-900 border border-neutral-800 hover:border-neutral-600 text-white flex items-center justify-center gap-2 text-xs font-mono transition-all"
                        >
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.75a1.62 1.62 0 1 0 0 3.24 1.62 1.62 0 0 0 0-3.24z"/></svg>
                            <span>LinkedIn</span>
                        </a>

                        <a 
                            href="{{ $profile['instagram'] }}" 
                            target="_blank"
                            class="flex-1 py-3 rounded-xl bg-neutral-900 border border-neutral-800 hover:border-neutral-600 text-white flex items-center justify-center gap-2 text-xs font-mono transition-all"
                        >
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            <span>Instagram</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Interactive Form (7 cols) -->
            <div data-reveal class="lg:col-span-7 glass-card rounded-3xl p-8 sm:p-10 border border-neutral-800 relative">
                
                <form @submit.prevent="submitForm($event)" class="space-y-6">
                    @csrf
                    
                    <!-- Alert Success Feedback -->
                    <div 
                        x-show="successMsg" 
                        x-transition 
                        class="p-4 rounded-2xl bg-emerald-950/80 border border-emerald-800 text-emerald-300 text-sm flex items-center gap-3"
                        x-cloak
                    >
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span x-text="successMsg"></span>
                    </div>

                    <!-- Alert Error Feedback -->
                    <div 
                        x-show="errorMsg" 
                        x-transition 
                        class="p-4 rounded-2xl bg-rose-950/80 border border-rose-800 text-rose-300 text-sm flex items-center gap-3"
                        x-cloak
                    >
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span x-text="errorMsg"></span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name Input -->
                        <div>
                            <label for="name" class="block text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Your Name</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required
                                placeholder="John Doe" 
                                class="w-full px-4 py-3.5 rounded-xl bg-[#121212] border border-neutral-800 text-white placeholder-neutral-600 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all text-sm"
                            >
                        </div>

                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Email Address</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                placeholder="john@example.com" 
                                class="w-full px-4 py-3.5 rounded-xl bg-[#121212] border border-neutral-800 text-white placeholder-neutral-600 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all text-sm"
                            >
                        </div>
                    </div>

                    <!-- Subject Input -->
                    <div>
                        <label for="subject" class="block text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Subject</label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            required
                            placeholder="Project Inquiry / Hiring Offer" 
                            class="w-full px-4 py-3.5 rounded-xl bg-[#121212] border border-neutral-800 text-white placeholder-neutral-600 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all text-sm"
                        >
                    </div>

                    <!-- Message TextArea -->
                    <div>
                        <label for="message" class="block text-xs font-mono text-neutral-400 uppercase tracking-wider mb-2">Your Message</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5" 
                            required
                            placeholder="Tell me about your project scope, goals, or timeline..." 
                            class="w-full px-4 py-3.5 rounded-xl bg-[#121212] border border-neutral-800 text-white placeholder-neutral-600 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition-all text-sm resize-none"
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="w-full py-4 rounded-xl text-sm font-bold bg-white text-black hover:bg-neutral-200 hover:scale-[1.01] active:scale-[0.99] transition-all duration-200 shadow-xl shadow-white/10 flex items-center justify-center gap-3 disabled:opacity-50"
                    >
                        <span x-show="!loading">Send Message</span>
                        <span x-show="loading" x-cloak>Sending Message...</span>
                        <svg x-show="!loading" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>

                </form>
            </div>

        </div>

    </div>
</section>
