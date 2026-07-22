{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<footer class="flex mt-5 w-full border-t border-gray-300">
    {{-- container  for image and newsletter --}}
    <div class="container ">
        {{-- image --}}
        <div class="mb-5 w-[150px] hover:scale-105">
            {{-- logo --}}
            <img src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}" alt="crystal shop log"
                class="mb-5 ml-5">
        </div>
        {{-- subscribe to newsletter --}}
        <div class="bg-green-800 flex gap-3 items-center w-[525px] ml-4 rounded-md mb-9 justify-evenly">
            <p class="text-white ml-2">Subscribe to our newsletter</p>
            <input type="email" name="email" value=" Enter your email" class="mt-1 w-6/12 rounded ">
        </div>
    </div>

    {{-- info --}}
    <div class="container flex gap-5 mt-5">

        <div>
            Contact us
            <ul>
                <li><a href=""></a>+977 9843805450, +977 9861468188 </li>
                <li>+977 9861468188</li>
                <li>info@himalayancrystalhouse.com</li>
                <li>Facebook</li>
                <li>instagram</li>
            </ul>
        </div>

        <div>
            Quick Links
            <ul>
                <li>About us</li>
                <li>Contact us</li>
                <li>Privacy Policy</li>
                <li>Returns and Exchange</li>
                <li>Terms and Conditions</li>
            </ul>
        </div>

        <div>
            Top Crystals
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
