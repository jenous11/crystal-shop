<x-app-layout>
    <x-adminsearchpanel />
    <x-adminfilter/>
    {{-- {{dd($filteredresult)}} --}}
   @if(isset($filteredresult))
   @foreach($filteredresult as $product)
        <div class="flex flex-wrap ml-[25px] gap-[20px]">
     <x-adminproductcard :product="$product" />
        </div>
     @endforeach
   @endif

    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty())
        <div class="flex flex-wrap ml-[25px] gap-[20px]">
            @foreach ($searchedproduct as $product)
                <x-adminsearch :product="$product" />
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
