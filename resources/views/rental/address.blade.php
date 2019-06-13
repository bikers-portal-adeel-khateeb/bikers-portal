@extends('layouts.admin_app')
@section('admin_content')
<div class="container-fluid">
 <h1>Rent Order detail </h1>


     <h2>billing address</h2>
              <table class="table table-striped table-light table-sm">
                 <thead>
        <tr>
           <th>name</th>
           <th>address</th>          
          <th>city</th>
          <th>area zip code</th>
          <th>pnone #</th>
        </tr>
      </thead>
        <tbody>
      <tr>

           <th>{{$address->billing_firstName}} {{$address->billing_lastName}}</th>
           <th>{{$address->billing_address}}</th>          
          <th>{{$address->billing_city}}</th>
          <th>{{$address->billing_zip}}</th>
          <th>{{$address->billing_phone}}</th>
    
        </tr>
    </tbody>
    </table>
     

  </div>
@endsection