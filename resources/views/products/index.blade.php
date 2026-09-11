<x-app-layout>

    <x-search />

    <x-productfilter />


    @if (isset($filteredresult))

        <div class="mx-auto grid w-full max-w-[1400px] grid-cols-1 justify-items-center gap-6 px-5 py-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($filteredresult as $product)

                <x-product-card :product="$product" />

            @endforeach

        </div>

    @endif


    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty())

        <div class="mx-auto grid w-full max-w-[1400px] grid-cols-1 justify-items-center gap-6 px-5 py-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($searchedproduct as $product)

                <x-searched-product :product="$product" />

            @endforeach

        </div>

    @elseif(isset($products))

        {{-- shows x of total pages --}}

        <x-pagination-info :paginator="$products" />


        <div class="mx-auto grid w-full max-w-[1400px] grid-cols-1 justify-items-center gap-6 px-5 py-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($products as $product)

                <x-product-card :product="$product" />

            @endforeach

        </div>


        <x-page-link :paginator="$products" />

    @endif


</x-app-layout>
