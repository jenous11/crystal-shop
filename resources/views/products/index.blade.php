<x-app-layout>
    <x-search />
        <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
          @foreach($searchedproduct as $product)
                <x-searched-product :searchedproduct="$product" />
          @endforeach
        </div>
    {{-- <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div> --}}
    {{-- {{ $products->links() }} --}}

</x-app-layout>
