<x-app-layout>

    <main class="bg-[#f4f5f0] text-black">

        {{-- =========================================================
            HERO
        ========================================================== --}}
        <section class="border-b border-[#dce4d9]">
            <div class="mx-auto grid max-w-[1400px] grid-cols-1 items-center gap-12 px-6 py-16 sm:px-8 md:py-20 lg:grid-cols-2 lg:gap-20 lg:px-12 lg:py-24">

                <div class="max-w-[620px]">

                    <p class="mb-4 text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
                        Himalayan Crystal House
                    </p>

                    <h1 class="text-[42px] font-medium leading-[1.12] md:text-[56px]">
                        Infusing Energy,
                        <span class="text-[#3a5a32]">Crafting Meaning</span>
                    </h1>

                    <p class="mt-6 text-[22px] italic leading-8 text-[#4a6c4f]">
                        Handmade Crystals from the Himalayas
                    </p>

                    <p class="mt-6 max-w-[570px] text-[17px] leading-8 text-[#666666]">
                        At Himalayan Crystal House, we believe crystals carry energy
                        that aligns with your soul. Every piece we create is
                        handcrafted with care, purpose, and deep spiritual significance.
                    </p>

                    <a
                        href="{{ route('public.products.index') }}"
                        class="mt-8 inline-flex items-center rounded-[5px] border border-[#3a5a32] bg-[#3a5a32] px-6 py-3 text-[16px] text-white transition duration-300 hover:bg-[#323c34]"
                    >
                        Explore Our Collection
                        <span class="ml-3">→</span>
                    </a>

                </div>

                <div class="overflow-hidden rounded-[16px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                    <img
                        src="{{ asset('images/aboutpagehero.jpg') }}"
                        alt="Handmade Himalayan crystals"
                        class="h-[360px] w-full object-cover transition duration-700 hover:scale-[1.03] md:h-[520px]"
                    >
                </div>

            </div>
        </section>


        {{-- =========================================================
            OUR STORY
        ========================================================== --}}
        <section class="bg-white">
            <div class="mx-auto max-w-[900px] px-6 py-20 text-center md:py-24">

                <p class="mb-3 text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
                    Our Story
                </p>

                <h2 class="text-[32px] font-medium leading-[1.3] md:text-[40px]">
                    A Journey of Energy, Healing & Craftsmanship
                </h2>

                <div class="mx-auto mt-6 h-px w-16 bg-[#3a5a32]"></div>

                <p class="mx-auto mt-7 max-w-[700px] text-[17px] leading-8 text-[#666666]">
                    Born in the heart of Nepal, Himalayan Crystal House is more than
                    just a store—it’s a journey. A journey of energy, healing, and
                    craftsmanship passed down through generations.
                </p>

            </div>
        </section>


        {{-- =========================================================
            HIMALAYAN ORIGIN
        ========================================================== --}}
        <section class="bg-[#f4f5f0]">
            <div class="mx-auto grid max-w-[1400px] grid-cols-1 items-center gap-12 px-6 py-20 sm:px-8 md:py-24 lg:grid-cols-2 lg:gap-20 lg:px-12">

                <div class="overflow-hidden rounded-[16px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                    <img
                        src="{{ asset('images/himal.jpg') }}"
                        alt="The Himalayan mountains"
                        class="h-[380px] w-full object-cover md:h-[520px]"
                    >
                </div>

                <div class="max-w-[620px]">

                    <p class="text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
                        Where It Begins
                    </p>

                    <h2 class="mt-3 text-[32px] font-medium leading-[1.3] md:text-[40px]">
                        The Himalayan Origin
                    </h2>

                    <div class="mt-7 space-y-5 text-[17px] leading-8 text-[#666666]">

                        <p>
                            Our story begins in the majestic Himalayan mountains,
                            where nature's purest crystals are born. Each stone
                            carries the energy of these ancient mountains, connecting
                            you to one of Earth's most spiritual places.
                        </p>

                        <p>
                            We ethically source our crystals by working directly
                            with local communities, ensuring fair practices and
                            sustainable harvesting methods.
                        </p>

                        <p>
                            Each crystal is ethically sourced, each jewelry piece
                            is made with love, and every customer becomes part
                            of our story.
                        </p>

                    </div>

                </div>

            </div>
        </section>

