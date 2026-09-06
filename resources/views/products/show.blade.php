<x-app-layout>

    <div class="  gap-3 mt-12 flex ">
        <div class="   ml-10">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="  max-w-full h-auto  md:w-[550px] ">
        </div>
        {{-- image informations --}}
        <div class=" mb-0">
            {{-- name --}}
            <div>
                <p class="text-green-500 text-[21px] ">{{ $product->name }}</p>
            </div>
            {{-- price --}}
            <div>
                <p class="text-green-500 text-[21px]">{{ $product->price }}</p>
            </div>
            {{-- description --}}
            <div class="mt-5">
                Description
                <p>{{ $product->description }}</p>
            </div>
            {{-- add to cart --}}

            <form id="addToCartForm" method="POST" action="{{ route('cart.storejson', $product->id) }}">
                @csrf
                <button type="submit" class="text-black py-1 bg-green-500">Add to Cart</button>
            </form>

        </div>
    </div>
    </div>
    {{-- might also like --}}
    <article class="flex justify-center m-4">you might also like</article>

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
