<x-app-layout>

    <div class="  gap-3 mt-12 flex ">
        <div class="   ml-10">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="  max-w-full h-auto  md:w-[550px] ">
        </div>
        {{-- image informations --}}
        <div class=" mb-0">

            {{-- name --}}
            <div>

                <p class="text-green-500 text-[21px] ">{{ $product->name }}</p>
            </div>

            {{-- price --}}
            <div>
                <p class="text-green-500 text-[21px]">{{ $product->price }}</p>
            </div>
            {{-- description --}}
            <div class="mt-5">
                Description
                <p>{{ $product->description }}</p>
            </div>
            {{-- add to cart --}}
            <div class="bg-green-600 text-center">
                <button class=" ">
                    <a href="" class="">Add To Cart</a>
                </button>
            </div>
        </div>
    </div>
    {{-- might also like --}}
<article class="flex justify-center m-4">you might also like</article>

<div class="swiper px-4 relative">
  <div class="swiper-wrapper">
    @foreach ($products as $item)
      @if ($product->id !== $item->id)
        <div class="swiper-slide">
          <x-mightlikeproducts :product="$item" />
        </div>
      @endif
    @endforeach
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
@push('scripts')
<script>
  const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 20,
    loop:true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 4 },
    }
  });
</script>
@endpush
</x-app-layout>