{{-- =========================================================
    OUR JOURNEY
========================================================= --}}
<section class="bg-white">

    {{-- Section heading --}}
    <div class="mx-auto max-w-[850px] px-6 pt-20 text-center md:pt-24">

        <p class="mb-3 text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
            Our Journey
        </p>

        <h2 class="text-[32px] font-medium leading-[1.3] md:text-[40px]">
            Every Crystal Tells a Story
        </h2>

        <div class="mx-auto mt-6 h-px w-16 bg-[#3a5a32]"></div>

        <p class="mx-auto mt-7 max-w-[680px] text-[17px] leading-8 text-[#666666]">
            Every crystal tells a story. Ours begins in the Himalayas,
            where nature's purest gems meet the hands of skilled artisans
            to create jewelry that connects with your soul.
        </p>

    </div>


    {{-- Timeline --}}
    <div class="mx-auto max-w-[1000px] px-6 py-20 md:px-8 md:py-28">

        <div class="relative">

            {{-- Center line --}}
            <div class="absolute left-1/2 top-0 hidden h-full w-px -translate-x-1/2 bg-[#3a5a32] md:block"></div>


            {{-- =====================================================
                01 — SOURCING
            ====================================================== --}}
            <div class="relative grid grid-cols-1 items-center gap-10 pb-24 md:grid-cols-2 md:gap-20">

                {{-- Image --}}
                <div class="flex justify-center md:justify-end">
                    <div class="overflow-hidden rounded-[8px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                        <img
                            src="{{ asset('storage/images/ourjourney2.jpeg') }}"
                            alt="Crystal sourcing in Nepal"
                            class="h-[280px] w-[280px] object-cover transition duration-500 hover:scale-[1.03] md:h-[300px] md:w-[300px]"
                        >
                    </div>
                </div>

                {{-- Text --}}
                <div class="max-w-[300px] text-center md:text-left">
                    <p class="text-sm font-medium tracking-[0.15em] text-[#3a5a32]">
                        01
                    </p>

                    <h3 class="mt-2 text-[22px] font-bold">
                        Sourcing
                    </h3>

                    <p class="mt-2 text-[15px] leading-6 text-[#000000]">
                        Our journey begins with the ethical sourcing
                        of raw crystals from the pristine mountains
                        of Nepal, working directly with local
                        communities.
                    </p>
                </div>

                {{-- Timeline dot --}}
                <span class="absolute left-1/2 top-1/2 hidden h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#3a5a32] md:block"></span>

            </div>


            {{-- =====================================================
                02 — HANDCRAFTING
            ====================================================== --}}
            <div class="relative grid grid-cols-1 items-center gap-10 pb-24 md:grid-cols-2 md:gap-20">

                {{-- Text --}}
                <div class="order-2 max-w-[300px] text-center md:order-1 md:justify-self-end md:text-left">

                    <p class="text-sm font-medium tracking-[0.15em] text-[#3a5a32]">
                        02
                    </p>

                    <h3 class="mt-2 text-[22px] font-bold">
                        Handcrafting
                    </h3>

                    <p class="mt-2 text-[15px] leading-6 text-[#000000]">
                        Every piece is meticulously shaped and
                        polished by our skilled artisans, who
                        breathe life into raw crystals through
                        traditional techniques.
                    </p>

                </div>


                {{-- Image --}}
                <div class="order-1 flex justify-center md:order-2 md:justify-start">
                    <div class="overflow-hidden rounded-[8px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                        <img
                            src="{{ asset('storage/images/ourjourney1.jpeg') }}"
                            alt="Handcrafting crystal jewelry"
                            class="h-[280px] w-[280px] object-cover transition duration-500 hover:scale-[1.03] md:h-[300px] md:w-[300px]"
                        >
                    </div>
                </div>

                {{-- Timeline dot --}}
                <span class="absolute left-1/2 top-1/2 hidden h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#3a5a32] md:block"></span>

            </div>


            {{-- =====================================================
                03 — ENERGY CLEANSING
            ====================================================== --}}
            <div class="relative grid grid-cols-1 items-center gap-10 pb-24 md:grid-cols-2 md:gap-20">

                {{-- Image --}}
                <div class="flex justify-center md:justify-end">
                    <div class="overflow-hidden rounded-[8px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                        <img
                            src="{{ asset('storage/images/ourjourney4.jpg') }}"
                            alt="Crystal energy cleansing"
                            class="h-[280px] w-[280px] object-cover transition duration-500 hover:scale-[1.03] md:h-[300px] md:w-[300px]"
                        >
                    </div>
                </div>

                {{-- Text --}}
                <div class="max-w-[300px] text-center md:text-left">

                    <p class="text-sm font-medium tracking-[0.15em] text-[#3a5a32]">
                        03
                    </p>

                    <h3 class="mt-2 text-[22px] font-bold">
                        Energy Cleansing
                    </h3>

                    <p class="mt-2 text-[15px] leading-6 text-[#000000]">
                        Each crystal undergoes a sacred cleansing
                        ritual to enhance its natural energies before
                        it begins its journey to you.
                    </p>

                </div>

                {{-- Timeline dot --}}
                <span class="absolute left-1/2 top-1/2 hidden h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#3a5a32] md:block"></span>

            </div>


            {{-- =====================================================
                04 — YOU
            ====================================================== --}}
            <div class="relative grid grid-cols-1 items-center gap-10 md:grid-cols-2 md:gap-20">

                {{-- Text --}}
                <div class="order-2 max-w-[300px] text-center md:order-1 md:justify-self-end md:text-left">

                    <p class="text-sm font-medium tracking-[0.15em] text-[#3a5a32]">
                        04
                    </p>

                    <h3 class="mt-2 text-[22px] font-bold">
                        You
                    </h3>

                    <p class="mt-2 text-[15px] leading-6 text-[#000000]">
                        The final and most important part of our
                        journey—when our crystals find their way
                        to you, bringing their healing energies
                        into your life.
                    </p>

                </div>


                {{-- Image --}}
                <div class="order-1 flex justify-center md:order-2 md:justify-start">
                    <div class="overflow-hidden rounded-[8px] bg-white shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">
                        <img
                            src="{{ asset('storage/images/ourjourney3.jpg') }}"
                            alt="Crystal jewelry finding its home"
                            class="h-[280px] w-[280px] object-cover transition duration-500 hover:scale-[1.03] md:h-[300px] md:w-[300px]"
                        >
                    </div>
                </div>

                {{-- Timeline dot --}}
                <span class="absolute left-1/2 top-1/2 hidden h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#3a5a32] md:block"></span>

            </div>

        </div>

    </div>

