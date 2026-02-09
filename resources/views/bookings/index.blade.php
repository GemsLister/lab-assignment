<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-red-600 to-red-700 text-white rounded-lg shadow-lg p-8 mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-bold mb-2">My Bookings</h1>
                        <p class="text-red-100">View and manage your current and past vehicle bookings</p>
                    </div>
                    <i class="fas fa-calendar text-6xl opacity-20"></i>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border-l-4 border-red-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Active Bookings</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">3</p>
                        </div>
                        <i class="fas fa-car text-4xl text-red-600 opacity-20"></i>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border-l-4 border-blue-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Total Bookings</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">24</p>
                        </div>
                        <i class="fas fa-history text-4xl text-blue-600 opacity-20"></i>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border-l-4 border-green-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Total Spent</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">$3,240</p>
                        </div>
                        <i class="fas fa-dollar-sign text-4xl text-green-600 opacity-20"></i>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border-l-4 border-yellow-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Loyalty Points</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">450</p>
                        </div>
                        <i class="fas fa-star text-4xl text-yellow-600 opacity-20"></i>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex space-x-4 mb-6 border-b border-gray-300 dark:border-gray-600">
                <button class="px-4 py-3 font-medium text-red-600 border-b-2 border-red-600">
                    <i class="fas fa-hourglass-end mr-2"></i>Active Bookings
                </button>
                <button class="px-4 py-3 font-medium text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <i class="fas fa-check-circle mr-2"></i>Completed
                </button>
            </div>

            <!-- Active Bookings Table -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-red-600 to-red-700 text-white">
                            <tr>
                                <th class="px-6 py-4 text-left font-semibold">Booking ID</th>
                                <th class="px-6 py-4 text-left font-semibold">Vehicle</th>
                                <th class="px-6 py-4 text-left font-semibold">Pick-up Date</th>
                                <th class="px-6 py-4 text-left font-semibold">Return Date</th>
                                <th class="px-6 py-4 text-left font-semibold">Duration</th>
                                <th class="px-6 py-4 text-left font-semibold">Cost</th>
                                <th class="px-6 py-4 text-left font-semibold">Status</th>
                                <th class="px-6 py-4 text-left font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <!-- Booking 1 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#BK001</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="{{ Vite::asset('resources/assets/car7.png') }}" alt="Tesla" class="w-20 rounded mr-3 object-cover">
                                        <span class="text-gray-900 dark:text-white">Tesla Model 3</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 15, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 18, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">3 days</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">$255</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 rounded-full text-xs font-medium">
                                        <i class="fas fa-spinner mr-1"></i>In Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm space-x-2">
                                    <button class="px-3 py-1 text-blue-600 hover:bg-blue-100 rounded transition">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="px-3 py-1 text-red-600 hover:bg-red-100 rounded transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Booking 2 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#BK002</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="{{ Vite::asset('resources/assets/car1.png') }}" alt="BMW" class="w-20 rounded mr-3 object-cover">
                                        <span class="text-gray-900 dark:text-white">BMW X5</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 20, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 25, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">5 days</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">$475</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 rounded-full text-xs font-medium">
                                        <i class="fas fa-spinner mr-1"></i>In Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm space-x-2">
                                    <button class="px-3 py-1 text-blue-600 hover:bg-blue-100 rounded transition">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="px-3 py-1 text-red-600 hover:bg-red-100 rounded transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Booking 3 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#BK003</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="{{ Vite::asset('resources/assets/car6.png') }}" alt="Mustang" class="w-20 rounded mr-3 object-cover">
                                        <span class="text-gray-900 dark:text-white">Ford Mustang</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 27, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">Dec 30, 2024</td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-400">3 days</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">$360</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 rounded-full text-xs font-medium">
                                        <i class="fas fa-clock mr-1"></i>Upcoming
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm space-x-2">
                                    <button class="px-3 py-1 text-blue-600 hover:bg-blue-100 rounded transition">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="px-3 py-1 text-red-600 hover:bg-red-100 rounded transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Booking Details Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Payment Methods -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-credit-card text-red-600 mr-2"></i>Payment Methods
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center p-3 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700">
                            <input type="radio" name="payment" id="visa" class="w-4 h-4 text-red-600" checked>
                            <label for="visa" class="ml-3 flex-1 cursor-pointer">
                                <p class="font-medium text-gray-900 dark:text-white">Visa •••• 4242</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Expires 12/26</p>
                            </label>
                        </div>
                        <div class="flex items-center p-3 border border-gray-200 dark:border-gray-700 rounded-lg cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700">
                            <input type="radio" name="payment" id="mastercard" class="w-4 h-4 text-red-600">
                            <label for="mastercard" class="ml-3 flex-1 cursor-pointer">
                                <p class="font-medium text-gray-900 dark:text-white">Mastercard •••• 8765</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Expires 08/25</p>
                            </label>
                        </div>
                    </div>
                    <button class="mt-4 px-4 py-2 text-red-600 border border-red-600 rounded-lg hover:bg-red-50 dark:hover:bg-gray-700 transition w-full">
                        <i class="fas fa-plus mr-2"></i>Add Payment Method
                    </button>
                </div>

                <!-- Special Offers -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-gift text-red-600 mr-2"></i>Special Offers
                    </h3>
                    <div class="space-y-3">
                        <div class="p-4 bg-red-50 dark:bg-red-900 border border-red-200 dark:border-red-700 rounded-lg">
                            <p class="font-medium text-red-900 dark:text-red-100">20% Off Weekend Bookings</p>
                            <p class="text-sm text-red-700 dark:text-red-300 mt-1">Valid until Dec 31, 2024</p>
                        </div>
                        <div class="p-4 bg-blue-50 dark:bg-blue-900 border border-blue-200 dark:border-blue-700 rounded-lg">
                            <p class="font-medium text-blue-900 dark:text-blue-100">Free Upgrade to Premium Vehicle</p>
                            <p class="text-sm text-blue-700 dark:text-blue-300 mt-1">Available for bookings over 7 days</p>
                        </div>
                        <div class="p-4 bg-green-50 dark:bg-green-900 border border-green-200 dark:border-green-700 rounded-lg">
                            <p class="font-medium text-green-900 dark:text-green-100">Earn 2X Loyalty Points</p>
                            <p class="text-sm text-green-700 dark:text-green-300 mt-1">On all bookings this month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
