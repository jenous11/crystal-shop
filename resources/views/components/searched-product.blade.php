{{-- props tell that the component is expecting a variable called product  --}}
@props(['searchedproduct'])

<div class="mt-3   w-[250px]    bg-amber-100  ml-[20px] group  ">
    <a href="{{ route('products.show', $searchedproduct->id) }}">
        <img src="{{ asset('storage/' . $searchedproduct->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 ">
    </a>
    {{-- @endif --}}
    <a href="{{ route('products.show', $searchedproduct->name) }}">
        <p class="mt-4"> Name: {{ $searchedproduct->name }}</p>
    </a>
    <a href="{{ route('products.show', $searchedproduct->description) }}">
        <p class="   "> Description: {{ Str::words($searchedproduct->description, 5) }}</p>
    </a>
    <a href="{{route('products.show',$searchedproduct->price)}}">
        <p class="   "> Price:{{ $searchedproduct->price }}</p>
    </a>

</div>
