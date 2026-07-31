{{-- @php dd(get_class($products)); @endphp --}}
<x-app-layout>
    <x-search />
    <x-productfilter />
    @if (isset($filteredresult))
        <div class=" flex">
            @foreach ($filteredresult as $product)
            @endforeach
        </div>
    @endif
    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty())
        <div class="  flex flex-wrap ml-[25px] gap-[20px]  ">
            @foreach ($searchedproduct as $product)
                <x-searched-product :product="$product" />
            @endforeach
        </div>
    @elseif(isset($products))
        {{-- shows x of total pages  --}}
        <x-pagination-info :paginator="$products" />
        <div class="  flex flex-wrap ml-[55px] gap-[20px]  ">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
        <x-page-link :paginator="$products" />

    @endif

</x-app-layout>
