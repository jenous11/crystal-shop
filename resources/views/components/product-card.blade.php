{{-- props tell that the component is expecting a variable called product  --}}
@props(['product'])

<div class="mt-3  lg:w-[300px] lg:h-[470px]   sm:w-[500px] sm:h-[500px]     md:w[200px]    bg-white  ml-[20px]  rounded-lg  border-[0.05rem] border-gray-300   ">
    <a href="{{ route('products.show', $product->id) }}">
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image"
            class="opacity-90 rounded-t-lg w-full h-[250px] object-cover ">
    </a>
    <div class="ml-3 grid gap-5 ">
        <a href="{{ route('products.show', $product->name) }}" class="mb-2">
            <p class="mt-4"> {{ Str::limit($product->name, 25) }}</p>
        </a>
        <a href="{{ route('products.show', $product->description) }}" class="mb-3">
            <p class="text-gray-500   "> {{Str::ucfirst( Str::words($product->description, 5)) }}</p>
        </a>
        <a href="{{ route('products.show', $product->price) }}" class="mb-3">
            <p class="text-green-950"> Rs {{ $product->price }}</p>
        </a>
    </div>
</div>
