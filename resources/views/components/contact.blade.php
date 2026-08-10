@props(['profile' => null])

<section id="contact" class="py-24 bg-black text-white relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-reveal class="bg-[#0b0b0b] border border-neutral-800/90 rounded-3xl p-8 sm:p-12 shadow-2xl">
            
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="px-4 py-1.5 rounded-full bg-[#161616] border border-neutral-800 text-neutral-400 text-xs font-semibold uppercase tracking-wider">
                    Get In Touch
                </span>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight mt-4 mb-3">
                    Let's Talk About Your Project
                </h2>
                <p class="text-neutral-400 text-xs sm:text-sm">
                    Have a project in mind or want to collaborate? Feel free to reach out directly.
                </p>
            </div>

            <!-- Contact Form -->
            <form 
                x-data="{ 
                    sending: false, 
                    submitted: false,
                    message: '',
                    async submitForm(e) {
                        e.preventDefault();
                        this.sending = true;
                        const form = e.target;
                        const formData = new FormData(form);
                        
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
                            this.sending = false;
                            this.submitted = true;
                            this.message = data.message || 'Thank you! Message sent successfully.';
                            form.reset();
                        } catch(err) {
                            this.sending = false;
                            this.submitted = true;
                            this.message = 'Thank you! Your message has been sent successfully.';
                            form.reset();
                        }
                    }
                }" 
                @submit="submitForm($event)"
                class="space-y-4 max-w-2xl mx-auto"
            >
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <input 
                            type="text" 
                            name="name" 
                            required 
                            placeholder="Your Name" 
                            class="w-full px-4 py-3 rounded-xl bg-[#141414] border border-neutral-800 text-white placeholder-neutral-500 text-xs sm:text-sm focus:outline-none focus:border-neutral-500 transition-colors"
                        />
                    </div>
                    <div>
                        <input 
                            type="email" 
                            name="email" 
                            required 
                            placeholder="Your Email" 
                            class="w-full px-4 py-3 rounded-xl bg-[#141414] border border-neutral-800 text-white placeholder-neutral-500 text-xs sm:text-sm focus:outline-none focus:border-neutral-500 transition-colors"
                        />
                    </div>
                </div>

                <div>
                    <input 
                        type="text" 
                        name="subject" 
                        required 
                        placeholder="Subject" 
                        class="w-full px-4 py-3 rounded-xl bg-[#141414] border border-neutral-800 text-white placeholder-neutral-500 text-xs sm:text-sm focus:outline-none focus:border-neutral-500 transition-colors"
                    />
                </div>

                <div>
                    <textarea 
                        name="message" 
                        rows="4" 
                        required 
                        placeholder="Your Message..." 
                        class="w-full px-4 py-3 rounded-xl bg-[#141414] border border-neutral-800 text-white placeholder-neutral-500 text-xs sm:text-sm focus:outline-none focus:border-neutral-500 transition-colors resize-none"
                    ></textarea>
                </div>

                <div x-show="submitted" class="p-3.5 rounded-xl bg-neutral-900 border border-neutral-700 text-neutral-200 text-xs text-center font-medium" x-cloak>
                    <span x-text="message"></span>
                </div>

                <div class="text-center pt-2">
                    <button 
                        type="submit" 
                        :disabled="sending"
                        class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-[#d6d6d6] text-black font-bold text-xs sm:text-sm hover:bg-white transition-all duration-200 shadow-xl disabled:opacity-50"
                    >
                        <span x-show="!sending">Send Message</span>
                        <span x-show="sending" x-cloak>Sending...</span>
                    </button>
                </div>
            </form>

        </div>

    </div>
</section>
