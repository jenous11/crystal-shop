<x-app-layout>

<div class="mt-8 grid grid-cols-1 gap-8 px-5 md:mt-12 md:grid-cols-2 md:gap-20 md:px-0">

        {{-- product image --}}
        <div class="w-full md:ml-10 ">
            <img
                src="{{ asset('storage/' . $product->image) }}"
                alt="{{ $product->name }}"
                class="h-auto max-h-[540px] w-full object-cover md:h-[540px] md:w-[750px] rounded-md"
            >
        </div>


        {{-- product information --}}
        <div class="w-full md:pr-10">

            {{-- name --}}
            <div>
                <p class="text-3xl tracking-wider text-[#3A5A32] md:text-4xl">
                    {{ Str::title($product->name) }}
                </p>
            </div>

            {{-- price --}}
            <div>
                <p class="mt-6 text-2xl text-green-800">
                    Rs {{ $product->price }}
                </p>
            </div>

            <hr class="my-4 bg-gray-700">


            {{-- description --}}
            <div class="mt-5 mb-10 md:mb-28">
                <p>Description</p>

                <p class="text-gray-500">
                    {{ $product->description }}
                </p>
            </div>


            {{-- add to cart --}}
            <form
                id="addToCartForm"
                method="POST"
                action="{{ route('cart.storejson', $product->id) }}"
                class="mt-8 md:mt-[320px]"
            >
                @csrf

                <button
                    type="submit"
                    class="w-full rounded-md bg-[#3A5A32] py-2 text-white md:w-[650px]"
                >
                    <i class="fa-solid fa-cart-shopping"></i>
                    Add to Cart
                </button>
            </form>

        </div>

    </div>


    {{-- might also like --}}
    <article class="m-8 flex justify-center">
        You Might Also Like
    </article>

    <div class="swiper relative px-4">

        <div class="swiper-wrapper">

            @foreach ($products as $item)

                @if ($product->id !== $item->id)

                    <div class="swiper-slide">
                        <x-mightlikeproducts :product="$item" />
                    </div>

                @endif

            @endforeach

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>


    @push('scripts')

        <script>
            const swiper = new Swiper('.swiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },

                    640: {
                        slidesPerView: 2
                    },

                    1024: {
                        slidesPerView: 4
                    },
                }
            });


            // to get the id from the button
            let cartitem = document.getElementById("addToCartForm");
            let cartBadge = document.getElementById("cartBadge");

            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            cartitem.addEventListener("submit", async (event) => {
                event.preventDefault();

                try {

                    const response = await fetch(cartitem.action, {
                        method: "POST",

                        headers: {
                            'Content-Type': 'application/json',
                            "Accept": "application/json",
                            "X-CSRF-TOKEN": token,
                        }
                    });

                    if (response.ok) {
                        const result = await response.json();

                        cartBadge.textContent = result.cartCount;

                        console.log("Server response:", result);
                    }

                } catch (error) {
                    console.error("Fetch error:", error);
                }
            });
        </script>

    @endpush

</x-app-layout>
