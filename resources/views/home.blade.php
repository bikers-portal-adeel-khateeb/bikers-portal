@extends('layouts.app')

@section('content')

  <div class="row" style="background-color: #000000;">
    <div id="demo" class="carousel slide mx-auto d-block col-sm-6" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="{{asset('public/images/bikes.jpg')}}" 
        alt="photo" width="1100" height="500">
          <div class="carousel-caption">
            <h7><strong>Bikes</strong></h7>
            <p style="font-size: 14px;">bikers portal has bikes</p>
          </div> 
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="{{asset('public/images/parts.jpg')}}" 
        alt="photo" width="1100" height="500">
          <div class="carousel-caption">
            <h7><strong>Parts</strong></h7>
            <p style="font-size: 14px;">bikers portal has parts</p>
          </div> 
    </div>

    <div class="carousel-item">
      <img class="img-fluid" src="{{asset('public/images/accessories.jpg')}}"
        alt="photo" width="1100" height="500">
          <div class="carousel-caption">
            <h7><strong>Accessories</strong></h7>
            <p style="font-size: 14px;">bikers portal has accessories</p>
          </div> 
    </div>
  </div>
  
        <!-- Left and right controls -->
       {{--  <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon" style="margin-right: 100px;"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon" style="margin-left: 100px;"></span>
        </a> --}}
    </div>
  </div>
  

  

<div class="container-fluid mt-4 mb-4">
  <body>
    <style>body{background-color: #afbdc4;}</style>
  </body>
    <div class="row">
      <div class="col-sm-4">
        @foreach ($bikes as $bike)
        <a href="{{url('product/detail')}}/{{$bike->id}}">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$bike->image}}" 
            alt="Card image" style="width:100%">
          </a>        
        @endforeach
      </div>
   
      <div class="col-sm-4">
        @foreach ($parts as $part)
          <a href="{{url('product/detail')}}/{{$part->id}}">
            <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$part->image}}" 
              alt="Card image" style="width:100%">
          </a>
        @endforeach
      </div>

      <div class="col-sm-4">
        @foreach ($accessories as $accessory)
          <a href="{{url('product/detail')}}/{{$accessory->id}}">
            <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$accessory->image}}" 
            alt="Card image" style="width:100%">
          </a>
        @endforeach
      </div>
    </div>
</div>

  @include('footer') 
@endsection














