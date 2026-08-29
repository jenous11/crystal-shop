<x-app-layout>
    <div class="grid grid-cols-2 gap-5  ">
        <div class="col-start-1 border border-black">
            <div class="flex justify-start mb-3">

                <input type="checkbox" id="checkboxparent">
                <p class="ml-4">select all items</p>
            </div>
            @if ($cartItems)
                @foreach ($cartItems as $product)
                    <input type="checkbox" id="checkboxchild" data-selectable data-price="{{ $product->product->price }}""
                        data-item-id="{{ $product->id }}">

                    <div class="border border-red-600 grid grid-cols-3 gap-4 ">
                        {{-- product image --}}
                        <div class="col-start-1 gap-0 border border-orange-500 ml-5">
                            <img src="{{ asset('storage/' . $product->product->image) }}"
                                alt="{{ $product->product->name }} " class="max-w-full h-auto  md:w-[100px]">
                        </div>

                        {{-- product-description --}}
                        <div class="col-start-2 border border-orange-500">
                            <p> description: {{ $produc_id = $product->product->description }}</p>
                        </div>

                        {{-- products-information --}}
                        <div class="col-start-3 border border-orange-500">
                            <p> Name: {{ $produc_id = $product->product->name }}</p>
                            <p> user id: {{ $user_id = $product->user->id }}</p>
                            <p> product id: {{ $product_id = $product->product->id }}</p>
                            <p> cart id: {{ $cart_items = $product->id }}</p>
                            <p> price: {{ $product->product->price }}</p>
                            <form action="{{ route('cartdelete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button> <i class="fa-solid fa-trash"></i> </button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </div>
    @else
        <p>Nothing in the cart right now</p>
        @endif

        <div class="col-start-2 border border-red-400">
            <h1>Order Summary</h1>
            <h2>subtotal </h2>
            <h2>shipping fee </h2>

            <p>total </p>
            <button type="submit"> Proceed to checkout</button>
        </div>
    </div>

    <script>
        const selectAll = document.getElementById('checkboxparent');
        const checkboxes = document.querySelectorAll('[data-selectable]'); // or any selector
        const price = document.querySelectorAll('[data-price]'); // or any selector
        const id = document.querySelectorAll('[data-item-id]'); // ← you need this

        selectAll.addEventListener('change', function() {
            checkboxes.forEach(cb => cb.checked = this.checked);

            const total =[...price].filter(cb=>cb.checked).reduce((sum,cb)=>sum+Number(cb))
        });
    </script>

</x-app-layout>
