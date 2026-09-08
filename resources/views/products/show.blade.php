{{-- @props(['product']) --}}
<x-app-layout>

    <div class="  gap-10 mt-12  grid grid-cols-2 ">
        <div class="   ml-10 col-start-1">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="  max-w-full h-[540px]  w-[750px] object-cover ">
        </div>
        {{-- product informations --}}
        <div class=" mb-0 col-start-2 ">
            {{-- name --}}
            <div>
                <p class="text-[#3A5A32] text-4xl tracking-wider ">{{ Str::title($product->name) }}</p>
            </div>
            {{-- price --}}
            <div>
                <p class="mt-[2rem]  text-green-800 text-2xl "> Rs {{ $product->price }}</p>
            </div>
            <hr class="bg-gray-700">
            {{-- description --}}
            <div class="mt-5 mb-28 ">
                <p>Description</p>
                <p class="text-gray-500">{{ $product->description }}</p>
            </div>
            {{-- add to cart --}}

            <form id="addToCartForm" method="POST" action="{{ route('cart.storejson', $product->id) }}" class="mt-[320px]">
                @csrf
                <button type="submit" class="text-white py-2 bg-[#3A5A32] w-[650px] rounded-md"> <i
                        class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
            </form>

        </div>
    </div>
    </div>
    {{-- might also like --}}
    <article class="flex justify-center m-8">You Might Also Like </article>

    <div class="swiper px-4 relative">
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
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            cartitem.addEventListener("submit", async (event) => {
                event.preventDefault();


                try {
                    // 3. Send data using fetch()
                    const response = await fetch(cartitem.action, {
                        method: "POST",

                        headers: {
                            'Content-Type': 'application/json',
                            "Accept": "application/json",
                            "X-CSRF-TOKEN": token,
                        }

                    });

                    // 4. Handle response
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
