<nav x-data="{ open: false }" class="bg-gradient-to-r from-red-600 to-red-700 border-b border-red-800 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                        <img src="{{ Vite:: asset('resources/assets/car.png') }}" alt="car-logo" class="w-[100px]">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="text-white hover:bg-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-red-500' : '' }}">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                    <a href="{{ route('cars.browse') }}" class="text-white hover:bg-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('cars.browse') ? 'bg-red-500' : '' }}">
                        <i class="fas fa-car mr-2"></i>Browse Cars
                    </a>
                    <a href="{{ route('bookings.index') }}" class="text-white hover:bg-red-500 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('bookings.index') ? 'bg-red-500' : '' }}">
                        <i class="fas fa-calendar mr-2"></i>My Bookings
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-500 hover:bg-red-400 focus:outline-none transition ease-in-out duration-150">
                            <div><i class="fas fa-user mr-2"></i>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fas fa-cog mr-2"></i>{{ __('Profile Settings') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-red-700">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block text-white hover:bg-red-500 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('dashboard') ? 'bg-red-500' : '' }}">
                <i class="fas fa-home mr-2"></i>Dashboard
            </a>
            <a href="{{ route('cars.browse') }}" class="block text-white hover:bg-red-500 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('cars.browse') ? 'bg-red-500' : '' }}">
                <i class="fas fa-car mr-2"></i>Browse Cars
            </a>
            <a href="{{ route('bookings.index') }}" class="block text-white hover:bg-red-500 px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('bookings.index') ? 'bg-red-500' : '' }}">
                <i class="fas fa-calendar mr-2"></i>My Bookings
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-red-600">
            <div class="px-4">
                <div class="font-medium text-base text-white"><i class="fas fa-user-circle mr-2"></i>{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-red-200">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block text-white hover:bg-red-500 px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-cog mr-2"></i>Profile Settings
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" onclick="event.preventDefault(); this.closest('form').submit();" class="w-full text-left block text-white hover:bg-red-500 px-3 py-2 rounded-md text-base font-medium">
                        <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
