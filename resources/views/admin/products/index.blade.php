<x-app-layout>

    <div class="  flex flex-wrap ml-[50px] gap-[20px]  ">
      @foreach ($products as $product)
      <div class="mt-3   w-[250px]    bg-amber-100  ml-[20px] group  ">
                @if ($product->image)
                    <a href="/admin/products/{{$product->id}}/edit"> <img src="{{ asset('storage/' . $product->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 "></a>
                @endif
                 <a href="/admin/products/{{$product->id}}/edit">  <p class="mt-4" > Name: {{ $product->name }}</p> </a>
                  <a href="/admin/products/{{$product->id}}/edit"> <p class="   "> Description: {{Str::words( $product->description ,4)}}</p></a>
                  <a href="/admin/products/{{$product->id}}/edit"> <p class="   "> Price:{{ $product->price }}</p></a>

                <form action="/admin/products/{{ $product->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="border rounded opacity-90 group-hover:scale-110   ">delete</button>
                </form>
              </div>
              @endforeach
              {{-- {{ $products->links() }} --}}
</div>

</x-app-layout>
