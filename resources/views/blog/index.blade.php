<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

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

        <div class="bg-gray-900 py-32 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the blog</h2>
                    <p class="mt-2 text-lg leading-8 text-white">Learn how to grow your business with our expert
                        advice.</p>
                </div>
                <x-blog-component />
            </div>
        </div>


    </div>
    <x-footer-component />
</body>

</html>
