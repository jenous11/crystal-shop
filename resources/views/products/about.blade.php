<x-app-layout>
<div class="bg-red-600">
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <section class="grid grid-cols-2 gap-5 bg-red-300">
        <div class="bg-yellow-300 flex flex-col items-start gap-5 ml-[65px] ">

            <h1 class="text-6xl mt-[150px] font-bold ">Infusing Energy, Crafting Meaning</h1>
            <i class="text-3xl ">
                Handmade Crystals from the Himalayas</i>

            <p>At Himalayan Crystal House, we believe crystals carry energy that aligns with your soul. Every piece we
                create is handcrafted with care, purpose, and deep spiritual significance.</p>
            <button class=" bg-green-600 text-white rounded-md"> Explore Our Collection</button>

        </div>
        <div class=" ">
           <img src="{{ asset('images/aboutpagehero.jpg') }}" alt="" width="500"height="331" class="rounded-3xl" >
        </div>

    </section>
</div>
</x-app-layout>
