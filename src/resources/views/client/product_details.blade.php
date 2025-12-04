@extends('layouts.app')

@section('content')
<main class="px-4 sm:px-8 lg:px-16 py-8">
    <div class="layout-content-container flex flex-col max-w-7xl mx-auto flex-1">
        <div class="flex flex-wrap gap-2 pb-6">
            <a class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary"
                href="#">Home</a>
            <span class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">/</span>
            <a class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary"
                href="#">Graphics Cards</a>
            <span class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">/</span>
            <span class="text-gray-900 dark:text-gray-100 text-sm font-medium leading-normal">NexusCore X1
                GPU</span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="flex flex-col gap-4">
                <div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden bg-gray-200 dark:bg-gray-800 rounded-xl aspect-square shadow-sm"
                    data-alt="Main product view of the NexusCore X1 GPU"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB4iNK04m-DY-Z76w7wgSpWSKB6eJ-lRbjnvusvI2qik5OLQsMyNWFJ6WTPV3Eqc3mB3W4zYbNMX7Goi2E5HaqGq7RBz37y4IwAI9ghxPv_1tX7Q1ye5tY3HX6DOmmG21NSiX4WSHfMmSq_rn3YhtJQn3XINvzBhNi_Ba3jTL51gAjlC_mnzU456T-K15gdTn8_ZJMeAJAPmR27WE8ilVSY65WmXmQNsIPEahqk2FBKx8MiX1ASCFUoJFHmrvpstE_vpPTaxP1eOG6S");'>
                </div>
                <div
                    class="flex overflow-x-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
                    <div class="flex items-stretch p-1 gap-3">
                        <div
                            class="flex h-full flex-1 flex-col gap-2 rounded-lg min-w-24 cursor-pointer border-2 border-primary">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                                data-alt="Side view of the GPU"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDcqSmblisRGTCt3wtU1hNDsrxTZrDlkCndJsw1mQFiShwfmlKdCbR7p4AE3XwQ1OfXg-wyQUZqIVK9-snSnV38mIu86GuybWMqtENMf08494LqCtSsORQsw1XFVfM6n8Y8Me3oS1SttYxaDvixTHjzdnEYdbcPCZjNPZTIcZ_6xxwXFp-WoWlbGGdNIRiNUaTFRrBTfmnad4GWNsYY5LdUbpmaFe-a3PGAyBDfeRU8Y5XoI9seFC3_9Ve8YWEx3pCJZQA3uSdhx9m6");'>
                            </div>
                        </div>
                        <div class="flex h-full flex-1 flex-col gap-2 rounded-lg min-w-24 cursor-pointer">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                                data-alt="Backplate of the GPU"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCrFFxKju53RKw6SinUhZPaCSUx_CiRDYWb8lOyyHKuECpOb3rL4jFg03DDhJUx8pBD68RiJP3cooJKcsFpYBZ3DlVg4ZBwieCxkWly4HHkhnlLK-6Mg_QKwEGvclJS6Zr0WNv-2HP7TJe_1uxQqoA0koK09zG7rLpU4gQ9ZPoIh0tHV489mlT-oDZI8l1RkYMw6U2jddXKh1G9GY85KAYgcXndcI7R55U_WJs-udz6Olq5xgbVQFdf-B0hk1I1Gb1BUcs-ldizBC7T");'>
                            </div>
                        </div>
                        <div class="flex h-full flex-1 flex-col gap-2 rounded-lg min-w-24 cursor-pointer">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                                data-alt="Ports on the GPU"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-xwDc4zMtWUneRg4c6uIoTm-kl3Gohd63euIa6r0avNg24m10V2LKMxYxsW76HXW9MbQNiLGJvIfyULHP0vIBDwYHXJl4T30XodUiBVm0asfPpyGQG61XCFSP8xMpcXnV7BYeFCj1X4ohWo2idVAxJHcDSCXdMA0abmm9ObW_S0p-8wf1JlUjltBnKMGub_SG1glZLGaLGnGTf3o0wYUlLAf4LfmfbzsY5AvO2Uj-7pBqZcF9rjG7VGn_iFIIeWbE0mSl30RLa9Aj");'>
                            </div>
                        </div>
                        <div class="flex h-full flex-1 flex-col gap-2 rounded-lg min-w-24 cursor-pointer">
                            <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                                data-alt="The GPU installed in a computer case"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDgqP4bjdYS0zsRCrZW6UiWr4crpwVvJYYRbt1MKNoFekN0_nkVZmrs_NUDhoC6TwVRvmaBOQVdDuKTkJDluArgy0-8KAVVYXEnbJZ3orwdt60by9K2RIvTfX9qB0GeLZbStOOOjXei5277w4g_lad0rFjo7UEOCU6l79Mn2huC-KTF7mbr3nrXtz7n-1JhNHVdbSph9LJ9R3FYzIyqZICd3G8VsD6Nf1UEA11HRZCZCVyETdr6RqL5FkPd98QWjA_hweELsHIfOS0n");'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 pt-4">
                <div class="flex flex-col gap-3">
                    <h1
                        class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        NexusCore X1 GPU</h1>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">$699.99</p>
                    <div class="flex items-center gap-2">
                        <span class="text-green-500 text-sm font-semibold">In Stock</span>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <label class="text-sm font-medium text-gray-600 dark:text-gray-300"
                            for="quantity">Quantity</label>
                        <div
                            class="flex items-center rounded-lg border border-gray-300 dark:border-gray-700">
                            <button
                                class="px-3 py-2 text-gray-600 dark:text-gray-300 rounded-l-lg hover:bg-gray-100 dark:hover:bg-gray-800">-</button>
                            <input
                                class="w-12 text-center border-0 bg-transparent text-gray-900 dark:text-white focus:ring-0"
                                id="quantity" type="text" value="1" />
                            <button
                                class="px-3 py-2 text-gray-600 dark:text-gray-300 rounded-r-lg hover:bg-gray-100 dark:hover:bg-gray-800">+</button>
                        </div>
                    </div>
                    <button
                        class="flex w-full max-w-xs cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] shadow-sm hover:opacity-90 transition-opacity">
                        <span class="material-symbols-outlined mr-2">add_shopping_cart</span>
                        <span class="truncate">Add to Cart</span>
                    </button>
                </div>
                <div class="border-t border-gray-200 dark:border-gray-800 pt-6">
                    <div class="flex flex-col gap-4">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Technical Specifications
                        </h3>
                        <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-800">
                            <table class="w-full text-sm">
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-800">
                                        <td
                                            class="px-4 py-3 font-medium bg-gray-50 dark:bg-gray-800/50 w-1/3 text-gray-600 dark:text-gray-300">
                                            GPU Clock</td>
                                        <td class="px-4 py-3 text-gray-800 dark:text-gray-200">1850 MHz
                                            Boost Clock</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-800">
                                        <td
                                            class="px-4 py-3 font-medium bg-gray-50 dark:bg-gray-800/50 w-1/3 text-gray-600 dark:text-gray-300">
                                            VRAM</td>
                                        <td class="px-4 py-3 text-gray-800 dark:text-gray-200">12GB GDDR6X
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-800">
                                        <td
                                            class="px-4 py-3 font-medium bg-gray-50 dark:bg-gray-800/50 w-1/3 text-gray-600 dark:text-gray-300">
                                            Interface</td>
                                        <td class="px-4 py-3 text-gray-800 dark:text-gray-200">PCI Express
                                            4.0</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-4 py-3 font-medium bg-gray-50 dark:bg-gray-800/50 w-1/3 text-gray-600 dark:text-gray-300">
                                            Power Connectors</td>
                                        <td class="px-4 py-3 text-gray-800 dark:text-gray-200">1x 12-pin
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection