@extends('layouts.app')

@section('content')
    <div class="w-full max-w-screen-xl mx-auto flex-grow py-8 px-6">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="w-full md:w-64 lg:w-72 flex-shrink-0">
                <div class="sticky top-28 space-y-6">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <h1 class="text-lg font-bold text-slate-900 dark:text-white">Filters</h1>
                        </div>
                        <div class="flex flex-col gap-6 text-slate-900 dark:text-gray-200 bg-white dark:bg-gray-800/50 p-4 rounded-xl border border-gray-200 dark:border-gray-800">
                            <!-- Brand Filter -->
                            <div class="flex flex-col gap-2">
                                <h3 class="text-base font-semibold leading-tight tracking-[-0.015em] px-1 pb-2">
                                    Brand</h3>
                                <div class="px-1"
                                    style="--checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27white%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e');">
                                    <label class="flex gap-x-3 py-2 flex-row items-center cursor-pointer">
                                        <input checked=""
                                            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-primary/50 focus:ring-offset-0 focus:ring-2"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal text-slate-900 dark:text-gray-200">MSI</p>
                                    </label>
                                    <label class="flex gap-x-3 py-2 flex-row items-center cursor-pointer">
                                        <input checked=""
                                            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-primary/50 focus:ring-offset-0 focus:ring-2"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal text-slate-900 dark:text-gray-200">Asus</p>
                                    </label>
                                    <label class="flex gap-x-3 py-2 flex-row items-center cursor-pointer">
                                        <input
                                            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-primary/50 focus:ring-offset-0 focus:ring-2"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal text-slate-900 dark:text-gray-200">Apple</p>
                                    </label>
                                    <label class="flex gap-x-3 py-2 flex-row items-center cursor-pointer">
                                        <input
                                            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-primary/50 focus:ring-offset-0 focus:ring-2"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal text-slate-900 dark:text-gray-200">NVIDIA</p>
                                    </label>
                                    <label class="flex gap-x-3 py-2 flex-row items-center cursor-pointer">
                                        <input
                                            class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 border-2 bg-transparent text-primary checked:bg-primary checked:border-primary checked:bg-[image:--checkbox-tick-svg] focus:ring-primary/50 focus:ring-offset-0 focus:ring-2"
                                            type="checkbox" />
                                        <p class="text-sm font-normal leading-normal text-slate-900 dark:text-gray-200">AMD</p>
                                    </label>
                                </div>
                            </div>
                            <!-- Price Range Filter -->
                            <div class="flex flex-col gap-4">
                                <h3 class="text-base font-semibold leading-tight tracking-[-0.015em] px-1 pb-1">
                                    Price Range</h3>
                                <div class="px-1">
                                    <div class="relative h-1 rounded-full bg-gray-200 dark:bg-gray-700">
                                        <div class="absolute h-1 rounded-full bg-primary"
                                            style="left: 10%; right: 40%;"></div>
                                        <div class="absolute -top-1.5 h-4 w-4 rounded-full bg-white dark:bg-gray-300 border-2 border-primary cursor-pointer"
                                            style="left: 10%;"></div>
                                        <div class="absolute -top-1.5 h-4 w-4 rounded-full bg-white dark:bg-gray-300 border-2 border-primary cursor-pointer"
                                            style="right: 40%;"></div>
                                    </div>
                                    <div class="flex justify-between mt-3 text-sm text-slate-700 dark:text-gray-400">
                                        <span>$500</span>
                                        <span>$3000</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Category Filter -->
                            <div class="flex flex-col gap-2">
                                <h3 class="text-base font-semibold leading-tight tracking-[-0.015em] px-1 pb-2">
                                    Category</h3>
                                <div class="flex flex-col px-1">
                                    <a class="text-sm py-2 text-primary font-medium" href="#">Graphics Cards</a>
                                    <a class="text-sm py-2 text-slate-700 dark:text-gray-300 hover:text-primary transition-colors"
                                        href="#">Laptops</a>
                                    <a class="text-sm py-2 text-slate-700 dark:text-gray-300 hover:text-primary transition-colors"
                                        href="#">CPUs</a>
                                    <a class="text-sm py-2 text-slate-700 dark:text-gray-300 hover:text-primary transition-colors"
                                        href="#">Monitors</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Main Content -->
            <div class="flex-1">
                <div class="flex flex-col gap-6">
                    <!-- Header -->
                    <div>
                        <nav class="text-sm text-slate-600 dark:text-gray-400 mb-2">
                            <ol class="list-none p-0 inline-flex space-x-2">
                                <li><a class="hover:text-primary transition-colors" href="{{ route('client.index') }}">Home</a></li>
                                <li><span>&gt;</span></li>
                                <li><a class="hover:text-primary transition-colors" href="#">Catalog</a></li>
                            </ol>
                        </nav>
                        <h1 class="text-3xl font-bold text-slate-900 dark:text-white">All Products</h1>
                    </div>
                    <!-- Product Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Product Card 1 -->
                        <div class="group flex flex-col bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover w-full"
                                    data-alt="NVIDIA RTX 4060 Graphics Card"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCmUsfFGwJ6BP60E6oQTCYkM7NRgvko6ezAKysTVzp65Hz2kU92QS0kylf9t1vmiPeYHcBm9sv7D2sZ807URJ28AllN8CSYrhrtiFoJEb1lwsuRWiPnJO0qlKHPJr_9LEViAurLiMfW4JSZIxsrU7AdwiLHj4J5NB1ke-7jfGfaGwSwZ41koa2JgpzhSnX2xNMZ1tjk2guMuUJs5NnS4hoGTThbO632posUiIa-UpCrTRXOhInaR_v67mK_UMjDHdse6Lc9sksJqkAQ");'>
                                </div>
                                <span class="absolute top-3 right-3 text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 px-2 py-1 rounded-full">In Stock</span>
                            </div>
                            <div class="p-4 flex flex-col flex-grow">
                                <h3 class="font-semibold text-base text-slate-900 dark:text-white mb-2 flex-grow">
                                    Carte Graphique NVIDIA RTX 4060</h3>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs font-medium bg-primary/20 text-primary px-2 py-0.5 rounded-md">RTX 4060</span>
                                </div>
                                <p class="text-xl font-bold text-primary">$599.99</p>
                            </div>
                        </div>
                        <!-- Product Card 2 -->
                        <div class="group flex flex-col bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover w-full"
                                    data-alt="MacBook Pro with M3 chip"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXlIVikPgYexNXyow64zWsJOjyCwDcYz4MW5kXHvY2KqXcJTYnHmNibQ32j59TTOa5Cogl2aTnXuLFliTQifi1QsmY1ZzYgTIck0W8iG5YN7veBFiokl3I_35e1wbuDxFGh8wTQWcMlxisAF4cIN3wZYp490eCWufk04qBaX5pt7tc8cfqyeK1cGxMU9HzKpjAe9w94X4sNom4bysA3FLk7Fwa7KR4wbUgeRE-zRhDNAUSXEZ5dYrdWgP0wsqDQa2yVuoBE1X_7-ZX");'>
                                </div>
                                <span class="absolute top-3 right-3 text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 px-2 py-1 rounded-full">In Stock</span>
                            </div>
                            <div class="p-4 flex flex-col flex-grow">
                                <h3 class="font-semibold text-base text-slate-900 dark:text-white mb-2 flex-grow">
                                    MacBook Pro M3</h3>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs font-medium bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-0.5 rounded-md">16GB RAM</span>
                                    <span class="text-xs font-medium bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-0.5 rounded-md">512GB SSD</span>
                                </div>
                                <p class="text-xl font-bold text-primary">$2,499.00</p>
                            </div>
                        </div>
                        <!-- Product Card 3 -->
                        <div class="group flex flex-col bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover w-full"
                                    data-alt="ASUS ROG Gaming Laptop"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFW3WcjHwXYFmcUbz23bdoAP0wxfArZV78MNutjYwdEU8lrtDHuswnpuUIVazcMc0ynBh11jhtUGrc-4bc1YQQPOruU3BToFC6jRW_pi92w8sPLvV_YRaVAUOAQlnJM5roE-qUfSfgYPZJ2bugtt2jQEu3QOBBsT5woRD4kUtbvCSYr3wQWCH53dSpvOdENrmToN7KqCISNb5EclKDp0-nIzXYbFOPJeRkmK6i93H3QFv-MdxLj3gp75YHNGw7IQctXCVMryqTxAGo");'>
                                </div>
                                <span class="absolute top-3 right-3 text-xs font-semibold bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 px-2 py-1 rounded-full">In Stock</span>
                            </div>
                            <div class="p-4 flex flex-col flex-grow">
                                <h3 class="font-semibold text-base text-slate-900 dark:text-white mb-2 flex-grow">
                                    ASUS ROG Zephyrus G14</h3>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs font-medium bg-primary/20 text-primary px-2 py-0.5 rounded-md">RTX 4070</span>
                                    <span class="text-xs font-medium bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-0.5 rounded-md">32GB RAM</span>
                                </div>
                                <p class="text-xl font-bold text-primary">$1,849.99</p>
                            </div>
                        </div>
                        <!-- Product Card 4 -->
                        <div class="group flex flex-col bg-white dark:bg-gray-800/50 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <div class="relative">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover w-full"
                                    data-alt="AMD Ryzen 9 CPU"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB1Y5uvTK0onORazkB6OX08BeB2QGwXBshMFKIh3ACCgAa04YJum1jvITM1HU3gFKAuk6E2z9wdeTGB4WtNz9qSneb1BGKQ6BnbJdN_Klo7jQbQ7ad9v_YJmDnGchm0lm9TYFJaSF-ALP7sVak04P8GuAFpuq1oWYs0kv1TD-YQk5-KI6twtj5O0bwo4a3RpBp9S-sJpyJrqxqGBray3lzDmsM0zUEoJQX-hiOI2nF7PZs43TFNYoPww7V1PV6qAqwDFkALXju4MHcf");'>
                                </div>
                                <span class="absolute top-3 right-3 text-xs font-semibold bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 px-2 py-1 rounded-full">Low Stock</span>
                            </div>
                            <div class="p-4 flex flex-col flex-grow">
                                <h3 class="font-semibold text-base text-slate-900 dark:text-white mb-2 flex-grow">
                                    AMD Ryzen 9 7950X CPU</h3>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-xs font-medium bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 px-2 py-0.5 rounded-md">16-Core</span>
                                </div>
                                <p class="text-xl font-bold text-primary">$549.00</p>
                            </div>
                        </div>
                        <!-- More Product Cards -->
                    </div>
                    <!-- Pagination -->
                    <div class="flex justify-center pt-8">
                        <nav class="flex items-center gap-2">
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-xl">chevron_left</span>
                            </a>
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-white bg-primary"
                                href="#">1</a>
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                                href="#">2</a>
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                                href="#">3</a>
                            <span class="inline-flex items-center justify-center size-9 text-sm font-medium text-gray-400">...</span>
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                                href="#">10</a>
                            <a class="inline-flex items-center justify-center size-9 rounded-lg text-sm font-medium text-slate-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-xl">chevron_right</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
