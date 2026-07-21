
<div class="">
<p class=" text-green-700 mb-5 ml-4 mt-4 text-3xl"> Shop Our Collection </p>
<p class="mb-5 ml-4">Discover our handcrafted crystal jewelry and wellness products, ethically sourced from the Himalayas</p>
<form action="products/search" method="post">
  @csrf
  <input type="text" name="name" placeholder="Search" class=" w-3/4 ml-4 rounded-md text-gray-900">
{{-- <button type="submit" class="border border-black rounded-md ">submit</button> --}}
</form>
  </div>
