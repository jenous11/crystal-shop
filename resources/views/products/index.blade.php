<x-app-layout>

    <div class="  flex flex-wrap ml-[50px] gap-[20px]  ">
      @foreach ($products as $product)
      <div class="mt-3   w-[250px]    bg-amber-100  ml-[20px] group  ">
                    <a href="{{route('public.products.show',$product->id)}}">
                       <img src="{{ asset('storage/' . $product->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 ">
                      </a>
                {{-- @endif --}}
                 <a href="{{route('products.show',$product->name)}}">  <p class="mt-4" > Name: {{ $product->name }}</p> </a>
                  <a href="/products/show"> <p class="   "> Description: {{ $product->description }}</p></a>
                  <a href="/products/show"> <p class="   "> Price:{{ $product->price }}</p></a>


              </div>
              @endforeach
              {{-- {{ $products->links() }} --}}
</div>

</x-app-layout>
