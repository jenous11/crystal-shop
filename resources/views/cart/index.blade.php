
<x-app-layout>

    <div class="min-h-screen bg-white py-12">

        <div class="mx-auto max-w-7xl px-6 lg:px-10">

            {{-- Page heading --}}
            <div class="mb-10">

                <h1 class="text-3xl tracking-wider text-[#3A5A32]">
                    Shopping Cart
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Review your selected items before checkout.
                </p>

            </div>


            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">


                {{-- =====================================================
                     CART ITEMS
                ====================================================== --}}
                <div class="lg:col-span-2">


                    {{-- Select all --}}
                    <div class="mb-5 flex items-center border-b border-gray-200 pb-4">

                        <label class="flex cursor-pointer items-center gap-3">

                            <input
                                type="checkbox"
                                id="checkboxparent"
                                class="h-4 w-4 rounded border-gray-300 text-[#3A5A32] focus:ring-[#3A5A32]"
                            >

                            <span class="text-sm text-gray-600">
                                Select all items
                            </span>

                        </label>

                    </div>


                    {{-- =================================================
                         ITEMS
                    ================================================== --}}
                    @if ($cartItems && $cartItems->count() > 0)

                        <div>

                            @foreach ($cartItems as $cartItem)

                                @if ($cartItem->user_id === auth()->id())

                                    <div
                                        class="cart-item border-b border-gray-200 py-7"
                                        data-item-id="{{ $cartItem->id }}"
                                    >

                                        <div class="flex gap-6">


                                            {{-- Checkbox --}}
                                            <div class="flex items-start pt-2">

                                                <input
                                                    type="checkbox"
                                                    data-selectable
                                                    data-price="{{ $cartItem->product->price }}"
                                                    data-quantity="{{ $cartItem->quantity }}"
                                                    data-item-id="{{ $cartItem->id }}"
                                                    class="h-4 w-4 rounded border-gray-300 text-[#3A5A32] focus:ring-[#3A5A32]"
                                                >

                                            </div>


                                            {{-- Product image --}}
                                            <div class="h-32 w-32 shrink-0 overflow-hidden">

                                                <img
                                                    src="{{ asset('storage/' . $cartItem->product->image) }}"
                                                    alt="{{ $cartItem->product->name }}"
                                                    class="h-full w-full object-cover"
                                                >

                                            </div>


                                            {{-- Product information --}}
                                            <div class="min-w-0 flex-1">


                                                {{-- Name + delete --}}
                                                <div class="flex items-start justify-between gap-5">

                                                    <div>

                                                        <h2 class="text-xl tracking-wide text-[#3A5A32]">
                                                            {{ Str::title($cartItem->product->name) }}
                                                        </h2>

                                                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500">
                                                            {{ $cartItem->product->description }}
                                                        </p>

                                                    </div>


                                                    {{-- Delete --}}
                                                    <form
                                                        action="{{ route('cartdelete', $cartItem->id) }}"
                                                        method="POST"
                                                    >

                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            type="submit"
                                                            title="Remove item"
                                                            class="p-2 text-gray-400 transition hover:text-red-600"
                                                        >

                                                            <i class="fa-solid fa-trash"></i>

                                                        </button>

                                                    </form>

                                                </div>


                                                {{-- Price + quantity --}}
                                                <div class="mt-6 flex items-center justify-between">


                                                    {{-- Quantity --}}
                                                    <div>

                                                        <p class="mb-2 text-xs text-gray-400">
                                                            Quantity
                                                        </p>

                                                        <div class="flex items-center border border-gray-300">


                                                            <button
                                                                type="button"
                                                                class="quantity-decrease flex h-9 w-9 items-center justify-center text-lg text-gray-600 transition hover:bg-gray-100"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                −
                                                            </button>


                                                            <span
                                                                class="quantity-value flex h-9 min-w-[40px] items-center justify-center border-x border-gray-300 text-sm text-gray-800"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                {{ $cartItem->quantity }}
                                                            </span>


                                                            <button
                                                                type="button"
                                                                class="quantity-increase flex h-9 w-9 items-center justify-center text-lg text-gray-600 transition hover:bg-gray-100"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                +
                                                            </button>

                                                        </div>

                                                    </div>


                                                    {{-- Price --}}
                                                    <div class="text-right">

                                                        <p class="text-xs text-gray-400">
                                                            Rs {{ number_format($cartItem->product->price, 2) }}
                                                            each
                                                        </p>

                                                        <p class="mt-1 text-lg text-[#3A5A32]">

                                                            Rs
                                                            <span class="item-total">
                                                                {{ number_format(
                                                                    $cartItem->product->price * $cartItem->quantity,
                                                                    2
                                                                ) }}
                                                            </span>

                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                @endif

                            @endforeach

                        </div>


                    @else

                        {{-- =================================================
                             EMPTY CART
                        ================================================== --}}
                        <div class="py-20 text-center">

                            <i class="fa-solid fa-bag-shopping text-4xl text-gray-300"></i>

                            <h2 class="mt-5 text-xl text-[#3A5A32]">
                                Your cart is empty
                            </h2>

                            <p class="mt-2 text-sm text-gray-500">
                                Browse our collection and find something special.
                            </p>

                            <a
                                href="{{ route('products.index') }}"
                                class="mt-6 inline-block bg-[#3A5A32] px-7 py-3 text-sm text-white transition hover:bg-[#2F4829]"
                            >
                                Continue shopping
                            </a>

                        </div>

                    @endif

                </div>



                {{-- =====================================================
                     ORDER SUMMARY
                ====================================================== --}}
                <div class="lg:col-span-1">

                    <div class="border-t border-gray-300 pt-6 lg:border-t-0 lg:border-l lg:pl-10">


                        <h2 class="text-2xl tracking-wide text-[#3A5A32]">
                            Order Summary
                        </h2>


                        <div class="mt-8 space-y-5">


                            {{-- Subtotal --}}
                            <div class="flex justify-between">

                                <span class="text-sm text-gray-500">
                                    Subtotal
                                </span>

                                <span
                                    id="subtotal-price"
                                    class="text-sm text-gray-800"
                                >
                                    Rs. 0.00
                                </span>

                            </div>


                            {{-- Shipping --}}
                            <div class="flex justify-between">

                                <span class="text-sm text-gray-500">
                                    Shipping
                                </span>

                                <span
                                    id="shipping-price"
                                    class="text-sm text-gray-800"
                                >
                                    Rs. 0.00
                                </span>

                            </div>


                            <hr class="border-gray-300">


                            {{-- Total --}}
                            <div class="flex items-center justify-between">

                                <span class="text-base text-[#3A5A32]">
                                    Total
                                </span>

                                <span
                                    id="total-price"
                                    class="text-xl text-[#3A5A32]"
                                >
                                    Rs. 0.00
                                </span>

                            </div>

                        </div>


                        {{-- Checkout button --}}
                        <form
                            action="{{ route('checkout.store') }}"
                            method="POST"
                            class="mt-8"
                            id="checkout-form"
                        >

                            @csrf


                            {{-- Selected cart IDs --}}
                            <div id="selected-items"></div>


                            <button
                                type="submit"
                                id="checkout-button"
                                disabled
                                class="w-full bg-[#3A5A32] px-6 py-3.5 text-sm font-medium tracking-wide text-white transition hover:bg-[#2F4829] disabled:cursor-not-allowed disabled:bg-gray-300"
                            >
                                Proceed to checkout
                            </button>

                        </form>


                        <p class="mt-5 text-center text-xs leading-5 text-gray-400">
                            Secure checkout. Your order details will be handled safely.
                        </p>


                        {{-- Continue shopping --}}
                        <div class="mt-6 text-center">

                            <a
                                href="{{ route('products.index') }}"
                                class="text-sm text-[#3A5A32] underline underline-offset-4 transition hover:text-[#2F4829]"
                            >
                                Continue shopping
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    {{-- =============================================================
         CART JAVASCRIPT
    ============================================================== --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const selectAll = document.getElementById('checkboxparent');

            const checkboxes = document.querySelectorAll('[data-selectable]');

            const subtotalPrice = document.getElementById('subtotal-price');

            const totalPrice = document.getElementById('total-price');

            const shippingPrice = document.getElementById('shipping-price');

            const checkoutButton = document.getElementById('checkout-button');

            const selectedItemsContainer =
                document.getElementById('selected-items');


            /*
            |--------------------------------------------------------------------------
            | Update totals
            |--------------------------------------------------------------------------
            */

            function updateTotals() {

                let subtotal = 0;

                let selectedCount = 0;


                checkboxes.forEach(function (checkbox) {

                    if (checkbox.checked) {

                        const price =
                            Number(checkbox.dataset.price);

                        const quantity =
                            Number(checkbox.dataset.quantity);


                        subtotal += price * quantity;

                        selectedCount++;

                    }

                });


                /*
                |--------------------------------------------------------------------------
                | Shipping
                |--------------------------------------------------------------------------
                */

                const shipping = 0;

                const total = subtotal + shipping;


                /*
                |--------------------------------------------------------------------------
                | Display prices
                |--------------------------------------------------------------------------
                */

                subtotalPrice.textContent =
                    'Rs. ' + subtotal.toFixed(2);


                shippingPrice.textContent =
                    'Rs. ' + shipping.toFixed(2);


                totalPrice.textContent =
                    'Rs. ' + total.toFixed(2);


                /*
                |--------------------------------------------------------------------------
                | Checkout button
                |--------------------------------------------------------------------------
                */

                checkoutButton.disabled =
                    selectedCount === 0;


                /*
                |--------------------------------------------------------------------------
                | Send selected cart IDs
                |--------------------------------------------------------------------------
                */

                selectedItemsContainer.innerHTML = '';


                checkboxes.forEach(function (checkbox) {

                    if (checkbox.checked) {

                        const input =
                            document.createElement('input');

                        input.type = 'hidden';

                        input.name = 'cart_items[]';

                        input.value = checkbox.dataset.itemId;

                        selectedItemsContainer.appendChild(input);

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Select all
            |--------------------------------------------------------------------------
            */

            if (selectAll) {

                selectAll.addEventListener('change', function () {

                    checkboxes.forEach(function (checkbox) {

                        checkbox.checked =
                            selectAll.checked;

                    });

                    updateTotals();

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Individual selection
            |--------------------------------------------------------------------------
            */

            checkboxes.forEach(function (checkbox) {

                checkbox.addEventListener('change', function () {

                    const allSelected =
                        checkboxes.length > 0 &&
                        [...checkboxes].every(
                            cb => cb.checked
                        );


                    selectAll.checked =
                        allSelected;


                    updateTotals();

                });

            });


            /*
            |--------------------------------------------------------------------------
            | Increase quantity
            |--------------------------------------------------------------------------
            */

            document
                .querySelectorAll('.quantity-increase')
                .forEach(function (button) {

                    button.addEventListener('click', function () {

                        const itemId =
                            button.dataset.itemId;


                        const quantityElement =
                            document.querySelector(
                                `.quantity-value[data-item-id="${itemId}"]`
                            );


                        const checkbox =
                            document.querySelector(
                                `[data-selectable][data-item-id="${itemId}"]`
                            );


                        let quantity =
                            Number(quantityElement.textContent);


                        quantity++;


                        quantityElement.textContent =
                            quantity;


                        checkbox.dataset.quantity =
                            quantity;


                        updateItemTotal(
                            itemId,
                            quantity,
                            checkbox
                        );

                    });

                });


            /*
            |--------------------------------------------------------------------------
            | Decrease quantity
            |--------------------------------------------------------------------------
            */

            document
                .querySelectorAll('.quantity-decrease')
                .forEach(function (button) {

                    button.addEventListener('click', function () {

                        const itemId =
                            button.dataset.itemId;


                        const quantityElement =
                            document.querySelector(
                                `.quantity-value[data-item-id="${itemId}"]`
                            );


                        const checkbox =
                            document.querySelector(
                                `[data-selectable][data-item-id="${itemId}"]`
                            );


                        let quantity =
                            Number(quantityElement.textContent);


                        /*
                        |--------------------------------------------------------------------------
                        | Minimum quantity = 1
                        |--------------------------------------------------------------------------
                        */

                        if (quantity <= 1) {

                            return;

                        }


                        quantity--;


                        quantityElement.textContent =
                            quantity;


                        checkbox.dataset.quantity =
                            quantity;


                        updateItemTotal(
                            itemId,
                            quantity,
                            checkbox
                        );

                    });

                });


            /*
            |--------------------------------------------------------------------------
            | Update individual item total
            |--------------------------------------------------------------------------
            */

            function updateItemTotal(
                itemId,
                quantity,
                checkbox
            ) {

                const cartItem =
                    document.querySelector(
                        `.cart-item[data-item-id="${itemId}"]`
                    );


                const price =
                    Number(checkbox.dataset.price);


                const itemTotal =
                    cartItem.querySelector('.item-total');


                itemTotal.textContent =
                    (price * quantity).toFixed(2);


                updateTotals();

            }


            /*
            |--------------------------------------------------------------------------
            | Initial totals
            |--------------------------------------------------------------------------
            */

            updateTotals();

        });

    </script>

</x-app-layout>

