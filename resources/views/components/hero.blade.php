<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-black">
    <section class="relative min-h-screen bg-gradient-to-br via-gray-900 to-black overflow-hidden from-black">
        <!-- Background Overlay Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMxLjY1NyAwIDMgMS4zNDMgMyAzdjM2YzAgMS42NTctMS4zNDMgMy0zIDMtMS42NTcgMC0zLTEuMzQzLTMtM1YyMWMwLTEuNjU3IDEuMzQzLTMgMy0zeiIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjAyKSIvPjwvZz48L3N2Zz4=')] opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16 relative">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <!-- Hero Content -->
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left space-y-8 animate-fade-in">
                    <h1 class="relative">
                        <span class="block text-5xl tracking-tight font-extrabold text-white sm:text-6xl md:text-7xl mb-4">
                            Temukan
                            <span class="relative">
                                Kebugaran
                                <span class="absolute bottom-0 left-0 w-full h-1 bg-cyan-400 transform origin-left"></span>
                            </span>
                        </span>
                        <span class="block text-cyan-400 text-5xl tracking-tight font-extrabold sm:text-6xl md:text-7xl">
                            Bentuk Diri Anda
                        </span>
                    </h1>

                    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl animate-fade-in" style="animation-delay: 0.2s">
                        Mulai perjalanan kebugaran Anda dengan program latihan yang dirancang khusus untuk mencapai tujuan Anda.
                    </p>

                    <div class="mt-8 sm:flex sm:justify-center lg:justify-start space-x-4 animate-fade-in" style="animation-delay: 0.4s">
                        <button class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-cyan-500 hover:bg-cyan-600 transform transition duration-200 hover:scale-105">
                            Mulai Sekarang
                        </button>
                    </div>
                </div>

                <!-- Carousel Section -->
                <div class="lg:col-span-6 relative mt-12 lg:mt-0 animate-fade-in" style="animation-delay: 0.3s">
                    <div class="carousel-container overflow-hidden relative rounded-2xl shadow-2xl">
                        <div class="carousel-slides flex transition-transform duration-1000 ease-in-out h-[600px]">
                            <div class="min-w-full relative">
                                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=2070&auto=format&fit=crop" alt="Slide 1" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                            <div class="min-w-full relative">
                                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop" alt="Slide 2" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                            <div class="min-w-full relative">
                                <img src="https://images.unsplash.com/photo-1519505907962-0a6cb0167c73?q=80&w=2070&auto=format&fit=crop" alt="Slide 3" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                        </div>

                        <!-- Pagination Dots -->
                        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3">
                            <span class="w-2 h-2 rounded-full bg-white/80 transition-all duration-300 cursor-pointer hover:w-4"></span>
                            <span class="w-2 h-2 rounded-full bg-white/40 transition-all duration-300 cursor-pointer hover:w-4"></span>
                            <span class="w-2 h-2 rounded-full bg-white/40 transition-all duration-300 cursor-pointer hover:w-4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
    @include('components.features')
    </section>



    <script>
        const slides = document.querySelector('.carousel-slides');
        const dots = document.querySelectorAll('.bottom-6 span');
        let currentIndex = 0;

        function updateCarousel(index) {
            slides.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add('bg-white/80', 'w-4');
                    dot.classList.remove('bg-white/40', 'w-2');
                } else {
                    dot.classList.add('bg-white/40', 'w-2');
                    dot.classList.remove('bg-white/80', 'w-4');
                }
            });
        }

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                currentIndex = i;
                updateCarousel(currentIndex);
            });
        });

        // Autoplay with smooth transitions
        setInterval(() => {
            currentIndex = (currentIndex < dots.length - 1) ? currentIndex + 1 : 0;
            updateCarousel(currentIndex);
        }, 5000);
    </script>
</body>
</html>
