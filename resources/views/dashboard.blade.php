<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-rich-navy-blue leading-tight">
                <i class="fas fa-tachometer-alt mr-2"></i>{{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-gradient-to-r from-red-600 to-red-800 rounded-lg shadow-xl p-8 mb-8 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}! 🚗</h1>
                        <p class="text-red-100">Your premium car rental dashboard</p>
                    </div>
                    <img src="{{ Vite:: asset('resources/assets/car.png') }}" alt="car" class="w-80 opacity-80 hidden sm:block">
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-red-600">
                    <div class="flex items-center">
                        <i class="fas fa-car text-red-600 text-3xl mr-4"></i>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-semibold">AVAILABLE CARS</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">24</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-blue-600">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-check text-blue-600 text-3xl mr-4"></i>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-semibold">ACTIVE BOOKINGS</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">3</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-green-600">
                    <div class="flex items-center">
                        <i class="fas fa-dollar-sign text-green-600 text-3xl mr-4"></i>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-semibold">TOTAL SPENT</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">$850</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 border-l-4 border-yellow-600">
                    <div class="flex items-center">
                        <i class="fas fa-award text-yellow-600 text-3xl mr-4"></i>
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm font-semibold">LOYALTY POINTS</p>
                            <p class="text-3xl font-bold text-gray-800 dark:text-white">450</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Account Info -->
                <div class="lg:col-span-2">
                    <!-- Featured Vehicles -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-8">
                        <div class="bg-gradient-to-r from-red-600 to-red-700 px-6 py-4">
                            <h3 class="text-white text-lg font-bold flex items-center">
                                <i class="fas fa-star mr-2"></i>Featured Vehicles
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Car 1 -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                                    <div class="bg-gray-200 h-40 flex items-center justify-center">
                                        <i class="fas fa-car text-6xl text-gray-400"></i>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="font-bold text-gray-800 dark:text-white">Tesla Model 3</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Electric • Luxury</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-red-600 font-bold text-lg">$85/day</span>
                                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm transition">Book Now</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Car 2 -->
                                <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                                    <div class="bg-gray-200 h-40 flex items-center justify-center">
                                        <i class="fas fa-car text-6xl text-gray-400"></i>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="font-bold text-gray-800 dark:text-white">BMW X5</h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">SUV • Premium</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-red-600 font-bold text-lg">$95/day</span>
                                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm transition">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Bookings -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
                            <h3 class="text-white text-lg font-bold flex items-center">
                                <i class="fas fa-history mr-2"></i>Recent Bookings
                            </h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Vehicle</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Dates</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Cost</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Tesla Model 3</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Feb 5-8, 2026</td>
                                        <td class="px-6 py-4 text-sm font-semibold text-green-600">$255</td>
                                        <td class="px-6 py-4 text-sm"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">Mercedes C-Class</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">Feb 10-12, 2026</td>
                                        <td class="px-6 py-4 text-sm font-semibold text-blue-600">$180</td>
                                        <td class="px-6 py-4 text-sm"><span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs font-semibold">Ongoing</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <!-- Account Card -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-6">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 px-6 py-4">
                            <h3 class="text-white text-lg font-bold flex items-center">
                                <i class="fas fa-user-circle mr-2"></i>Your Account
                            </h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="border-b pb-4">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">NAME</p>
                                <p class="font-bold text-gray-900 dark:text-white">{{ auth()->user()->name }}</p>
                            </div>
                            <div class="border-b pb-4">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">USERNAME</p>
                                <p class="font-bold text-gray-900 dark:text-white">{{ auth()->user()->username }}</p>
                            </div>
                            <div class="border-b pb-4">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">EMAIL</p>
                                <p class="font-bold text-gray-900 dark:text-white text-sm">{{ auth()->user()->email }}</p>
                            </div>
                            <div class="border-b pb-4">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">MEMBER SINCE</p>
                                <p class="font-bold text-gray-900 dark:text-white">{{ auth()->user()->created_at->format('M d, Y') }}</p>
                            </div>
                            <div class="border-b pb-4">
                                <p class="text-gray-600 dark:text-gray-400 text-sm">STATUS</p>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold {{ auth()->user()->is_active ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' }}">
                                    <i class="fas fa-check-circle mr-1"></i>{{ auth()->user()->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                            @if(auth()->user()->last_login)
                                <div>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">LAST LOGIN</p>
                                    <p class="font-bold text-gray-900 dark:text-white text-sm">{{ auth()->user()->last_login->format('M d, Y H:i') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="space-y-3">
                        <a href="{{ route('profile.edit') }}" class="w-full block bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-semibold py-3 px-4 rounded-lg transition text-center">
                            <i class="fas fa-cog mr-2"></i>Edit Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold py-3 px-4 rounded-lg transition">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
