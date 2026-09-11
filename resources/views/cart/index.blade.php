
<x-app-layout>

    <div class="min-h-screen bg-stone-50 py-10">

        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">

            {{-- Page heading --}}
            <div class="mb-8">
                <h1 class="text-3xl font-semibold text-stone-900">
                    Shopping Cart
                </h1>

                <p class="mt-2 text-sm text-stone-500">
                    Review your selected items before checkout.
                </p>
            </div>


            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">


                {{-- =====================================================
                     CART ITEMS
                ====================================================== --}}
                <div class="lg:col-span-2">

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-stone-200">


                        {{-- Select all --}}
                        <div class="flex items-center justify-between border-b border-stone-200 px-6 py-4">

                            <label class="flex cursor-pointer items-center gap-3">

                                <input
                                    type="checkbox"
                                    id="checkboxparent"
                                    class="h-4 w-4 rounded border-stone-300 text-stone-900 focus:ring-stone-500"
                                >

                                <span class="text-sm font-medium text-stone-700">
                                    Select all items
                                </span>

                            </label>

                        </div>


                        {{-- Cart items --}}
                        @if ($cartItems && $cartItems->count() > 0)

                            <div class="divide-y divide-stone-200">

                                @foreach ($cartItems as $cartItem)

                                    @if ($cartItem->user_id === auth()->id())

                                        <div
                                            class="cart-item p-6"
                                            data-item-id="{{ $cartItem->id }}"
                                        >

                                            <div class="flex gap-5">


                                                {{-- Checkbox --}}
                                                <div class="flex items-start pt-2">

                                                    <input
                                                        type="checkbox"
                                                        data-selectable
                                                        data-price="{{ $cartItem->product->price }}"
                                                        data-quantity="{{ $cartItem->quantity }}"
                                                        data-item-id="{{ $cartItem->id }}"
                                                        class="h-4 w-4 rounded border-stone-300 text-stone-900 focus:ring-stone-500"
                                                    >

                                                </div>


                                                {{-- Product image --}}
                                                <div class="flex h-28 w-28 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-stone-100">

                                                    <img
                                                        src="{{ asset('storage/' . $cartItem->product->image) }}"
                                                        alt="{{ $cartItem->product->name }}"
                                                        class="h-full w-full object-cover"
                                                    >

                                                </div>


                                                {{-- Product information --}}
                                                <div class="min-w-0 flex-1">

                                                    <div class="flex items-start justify-between gap-4">

                                                        <div>

                                                            <h2 class="text-lg font-semibold text-stone-900">
                                                                {{ $cartItem->product->name }}
                                                            </h2>

                                                            <p class="mt-1 line-clamp-2 text-sm text-stone-500">
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
                                                                class="rounded-full p-2 text-stone-400 transition hover:bg-red-50 hover:text-red-600"
                                                            >

                                                                <i class="fa-solid fa-trash"></i>

                                                            </button>

                                                        </form>

                                                    </div>


                                                    {{-- Price + quantity --}}
                                                    <div class="mt-5 flex flex-wrap items-center justify-between gap-4">


                                                        {{-- Quantity --}}
                                                        <div class="flex items-center rounded-full border border-stone-300">

                                                            <button
                                                                type="button"
                                                                class="quantity-decrease flex h-9 w-9 items-center justify-center rounded-l-full text-lg text-stone-600 transition hover:bg-stone-100"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                −
                                                            </button>


                                                            <span
                                                                class="quantity-value min-w-[40px] text-center text-sm font-medium text-stone-900"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                {{ $cartItem->quantity }}
                                                            </span>


                                                            <button
                                                                type="button"
                                                                class="quantity-increase flex h-9 w-9 items-center justify-center rounded-r-full text-lg text-stone-600 transition hover:bg-stone-100"
                                                                data-item-id="{{ $cartItem->id }}"
                                                            >
                                                                +
                                                            </button>

                                                        </div>


                                                        {{-- Price --}}
                                                        <div class="text-right">

                                                            <p class="text-xs text-stone-400">
                                                                Rs. {{ number_format($cartItem->product->price, 2) }} each
                                                            </p>

                                                            <p class="text-lg font-semibold text-stone-900">

                                                                Rs.
                                                                <span class="item-total">
                                                                    {{ number_format($cartItem->product->price * $cartItem->quantity, 2) }}
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

                            {{-- Empty cart --}}
                            <div class="px-6 py-16 text-center">

                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-stone-100">

                                    <i class="fa-solid fa-bag-shopping text-2xl text-stone-400"></i>

                                </div>

                                <h2 class="mt-5 text-xl font-semibold text-stone-900">
                                    Your cart is empty
                                </h2>

                                <p class="mt-2 text-sm text-stone-500">
                                    Browse our collection and find something special.
                                </p>

                                <a
                                    href="{{ route('products.index') }}"
                                    class="mt-6 inline-flex rounded-full bg-stone-900 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700"
                                >
                                    Continue shopping
                                </a>

                            </div>

                        @endif

                    </div>

                </div>



                {{-- =====================================================
                     ORDER SUMMARY
                ====================================================== --}}
                <div class="lg:col-span-1">

                    <div class="sticky top-6 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">

                        <h2 class="text-xl font-semibold text-stone-900">
                            Order Summary
                        </h2>


                        <div class="mt-6 space-y-4">


                            {{-- Subtotal --}}
                            <div class="flex justify-between text-sm">

                                <span class="text-stone-500">
                                    Subtotal
                                </span>

                                <span
                                    id="subtotal-price"
                                    class="font-medium text-stone-900"
                                >
                                    Rs. 0.00
                                </span>

                            </div>


                            {{-- Shipping --}}
                            <div class="flex justify-between text-sm">

                                <span class="text-stone-500">
                                    Shipping
                                </span>

                                <span
                                    id="shipping-price"
                                    class="font-medium text-stone-900"
                                >
                                    Rs. 0.00
                                </span>

                            </div>


                            <div class="border-t border-stone-200 pt-4">

                                <div class="flex justify-between">

                                    <span class="text-base font-semibold text-stone-900">
                                        Total
                                    </span>

                                    <span
                                        id="total-price"
                                        class="text-xl font-semibold text-stone-900"
                                    >
                                        Rs. 0.00
                                    </span>

                                </div>

                            </div>

                        </div>


                        {{-- Checkout --}}
                        <form
                            action="{{ route('checkout.store') }}"
                            method="POST"
                            class="mt-6"
                            id="checkout-form"
                        >

                            @csrf

                            {{-- Selected cart IDs will be inserted here by JavaScript --}}

                            <div id="selected-items"></div>


                            <button
                                type="submit"
                                id="checkout-button"
                                class="w-full rounded-full bg-stone-900 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-stone-700 disabled:cursor-not-allowed disabled:opacity-50"
                                disabled
                            >
                                Proceed to checkout
                            </button>

                        </form>


                        <p class="mt-4 text-center text-xs leading-5 text-stone-400">
                            Secure checkout. Your order details will be handled safely.
                        </p>

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

            const checkoutButton = document.getElementById('checkout-button');

            const selectedItemsContainer = document.getElementById('selected-items');


            /*
            |--------------------------------------------------------------------------
            | Calculate totals
            |--------------------------------------------------------------------------
            */

            function updateTotals() {

                let subtotal = 0;

                let selectedCount = 0;


                checkboxes.forEach(function (checkbox) {

                    if (checkbox.checked) {

                        const price = Number(checkbox.dataset.price);

                        const quantity = Number(checkbox.dataset.quantity);

                        subtotal += price * quantity;

                        selectedCount++;

                    }

                });


                /*
                |--------------------------------------------------------------------------
                | Shipping
                |--------------------------------------------------------------------------
                |
                | Currently set to zero.
                | You can change this later when your shipping logic is ready.
                |
                */

                const shipping = 0;

                const total = subtotal + shipping;


                subtotalPrice.textContent =
                    'Rs. ' + subtotal.toFixed(2);


                document.getElementById('shipping-price').textContent =
                    'Rs. ' + shipping.toFixed(2);


                totalPrice.textContent =
                    'Rs. ' + total.toFixed(2);


                /*
                |--------------------------------------------------------------------------
                | Enable / disable checkout
                |--------------------------------------------------------------------------
                */

                checkoutButton.disabled = selectedCount === 0;


                /*
                |--------------------------------------------------------------------------
                | Send selected cart IDs to backend
                |--------------------------------------------------------------------------
                */

                selectedItemsContainer.innerHTML = '';


                checkboxes.forEach(function (checkbox) {

                    if (checkbox.checked) {

                        const input = document.createElement('input');

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

                        checkbox.checked = selectAll.checked;

                    });

                    updateTotals();

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Individual checkbox
            |--------------------------------------------------------------------------
            */

            checkboxes.forEach(function (checkbox) {

                checkbox.addEventListener('change', function () {

                    const allSelected =
                        [...checkboxes].length > 0 &&
                        [...checkboxes].every(cb => cb.checked);


                    selectAll.checked = allSelected;

                    updateTotals();

                });

            });


            /*
            |--------------------------------------------------------------------------
            | Quantity buttons
            |--------------------------------------------------------------------------
            */

            document.querySelectorAll('.quantity-increase').forEach(function (button) {

                button.addEventListener('click', function () {

                    const itemId = button.dataset.itemId;

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

                    quantityElement.textContent = quantity;


                    /*
                    |--------------------------------------------------------------------------
                    | Update checkbox quantity
                    |--------------------------------------------------------------------------
                    */

                    if (checkbox) {

                        checkbox.dataset.quantity = quantity;

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | Update displayed item total
                    |--------------------------------------------------------------------------
                    */

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

                });

            });


            /*
            |--------------------------------------------------------------------------
            | Decrease quantity
            |--------------------------------------------------------------------------
            */

            document.querySelectorAll('.quantity-decrease').forEach(function (button) {

                button.addEventListener('click', function () {

                    const itemId = button.dataset.itemId;

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
                    | Never allow quantity below 1
                    |--------------------------------------------------------------------------
                    */

                    if (quantity <= 1) {

                        return;

                    }


                    quantity--;

                    quantityElement.textContent = quantity;


                    /*
                    |--------------------------------------------------------------------------
                    | Update checkbox quantity
                    |--------------------------------------------------------------------------
                    */

                    checkbox.dataset.quantity = quantity;


                    /*
                    |--------------------------------------------------------------------------
                    | Update displayed item total
                    |--------------------------------------------------------------------------
                    */

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

                });

            });


            /*
            |--------------------------------------------------------------------------
            | Initial calculation
            |--------------------------------------------------------------------------
            */

            updateTotals();

        });

    </script>

</x-app-layout>

