<!-- Nothing worth having comes easy. - Theodore Roosevelt -->

<nav class="bg-black border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="h-8 w-auto" src="/images/logo.svg" alt="PulseForge">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <a href="{{ route('articles') }}" class="text-gray-300 hover:text-cyan-400 px-3 py-2 rounded-md text-sm font-medium">Artikel</a>
                    <a href="{{ route('workouts') }}" class="text-gray-300 hover:text-cyan-400 px-3 py-2 rounded-md text-sm font-medium">Latihan</a>
                    <a href="{{ route('forum') }}" class="text-gray-300 hover:text-cyan-400 px-3 py-2 rounded-md text-sm font-medium">Forum</a>
                </div>
            </div>

            <!-- Login/Register Links -->
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black bg-cyan-400 hover:bg-cyan-500">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>
