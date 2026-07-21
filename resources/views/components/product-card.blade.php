{{-- props tell that the component is expecting a variable called product  --}}
@props(['product'])

<div class="mt-3   w-[250px]    bg-amber-100  ml-[20px] group  ">
                    <a href="{{route('public.products.show',$product->id)}}">
                       <img src="{{ asset('storage/' . $product->image) }}" alt="product image" class="opacity-90 group-hover:scale-105 ">
                      </a>
                {{-- @endif --}}
                 <a href="{{route('products.show',$product->name)}}">  <p class="mt-4" > Name: {{ $product->name }}</p> </a>
                  <a href="/products/show"> <p class="   "> Description: {{Str::words( $product->description,5) }}</p></a>
                  <a href="/products/show"> <p class="   "> Price:{{ $product->price }}</p></a>


              </div>
