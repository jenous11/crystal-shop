<x-app-layout>

    <div class="  flex flex-wrap ml-[125px] gap-[20px]  ">
      @foreach ($products as $product)
<x-product-card :product="$product"/>
              @endforeach
              {{-- {{ $products->links() }} --}}
</div>

</x-app-layout>
