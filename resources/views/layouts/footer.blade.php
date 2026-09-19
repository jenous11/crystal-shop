
<footer class="mt-16 w-full border-t border-[#323c34]/10 bg-[#f8f7f4] px-6 py-12 md:px-10">

    <div class="mx-auto max-w-[1400px]">

        <div class="grid gap-12 md:grid-cols-[1.2fr_1fr] md:gap-20">

            {{-- Brand + Newsletter --}}
            <div>

                {{-- Logo --}}
                <a
                    href="{{ route('products.index') }}"
                    class="mb-5 block w-[120px] md:w-[145px]">

                    <img
                        src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}"
                        alt="Himalayan Crystal House"
                        class="w-full transition-transform duration-300 hover:scale-105"
                    >

                </a>

                <p class="mb-6 max-w-md text-sm leading-6 text-[#666666]">
                    Discover natural crystals and meaningful pieces for your collection.
                </p>


                {{-- Newsletter --}}
                <div class="max-w-[600px]">

                    <p class="mb-3 text-lg font-medium text-[#323c34]">
                        Stay connected
                    </p>

                    <p class="mb-4 text-sm text-[#666666]">
                        Subscribe for new crystal arrivals and updates.
                    </p>

                    <div class="flex w-full max-w-[560px] rounded-md bg-[#323c34] p-1.5">

                        <input
                            type="email"
                            name="email"
                            placeholder="Your email address"
                            class="min-w-0 flex-1 rounded bg-white px-4 py-2.5
                            text-sm text-black outline-none
                            placeholder:text-[#888888]"
                        >

                        <button
                            type="button"
                            class="flex w-12 items-center justify-center
                            rounded text-white transition-colors
                            duration-200 hover:bg-[#3a5a32]"
                            aria-label="Subscribe">

                            <i class="fa-solid fa-arrow-right-long"></i>

                        </button>

                    </div>

                </div>

            </div>


            {{-- Contact --}}
            <div class="md:pt-2">

                <p class="mb-5 text-2xl text-[#3a5a32]">
                    Contact us
                </p>

                <ul class="space-y-4 text-sm text-[#323c34]">

                    {{-- Phone --}}
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-phone w-4 text-[#3a5a32]"></i>

                        <span>
                            +977 9818084077
                        </span>
                    </li>

                    {{-- Email --}}
                    <li class="flex items-start gap-3 break-words">
                        <i class="fa-regular fa-envelope mt-0.5 w-4 text-[#3a5a32]"></i>

                        <span>
                            jenousdangol11@gmail.com
                        </span>
                    </li>

                </ul>


                {{-- Socials --}}
                <div class="mt-8">

                    <p class="mb-4 text-sm font-medium uppercase tracking-[0.15em] text-[#666666]">
                        Follow us
                    </p>

                    <div class="flex gap-3">

                        <a
                            href="#"
                            aria-label="Facebook"
                            class="flex h-10 w-10 items-center justify-center
                            rounded-full border border-[#323c34]/15
                            text-[#323c34]
                            transition-all duration-200
                            hover:border-[#3a5a32]
                            hover:bg-[#3a5a32]
                            hover:text-white">

                            <i class="fa-brands fa-facebook-f"></i>

                        </a>

                        <a
                            href="#"
                            aria-label="Instagram"
                            class="flex h-10 w-10 items-center justify-center
                            rounded-full border border-[#323c34]/15
                            text-[#323c34]
                            transition-all duration-200
                            hover:border-[#3a5a32]
                            hover:bg-[#3a5a32]
                            hover:text-white">

                            <i class="fa-brands fa-instagram"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Bottom --}}
        <div class="mt-12 border-t border-[#323c34]/10 pt-6">

            <p class="text-center text-xs text-[#666666] md:text-left">
                © {{ date('Y') }} Himalayan Crystal House. All rights reserved.
            </p>

        </div>

    </div>

</footer>

