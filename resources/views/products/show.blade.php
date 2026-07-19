<x-app-layout>

    <div class=" w-[550px] justify-center mx-auto  gap-3 mt-36 border-4 border-black">
        <div>

            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-[250px]">
        </div>
        {{-- name --}}
        <p>format this shit</p>
        <p>{{ $product->name }}</p>
        <br>
        {{-- description --}}
        <div>
            <p>{{ $product->description }}</p>
        </div>
        {{-- price --}}
        <div>
            <p>{{ $product->price }}</p>
        </div>
    </div>

</x-app-layout>
