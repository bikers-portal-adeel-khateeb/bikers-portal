@extends('layouts.app')

@section('content')

<div class="container-fluid h5 " style="background-color: #CECFA0">

{{-- ///////////////////////////////////////////////////////
 --}}  
<div class="row"> {{-- main container --}}

<div class="m-4 bg-light shadow col-md-6"> {{-- shippind and billing address 
 --}}


 <form class="mx-5" method="POST" action="{{ route('placeOrder') }}">
  <h2 class="pt-4 text-muted text-center">Billing and Shipping Address</h2>
  @csrf
  <div class="row pt-4">
    <div class="col-md-6 mb-3">
      <label for="firstName">First Name</label>
      <input type="text" class="form-control" name="billing_firstname"
      id="firstName" placeholder="" value="" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="lastName">Last Name</label>
      <input type="text" class="form-control" name="billing_lastname"
      id="lastName" placeholder="" value="" required>
    </div>
  </div>
  <div class="my-3">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="billing_address"
    id="address" placeholder="1234 Main St" required>
  </div>
  <div class=" row"> 
    <div class="col-md-4">
      <label for="country">Country</label>
      <select class="form-control d-block w-100" name="billing_country" id="country" required>
        <option value="Pakistan">Pakistan</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="state">City</label>
      <input class="form-control" type="text" name="billing_city">
    </div>
    <div class="col-md-4">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" name="billing_zip"
      id="zip" placeholder="" required>
    </div>
  </div>
  <div class="my-3">
    <label for="phone">phone </label>
    <input type="text" class="form-control" name="billing_phone"
    id="phone" placeholder="12345678909 #" required>
    <div class="invalid-feedback">
      Please enter your shipping address.
    </div>
  </div>
  <hr>


  {{-- if shipping address is different///// --}}
  <div class="container " >

    <input type="checkbox" name="address_different" class="btn-lg" data-toggle="collapse" data-target="#demo">  The shippind address is different
    <div id="demo" class="collapse">
      <h3>Fill the shipping address</h3>


      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First name</label>
          <input type="text" class="form-control" name="shipping_firstname"
          id="firstName" placeholder="" value="" >
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Last name</label>
          <input type="text" class="form-control" name="shipping_lastname"
          id="lastName" placeholder="" value="" >
        </div>
      </div>
      <div class="my-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="shipping_address"
        id="address" placeholder="1234 Main St" >
      </div>
      <div class=" row"> 
        <div class="col-md-4">
          <label for="country">Country</label>
          <select class="custom-select d-block w-100" name="shipping_country" id="country" >
            <option value="Pakistan">Pakistan</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="state">City</label>
          <input class="form-control" type="text" name="shipping_city">
        </div>
        <div class="col-md-4">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="shipping_zip"
          id="zip" placeholder="" >
        </div>
      </div>
      <div class="my-3">
        <label for="phone">phone </label>
        <input type="text" class="form-control" name="shipping_phone"
        id="phone" placeholder="12345678909 #" >
        <div class="invalid-feedback">
          Please enter your shipping address.
        </div>
      </div>
      <hr>




    </div>
  </div>

  {{-- if shipping address is different///// --}}




  <h2 class="my-3">Payment via Cradit card
    <span><img src="{{ asset('public/storage/image/card.png') }} " alt=""></span></h2>



    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="cc-name">Name on card</label>
        <input type="text" class="form-control" id="cc-name" placeholder="Full name as displayed on card" required>

        <div class="invalid-feedback">
          Name on card is required
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="cc-number">Credit card number</label>
        <input type="string" class="form-control" id="cc-number" placeholder="" required>
        <div class="invalid-feedback">
          Credit card number is required
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="cc-expiration">Expiration date</label>
        <input type="month" class="form-control" id="cc-expiration" placeholder="" required>
        <div class="invalid-feedback">
          Expiration date required
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="cc-expiration">CVV</label>
        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
        <div class="invalid-feedback">
          Security code required
        </div>
      </div>
    </div>

    <button class="h1 shadow btn btn-primary btn-block btn-lg my-4" type="submit">buy now !</button> 



  </form>
</div> {{-- shippind and billing address --}}

<div class="mt-4 offset-1 col-">{{--  cart detail  --}} 
<div class="card">
  <div class="card-body">
    <?php $total = 0 ?>
  <table  class="table shadow">
    <thead>
      <tr>

        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

      @foreach(session('cart') as $id => $item)

      <?php $total += $item['price'] * $item['quantity'] ?>

      <tr>

        <td>{{-- <div class="col-sm-9"> --}}
          <h5>{{ $item['name'] }}</h5>
        {{-- </div> --}}
      </td>
      <td><small>Rs.</small>{{ $item['price'] }}</td>
      <td>{{$item['quantity']}} </td>
      <td><small>Rs.</small>{{ $item['price'] * $item['quantity'] }}</td>

    </tr>
    @endforeach
  </tbody>
</table>
<a class="card-link" href="{{ route('cart') }} "><button class="btn btn-block btn- btn-dark">Change Cart</button></a>


</div> {{-- cart detail --}}

{{session()->put('total',$total)}}



</div> {{--main row --}}


  </div>
</div>
  





</div> {{-- main container --}}



</div>


@endsection


