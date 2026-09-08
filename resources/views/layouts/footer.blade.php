{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<footer class=" flex flex-col md:flex-row  mt-5 w-full border-t border-gray-300 justify-between">
    {{-- container  for image and newsletter --}}
    <div class=" flex items-center flex-col md:grid px-5">
        {{-- image --}}
        <div
            class=" flex items-center w-[90px] flex-col justify-items-center  ml-11 md:flex-row  mb-5 md:w-[150px] hover:scale-105  ">
            {{-- logo --}}
            <img src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}" alt="crystal shop log"
                class="mb-5  ">
        </div>
        {{-- subscribe to newsletter --}}
        <div class="bg-[#323c34] flex flex-col md:flex-row  items-center w-[595px]  rounded-md mb-9 gap-24 ">
            <div class="justify-start">
                <p class="text-white ml-2 text-nowrap">Subscribe to our newsletter</p>
            </div>
            <div class="flex  md:flex justify-end relative ">
                <input type="email" name="email" placeholder="email" class="m-1 rounded bg-[#323c34]  ">
                <i class="fa-solid fa-arrow-right-long absolute mt-4 mr-3"></i>
            </div>
        </div>
    </div>

    {{-- info --}}
    <div class=" flex justify-end  gap-9  mt-5  mr-4 ">

        <div class="">
            <p class="text-[#3a5a32] text-2xl">Contact us</p>
            <ul class="mb-8">
                <li><a href=""> <i class="fa-solid fa-phone"></i></a> +977 9818084077 </li>
                <li> <i class="fa-regular fa-envelope"></i> jenousdangol11@gmail.com</li>
                <li> <i class="fa-brands fa-facebook"></i> Facebook</li>
                <li> <i class="fa-brands fa-instagram"></i> instagram</li>
            </ul>
        </div>

        <div>
            <p class="text-[#3a5a32] text-2xl">Quick Links</p>
            <ul>
                <li>About us</li>
                <li>Contact us</li>
                <li>Privacy Policy</li>
                <li>Returns and Exchange</li>
                <li>Terms and Conditions</li>
            </ul>
        </div>

        <div>
            <p class="text-[#3a5a32] text-2xl">Top Crystals</p>
            <ul>
                <li>Clear Quartz</li>
                <li>Black Tourmaline</li>
                <li>Kyanite</li>
                <li>Pyrite</li>
                <li>Amethyst</li>
            </ul>
        </div>
    </div>

</footer>
