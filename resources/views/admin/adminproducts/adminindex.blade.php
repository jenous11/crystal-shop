<x-app-layout>
    <x-search />

    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty())
        <div class="flex flex-wrap ml-[25px] gap-[20px]">
            @foreach ($searchedproduct as $product)
                <x-searched-product :product="$product"/>
            @endforeach
        </div>
    @elseif(isset($adminproducts))
    {{-- <x-pagination-info :paginator="$products" /> --}}
    <div class="  flex flex-wrap ml-[55px] gap-[20px]  ">
      @foreach ($adminproducts as $product)
      <x-adminproductcard :product="$product" />

            @endforeach
        </div>
        {{-- <x-page-link :paginator="$products"/> --}}
    @endif

</x-app-layout>
