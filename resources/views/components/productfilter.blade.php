<div class="m-4">

    <form
        action="{{ route('products.productfilter') }}"
        method="post"
        class="flex items-center gap-2"
    >
        @csrf

        <select
            name="filteroptions"
            class="rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-700 outline-none focus:border-[#3a5a32]"
        >
            <option value="" selected>-- Filter --</option>
            <option value="is_featured">Featured Products</option>
            <option value="is_stock">In Stock Products</option>
        </select>

        <button
            type="submit"
            class="rounded-md bg-[#3a5a32] px-4 py-2 text-white hover:opacity-90"
        >
            Filter
        </button>

    </form>

</div>
