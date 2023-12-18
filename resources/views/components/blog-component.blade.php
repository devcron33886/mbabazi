<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    @foreach ($articles as $article)
        <article class="flex flex-col items-start justify-between">
            <div class="relative w-full">
                <img src="storage/{{ $article->featured_image }}" alt="{{ $article->title }}"
                    class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
            </div>
            <div class="max-w-xl">
                <div class="mt-8 flex items-center gap-x-4 text-xs">
                    <time datetime="{{ $article->created_at }}" class="text-white">{{ $article->created_at }}</time>

                    <a href="#"
                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-800 hover:bg-gray-100">{{ $article->categories }}</a>

                </div>
                <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-300 group-hover:text-gray-200">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $article->title }}
                        </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-300">
                        {{ Str::limit($article->excerpt, 220) }}
                    </p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="h-10 w-10 rounded-full bg-gray-100">
                    <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-300">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{ $article->author->name }}
                            </a>
                        </p>
                        <p class="text-gray-300">Co-Founder / CTO</p>
                    </div>
                </div>
            </div>
        </article>
    @endforeach


    <!-- More posts... -->
</div>
