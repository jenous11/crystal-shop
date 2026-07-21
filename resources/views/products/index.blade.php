<x-app-layout>
    <x-search />


    @if(isset($searchedproduct) && $searchedproduct->isNotEmpty())
        <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
          @foreach($searchedproduct as $product)
                <x-searched-product :searchedproduct="$product" />
          @endforeach
        </div>
    @else
        <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
      @foreach ($products as $product)
      <x-product-card :product="$product" />
      @endforeach
    </div>
    @endif
    {{-- {{ $products->links() }} --}}

</x-app-layout>
