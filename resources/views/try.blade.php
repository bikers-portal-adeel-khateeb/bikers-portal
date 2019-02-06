@extends('layouts/app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-info" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-success">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-primary">
		    <img class="card-img-top img fluid mx-auto d-block" src="{{ asset('public/storage/image/ms.jpeg') }}" 
		    	alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-success">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-success" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
			</div>

				<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-warning" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-danger">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-danger">
		    <img class="card-img-top" src="{{ asset('public/storage/image/ms.jpeg') }}" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-secondary" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text text-white">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
			</div>

				<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-dark" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text text-white">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-danger">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-light">
		    <img class="card-img-top" src="{{ asset('public/storage/image/ms.jpeg') }}" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
			</div>

			<div class="col-md-4">
				<h2>Card Image</h2>
		  <p>Image at the top (card-img-top):</p>
		  <div class="card bg-success" style="height: 43.5%">
			<img class="card-img-top" src="{{ asset('public/storage/image/ik.jpg') }}" 
				alt="Card image" style="width:100%; height: 50%">		    
		<div class="card-body">
		      <h4 class="card-title">John Doe</h4>
		      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
		      <a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
			</div>

		</div>


		  
</div>
@endsection