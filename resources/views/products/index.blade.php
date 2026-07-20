<x-app-layout>

    {{-- <div class="  flex flex-wrap ml-[50px] gap-[20px]  "> --}}
      @foreach ($products as $product)
<x-product-card :product="$product"/>
              @endforeach
              {{-- {{ $products->links() }} --}}
</div>

</x-app-layout>
