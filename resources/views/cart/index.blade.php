<x-app-layout>
<div class="">
 @foreach($cartItems as $product)
 <div class="">

   <p> user id: {{$user_id=$product->user->id}}</p>
   <p> product id: {{$produc_id=$product->product->id}}</p>
   <p>image:</p>
   <img src="{{ asset('storage/' . $product->product->image) }}" alt="{{ $product->product->name }} " class="max-w-full h-auto  md:w-[550px]" >

  </div>
   @endforeach
</div>
</x-app-layout>
