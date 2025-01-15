<section class="relative bg-black pt-20 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <!-- Hero Content -->
            <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                <h1>
                    <span class="block text-5xl tracking-tight font-extrabold text-white sm:text-6xl md:text-6xl">
                        Temukan Kebugaran Anda,
                    </span>
                    <span class="block text-cyan-400 text-5xl tracking-tight font-extrabold sm:text-6xl md:text-6xl">
                        Bentuk Diri Anda
                    </span>
                </h1>

                <!-- Avatar Testimonials -->
                <div class="mt-8 flex items-center space-x-2">
                    <div class="flex -space-x-2">
                        <img src="/api/placeholder/40/40" alt="Member 1" class="inline-block h-10 w-10 rounded-full ring-2 ring-white">
                        <img src="/api/placeholder/40/40" alt="Member 2" class="inline-block h-10 w-10 rounded-full ring-2 ring-white">
                        <img src="/api/placeholder/40/40" alt="Member 3" class="inline-block h-10 w-10 rounded-full ring-2 ring-white">
                    </div>
                    <span class="text-sm text-gray-300">Bergabung dengan 1000+ member aktif</span>
                </div>

                <!-- CTA Buttons -->
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-cyan-400 hover:bg-cyan-500 md:py-4 md:text-lg md:px-10">
                            Mulai Gratis
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#features" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-cyan-400 bg-black hover:bg-gray-900 border-cyan-400 md:py-4 md:text-lg md:px-10">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                    <div class="relative block w-full bg-gray-900 rounded-lg overflow-hidden">
                        <img src="/api/placeholder/600/400" alt="Workout Preview" class="w-full">
                        <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                            <button type="button" class="flex items-center justify-center h-16 w-16 rounded-full bg-cyan-400 hover:bg-cyan-500">
                                <!-- Play Icon -->
                                <svg class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
