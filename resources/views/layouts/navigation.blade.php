{{-- Responsive Navigation --}}
<nav x-data="{ open: false }" class="w-full bg-white border-b border-[#323c34]/10">

    <div class="flex items-center justify-between px-6 md:px-10 py-3">

        {{-- Logo --}}
        <div class="w-[85px] md:w-[95px]">
            <a href="{{ route('products.index') }}">
                <img
                    src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}"
                    alt="Himalayan Crystal House"
                    class="w-full"
                >
            </a>
        </div>


        {{-- Desktop Navigation --}}
        <div class="hidden md:flex items-center">
            <ul class="flex items-center gap-10 text-[#323c34] font-medium">

                <li>
                    <a
                        href="{{ route('products.index') }}"
                        class="relative py-2 transition-colors duration-200 hover:text-[#3a5a32]
                        after:absolute after:left-0 after:bottom-0 after:h-[1px] after:w-0
                        after:bg-[#3a5a32] after:transition-all after:duration-200
                        hover:after:w-full">
                        Shop
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('products.about') }}"
                        class="relative py-2 transition-colors duration-200 hover:text-[#3a5a32]
                        after:absolute after:left-0 after:bottom-0 after:h-[1px] after:w-0
                        after:bg-[#3a5a32] after:transition-all after:duration-200
                        hover:after:w-full">
                        About
                    </a>
                </li>

                {{-- Cart --}}
                <li>
                    <a
                        href="{{ route('cart.index') }}"
                        class="relative flex items-center gap-2 py-2 hover:text-[#3a5a32] transition-colors duration-200">

                        <i class="fa-solid fa-bag-shopping text-[17px]"></i>

                        <span>Cart</span>

                        <span
                            id="cartBadge"
                            class="absolute -top-1 -right-4 min-w-[18px] h-[18px]
                            px-1 flex items-center justify-center
                            text-[10px] font-semibold
                            text-white bg-[#3a5a32] rounded-full">
                            {{ auth()->check() ? auth()->user()->cartItems()->sum('quantity') : 0 }}
                        </span>

                    </a>
                </li>

            </ul>
        </div>


        {{-- Desktop Account --}}
        <div class="hidden md:flex items-center">
            <x-dropdown align="right" width="48">

                <x-slot name="trigger">
                    <button
                        class="flex items-center gap-2 px-3 py-2
                        text-sm font-medium text-[#323c34]
                        hover:text-[#3a5a32]
                        transition duration-200
                        focus:outline-none">

                        @auth
                            <span>{{ Auth::user()->name }}</span>
                        @else
                            <span>Account</span>
                        @endauth

                        <svg
                            class="h-4 w-4 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>

                    </button>
                </x-slot>

                <x-slot name="content">

                    @auth

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('orders.index')">
                            {{ __('My Orders') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
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


        {{-- Mobile Hamburger --}}
        <button
            @click="open = !open"
            class="md:hidden text-[#323c34] focus:outline-none">

            <ion-icon
                :name="open ? 'close' : 'menu'"
                class="text-3xl">
            </ion-icon>

        </button>

    </div>


    {{-- Mobile Menu --}}
    <div
        x-show="open"
        x-transition
        class="md:hidden px-6 pb-6">

        <ul class="flex flex-col gap-4 pt-3 text-[#323c34] font-medium">

            <li>
                <a
                    href="{{ route('products.index') }}"
                    class="block py-1 hover:text-[#3a5a32]">
                    Shop
                </a>
            </li>

            <li>
                <a
                    href="{{ route('products.about') }}"
                    class="block py-1 hover:text-[#3a5a32]">
                    About
                </a>
            </li>

            <li>
                <a
                    href="{{ route('cart.index') }}"
                    class="flex items-center gap-2 py-1 hover:text-[#3a5a32]">

                    <i class="fa-solid fa-bag-shopping"></i>
                    <span>Cart</span>

                    <span
                        id="cartBadge"
                        class="min-w-[18px] h-[18px] px-1
                        flex items-center justify-center
                        text-[10px] text-white
                        bg-[#3a5a32] rounded-full">
                        {{ auth()->check() ? auth()->user()->cartItems()->sum('quantity') : 0 }}
                    </span>

                </a>
            </li>

        </ul>


        {{-- Mobile Account --}}
        <div class="mt-5 pt-5 border-t border-[#323c34]/10">

            @auth

                <p class="font-medium text-[#323c34]">
                    {{ Auth::user()->name }}
                </p>

                <p class="mt-1 text-sm text-[#666666]">
                    {{ Auth::user()->email }}
                </p>

                <div class="mt-3 flex flex-col gap-2">

                    <a
                        href="{{ route('profile.edit') }}"
                        class="text-[#323c34] hover:text-[#3a5a32]">
                        Profile
                    </a>

                    <a
                        href="{{ route('orders.index') }}"
                        class="text-[#323c34] hover:text-[#3a5a32]">
                        My Orders
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="text-[#323c34] hover:text-[#3a5a32]">
                            Log Out
                        </button>
                    </form>

                </div>

            @else

                <div class="flex flex-col gap-2">

                    <a
                        href="{{ route('login') }}"
                        class="text-[#323c34] hover:text-[#3a5a32]">
                        Log In
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="text-[#323c34] hover:text-[#3a5a32]">
                        Register
                    </a>

                </div>

            @endauth

        </div>

    </div>

</nav>

