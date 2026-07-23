{{-- props tell that the component is expecting a variable called product --}}
@props(['product'])
{{-- {{dd($product->image)}} --}}
<div class="mt-3   w-[285px]    bg-white  ml-[20px] group rounded-lg ">
    <a href="{{ route('adminproducts.adminsearch', $product->id) }}">
        <img src="{{ asset('storage/' . $product->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 rounded-lg">
    </a>
    {{-- @endif --}}
    <a href="{{ route('adminproducts.adminsearch', $product->name) }}">
        <p class="mt-4"> Name: {{ $product->name }}</p>
    </a>
    <a href="{{ route('adminproducts.adminsearch', $product->description) }}">
        <p class="   "> Description: {{ Str::words($product->description, 5) }}</p>
    </a>
    <a href="{{route('adminproducts.adminsearch',$product->price)}}">
        <p class="   "> Price:{{ $product->price }}</p>
    </a>
 {{-- delete the product --}}
        <form action="/admin/adminproducts/{{ $product->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="border rounded opacity-90 group-hover:scale-110   ">delete</button>
                </form>
</div>
