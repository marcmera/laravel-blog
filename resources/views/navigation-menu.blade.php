<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                {{-- <li>
                    <a class="flex space-x-2 items-center hover:text-blue-900 text-sm text-blue-500"
                        href="http://127.0.0.1:8000">
                        Home
                    </a>
                </li> --}}
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
                </x-nav-link>
                @auth
                    <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('Blog') }}
                    </x-nav-link>
                @endauth
            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">    
        @auth
            <!-- Right Side Of Navbar -->
            @include('layouts.includes.header-right-auth')
        @else
            <!-- Settings Dropdown -->
            @include('layouts.includes.header-right-guest')
        @endauth

    </div>
</nav>