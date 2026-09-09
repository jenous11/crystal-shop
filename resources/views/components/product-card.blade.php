{{-- props tell that the component is expecting a variable called product  --}}
@props(['product'])

<div class="mt-3 w-[622px] h-[440px] flex-wrap  lg:w-[380px] lg:h-[470px] md:w-[600px] md:h-[450px]  bg-white  ml-[20px]  rounded-lg  border-[0.05rem] border-gray-300  text-wrap group ">
    <a href="{{ route('products.show', $product->id) }}">
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image"
            class="opacity-90 rounded-t-lg w-full h-[250px] object-cover ">
    </a>

    <div class="ml-3 ">

        <a href="{{ route('products.show', $product->name) }}" class="mb-2 ml-3 text-wrap">
            <p class="mt-4 text-wrap"> {{ Str::limit($product->name, 25) }}</p>
        </a>
        <a href="#" class="ml-3 text-wrap ">
            <p class="text-gray-500 break-words whitespace-normal   ">
                {{ Str::ucfirst(Str::words($product->description, 5)) }}</p>
        </a>
        <a href="{{ route('products.show', $product->price) }}" class="ml-3">
            <p class="text-green-950"> Rs {{ $product->price }}</p>
        </a>

        <a href="{{ route('products.show', $product->id) }}" class="">
            <i class="fa-solid fa-circle-arrow-right ml-[250px]  hidden group-hover:block  "></i>
        </a>

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
</script>
