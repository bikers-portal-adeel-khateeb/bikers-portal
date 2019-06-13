@extends('layouts.app')


@section('content')

<div class="container-fluid cards-height-set mt-2">
	<div class="row">
		@foreach ($parts as $part)
	<div class="col-sm-3">
        <a href="{{url('product/detail')}}/{{$part->id}}">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$part->image}}" 
            alt="Card image" style="width:100%">
          </a>
        <span class="text-muted">{{$part->name}} {{$part->model}}</span>

   </div>
        @endforeach
	</div>
</div>
        
@endsection