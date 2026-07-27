{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<footer class=" flex flex-col md:flex-row  mt-5 w-full border-t border-gray-300 justify-between">
    {{-- container  for image and newsletter --}}
    <div class=" flex items-center flex-col md:grid px-5">
        {{-- image --}}
        <div class=" flex items-center w-[90px] flex-col justify-items-center  ml-11 md:flex-row  mb-5 md:w-[150px] hover:scale-105  ">
            {{-- logo --}}
            <img src="{{ asset('storage/images/himalayan_crystal_house_logo.png') }}" alt="crystal shop log"
                class="mb-5  ">
        </div>
        {{-- subscribe to newsletter --}}
        <div class="bg-green-800 flex flex-col md:flex-row  items-center w-[425px]  rounded-md mb-9  ">
            <p class="text-white ml-2">Subscribe to our newsletter</p>
          <div class="flex  md:flex justify-end">

            <input type="email" name="email" placeholder="email" class="m-1 w-2/3 rounded  ">
          </div>

        </div>
    </div>

    {{-- info --}}
    <div class=" flex justify-end  gap-5 mt-5  mr-4">

        <div >
            <p class="text-green-500">Contact us</p>
            <ul>
                <li><a href=""></a>+977 9843805450, +977 9861468188 </li>
                <li>+977 9861468188</li>
                <li>info@himalayancrystalhouse.com</li>
                <li>Facebook</li>
                <li>instagram</li>
            </ul>
        </div>

        <div>
            <p class="text-green-600">Quick Links</p>
            <ul>
                <li>About us</li>
                <li>Contact us</li>
                <li>Privacy Policy</li>
                <li>Returns and Exchange</li>
                <li>Terms and Conditions</li>
            </ul>
        </div>

        <div>
            <p class="text-green-500">Top Crystals</p>
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
