@extends('layouts.app')

@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="{{asset('public/images/bikes.jpg')}}" alt="photo" width="1100" height="500">
        <div class="carousel-caption">
            <h7><strong>Bikes</strong></h7>
            <p style="font-size: 14px;">bikers portal has bikes</p>
        </div> 
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="{{asset('public/images/parts.jpg')}}" alt="photo" width="1100" height="500">
        <div class="carousel-caption">
            <h7><strong>Parts</strong></h7>
            <p style="font-size: 14px;">bikers portal has parts</p>
        </div> 
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="{{asset('public/images/accessories.jpg')}}" width="1100" height="500">
        <div class="carousel-caption">
          <h7><strong>Accessories</strong></h7>
          <p style="font-size: 14px;">bikers portal has accessories</p>
        </div> 
    </div>
  </div>
  
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
</div>

{{-- <div class="container-fluid">
     <h1>bikes</h1>
  @foreach ($bikes as $bike)
    <ul>
      <li>{{ $bike->name }}</li>
      <li>{{ $bike->price }}</li>
      <li>{{ $bike->option }}</li>
      <li>{{ $bike->description }}</li>

    </ul>
  @endforeach
</div>

<div class="container-fluid">
     <h1>parts</h1>
  @foreach ($parts as $part)
    <ul>
      <li>{{ $part->name }}</li>
      <li>{{ $part->price }}</li>
      <li>{{ $part->option }}</li>
      <li>{{ $part->description }}</li>

    </ul>
  @endforeach
</div>

<div class="container-fluid">
     <h1>accessories</h1>
  @foreach ($accessories as $accessory)
    <ul>
      <li>{{ $accessory->name }}</li>
      <li>{{ $accessory->price }}</li>
      <li>{{ $accessory->option }}</li>
      <li>{{ $accessory->description }}</li>

    </ul>
  @endforeach
</div>
 --}}

 
   {{-- @foreach ($pageData as $category)
     <h1>{{$category->name}} id is {{$category->id}}</h1>
          <div class="container-fluid mt-3">
  <div class="row">
     @foreach ($category->products as $product)
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{url('public/storage/image')}}/{{$product->image}}" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">{{$product->name}} Rs.{{$product->price}} </h4>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>
    
       
       

     @endforeach
   @endforeach
   </div>
</div> --}}
  

<div class="container-fluid">
  <div class="row">
   <div class="col-md-4">
     <div class="card">
        @foreach ($bikes as $bike)
        <a href="#">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$bike->image}}" 
            alt="Card image" style="width:100%">
          </a>
        <div class="card-body">
{{--           <h4 class="card-title text-muted">Bike</h4>
 --}}          <a href="#" class="card-link">Click here</a>
        </div>
        @endforeach
  </div>
   </div>
   <div class="col-md-4">
     <div class="card">
        @foreach ($parts as $bike)
        <a href="#">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$bike->image}}" 
            alt="Card image" style="width:100%">
          </a>
        <div class="card-body">
{{--           <h4 class="card-title text-muted">Bike</h4>
 --}}          <a href="#" class="card-link">Click here</a>
        </div>
        @endforeach
  </div>
   </div>
   <div class="col-md-4">
     <div class="card">
        @foreach ($accessories as $bike)
        <a href="#">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$bike->image}}" 
            alt="Card image" style="width:100%">
          </a>
        <div class="card-body">
{{--           <h4 class="card-title text-muted">Bike</h4>
 --}}          <a href="#" class="card-link">Click here</a>
        </div>
        @endforeach
  </div>
   </div>
  </div>
</div>



@include('footer') 
 {{-- <h1>{{$category->name}}</h1> --}}
@endsection