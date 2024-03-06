<x-app-layout>
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-blue-500">
                Welcome to <span class="text-blue-700">&lt;MERA&gt;</span> <span class="text-blue-500"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <h2 class="mt-16 mb-10 text-3xl text-blue-500 font-bold">Featured Posts</h2>
        <div class="mb-16 flex flex-col justify-center items-center">
            <div class="w-full">
                <div class="flex flex-wrap gap-10 justify-center">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-white font-semibold bg-gray-800 w-32 py-2 rounded-xl"
                href="http://127.0.0.1:8000/blog">More Posts
            </a>
        </div>
        <hr>

        <h2 class="mt-16 mb-10 text-3xl text-blue-500 font-bold">Latest Posts</h2>
        <div class="mb-16 flex flex-col justify-center items-center">
            <div class="w-full">
                <div class="flex flex-wrap gap-10 justify-center">
                    @foreach ($latestPosts as $post)
                        <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-white font-semibold bg-gray-800 w-32 py-2 rounded-xl"
                href="http://127.0.0.1:8000/blog">More Posts
            </a>
        </div>
    </div>
</x-app-layout>
