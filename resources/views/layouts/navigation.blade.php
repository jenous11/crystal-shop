{{-- Made by Claude - Responsive Navigation --}}
<nav x-data="{ open: false }" class="bg-white w-full">

    <div class="flex items-center justify-between px-4 py-2">

        {{-- Logo --}}
        <div class="w-[75px]">
                 <a href="{{route('products.index')}}"> <img src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}" alt="crystal logo" class="bg-white"></a>
        </div>

        {{-- Desktop nav links --}}
        <div class="hidden md:flex">
            <ul class="flex items-center gap-[4vw] text-black">
                <li><a href="{{ route('products.index') }}">Shop</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Gifting</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">By Meaning</a></li>
                <li><a href="">By Crystal</a></li>
{{--
                @auth
                    <li><a href="{{ route('adminproducts.create') }}">Create</a></li>
                @endauth
                @auth
                @if( auth()->user()->is_admin)
                    <li><a href="/admin">adminpanel</a></li>
                @endif
                @endauth --}}
            </ul>
        </div>

        {{-- Desktop auth dropdown --}}
        <div class="hidden md:flex items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        @auth
                            <div>{{ Auth::user()->name }}</div>
                        @else
                            <div>Guest</div>
                        @endauth
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    @auth
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <x-dropdown-link :href="route('login')">
                            {{ __('Log In') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('register')">
                            {{ __('Register') }}
                        </x-dropdown-link>
                    @endauth
                </x-slot>
            </x-dropdown>
        </div>

        {{-- Hamburger button - mobile only --}}
        <button @click="open = !open" class="md:hidden text-black focus:outline-none">
            <ion-icon :name="open ? 'close' : 'menu'" class="text-3xl"></ion-icon>
        </button>

    </div>

    {{-- Mobile menu --}}
    <div x-show="open" class="md:hidden px-4 pb-4">
        <ul class="flex flex-col gap-3 text-black">
            <li><a href="{{ route('products.index') }}">Shop</a></li>
            <li><a href="">Category</a></li>
            <li><a href="">Gifting</a></li>
            <li><a href="">Blogs</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">By Meaning</a></li>
            <li><a href="">By Crystal</a></li>
            {{-- @auth
                <li><a href="{{ route('adminproducts.create') }}">Create</a></li>
            @endauth --}}
        </ul>

        {{-- Mobile auth links --}}
        <div class="mt-4 border-t border-orange-300 pt-4">
            @auth
                <p class="font-medium text-black">{{ Auth::user()->name }}</p>
                <p class="text-sm text-gray-700">{{ Auth::user()->email }}</p>
                <div class="mt-2">
                    <a href="{{ route('profile.edit') }}" class="block text-black py-1">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-black py-1">Log Out</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="block text-black py-1">Log In</a>
                <a href="{{ route('register') }}" class="block text-black py-1">Register</a>
            @endauth
        </div>
    </div>

</nav>
