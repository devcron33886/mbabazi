<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900">
    <div class="relative isolate overflow-hidden">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/100 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
            <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                <img class="h-11 rounded-full" src="{{ asset('assets/images/Jacques MBABAZI.webp') }}"
                    alt="Jacques MBABAZI">
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex space-x-6">
                        <span
                            class="rounded-full bg-indigo-500/10 px-3 py-1 text-sm font-semibold leading-6 text-white ring-1 ring-inset ring-indigo-500/20">Hi
                            !
                            ,</span>
                        <span class="inline-flex items-center space-x-2 text-2xl font-bold leading-6 text-gray-300">
                            <span> I am</span>
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Jacques MBABAZI</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">I'm a web designer and developer. I love designing web
                    interfaces that are modern and
                    beautiful. And I love building web apps using modern web technologies.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#" wire:navigate
                        class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Book
                        a phone call</a>
                    <a href="#" wire:navigate class="text-sm font-semibold leading-6 text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="{{ asset('assets/images/Jacques MBABAZI.webp') }}" alt="Jacques MBABAZI" width="360"
                        height="720" class="w-[46rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                </div>
            </div>
        </div>
        <!-- "Woosh" animation script and template -->
        <script data-navigate-once>
            // Every 150ms we'll generate a new "woosh" vertical line, place it randomly, and animate it.
            setInterval(() => {
                let el = document.querySelector('#woosh').content.cloneNode(true).firstElementChild;
                document.querySelector('#woosh').after(el);

                setTimeout(() => woosh(el), 10);
            }, 150);

            function woosh(el) {
                let random = (max) => Math.floor(Math.random() * max);
                let parent = el;
                let child = el.firstElementChild;

                parent.style.setProperty('left', random(100) + '%');
                parent.style.setProperty('top', (random(1000) - 500) + 'px');
                parent.classList.remove('translate-y-0');
                setTimeout(() => parent.classList.add('translate-y-[500px]'), 50);

                child.classList.remove('opacity-0');
                setTimeout(() => {
                    child.classList.add('opacity-0');

                    setTimeout(() => {
                        el.remove();
                    }, 1000);
                }, 650);
            }
        </script>

        <template id="woosh">
            <div class="absolute translate-y-0 transition-transform duration-[1000ms]">
                <div
                    class="duration-350 h-[500px] w-[1px] bg-gradient-to-b from-transparent via-[#6A1F3Faa] opacity-0 transition-opacity">
                </div>
            </div>
        </template>
    </div>
    <!-- Logo cloud -->
    <div class="mx-auto py-24 mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
        <h2 class="text-center text-lg font-semibold leading-8 text-white">The company I have worked with.</h2>
        <div
            class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
            <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1"
                src="https://hopeandhomes.rw/wp-content/uploads/2023/06/LOGO-1024x819.png"
                alt="Hope and Homes For Children Rwanda" width="158" height="48">
            <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1"
                src="https://crusaders.africa/assets/logo.png" alt="Reform" width="158" height="48">
            <img class="col-span-2 max-h-14 w-full object-contain lg:col-span-1"
                src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158"
                height="48">
            <img class="col-span-2 max-h-14 w-full object-contain sm:col-start-2 lg:col-span-1"
                src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" width="158"
                height="48">
            <img class="col-span-2 col-start-2 max-h-14 w-full object-contain sm:col-start-auto lg:col-span-1"
                src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" width="158"
                height="48">
        </div>
    </div>
    <!-- Services -->
    <x-service-component />

    <!--Projects-->
    <x-project-component />

    <!-- From the blog -->
    <div class="mx-auto py-24 max-w-7xl px-6 sm:mt-16 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the blog</h2>
            <p class="mt-2 text-lg leading-8 text-white">Learn how to grow your business with our expert
                advice.</p>
        </div>
        <x-blog-component />
    </div>

    <!-- Call to action -->
    <x-cta-component />


    <x-footer-component />
</body>

</html>
