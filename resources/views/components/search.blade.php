{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

{{-- @props(['searchedproduct']) --}}
<div class="">
    <!-- Be present above all else. - Naval Ravikant -->
<p class=" bg-green-700 mb-5 ml-4 mt-4 text-3xl"> Shop Our Collection </p>
<p class="mb-5 ml-4">Discover our handcrafted crystal jewelry and wellness products, ethically sourced from the Himalayas</p>
<form action="products.search" method="post">
  @csrf
  <input type="text" name="name" value="" class=" w-3/4 ml-4 rounded-md">
<button type="submit" class="border border-black">submit</button>
</form>
  </div>
