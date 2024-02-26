@props(['post'])

<div class="shadow-2xl rounded-xl post-card" >
    <a href="#" class="">
        <div>
            <img class="rounded-xl post-img" alt="post image"
                src="{{ $post -> image}}">
        </div>
    </a>
    <div class="mt-3 mb-10 ml-3 flex flex-col justify-center">
        <div class="flex items-center mb-2">
            <a href="#" class="bg-red-600 text-white rounded-xl px-3 py-1 text-sm mr-3">
                Laravel
            </a>
            <p class="text-gray-500 text-sm">{{$post->published_at}}</p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900 mr-3">{{ $post->title}}</a>
    </div>
</div>