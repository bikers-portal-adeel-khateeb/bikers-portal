@extends('layouts.app')
@section('content')

<div class="container">
            @include('errors')
	
</div>
<div class="container-fluid mt-3">
	 <div class="row">
 	<div class="col-md-3">
 		<div class="card">
    <div class="card-header">
    	<span><i class="text-success mt-1 mb-0 h1 fas fa-user-edit"></i></span>
    	<strong class="h1 ml-3 text-primary">Profile</strong>
    </div>
    <div class="card-body">
    	
				 <h6>Name: {{$user->name}}</h6><hr>
				 <h6>E-mail: {{$user->email}}</h6><hr>
				 <h6 >Gender: {{$user->gender}}</h6><hr>
				 <h6 >Phone: {{$user->contact}}</h6><hr>
				 <h6 >Address: {{$user->address}}</h6><hr>

    </div> 
    <div class="card-footer">
				<a class="btn btn-primary" href="{{ route('editProfile',$user->id) }}"> Edit Peofile </a> &nbsp;
				<a class="btn btn-success" href="{{ route('editPassword',$user->id) }}"> Edit Password</a>

</div>
  </div>
 		
 	</div>

	@if ($user->role->name == 'customer')
		
	
	<div class="offset-2 col-md-7">





 <ul class="navbar-nav">
<h4 class="bg-info p-3 text-white"><strong>Perchasing Orders</strong></h4>
@foreach ($orders as $order)

		<li><p>You make an order on {{$order->created_at->format('d/m/Y h:m a')}} and your order is <strong class="badge badge-pill 
                      {{$order->status=='pending' ? 'badge-primary' : ''}}
                      {{$order->status=='accepted' ? 'badge-success' : ''}}
                      {{$order->status=='rejected' ? 'badge-danger' : ''}}
                      ">{{$order->status}}</strong> 
        <a target="_blank" href="{{ route('orderDetail',$order->id) }}" class="btn  py-0">View</a>
     
        
	</p>  </li>  
	<hr>    
			@endforeach
     </ul> 


     <ul class="navbar-nav">
<h4 class="bg-info p-3 text-white"><strong>Rental Orders</strong></h4>

@foreach ($rentOrders as $order)

		<li><p>you ordered <span class="text-primary">{{$order->bike}}</span> for <span class="text-primary">{{$order->days}}</span> days on <span class="text-primary">{{$order->created_at->format('d/m/Y  h:m a')}}</span> against <span class="text-primary"> Rs.{{$order->rent*$order->days}}</span> and your booking is <strong class="badge badge-pill 
                      {{$order->status=='pending' ? 'badge-primary' : ''}}
                      {{$order->status=='accepted' ? 'badge-success' : ''}}
                      {{$order->status=='rejected' ? 'badge-danger' : ''}}">{{$order->status}}</strong> 
     
     
        
	</p>  </li>
			<hr>      
			@endforeach
     </ul> 
</div>
@endif
 </div>
</div>				

@endsection