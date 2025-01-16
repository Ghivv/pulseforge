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
            </div>

            <!-- Carousel Section -->
            <div class="lg:col-span-6 relative">
                <div class="carousel-container overflow-hidden relative">
                    <!-- Slides -->
                    <div class="carousel-slides flex transition-transform duration-700 ease-in-out">
                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 1" class="w-full h-auto">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 2" class="w-full h-auto">
                        <img src="https://images.unsplash.com/photo-1519505907962-0a6cb0167c73?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 3" class="w-full h-auto">
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="prev-button absolute top-1/2 left-4 transform -translate-y-1/2 bg-cyan-500 hover:bg-cyan-600 text-white p-2 rounded-full">&#10094;</button>
                    <button class="next-button absolute top-1/2 right-4 transform -translate-y-1/2 bg-cyan-500 hover:bg-cyan-600 text-white p-2 rounded-full">&#10095;</button>

                    <!-- Pagination Dots -->
                    <div class="dots-container flex justify-center mt-4 space-x-2">
                        <span class="dot w-3 h-3 bg-cyan-500 rounded-full"></span>
                        <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
                        <span class="dot w-3 h-3 bg-gray-400 rounded-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const slides = document.querySelector('.carousel-slides');
    const dots = document.querySelectorAll('.dot');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    let currentIndex = 0;

    function updateCarousel(index) {
        slides.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            dot.style.backgroundColor = i === index ? '#06b6d4' : '#666';
        });
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : dots.length - 1;
        updateCarousel(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex < dots.length - 1) ? currentIndex + 1 : 0;
        updateCarousel(currentIndex);
    });

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateCarousel(currentIndex);
        });
    });

    // Autoplay
    setInterval(() => {
        currentIndex = (currentIndex < dots.length - 1) ? currentIndex + 1 : 0;
        updateCarousel(currentIndex);
    }, 5000);
</script>
