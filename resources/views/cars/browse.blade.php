<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Browse Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-red-600 to-red-700 text-white rounded-lg shadow-lg p-8 mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-4xl font-bold mb-2">Available Vehicles</h1>
                        <p class="text-red-100">Choose from our premium fleet of vehicles for your next adventure</p>
                    </div>
                    <i class="fas fa-car text-6xl opacity-20"></i>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Vehicle Type</label>
                        <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-white">
                            <option>All Types</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                            <option>Sports</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Price Range</label>
                        <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-white">
                            <option>All Prices</option>
                            <option>$0 - $50</option>
                            <option>$50 - $100</option>
                            <option>$100+</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Transmission</label>
                        <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-white">
                            <option>All</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-search mr-2"></i>Search
                        </button>
                    </div>
                </div>
            </div>

            <!-- Vehicles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tesla Model 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ Vite::asset('resources/assets/car7.png') }}" alt="Tesla Model 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Tesla Model 3</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(48 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Electric Sedan</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 5</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$85</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>

                <!-- BMW X5 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{Vite:: asset('resources/assets/car1.png') }}" alt="BMW X5" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">BMW X5</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(56 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Luxury SUV</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 7</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$95</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>

                <!-- Mercedes C-Class -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ Vite::asset('resources/assets/car2.png') }}" alt="Mercedes C-Class" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Mercedes C-Class</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(42 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Luxury Sedan</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 5</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$75</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>

                <!-- Audi A4 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ Vite::asset('resources/assets/car3.png') }}" alt="Audi A4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Audi A4</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(51 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Premium Sedan</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 5</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$70</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>

                <!-- Honda CR-V -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ Vite::asset('resources/assets/car4.png') }}" alt="Honda CR-V" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Honda CR-V</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(38 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Compact SUV</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 5</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$55</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>

                <!-- Ford Mustang -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ Vite::asset('resources/assets/car6.png') }}" alt="Ford Mustang" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Ford Mustang</h3>
                        <div class="flex items-center text-yellow-500 mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 dark:text-gray-400 text-sm ml-2">(67 reviews)</span>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded p-3 mb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Type:</strong> Sports Car</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Seats:</strong> 4</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><strong>Transmission:</strong> Automatic</p>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-3xl font-bold text-red-600">$120</span>
                            <span class="text-gray-600 dark:text-gray-400">per day</span>
                        </div>
                        <button class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition">
                            <i class="fas fa-calendar-check mr-2"></i>Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
