<x-app-layout>

    <div class="  gap-3 mt-12 border-4 border-black  flex ">
        <div class="   ml-10">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class=" w-[550px] h-[650px]">
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
                <button class=" " >
                   <a href="" class="">Add To Cart</a>
                  </button>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center">
        you Might also like
    </div>

</x-app-layout>