</section>

        {{-- =========================================================
            OUR VALUES
        ========================================================== --}}
        <section class="bg-[#f4f5f0]">

            <div class="mx-auto max-w-[900px] px-6 pt-20 text-center md:pt-24">

                <p class="mb-3 text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
                    Our Values
                </p>

                <h2 class="text-[32px] font-medium leading-[1.3] md:text-[40px]">
                    What We Believe In
                </h2>

                <div class="mx-auto mt-6 h-px w-16 bg-[#3a5a32]"></div>

                <p class="mx-auto mt-7 max-w-[700px] text-[17px] leading-8 text-[#666666]">
                    Every decision we make is guided by our core values.
                    These principles define who we are and how we create.
                </p>

            </div>


            <div class="mx-auto grid max-w-[1200px] grid-cols-1 gap-6 px-6 py-16 sm:px-8 md:grid-cols-2 lg:grid-cols-4 lg:py-20">

                {{-- Authenticity --}}
                <article class="rounded-[16px] bg-white p-8 text-center shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-[#dce4d9]">
                        <img
                            src="{{ asset('storage/images/authenticity.svg') }}"
                            alt="Authenticity"
                            class="h-10 w-10"
                        >
                    </div>

                    <h3 class="mt-6 text-[22px] font-medium">
                        Authenticity
                    </h3>

                    <p class="mt-4 text-[15px] leading-7 text-[#666666]">
                        We source only genuine, high-energy crystals. Every piece
                        in our collection is authentic and carefully inspected.
                    </p>

                </article>


                {{-- Handmade --}}
                <article class="rounded-[16px] bg-white p-8 text-center shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-[#dce4d9]">
                        <img
                            src="{{ asset('storage/images/handmadewithlove.svg') }}"
                            alt="Handmade with Love"
                            class="h-10 w-10"
                        >
                    </div>

                    <h3 class="mt-6 text-[22px] font-medium">
                        Handmade with Love
                    </h3>

                    <p class="mt-4 text-[15px] leading-7 text-[#666666]">
                        Every piece is crafted by skilled artisans who put their
                        heart and soul into creating beautiful, meaningful jewelry.
                    </p>

                </article>


                {{-- Ethical --}}
                <article class="rounded-[16px] bg-white p-8 text-center shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-[#dce4d9]">
                        <img
                            src="{{ asset('storage/images/ethicallysourced.svg') }}"
                            alt="Ethically Sourced"
                            class="h-10 w-10"
                        >
                    </div>

                    <h3 class="mt-6 text-[22px] font-medium">
                        Ethically Sourced
                    </h3>

                    <p class="mt-4 text-[15px] leading-7 text-[#666666]">
                        We support ethical mining and fair trade practices,
                        ensuring our business benefits local communities in Nepal.
                    </p>

                </article>


                {{-- Spiritual --}}
                <article class="rounded-[16px] bg-white p-8 text-center shadow-[rgba(0,0,0,0.1)_0px_2px_4px_0px]">

                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-[#dce4d9]">
                        <img
                            src="{{ asset('storage/images/spiritualconnection.svg') }}"
                            alt="Spiritual Connection"
                            class="h-10 w-10"
                        >
                    </div>

                    <h3 class="mt-6 text-[22px] font-medium">
                        Spiritual Connection
                    </h3>

                    <p class="mt-4 text-[15px] leading-7 text-[#666666]">
                        We help you find crystals that resonate with your energy,
                        facilitating a deeper connection with yourself.
                    </p>

                </article>

            </div>

        </section>


        {{-- =========================================================
            FOUNDERS
        ========================================================== --}}
        <section class="bg-white">

            <div class="mx-auto max-w-[900px] px-6 pt-20 text-center md:pt-24">

                <p class="mb-3 text-sm font-medium tracking-[0.18em] uppercase text-[#3a5a32]">
                    Meet Our Founders
                </p>

                <h2 class="text-[32px] font-medium leading-[1.3] md:text-[40px]">
                    The People Behind the Craft
                </h2>

                <div class="mx-auto mt-6 h-px w-16 bg-[#3a5a32]"></div>

                <p class="mx-auto mt-7 max-w-[700px] text-[17px] leading-8 text-[#666666]">
                    The passionate souls behind Himalayan Crystal House who
                    turned their love for crystals into a mission.
                </p>

            </div>


            <div class="mx-auto max-w-[1100px] space-y-16 px-6 py-16 sm:px-8 md:py-20">

                {{-- Maya --}}
                <article class="grid grid-cols-1 items-center gap-10 md:grid-cols-2 md:gap-16">

                    <div class="overflow-hidden rounded-[16px] bg-[#f4f5f0]">
                        <img
                            src="{{ asset('storage/images/mayasharma.png') }}"
                            alt="Maya Sharma"
                            class="h-[420px] w-full object-cover"
                        >
                    </div>

                    <div>

                        <p class="text-sm font-medium tracking-[0.15em] uppercase text-[#3a5a32]">
                            Co-Founder
                        </p>

                        <h3 class="mt-2 text-[32px] font-medium">
                            Maya Sharma
                        </h3>

                        <p class="mt-2 text-[18px] italic text-[#4a6c4f]">
                            Crystal Specialist
                        </p>

                        <p class="mt-6 text-[16px] leading-8 text-[#666666]">
                            Born and raised in Kathmandu, Maya's connection with
                            crystals began during her childhood when her grandmother,
                            a traditional healer, introduced her to the healing
                            properties of stones found in the Himalayan region.
                        </p>

                        <blockquote class="mt-6 border-l-2 border-[#3a5a32] pl-5 text-[16px] italic leading-7 text-[#4a6c4f]">
                            "Born and raised in Kathmandu, Maya's connection with
                            crystals began during her childhood when her grandmother,
                            a traditional healer, introduced her to the healing
                            properties of stones found in the Himalayan region."
                            <span class="mt-2 block text-sm not-italic text-[#666666]">
                                — Maya
                            </span>
                        </blockquote>

                    </div>

                </article>


                {{-- Raj --}}
                <article class="grid grid-cols-1 items-center gap-10 md:grid-cols-2 md:gap-16">

                    <div class="order-1 overflow-hidden rounded-[16px] bg-[#f4f5f0] md:order-2">
                        <img
                            src="{{ asset('storage/images/mayasharma2.png') }}"
                            alt="Raj Gurung"
                            class="h-[420px] w-full object-cover"
                        >
                    </div>

                    <div class="order-2 md:order-1">

                        <p class="text-sm font-medium tracking-[0.15em] uppercase text-[#3a5a32]">
                            Co-Founder
                        </p>

                        <h3 class="mt-2 text-[32px] font-medium">
                            Raj Gurung
                        </h3>

                        <p class="mt-2 text-[18px] italic text-[#4a6c4f]">
                            Master Craftsman
                        </p>

                        <p class="mt-6 text-[16px] leading-8 text-[#666666]">
                            Raj comes from a long line of jewelers, with the craft
                            being passed down through four generations. His expertise
                            in metalwork and gem setting brings a level of craftsmanship
                            rarely found in today's mass-produced world.
                        </p>

                        <blockquote class="mt-6 border-l-2 border-[#3a5a32] pl-5 text-[16px] italic leading-7 text-[#4a6c4f]">
                            "Every crystal has a story to tell. My job is to create
                            a setting that honors that story while adding a new chapter
                            when it finds its new home with you."
                            <span class="mt-2 block text-sm not-italic text-[#666666]">
                                — Raj
                            </span>
                        </blockquote>

                    </div>

                </article>

            </div>

        </section>


        {{-- =========================================================
            FINAL CTA
        ========================================================== --}}
        <section class="bg-[#3a5a32]">

            <div class="mx-auto max-w-[900px] px-6 py-20 text-center md:py-24">

                <p class="text-sm font-medium tracking-[0.18em] uppercase text-[#dce4d9]">
                    Begin Your Journey
                </p>

                <h2 class="mt-3 text-[32px] font-medium leading-[1.3] text-white md:text-[40px]">
                    Find Something That Resonates With You
                </h2>

                <p class="mx-auto mt-5 max-w-[650px] text-[16px] leading-7 text-[#dce4d9]">
                    Let's find the perfect crystal that resonates with your
                    energy and intention. Explore our collection or connect
                    with us for a personalized consultation.
                </p>

                <div class="mt-8 flex flex-col justify-center gap-4 sm:flex-row">

                    <a
                        href="{{ route('public.products.index') }}"
                        class="inline-flex items-center justify-center rounded-[5px] bg-white px-6 py-3 text-[16px] text-[#3a5a32] transition duration-300 hover:bg-[#f4f5f0]"
                    >
                        Shop Our Collection
                    </a>

                    {{-- <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-[5px] border border-white px-6 py-3 text-[16px] text-white transition duration-300 hover:bg-white hover:text-[#3a5a32]"
                    >
                        Book a Tarot Reading
                    </button> --}}

                </div>

            </div>

        </section>

    </main>

</x-app-layout>
