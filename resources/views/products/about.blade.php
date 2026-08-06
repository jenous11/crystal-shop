<x-app-layout>
    <div class="">
        <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
        <section class="grid grid-cols-2 gap-10 bg-red-300">
            <div class="bg-yellow-300 flex flex-col items-start gap-5 ml-[65px]  ">

                <h1 class="text-6xl mt-[150px] font-bold ">Infusing Energy, Crafting Meaning</h1>
                <i class="text-3xl ">
                    Handmade Crystals from the Himalayas</i>

                <p>At Himalayan Crystal House, we believe crystals carry energy that aligns with your soul. Every piece
                    we
                    create is handcrafted with care, purpose, and deep spiritual significance.</p>
                <button class=" bg-green-600 text-white rounded-md"> Explore Our Collection</button>

            </div>
            <div class="mt-4 ml-7 ">
                <img src="{{ asset('images/aboutpagehero.jpg') }}" alt="" width="500"height="331"
                    class="rounded-3xl">
            </div>

        </section>

        {{-- our story --}}

        <header class="flex justify-center bg-blue-400 text-4xl mt-3">Our Story</header>
        <div class="flex bg-purple-600  justify-center">
            <p class="text-center text-wrap  w-1/3 ">Born in the heart of Nepal, Himalayan Crystal House is more than
                just a store—it's
                a journey. A journey of energy, healing, and craftsmanship passed down through generations. </p>
        </div>
        <section class="grid grid-cols-2 bg-orange-300 mt-5 items-center ">
            <div class="order-2  bg-fuchsia-700 items-center  mr-14">
                <header class="text-3xl text-green-600">The Himalayan Origin</header>
                <br>
                <p>Our story begins in the majestic Himalayan mountains, where nature's purest crystals are born.
                    Each stone carries the energy of these ancient mountains, connecting you to one of Earth's most
                    spiritual places.
                   <br>
                   <p> We ethically source our crystals by working directly with local communities, ensuring fair practices
                    and sustainable harvesting methods.</p>
                    <br>
                    <p>Each crystal is ethically sourced, each jewelry piece is made with love, and every customer becomes
                    part of our story.</p>
            </div>

            <div class="mt-4 ml-[95px] bg-red-800">
                <img src="{{ asset('images/himal.jpg') }} " class="order-1 rounded-3xl h-5/6" alt=""
                    width="500">
            </div>
        </section>

    </div>
</x-app-layout>
