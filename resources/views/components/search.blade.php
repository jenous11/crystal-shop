<div class="w-full px-5 py-6">

    <p class="mb-2 text-2xl text-[#3a5a32]">
        Shop Our Collection
    </p>

    <p class="mb-4 text-[#666666]">
        Discover our handcrafted crystal jewelry and wellness products,
        ethically sourced from the Himalayas
    </p>

    <form action="/products/search" method="post">
        @csrf

        <div class="relative w-full max-w-[500px]">
            <input
                type="text"
                name="name"
                placeholder="Search"
                class="w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-900 outline-none focus:border-[#3a5a32]"
            >

            <button
                type="submit"
                class="absolute right-2 top-1/2 -translate-y-1/2 text-[#3a5a32]"
            >
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

    </form>

</div>
