@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-12 md:gap-16 lg:gap-20 py-10 px-4 md:px-10">
        <div class="@container">
            <div class="p-4">
            <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-start justify-end px-6 pb-10 sm:px-10" data-alt="A sleek and modern gaming laptop open on a desk with ambient blue and purple lighting in the background, showcasing its glowing keyboard." style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBeGQ9w8jAnFUIA-9swFGcO3ZrwlXwJT8ROMiCT8kXm1QVbIipbfMLHwu4r-eVoCCMv6CDSh7juqRd127hYs6ZBTkqEQm2c5GVhKhLL1BDEfRpbcRUVFxzBItHSrFofI1WOs6GNl75efxbaWwQOjl0o85JLUWdORtkMolJLOSq9cgSS1HXNGF2cU2lCFLEWn1urmofa89eT1URaiKNXeXtZnYAlPdsSmpvDQ45hxTzK6qteOx5OS9zOl973nQrfYD-tfmi58L8xIO8r");'>
                <div class="flex flex-col gap-4 text-left max-w-xl">
                    <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl">The Future of Performance is Here</h1>
                    <h2 class="text-slate-200 text-sm font-normal leading-normal sm:text-base">Discover the latest in high-performance computer hardware and unlock unparalleled speed.</h2>
                </div>
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors shadow-md">
                    <span class="truncate">Shop Now</span>
                </button>
            </div>
            </div>
        </div>
        
        <div class="flex flex-col gap-4">
        <h2 class="text-slate-900 dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4">Explore Our Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 p-4">
            <div class="col-span-2 row-span-2 group relative overflow-hidden rounded-xl shadow-sm">
                <div class="bg-cover bg-center flex flex-col justify-end p-6 aspect-[4/3] w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" data-alt="An immersive gaming setup with multiple monitors displaying a vibrant video game, complete with a professional gaming chair and RGB lighting." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4AxOvYVu3768I-Sp0lwtAQAakvBnTP9oSc--f8Nq8OTklMiamDrDQhTpSUdIVUv5J58ZyCsF1kThsOEFYT5SYACPZRa1nm2iLhoMirdvO1TbOucDmDSF1VSqBzf5bNoUynou7HMx4BoODhjUkqhChUknUlek0WnzN5gSgjAr3g4H1AsvskOu1bLuE_B98lxWiNRmUzv6eH5CUCEHi0zWNaRpRBOTkSZIi6gLJxm8-_V-UZVhDZb2co5JC2cbVZUDK_9ArfDA32cAA");'>
                    <p class="text-white text-2xl font-bold leading-tight">Gaming Rigs</p>
                </div>
                <a class="absolute inset-0" href="#"></a>
            </div>
            <div class="col-span-2 md:col-span-1 group relative overflow-hidden rounded-xl shadow-sm">
                <div class="bg-cover bg-center flex flex-col justify-end p-4 aspect-video w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" data-alt="A clean, minimalist office desk with a powerful computer, dual monitors, and ergonomic accessories, designed for maximum productivity." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuATqs385TsA4XVCEeLgLi3r_R5n9Ub8Mt8-ro02ZsCHfdDSnbAUp5S4gddpv3dC3EvkvimT0wIijVD2demn1Hdk3oKBxmm7MZKPUY3cXYG_djBUFJlQFbSwe8Ce_mqcCqNWzx5-lvPoQqO9oAVxYM0gqODhMR_i_GN9ynOsrnvUa3ccs3NzA8TUeoDSElOBL-2sUHp65iD-BbAY5BOM2Hk1O6N0a1MM5tcihmjbi2Sk5BBqGbzEtkL_bE-9cjScWi6vw6REpv0aREZc");'>
                    <p class="text-white text-base font-bold leading-tight">Productivity Setups</p>
                </div>
                <a class="absolute inset-0" href="#"></a>
            </div>
            <div class="col-span-2 md:col-span-1 group relative overflow-hidden rounded-xl shadow-sm">
                <div class="bg-cover bg-center flex flex-col justify-end p-4 aspect-video w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" data-alt="A close-up shot of a high-performance motherboard with a CPU and RAM modules installed, highlighting intricate circuits." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFmNOLMu5wCw6SzCOOzy6tw0_QV-6EMR4ck-DApfx7reSDnmoxhEXufN7Vii0fow6kwTYt95n35_O98V03ynsO__B7S6zlbQg7AiioSEMIX09Ne0PT5ZVB0KIif2qUsBqzmZjwWKCitnJXTgVB3_9RBuoMJiYrbhcttN00Fwp_pR8cNGvYdO97ZSESE4l2QVCsUcSQ9j0njEsPvF821gr1t1-jrKTYWijm67HkAo6cVc32hYFGO4Ca8AY18eHgbvbDwrQARoLCV_vP");'>
                    <p class="text-white text-base font-bold leading-tight">Core Components</p>
                </div>
                <a class="absolute inset-0" href="#"></a>
            </div>
            <div class="col-span-2 group relative overflow-hidden rounded-xl shadow-sm">
                <div class="bg-cover bg-center flex flex-col justify-end p-6 aspect-[2/1] w-full h-full transition-transform duration-300 ease-in-out group-hover:scale-105" data-alt="A collection of essential computer peripherals including a mechanical keyboard, a high-precision mouse, and a premium headset." style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 60%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB8_qw821-TRdNBpg8Jb0nqNd1qBqZRKl-ldYMeB4gc4ygKrJpL7j03L5F7Gq2nC0lyPjUP_tyr7YCWgGSA3kqyDcpcOAE_feoK7CwMbk4A1NkxV0NDTRpgN-5AtUQyPUDC2hh0pqo7Qs6ATCyIzFv94h5h5I-BT-U_7QIJyPRy-Hpd-sc_CYqLiLbAle-5vlgAnVIwtWuPdXp3Ltf5vj_4IIdoFneoogTC45bpWpt3W2x1U9TtKwoqXrbRi5Pvr0Xl9UknTbQIYg6n");'>
                    <p class="text-white text-xl font-bold leading-tight">Essential Peripherals</p>
                </div>
                <a class="absolute inset-0" href="#"></a>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col gap-4">
        <h2 class="text-slate-900 dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4">Fresh Off the Line: New Arrivals</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
            <div class="flex flex-col gap-3 rounded-xl bg-white dark:bg-slate-800/50 shadow-sm p-4 group transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="aspect-square w-full overflow-hidden rounded-lg">
                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="A futuristic-looking graphics card with RGB lighting displayed against a dark background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAV8rT3cBVoDzRIXpKf_sF5H6pCR5JaJv4AKSPxXCG8yIRBH1zCl1a9R9F6_1oRsDhr5qumYsbDigFTDvmRJOaO4NBQgxiBkx5J6IB8fJgleZT-UNZuTpC5nrWqolzd0VyCqpYFEcGKfMwjWu7eBWLz4Z8NEczd3FBMxqIxnUyMZhsdZxmYp1PFpqAJl4Z5pQZPMFjT7JIw2ComFnfAlDyBGbP9wcbZGXVBYc99SEH0YZZ7a-N5PF3V3-VYCRnceync8Ch2IJEORmsU"/>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-xs text-slate-600 dark:text-slate-400">GRAPHICS CARD</p>
                    <h3 class="text-base font-bold text-slate-900 dark:text-white leading-tight">Quantum RTX 5090</h3>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-lg font-black text-slate-900 dark:text-white">$1,999.99</p>
                    <button class="flex items-center justify-center rounded-full h-9 w-9 bg-primary/20 text-primary hover:bg-primary hover:text-white transition-colors">
                        <span class="material-symbols-outlined !text-base">add_shopping_cart</span>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-3 rounded-xl bg-white dark:bg-slate-800/50 shadow-sm p-4 group transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="aspect-square w-full overflow-hidden rounded-lg">
                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="A sleek white and silver wireless mechanical keyboard with customizable RGB backlighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9j7nEhfrK3A-GSuZB8qJUfMIkw6nE-IU5QwdY72iuNv7M56Tk0u1JXkhxAbg0mb1ltvGLxhxjqvfYWEZn7DrB2CDNSHdu2CLBhj353ioa4QCtYfSrhJjp9kZvibUMDD7BP14AAULno-mslx1QcNwbstt7CnCuvW0vKZRbdmV-4Md6HxoC9LETrCUl14frr_3jJx76SPKls5ezPgdC1IMPBLxqAZ41EoFlvZEii_sgwQXdhKJl5Pq1-HbmuZYq26Q1jsJX5iJWWWoi"/>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-xs text-slate-600 dark:text-slate-400">KEYBOARD</p>
                    <h3 class="text-base font-bold text-slate-900 dark:text-white leading-tight">AeroType Pro Wireless</h3>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-lg font-black text-slate-900 dark:text-white">$149.99</p>
                    <button class="flex items-center justify-center rounded-full h-9 w-9 bg-primary/20 text-primary hover:bg-primary hover:text-white transition-colors">
                        <span class="material-symbols-outlined !text-base">add_shopping_cart</span>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-3 rounded-xl bg-white dark:bg-slate-800/50 shadow-sm p-4 group transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="aspect-square w-full overflow-hidden rounded-lg">
                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="An ultra-wide curved gaming monitor showing a vibrant, high-resolution landscape." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjdis5dyJrZ7k5PJwinzniWLclHR9miCF7A6nCuG3fw40c7CgxTSz4gEINLzK2jhnwdf3mkjg6euohPjwvjGMJUr53Cs0QpEtzKQUhSJrdQeyi3mVWa1u7N0iUjjbGWpiigd_Z_jtLEl-TybI_RLAt-TzxCOxesr63qEZU_KqraBLIqc6l0l3qmjcJSfCgWHARRZVN40Kue3XS1Yd-tP8nqoQXxzT2R9ftRyL-q29SLE2a9yvKM63Xjp94q8hIUp6FmzE1VfBYmLSN"/>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-xs text-slate-600 dark:text-slate-400">MONITOR</p>
                    <h3 class="text-base font-bold text-slate-900 dark:text-white leading-tight">Odyssey G9 UltraWide</h3>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-lg font-black text-slate-900 dark:text-white">$1,299.99</p>
                    <button class="flex items-center justify-center rounded-full h-9 w-9 bg-primary/20 text-primary hover:bg-primary hover:text-white transition-colors">
                        <span class="material-symbols-outlined !text-base">add_shopping_cart</span>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-3 rounded-xl bg-white dark:bg-slate-800/50 shadow-sm p-4 group transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="aspect-square w-full overflow-hidden rounded-lg">
                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="A close-up of a high-speed NVMe SSD, showing the gold contacts and black circuit board." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRXfsYSn-kMYapGAnpmwmrORz3aGHk-mZUa4QilW35kHGt6HbfsZgrxi0idCclt_SuwbIp2VvQtmzYrzNl5AEe7Cl9eP4AFN4tV5gXgyCIKTryM2REQ2rtjEL1Fcxb8EB-_5E1f4MWCLE0cJk_PsT8THJKLUUr4hJRlDIfIqDINkFZA_lFWXSZati4WErBvsWTemPQq-u_TT8Vl8-e77tfXGX_GAKcYTdIANOvj4_uBwErqcZlJ15KaS5iP6Xc1GY2kv0a512GqYoN"/>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-xs text-slate-600 dark:text-slate-400">STORAGE</p>
                    <h3 class="text-base font-bold text-slate-900 dark:text-white leading-tight">FireCuda 4TB NVMe SSD</h3>
                </div>
                <div class="flex items-center justify-between">
                    <p class="text-lg font-black text-slate-900 dark:text-white">$449.99</p>
                    <button class="flex items-center justify-center rounded-full h-9 w-9 bg-primary/20 text-primary hover:bg-primary hover:text-white transition-colors">
                        <span class="material-symbols-outlined !text-base">add_shopping_cart</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
