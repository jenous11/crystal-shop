{{-- @php dd(get_class($products)); @endphp --}}
<x-app-layout>
    <x-search />

    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty() )
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
        {{-- {{ $products->links() }} --}}
        {{-- shows link of pages --}}
         {{-- <p>REACHED ELSE BLOCK</p> --}}
        <x-page-link :paginator="$products"/>
    @endif

</x-app-layout>
