<!-- Profile/Auth Section -->
<div class="relative ml-3" x-data="{ isOpen: false }">
    <div class="relative inline-block">
        @auth
            <!-- Logged In User Profile Button -->
            <button type="button"
                    @click="isOpen = !isOpen"
                    class="group flex items-center gap-3 p-1.5 pl-2 pr-4 rounded-full bg-white/10 hover:bg-white/20 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800"
                    id="user-menu-button"
                    aria-expanded="false"
                    aria-haspopup="true">
                <!-- Profile Image Container -->
                <div class="relative">
                    <!-- Outer Ring Animation -->
                    <div class="absolute inset-0 rounded-full border-2 border-blue-400/50 group-hover:scale-110 group-hover:border-blue-400 transition-all duration-300">
                    </div>
                    <!-- Profile Image -->
                    <img class="size-10 rounded-full object-cover border-2 border-white/20"
                         src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                         alt="{{ Auth::user()->name }}">
                    <!-- Online Status Indicator -->
                    <div class="absolute bottom-0 right-0 size-3 rounded-full bg-green-400 border-2 border-gray-800">
                    </div>
                </div>

                <!-- User Info -->
                <div class="flex flex-col items-start">
                    <span class="text-sm font-medium text-white group-hover:text-blue-400 transition-colors duration-300">
                        {{ Auth::user()->name }}
                    </span>
                    <span class="text-xs text-gray-400">
                        {{ Auth::user()->email }}
                    </span>
                </div>

                <!-- Dropdown Arrow -->
                <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-400 transition-colors duration-300"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Dropdown Menu for Logged In Users -->
            <div x-show="isOpen"
                 @click.outside="isOpen = false"
                 x-transition:enter="transition ease-out duration-100 transform"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75 transform"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                 role="menu"
                 aria-orientation="vertical"
                 aria-labelledby="user-menu-button"
                 tabindex="-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                        Sign out
                    </button>
                </form>
            </div>
        @else
            <!-- Login/Register Buttons for Guests -->
            <div class="flex items-center gap-2">
                <a href="{{ route('login') }}"
                   class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="px-4 py-2 text-sm font-medium text-white bg-white/10 rounded-full hover:bg-white/20 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                    Register
                </a>
            </div>
        @endauth
    </div>
</div>
