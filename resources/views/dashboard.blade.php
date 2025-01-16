<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <section class="relative bg-gray-100 pt-20 pb-16 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <header class="flex items-center justify-between py-4 border-b border-gray-300">
            <div class="flex items-center">
                <img src="/images/profile.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                <span class="ml-4 text-gray-800 font-bold">Nama Pengguna</span>
            </div>
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </header>

        <!-- Sidebar and Main Content -->
        <div class="flex mt-8">
            <!-- Sidebar -->
            <nav class="w-64 bg-white shadow-md p-4 rounded-lg">
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="block text-gray-800 hover:text-cyan-500 font-medium">Artikel Saya</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-800 hover:text-cyan-500 font-medium">Jadwal Latihan</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-800 hover:text-cyan-500 font-medium">Statistik</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-800 hover:text-cyan-500 font-medium">Forum</a>
                    </li>
                    <li>
                        <a href="#" class="block text-gray-800 hover:text-cyan-500 font-medium">Pengaturan Akun</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="flex-1 bg-white shadow-md rounded-lg ml-6 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Ringkasan Aktivitas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="p-4 bg-cyan-500 text-white rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Artikel Terbaru</h3>
                        <p>3 Artikel dipublikasikan minggu ini.</p>
                    </div>
                    <div class="p-4 bg-green-500 text-white rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Jadwal Hari Ini</h3>
                        <p>Latihan otot dada pukul 17:00.</p>
                    </div>
                    <div class="p-4 bg-yellow-500 text-white rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Statistik</h3>
                        <p>Kemajuan meningkat 15% bulan ini.</p>
                    </div>
                </div>
            </main>
        </div>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-600 text-sm">
            &copy; 2025 Dashboard Kebugaran. All Rights Reserved.
        </footer>
    </div>
</section>

</x-app-layout>
