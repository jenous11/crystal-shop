<x-app-layout>

    <div class="  gap-3 mt-12 border-4 border-black  flex ">
        <div class="   ml-10">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="  max-w-full h-auto  md:w-[550px] ">
        </div>
        {{-- image informations --}}
        <div class=" mb-0">

            {{-- name --}}
            <div>

                <p class="text-green-500 text-[21px] ">{{ $product->name }}</p>
            </div>

            {{-- price --}}
            <div>
                <p class="text-green-500 text-[21px]">{{ $product->price }}</p>
            </div>
            {{-- description --}}
            <div class="mt-5">
                Description
                <p>{{ $product->description }}</p>
            </div>
            {{-- add to cart --}}
            <div class="bg-green-600 text-center">
                <button class=" ">
                    <a href="" class="">Add To Cart</a>
                </button>
            </div>
        </div>
    </div>
    <article class="flex justify-center">you might also like</article>
    <div class="flex items-center justify-evenly ">

        {{-- showing might like products to show below  --}}
        @foreach ($products as $item)
            @if ($product->id !== $item->id)
                <x-mightlikeproducts :product="$item" />
            @endif
        @endforeach
    </div>

</x-app-layout>
