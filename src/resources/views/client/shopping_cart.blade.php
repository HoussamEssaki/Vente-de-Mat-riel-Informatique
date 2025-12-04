@extends('layouts.app')

@section('content')
<main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
            <div class="flex flex-col gap-8">
                <div class="flex flex-wrap gap-2 text-sm">
                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary" href="#">Home</a>
                    <span class="text-slate-400 dark:text-slate-500">/</span>
                    <a class="text-slate-500 dark:text-slate-400 hover:text-primary" href="#">Products</a>
                    <span class="text-slate-400 dark:text-slate-500">/</span>
                    <span class="font-medium text-slate-800 dark:text-slate-200">Shopping Cart</span>
                </div>
                <div class="flex flex-wrap justify-between gap-4 items-end">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black tracking-tighter">Your
                            Shopping Cart</h1>
                        <p class="text-slate-500 dark:text-slate-400 text-base font-normal">You have <span
                                class="font-bold text-slate-700 dark:text-slate-300">3 items</span> in your cart. Review
                            before checkout.</p>
                    </div>
                    <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-200 dark:bg-slate-800 text-slate-800 dark:text-slate-200 hover:bg-slate-300 dark:hover:bg-slate-700 text-sm font-bold leading-normal tracking-wide gap-2">
                        <span class="material-symbols-outlined">arrow_back</span>
                        <span class="truncate">Continue Shopping</span>
                    </button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 xl:gap-12 items-start">
                    <div
                        class="lg:col-span-2 flex flex-col gap-4 bg-white dark:bg-slate-900 p-4 sm:p-6 rounded-xl shadow-sm">
                        <div
                            class="flex flex-col sm:flex-row gap-4 py-4 justify-between items-center border-b border-slate-200 dark:border-slate-800">
                            <div class="flex items-start gap-4 w-full">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-24 bg-slate-100 dark:bg-slate-800"
                                    data-alt="NVIDIA GeForce RTX 4090 graphics card"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABB4N7f-PTPwUVQKS0gqaQbJCEeQP0lEmdwYptCl8_OKR1G50jTD6d2Ma3vBnMlWAX5Qfz47r84wVPOO0jTAmkK_FWTtYd7GbRBlOjyX0r7MgaBM4gmZEQQeO9bQZQSKD1wtax3ztwpqGths7XNxMurqdsAC0K-KkPTWRX-L9scI9bns7CkP2cYFgemNjqnT3sqdhxG4ih5WQqaBfFUn4TLXx-LDl0k632i8PlamUaFnt1VBZkT51Nmo36t8aLBZCc_-i5K3gVQJw5");'>
                                </div>
                                <div class="flex flex-1 flex-col justify-center gap-1">
                                    <p class="text-slate-900 dark:text-white text-base font-bold leading-normal">NVIDIA
                                        GeForce RTX 4090</p>
                                    <p class="text-green-600 dark:text-green-500 text-sm font-medium leading-normal">In
                                        Stock</p>
                                    <button
                                        class="text-slate-500 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-500 text-sm font-normal leading-normal w-fit flex items-center gap-1">
                                        <span class="material-symbols-outlined !text-base">delete</span> Remove
                                    </button>
                                </div>
                            </div>
                            <div class="flex w-full sm:w-auto items-center justify-between sm:justify-end gap-6">
                                <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">-</button>
                                    <input
                                        class="text-base font-medium leading-normal w-8 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                                        type="number" value="1" />
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">+</button>
                                </div>
                                <p class="text-slate-900 dark:text-white text-lg font-bold w-24 text-right">$1,599.00
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row gap-4 py-4 justify-between items-center border-b border-slate-200 dark:border-slate-800">
                            <div class="flex items-start gap-4 w-full">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-24 bg-slate-100 dark:bg-slate-800"
                                    data-alt="AMD Ryzen 9 7950X CPU"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDuOSiINwdwR8wEyqh5zsCho0dhyOVtKu0Duj2AdjmIEEs1dognX4dBpdHVl4xqHJ_AGvva-DiLbvAjJ048u2FypwQQ_LwTg2Fhf0GEccXF5QvVUe2EYTvG8CcciPdhN1Usi_XLZq1PHbIs_AOCXgFZi-4-pthdFEOZOUWkXa1blzXk5OIbaW3CSze3xVdEfwKk_Csrm4OCl16e1FqP3CkhafGje87C0qX7qhRyPWv0a4d6YwIWUzesrrpjxbyL1PE3EaIUmEXW9QHt");'>
                                </div>
                                <div class="flex flex-1 flex-col justify-center gap-1">
                                    <p class="text-slate-900 dark:text-white text-base font-bold leading-normal">AMD
                                        Ryzen 9 7950X</p>
                                    <p class="text-green-600 dark:text-green-500 text-sm font-medium leading-normal">In
                                        Stock</p>
                                    <button
                                        class="text-slate-500 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-500 text-sm font-normal leading-normal w-fit flex items-center gap-1">
                                        <span class="material-symbols-outlined !text-base">delete</span> Remove
                                    </button>
                                </div>
                            </div>
                            <div class="flex w-full sm:w-auto items-center justify-between sm:justify-end gap-6">
                                <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">-</button>
                                    <input
                                        class="text-base font-medium leading-normal w-8 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                                        type="number" value="1" />
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">+</button>
                                </div>
                                <p class="text-slate-900 dark:text-white text-lg font-bold w-24 text-right">$549.00</p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 py-4 justify-between items-center">
                            <div class="flex items-start gap-4 w-full">
                                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-24 bg-slate-100 dark:bg-slate-800"
                                    data-alt="Corsair Vengeance RGB DDR5 RAM kit"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTNF-9df4cEPaFdDZRrhSxS2632Ysw2TbBOyntTwQy10y3e36LKQ5uOg_5RHuv3Q8KFT_LAnLUsugFWhR7LNc1XyBehS_ddM7tGt8ILaebZKlX4NLxQWrVkohFEhWRNCuFfHhKxtRUsVZkxsCpIEfw9YkVkwfXySkIRgYUZwbuRTlWI1rVP56svhjKch0lperABIJXvzRDPeQoTHP7rsUd9lNdYhcNPltJgnnVysxG1OlukdTHAsYeVFEjFw1JV0EGX1l_v8lM_eLa");'>
                                </div>
                                <div class="flex flex-1 flex-col justify-center gap-1">
                                    <p class="text-slate-900 dark:text-white text-base font-bold leading-normal">Corsair
                                        Vengeance RGB 32GB (2x16GB) DDR5</p>
                                    <p class="text-green-600 dark:text-green-500 text-sm font-medium leading-normal">In
                                        Stock</p>
                                    <button
                                        class="text-slate-500 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-500 text-sm font-normal leading-normal w-fit flex items-center gap-1">
                                        <span class="material-symbols-outlined !text-base">delete</span> Remove
                                    </button>
                                </div>
                            </div>
                            <div class="flex w-full sm:w-auto items-center justify-between sm:justify-end gap-6">
                                <div class="flex items-center gap-2 text-slate-900 dark:text-white">
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">-</button>
                                    <input
                                        class="text-base font-medium leading-normal w-8 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                                        type="number" value="2" />
                                    <button
                                        class="text-base font-medium leading-normal flex h-8 w-8 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 dark:hover:bg-slate-700 cursor-pointer">+</button>
                                </div>
                                <p class="text-slate-900 dark:text-white text-lg font-bold w-24 text-right">$218.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 w-full">
                        <div
                            class="sticky top-28 bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm flex flex-col gap-6">
                            <h2 class="text-slate-900 dark:text-white text-xl font-bold">Order Summary</h2>
                            <div class="flex flex-col gap-3 border-b border-slate-200 dark:border-slate-800 pb-4">
                                <div class="flex justify-between items-center">
                                    <p class="text-slate-500 dark:text-slate-400">Subtotal</p>
                                    <p class="font-medium text-slate-800 dark:text-slate-200">$2,366.00</p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-slate-500 dark:text-slate-400">Shipping</p>
                                    <p class="font-medium text-slate-800 dark:text-slate-200">Calculated at next step
                                    </p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-slate-500 dark:text-slate-400">Taxes</p>
                                    <p class="font-medium text-slate-800 dark:text-slate-200">Calculated at next step
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-slate-800 dark:text-slate-200 text-lg font-bold">Total</p>
                                <p class="text-slate-900 dark:text-white text-2xl font-black tracking-tight">$2,366.00
                                </p>
                            </div>
                            <button
                                class="w-full flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold shadow-sm hover:bg-primary/90 focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-slate-900 gap-2">
                                <span>Proceed to Checkout</span>
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection