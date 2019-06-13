@extends('layouts.admin_app')


	@section('admin_content')
	<body>
	<style>body{background-color: #afbdc4;}</style>
</body>
		<div class="container-fluid mt-2">
			<div class="row">
				<div class="col-md-12">
					<div class="card shadow">
    <div class="card-header">
    	<span><i class="text-success mt-1 mb-0 h1 fas fa-user-tie "></i></span>
    	<strong class="h1 ml-3 text-primary">Admin Dashboard</strong>
    </div>
    <div class="card-body">
    	<div class="row">
    		<div class="col-md-3">
    			<a href="{{ route('orders') }}" class="btn btn-primary btn-lg" role="button"><i class="fas fa-motorcycle"></i> <br/>Orders<br><strong style="font-size: 25px; color: yellow;">{{$orders}}</strong></a>

    		</div>
    		<div class="col-md-3">
    			<a href="{{ route('inventory') }}" class="btn btn-warning btn-lg text-dark" role="button"><i class="fas fa-box-open"></i> <br/>Products<br><strong style="font-size: 25px;">{{$products}}</strong></a>

    		</div>
			<div class="col-md-3">
    			<a href="{{ route('orders') }}" class="btn btn-info btn-lg text-white" role="button"><i class="fas fa-motorcycle"></i> <br/>Rent Orders<br><strong style="font-size: 25px;">{{$rentOrders}}</strong></a>
    		</div>
    		<div class="col-md-3">
    			<a href="{{ route('users') }}" class="btn btn-success btn-lg" role="button"><i class="fas fa-users"></i> <br/>Users<br><strong style="font-size: 25px;color: purple;">{{$users}}</strong></a>
    		</div>

    	</div>
    	


    </div> 
    <div class="card-footer">
				
</div>
  </div>
				</div>
			</div>
		</div>
	{{-- <div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h3 class="text-muted"><strong>Bikes</strong></h3>	
				<table class="table table-striped table-bordered table-hover table-sm">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th>Option</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				@foreach ($bikes as $bike)
				@php
					static $count1=1
					@endphp
				      <tr>
				        <td>@php echo $count1++ @endphp </td>
				        <td>{{$bike->name}}</td>
				        <td>{{$bike->price}}</td>
				        <td>{{$bike->option}}</td>
				        <td>{{$bike->description}}</td>
				      </tr>
				      
				      
				
				@endforeach
				    </tbody>
			   </table>
				<h3 class="text-muted"><strong>Parts</strong></h3>	
			   <table class="table table-striped table-bordered table-hover table-sm mt-3">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th>Option</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				@foreach ($parts as $part)
				@php
					static $count2=1
					@endphp
				      <tr>
				        <td>@php echo $count2++ @endphp </td>
				        <td>{{$part->name}}</td>
				        <td>{{$part->price}}</td>
				        <td>{{$part->option}}</td>
				        <td>{{$part->description}}</td>
				      </tr>
				      
				      
				
				@endforeach
				    </tbody>
			   </table>
				<h3 class="text-muted"><strong>Accessories</strong></h3>	
			   <table class="table table-striped table-bordered table-hover table-sm mt-3">
				    <thead>
				      <tr>
				        <th>#</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th>Option</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				@foreach ($accessories as $accessory)
				@php
					static $count3=1
					@endphp
				      <tr>
				        <td>@php echo $count3++ @endphp </td>
				        <td>{{$accessory->name}}</td>
				        <td>{{$accessory->price}}</td>
				        <td>{{$accessory->option}}</td>
				        <td>{{$accessory->description}}</td>
				      </tr>
				      
				      
				
				@endforeach
				    </tbody>
			   </table>
			</div>
		</div>
	</div>
 --}}
	@endsection