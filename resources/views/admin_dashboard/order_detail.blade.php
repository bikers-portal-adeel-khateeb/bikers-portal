@extends('layouts.app')
@section('content')
<div class="container-fluid">
 <h1>admin orders</h1>


 <table class="table table-striped table-light table-sm">
      <thead>
        <tr>
    
          <th>Image</th>
          <th>Product name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total price</th>
        
        </tr>
      </thead>

      @foreach ($order->orderDetails as $detail)
        {{-- expr --}}
      
      <tbody>
          <td><img src="{{ asset('public/storage/image') }}/{{ $detail->product->image}}" width="70" alt=""></td>
          <td>{{ $detail->product->name }}</td>
          <td>{{ $detail->quantity }}</td>
          <td>{{ $detail->price }}</td>
          <td>{{ $detail->quantity*$detail->price }}</td>


@endforeach
  
      </tbody>

      </table>

      <h2>Billing Address</h2>
      <table class="table table-striped table-light table-sm">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip</th>
            <th>Cell #</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $order->address->billing_firstname }} {{ $order->address->billing_lastname }}</td>
            <td>{{ $order->address->billing_address }}</td>
            <td>{{ $order->address->billing_city }}</td>
            <td>{{ $order->address->billing_zip }}</td>
            <td>{{ $order->address->billing_phone }}</td>

          </tr>
        </tbody>
      </table>

       
       @if ($order->address->shipping_firstname)
       <h2>Shipping Address</h2>
         <table class="table table-striped table-light table-sm">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip</th>
            <th>Cell #</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $order->address->shipping_firstname }} {{ $order->address->shipping_lastName }}</td>
            <td>{{ $order->address->shipping_address }}</td>
            <td>{{ $order->address->shipping_city }}</td>
            <td>{{ $order->address->shipping_zip }}</td>
            <td>{{ $order->address->shipping_phone }}</td>

          </tr>
        </tbody>
      </table>
      @else
      <div class="bg-info p-3">
        <p class="h3 ml-3 text-white">shipping and billnd address same</p>
      </div>
       @endif
      
	</div>
@endsection