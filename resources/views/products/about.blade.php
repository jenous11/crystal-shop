<x-app-layout>
<div class="bg-red-600">
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <section class="grid grid-cols-2 gap-10 bg-red-300">
        <div class="bg-yellow-300 flex flex-col items-start gap-5 ml-[65px]  ">

            <h1 class="text-6xl mt-[150px] font-bold ">Infusing Energy, Crafting Meaning</h1>
            <i class="text-3xl ">
                Handmade Crystals from the Himalayas</i>

            <p>At Himalayan Crystal House, we believe crystals carry energy that aligns with your soul. Every piece we
                create is handcrafted with care, purpose, and deep spiritual significance.</p>
            <button class=" bg-green-600 text-white rounded-md"> Explore Our Collection</button>

        </div>
        <div class="mt-4 ml-7 ">
           <img src="{{ asset('images/aboutpagehero.jpg') }}" alt="" width="500"height="331" class="rounded-3xl" >
        </div>

    </section>

    <section class=" bg-orange-300 mt-5">
      <header class="flex justify-center bg-blue-400 text-4xl">Our Story</header>
      <div class="order-2 justify-center bg-red-400 ">
        <h1>Born in the heart of Nepal, Himalayan Crystal House is more than just a store—it's
          a journey. A journey of energy, healing, and craftsmanship passed down through generations. </h1>
      </div>

        <div class="mt-4 ml-[65px]">
  <img src="{{asset('images/himal.jpg')}} " class="order-1 " alt="" width="500" height="331" >
</div>

      </section>


</div>
</x-app-layout>
