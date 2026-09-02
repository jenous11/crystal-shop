<x-app-layout>
<div>
  @foreach ($myOrders as $order)

  <p>Status:{{$order->status}}</p>
  <p>Order id:{{$order->id}}</p>
  <p>Total:{{$order->total}}</p>
  <p>Created at:{{$order->created_at}}</p>
  @foreach ($order->orderItems as $item)
  <div class="w-[200px]">
    <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }} "
    class="w-[200px]">
  </div>
  <p>name:{{$item->product->name}}</p>
  <p>quantity:{{$item->quantity}}</p>
  <p>price at time of purchase:{{$item->price}}</p>
                @endforeach
            @endforeach
        </div>
</x-app-layout>
