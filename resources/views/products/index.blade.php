<x-app-layout>
<x-search />
@if($searchedproduct)
<x-searched-product-card :searchedproduct="$searchedproduct"/>

@else
    <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
      @foreach ($products as $product)
<x-product-card :product="$product"/>
              @endforeach
            </div>
            {{-- {{ $products->links() }} --}}
{{-- @endif --}}
</x-app-layout>
