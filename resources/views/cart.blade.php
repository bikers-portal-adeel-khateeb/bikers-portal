@extends('layouts.app')


@section('content')
  <div class="container">
            @include('errors')
  </div>
  <div class="container-fluid">
    <h4 class="mt-3"><strong>Shopping Cart</strong></h4>
    
    @php
      static $subtotal=0;
    @endphp
     <div class="row">
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-9">
             @php
                $total = 0
             @endphp
             @if (session('cart'))
             <table class="table">
                <thead>
          <tr>
            <th>Product</th>
            <th></th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Remove</th>
          </tr>
        </thead>
              
             
        
        
        <tbody> 
            @foreach(session('cart') as $id => $item)
      <tr>
        <td> 
          <img class=" img-fluid" style="height: 60px;" 
            src="{{asset('public/storage/image')}}/{{$item['image']}}" 
              width="" height="" alt="Card image" > <br>
            <span class="text-muted">{{ $item['name'] }}</span>
              @php
                  $total = $total + $item['price'] * $item['quantity']
              @endphp
        </td>
        <td></td>

        <td>
              {{$item['price']}}
        </td>

        <td style="width: 150px;">
          <form method='POST' action="{{ route('updateCart', $id)}}">
            @method('PATCH')
            @csrf
              {{-- <input class="rounded" type="number" name="quantity" min="1" max="5" value="{{ $item['quantity']}}"> --}}
              <select class="rounded" name="quantity" style="width: 60px; height: 30px;">
                <option value="{{$item['quantity']}}">{{$item['quantity']}}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <button class="btn btn-primary btn-sm ml-1"><i class="fas fa-sync-alt"></i></button>
          </form>
        </td>

        <td>
           {{$item['price'] * $item['quantity']}}
        </td>

        <td>
          <form action="{{route('removeCart', $id)}}" method="POST" >
          @method('DELETE')  
          @csrf  
          <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>

          </form>
        </td>
      </tr>
     @endforeach
        </tbody>
              </table>
{{-- {{session()->put('total',$total)}} --}}
              
             {{--  @php
    $total = $cart->item->price * $cart->qty;
    $subtotal = $subtotal + $total;
  @endphp --}}

  
  @else
  <div class="card bg-warning mt-4 shadow">
    <h2 class="px-4 py-4">Your Cart is Empty! to continue shopping with bikers portal please
      <a href="{{ route('/') }}">Click here</a></h2>
  </div>
  @endif
          </div>
        </div>
      </div>
    
  

<div class="col-sm-3">
   <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
        <p class="card-text"></p>
          <a href="{{ route('checkout') }} " class="card-link btn btn-dark btn-block 
          @if (!session('cart'))
            disabled
          @endif">Go to Checkout</a>
            <h6 class="mt-3">Subtotal 
              <span class="float-right">@php echo $total;@endphp</span></h6>
                <h6>Shipping <span class="float-right">0.00</span></h6>
                  <h6>Discounts <span class="float-right">0.00</span></h6>
                    <hr>
                      <h6><strong style="font-size: 18px;">Total 
              <span class="float-right">@php echo $total; @endphp.00</span></strong></h6>


{{-- <button class="btn btn-warning ">Place Order</button> --}}
    </div>
  </div>
</div>





 

  </div>
  
</div>

</div>

@endsection