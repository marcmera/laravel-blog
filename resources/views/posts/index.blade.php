<x-app-layout>
    <div class="w-full grid grid-cols-4 gap-10">
        <div class="md:col-span-3 col-span-4">
            <livewire:post-list />
            {{-- @livewire('post-list') --}}
        </div>
        <livewire:search-box />
    </div>
</x-app-layout>
