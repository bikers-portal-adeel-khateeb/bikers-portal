@extends('layouts.app')

  @section('content')
  <div class="container-fluid">
    <div class="row">
      <img style="height: 300px; width: 100%" src="{{ asset('public/images/rent.jpg') }}" 
      alt="photo"style="width: 100%; border: 1px solid #000;"> 
        <div class="offset-3 col-md-6 mt-4">
          @foreach ($bikes as $bike)
              <h1 style="text-transform: uppercase;"> {{$bike->name}}</h1>
            <a href="{{ route('rentDetail', $bike->id) }}">
              <img class="img-thumbnail" src="{{ asset('public/storage/image') }}/{{ $bike->image }}">
              <h1 >Rent.{{$bike->rent}}/day only</h1>
            </a>
              <p class="text-justify">{{$bike->description}}</p>
          @endforeach
    </div>
    </div>
  </div>
             
  @endsection