@extends('layouts.admin_app')

@section('admin_content')
  <body>
  <style>body{background-color: #afbdc4;}</style>
  </body>
    <div class="container-fluid mt-2"> 
      <div class="row">
        <div class="col-md-12 pt-3" style="background-color: white;">
          <h2 class="text-muted"><strong>Orders</strong></h2>
            <table class="table table-striped table-light table-sm">
          <thead>
            <tr>
              <th>Order_id</th>
              <th>Place by</th>
              <th>Status</th>
              <th>Order date</th>
              <th>Details</th>
              <th>Action</th>
            </tr>
          </thead>
            <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td><span class="badge badge-pill 
                      {{$order->status=='pending' ? 'badge-primary' : ''}}
                      {{$order->status=='accepted' ? 'badge-success' : ''}}
                      {{$order->status=='rejected' ? 'badge-danger' : ''}}
                      ">{{ $order->status }}</span></td>
                    <td>{{ $order->created_at->format('d/m/y') }}</td>
                    <td>
                      <a target="_blank" href="{{ route('orderDetail', $order->id) }}">
                        View
                      </a>
                    </td>   
                    <td >
                      <a href="{{ route('statusAccept', $order->id) }}" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>  
                      <a href="{{ route('statusCancel', $order->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                    </td> 
                  </tr>
                @endforeach
            </tbody>
        </table>
        
        </div>
      </div>
    </div>

      <!-- //table for rent orders--> 
    <div class="container-fluid mt-5"> 
      <div class="row">
        <div class="col-md-12 pt-3" style="background-color: white;">
           <h2 class="text-muted"><strong>Rent Orders</strong></h2>
        <table class="table table-striped table-light table-sm">
      <thead>
        <tr>
          <th>order_id</th>          
          <th>placed-by</th>
          <th>Bike</th>
          <th>duration</th>
           <th>Rent</th>
            <th>Days</th>
             <th>Total_rent</th>
          <th>Status</th>
          <th>order date</th>
          <th>Detail</th>
          <th class="float-right">Action</th>
        
        </tr>
      </thead>
      <tbody>

@foreach ($rentOrders as $order)

        <td>{{$order->id}}</td>
          <td>{{$order->user->email}}</td>
           <td>{{$order->bike}}</td>
           <td>{{$order->start_date}} TO {{$order->end_date}} </td>

            <td>{{$order->rent}}</td>
             <td>{{$order->days}}</td>
              <td>{{$order->rent*$order->days}}</td>
           <td><span class="badge badge-pill 
                      {{$order->status=='pending' ? 'badge-primary' : ''}}
                      {{$order->status=='accepted' ? 'badge-success' : ''}}
                      {{$order->status=='rejected' ? 'badge-danger' : ''}}
                      ">{{ $order->status }}</span></td>

         
       {{--  <td>{{$order->quantity}}</td> --}}
          {{--  <td>{{$order->quantity*$data->price}}</td> --}}
       
       <td >
           {{$order->created_at->format('d/m/Y')}}
       </td> 
      <td> <a target="_blank" class="btn py-0" href="{{ route('rentAddress',$order->address_id) }}">view</a> </td>
         <td class="row float-right">
         
           <!--  delete button in the from -->
         <a href="{{ route('rentStatusAccept',$order->id) }}" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a> &nbsp;
         <a href="{{ route('rentStatusCancel',$order->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
          </td>
        
        </tr>
@endforeach
      </tbody>

  
      </table>
  </div>
 
        </div>
      </div>
    
  <br>
   <br>
@endsection