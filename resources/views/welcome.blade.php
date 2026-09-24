<x-app-layout>
{{-- @inject('service', 'App\Services\MoodWidgetService') --}}

temp:{{$weather['temp']}}C
<br>
Weather:{{$weather['condition']}}
<br>
Mood:{{$mood}}
<br>



    {{-- Hero --}}
    <section class="bg-[#f4f5f0] px-5 py-16 md:py-24">

        <div class="mx-auto grid max-w-[1400px] items-center gap-12 md:grid-cols-2">

            {{-- Text --}}
            <div class="max-w-[600px]">

                <p class="mb-4 font-serif text-sm uppercase tracking-[3px] text-[#3a5a32]">
                    Himalayan Crystal House
                </p>

                <h1 class="font-serif text-4xl font-bold leading-tight text-[#000000] sm:text-5xl md:text-6xl">
                    Discover Your Natural Balance
                </h1>

                <p class="mt-6 max-w-[520px] font-serif text-lg leading-7 text-[#666666]">
                    Handcrafted crystal jewelry and wellness products,
                    ethically sourced from the Himalayas.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    <a href="{{ route('products.index') }}"
                        class="rounded-md bg-[#3a5a32] px-5 py-3 font-serif text-white transition hover:bg-[#323c34]">
                        Explore Collection
                    </a>

                    <a href="{{ route('products.about') }}"
                        class="rounded-md border border-[#3a5a32] px-5 py-3 font-serif text-[#000000] transition hover:bg-[#3a5a32] hover:text-white">
                        Our Story
                    </a>

                </div>

            </div>

            {{-- Hero Image --}}
            <div class="flex justify-center md:justify-end">

                <img src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}" alt="Himalayan Crystal House"
                    class="w-full max-w-[500px] rounded-[20px] object-contain">

            </div>

        </div>

    </section>

    {{-- Featured Products --}}
    <section class="bg-[#f8f7f4] px-5 py-16">

        <div class="mx-auto max-w-[1400px]">

            <div class="mb-10 text-center">

                <p class="font-serif text-sm uppercase tracking-[2px] text-[#3a5a32]">
                    Our Collection
                </p>

                <h2 class="mt-2 font-serif text-3xl font-bold text-[#000000] md:text-4xl">
                    Featured Crystals
                </h2>

                <p class="mx-auto mt-3 max-w-[600px] font-serif text-[#666666]">
                    Explore some of our handcrafted crystal pieces.
                </p>

            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach

            </div>

            <div class="mt-10 flex justify-center">

                <a href="{{ route('products.index') }}"
                    class="rounded-md border border-[#3a5a32] px-5 py-3 font-serif text-[#000000] transition hover:bg-[#3a5a32] hover:text-white">
                    View All Products
                </a>

            </div>

        </div>

    </section>

    {{-- About Preview --}}
    <section class="bg-[#f4f5f0] px-5 py-16 md:py-24">

        <div class="mx-auto grid max-w-[1200px] items-center gap-10 md:grid-cols-2">

            <div>

                <p class="font-serif text-sm uppercase tracking-[2px] text-[#3a5a32]">
                    Our Story
                </p>

                <h2 class="mt-2 font-serif text-3xl font-bold text-[#000000] md:text-4xl">
                    Crystals from the Himalayas
                </h2>

            </div>

            <div>

                <p class="font-serif leading-7 text-[#666666]">
                    We bring together handcrafted crystal jewelry and wellness
                    products inspired by the natural beauty of the Himalayas.
                    Each piece is selected with care and made to become part
                    of your everyday journey.
                </p>

                <a href="{{ route('products.about') }}"
                    class="mt-6 inline-block font-serif text-[#3a5a32] underline underline-offset-4">
                    Learn more about us
                </a>

            </div>

        </div>

    </section>

    {{-- Simple CTA --}}
    <section class="bg-[#323c34] px-5 py-16">

        <div class="mx-auto max-w-[800px] text-center">

            <h2 class="font-serif text-3xl font-bold text-white md:text-4xl">
                Find Something That Feels Like You
            </h2>

            <p class="mt-4 font-serif leading-7 text-[#f4f5f0]">
                Explore our collection of natural crystals and handcrafted
                pieces.
            </p>

            <a href="{{ route('products.index') }}"
                class="mt-7 inline-block rounded-md bg-white px-5 py-3 font-serif text-[#323c34] transition hover:bg-[#f8f7f4]">
                Shop Now
            </a>

        </div>

    </section>

</x-app-layout>
