{{-- props tell that the component is expecting a variable called product --}}

@props(['product'])

<div
    class="group w-full max-w-[320px] overflow-hidden rounded-[16px] border border-[#dce4d9] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px] transition duration-300 hover:-translate-y-1 hover:shadow-[rgba(0,0,0,0.1)_4px_4px_8px_2px]">

    <a href="{{ route('products.show', $product->id) }}" class="block overflow-hidden">
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image"
            class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-[1.04]">
    </a>

    <div class="p-5">

        <a href="{{ route('products.show', $product->name) }}" class="block">
            <p
                class="min-h-[28px] text-[19px] font-medium leading-7 text-black transition-colors duration-200 group-hover:text-[#3a5a32]">
                {{ Str::limit($product->name, 25) }}
            </p>
        </a>

        <a href="#" class="block">
            <p class="mt-2 min-h-[48px] break-words text-[15px] leading-6 text-[#666666]">
                {{ Str::ucfirst(Str::words($product->description, 5)) }}
            </p>
        </a>

        <div class="mt-5 flex items-center justify-between border-t border-[#dce4d9] pt-4">

            <a href="{{ route('products.show', $product->price) }}">
                <p class="text-[18px] font-medium text-[#3a5a32]">
                    Rs {{ $product->price }}
                </p>
            </a>

            <a href="{{ route('products.show', $product->id) }}"
                class="flex h-10 w-10 items-center justify-center rounded-[5px] bg-[#3a5a32] text-white opacity-0 transition duration-300 group-hover:opacity-100">
                <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>

        </div>

    </div>

</div>

<script>
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
