<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Main Content -->
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Sidebar -->
                        <aside class="w-full md:w-64 flex-shrink-0">
                            <nav class="bg-white dark:bg-gray-700 shadow rounded-lg p-4">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="{{ route('articles.index') }}"
                                            class="flex items-center space-x-3 px-4 py-2.5 rounded-lg transition-colors duration-200 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <svg class="w-5 h-5" <!-- SVG untuk icon artikel -->></svg>
                                            <span>Artikel Saya</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/"
                                            class="flex items-center space-x-3 px-4 py-2.5 rounded-lg transition-colors duration-200 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <svg class="w-5 h-5" <!-- SVG untuk icon jadwal -->></svg>
                                            <span>Jadwal Latihan</span>
                                        </a>
                                    </li>
                                    <!-- Tambahkan menu lainnya -->
                                </ul>
                            </nav>
                        </aside>

                        <!-- Main Area -->
                        <main class="flex-1 space-y-6">
                            <!-- Activity Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Card Artikel -->
                                <div class="bg-blue-600 rounded-lg shadow p-6 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold">Artikel Terbaru</h3>
                                            <p class="mt-1 text-white/90">3 Artikel</p>
                                        </div>
                                        <svg class="w-6 h-6 text-white/80" <!-- SVG untuk icon artikel -->></svg>
                                    </div>
                                </div>

                                <!-- Card Jadwal -->
                                <div class="bg-blue-500 rounded-lg shadow p-6 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold">Jadwal Hari Ini</h3>
                                            <p class="mt-1 text-white/90">Latihan Dada</p>
                                        </div>
                                        <svg class="w-6 h-6 text-white/80"></svg><!-- SVG untuk icon jadwal -->
                                    </div>
                                </div>

                                <!-- Card Progress -->
                                <div class="bg-blue-400 rounded-lg shadow p-6 text-white">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-semibold">Progress</h3>
                                            <p class="mt-1 text-white/90">+15%</p>
                                        </div>
                                        <svg class="w-6 h-6 text-white/80"></svg><!-- SVG untuk icon progress -->
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Articles -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
                                    Artikel Terbaru
                                </h3>
                                <div class="space-y-4">
                                    @foreach (range(1, 3) as $index)
                                        <div
                                            class="flex items-center space-x-4 p-4 hover:bg-gray-50 dark:hover:bg-gray-600 rounded-lg transition-colors duration-200">
                                            <img src="https://via.placeholder.com/64" alt="Article thumbnail"
                                                class="w-16 h-16 rounded-lg object-cover">
                                            <div>
                                                <h4 class="font-semibold text-gray-800 dark:text-gray-200">
                                                    Tips Latihan #{{ $index }}
                                                </h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                                                    Dipublikasikan 2 hari yang lalu
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
