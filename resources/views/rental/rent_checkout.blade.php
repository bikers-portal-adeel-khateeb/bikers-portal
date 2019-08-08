@extends('layouts.app')
@section('content')


<div class="container-fluid h5 " style="background-color: #CECFA0">
  
{{-- ///////////////////////////////////////////////////////
 --}}  
<div class="row"> {{-- main container --}}
    
<div class="m-4 bg-light shadow col-md-6"> {{-- shippind and billing address 
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

<div class="mt-4 offset-1 col-md-4">{{--  cart detail  --}} 
   <div class="card">
    <div class="card-body">
      <h6><strong style="font-size: 18px;">Bike<span class="float-right">{{ $bike }}</span></strong></h6>
         <h6>Pick up date<span class="float-right">{{ $start_date }}</span></h6>
         <h6>Drop off date<span class="float-right">{{ $end_date }}</span></h6>
         <h6>Duration<span class="float-right">{{ $days }}</span>days</h6>
         <h6>Rent<span class="float-right">{{ $rent }}</span></h6>
         <h6><strong style="font-size: 18px;">Total Rent<span class="float-right">{{ $rent * $days }}</span></strong></h6>
      
    </div>
  </div>
 
 
    

</div> {{-- cart detail --}}




</div> {{--main row --}}

   





</div> {{-- main container --}}



</div>


@endsection

