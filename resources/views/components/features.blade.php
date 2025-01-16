<section id="features" class="bg-black py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="flex items-center space-x-4 mb-12">
            <div class="h-12 w-12 rounded-full bg-cyan-400 flex items-center justify-center">
                <svg class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-white">Fitur Unggulan Kami</h2>
        </div>

        <!-- Feature Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article Card -->
            <div class="bg-orange-500 rounded-lg p-8 transform transition duration-500 hover:scale-105">
                <h3 class="text-xl font-bold text-black mb-4">Artikel Terbaru</h3>
                <p class="text-black/80 mb-6">Tips dan panduan kebugaran terbaru dari para ahli</p>
                <a href="{{ route('admin.articles.index') }}" class="inline-flex items-center text-black font-semibold">
                    Lihat Artikel
                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Tutorial Card -->
            <div class="bg-gray-100 rounded-lg p-8 transform transition duration-500 hover:scale-105">
                <h3 class="text-xl font-bold text-black mb-4">Tutorial Video</h3>
                <p class="text-black/80 mb-6">Pelajari teknik latihan yang benar</p>
                <div class="text-lg font-bold text-black">100+ Video Tutorial</div>
            </div>

            <!-- Success Card -->
            <div class="bg-yellow-400 rounded-lg p-8 transform transition duration-500 hover:scale-105">
                <h3 class="text-xl font-bold text-black mb-4">Kisah Sukses</h3>
                <p class="text-black/80 mb-6">Testimoni dari member yang telah berhasil</p>
                <div class="text-3xl font-bold text-black">700+</div>
                <div class="text-black/80">Member Sukses</div>
            </div>
        </div>

        <!-- Feature List -->
        <div class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4">
            <div class="border border-gray-800 rounded-full px-4 py-2 text-sm text-gray-300">
                Program Latihan
            </div>
            <div class="border border-gray-800 rounded-full px-4 py-2 text-sm text-gray-300">
                Panduan Nutrisi
            </div>
            <div class="border border-gray-800 rounded-full px-4 py-2 text-sm text-gray-300">
                Tracking Progress
            </div>
            <div class="border border-gray-800 rounded-full px-4 py-2 text-sm text-gray-300">
                Komunitas Aktif
            </div>
        </div>
    </div>
</section>
