<x-app-layout>
<x-search/>
    {{-- <div class="  flex flex-wrap ml-[50px] gap-[20px]  ">
      @foreach ($adminproducts as $product)
      <div class="mt-3   w-[250px]    bg-amber-100  ml-[20px] group  ">
                @if ($product->image)
                    <a href="/admin/adminproducts/{{$product->id}}/edit"> <img src="{{ asset('storage/' . $product->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 "></a>
                @endif
                 <a href="/admin/adminproducts/{{$product->id}}/edit">  <p class="mt-4" > Name: {{ $product->name }}</p> </a>
                  <a href="/admin/adminproducts/{{$product->id}}/edit"> <p class="   "> Description: {{Str::words( $product->description ,4)}}</p></a>
                  <a href="/admin/adminproducts/{{$product->id}}/edit"> <p class="   "> Price:{{ $product->price }}</p></a>

                <form action="/admin/adminproducts/{{ $product->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="border rounded opacity-90 group-hover:scale-110   ">delete</button>
                </form>
              </div>
              @endforeach
              {{-- {{ $products->links() }} --}}
{{-- </div> --}}


{{-- new style --}}

    @if (isset($searchedproduct) && $searchedproduct->isNotEmpty() )
        <div class="  flex flex-wrap ml-[25px] gap-[20px]  ">
            @foreach ($searchedproduct as $product)
                <x-searched-product :product="$product" />
            @endforeach
        </div>
    @elseif(isset($adminproducts))
    {{-- shows x of total pages  --}}
        {{-- <x-pagination-info :paginator="$products" /> --}}
        <div class="  flex flex-wrap ml-[55px] gap-[20px]  ">
            @foreach ($adminproducts as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
        {{-- {{ $products->links() }} --}}
        {{-- shows link of pages --}}
         {{-- <p>REACHED ELSE BLOCK</p> --}}
        {{-- <x-page-link :paginator="$products"/> --}}
    @endif


</x-app-layout>
