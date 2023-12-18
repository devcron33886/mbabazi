<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-400">Services</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Everything you need to be available
                and visible online</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">Quis tellus eget adipiscing convallis sit sit eget aliquet
                quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                @foreach ($services as $service)
                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-white">
                            <img src="{{ $service->icon }}" class="h-8 w-8 flex-none rounded-full">
                            {{ $service->name }}
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-gray-300">
                            <p class="flex-auto">{{ $service->description }}</p>
                            <p class="mt-6">
                                <a href="{{ route('contact') }}" wire:navigate
                                    class="text-sm font-semibold leading-6 text-indigo-400">Contact us
                                    <span aria-hidden="true">→</span></a>
                            </p>
                        </dd>
                    </div>
                @endforeach



            </dl>
        </div>
    </div>
</div>
