{{-- props tell that the component is expecting a variable called product  --}}
@props(['product'])

<div
    class=" w-2/12  mt-3 bg-white ml-[20px] group rounded-lg  hover:scale-105 transition-transform duration-300 ease-in-out">
    {{-- @if ($product->image) --}}
    <a href="{{ route('products.show', $product->id) }}">
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image"
            class=" w-[285px] opacity-90 group-hover:scale-105 rounded-lg max-w-full h-auto">
    </a>
    {{-- @endif --}}
    <a href="{{ route('products.show', $product->name) }}">
        <p class="mt-4"> Name:{{ Str::limit($product->name, 5) }}</p>
    </a>
    <a href="{{ route('products.show', $product->description) }}">
        <p class="   "> Description: {{ Str::words($product->description, 5) }}</p>
    </a>
    <a href="{{ route('products.show', $product->price) }}">
        <p class="   "> Price:{{ $product->price }}</p>
    </a>
</div>
