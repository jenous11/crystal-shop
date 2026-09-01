<div>
  @foreach($myOrders as $order)
  @foreach($order->orderItems as $item)
    <div class="border border-red-600 grid grid-cols-3 gap-4 ">
    <div class="col-start-1 gap-0 border border-orange-500 ml-5">
                            <img src="{{ asset('storage/' . $item->product->image) }}"
                                alt="{{ $item->product->name }} " class="max-w-full h-auto  md:w-[100px]">
                        </div>
                      </div>
  @endforeach
  @endforeach
</div>
