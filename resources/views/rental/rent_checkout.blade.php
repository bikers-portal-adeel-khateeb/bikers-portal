@extends('layouts.app')
@section('content')


<div class="container-fluid h5 " style="background-color: #CECFA0">
  
{{-- ///////////////////////////////////////////////////////
 --}}  
<div class="row"> {{-- main container --}}
    
<div class="m-5 bg-light shadow col-md-6"> {{-- shippind and billing address 
 --}}


<form class="mx-5" method="POST" action="{{ route('rentOrder') }}">
      <h2 class="pt-5">Billing address</h2>
      @csrf
 <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="billing_firstname"
                   id="firstName" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
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
                <select class="custom-select d-block w-100" name="billing_country" id="country" required>
                  <option value="Pakistan">Pakistan</option>
                </select>
             </div>
              <div class="col-md-4">
                <label for="city">City</label>
                 <input type="text" class="form-control" name="billing_city"
                  id="city" placeholder="" required>
                
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
            
            </div>
            <hr>


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
          
            <button class="h1 shadow btn btn-primary btn-block btn-lg my-4" type="submit">place Order !</button> 



</form>
</div> {{-- shippind and billing address --}}

<div class="m-5 col-">{{--  cart detail  --}} 
 <strong>bike: {{$bike}}</strong><hr>
 <strong>pick up date: {{$start_date}}</strong><hr>
<strong>drop off date: {{$end_date}}</strong><hr>
<strong>duration: {{$days}} days</strong><hr>
<strong>Rent: {{$rent}}</strong><hr>
<strong>Total Rent: {{$rent*$days}}</strong> 
    

</div> {{-- cart detail --}}




</div> {{--main row --}}

   





</div> {{-- main container --}}



</div>


@endsection

