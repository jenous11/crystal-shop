<footer class="mt-5 w-full border-t border-gray-300 px-5 py-8">

    {{-- container for image and newsletter --}}
    <div class="mx-auto flex max-w-[1400px] flex-col gap-8 md:flex-row md:items-start md:justify-between">

        {{-- image + newsletter --}}
        <div class="flex w-full flex-col items-center md:w-auto md:items-start">

            {{-- logo --}}
            <div class="mb-6 flex w-[110px] items-center justify-center md:w-[150px]">
                <img
                    src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}"
                    alt="crystal shop logo"
                    class="w-full transition-transform hover:scale-105"
                >
            </div>

            {{-- subscribe to newsletter --}}
            <div class="flex w-full max-w-[595px] flex-col gap-3 rounded-md bg-[#323c34] p-3 sm:flex-row sm:items-center sm:justify-between">

                <div>
                    <p class="text-center text-white sm:text-left">
                        Subscribe to our newsletter
                    </p>
                </div>

                <div class="relative flex w-full sm:w-auto">
                    <input
                        type="email"
                        name="email"
                        placeholder="email"
                        class="m-0 w-full rounded border-0 bg-white px-3 py-2 text-black outline-none sm:w-[220px]"
                    >

                    <i class="fa-solid fa-arrow-right-long absolute right-3 top-1/2 -translate-y-1/2 text-[#323c34]"></i>
                </div>

            </div>

        </div>


        {{-- info --}}
        <div class="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 md:w-auto md:grid-cols-3 md:gap-10">

            {{-- Contact --}}
            <div>
                <p class="mb-3 text-2xl text-[#3a5a32]">
                    Contact us
                </p>

                <ul class="space-y-2">
                    <li>
                        <a href="">
                            <i class="fa-solid fa-phone"></i>
                        </a>
                        +977 9818084077
                    </li>

                    <li class="break-words">
                        <i class="fa-regular fa-envelope"></i>
                        jenousdangol11@gmail.com
                    </li>

                    <li>
                        <i class="fa-brands fa-facebook"></i>
                        Facebook
                    </li>

                    <li>
                        <i class="fa-brands fa-instagram"></i>
                        Instagram
                    </li>
                </ul>
            </div>


            {{-- Quick Links --}}
            <div>
                <p class="mb-3 text-2xl text-[#3a5a32]">
                    Quick Links
                </p>

                <ul class="space-y-2">
                    <li>About us</li>
                    <li>Contact us</li>
                    <li>Privacy Policy</li>
                    <li>Returns and Exchange</li>
                    <li>Terms and Conditions</li>
                </ul>
            </div>


            {{-- Top Crystals --}}
            <div>
                <p class="mb-3 text-2xl text-[#3a5a32]">
                    Top Crystals
                </p>

                <ul class="space-y-2">
                    <li>Clear Quartz</li>
                    <li>Black Tourmaline</li>
                    <li>Kyanite</li>
                    <li>Pyrite</li>
                    <li>Amethyst</li>
                </ul>
            </div>

        </div>

    </div>

</footer>
