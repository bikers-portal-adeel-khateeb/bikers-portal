@extends('layouts.app')

@section('content')

<div class="container-fluid mt-2">
	<div class="row">
		@foreach ($bikes as $bike)
    	   <div class="col-md-3 mb-2">
                <a href="{{ url('product/detail') }}/{{ $bike->id }}">
                  <img class="card-img-top img-fluid" 
                    src="{{ asset('public/storage/image') }}/{{ $bike->image}}" 
                    alt="Card image" style="width:100%">
                </a>
                <span class="text-muted">{{ $bike->name }} {{ $bike->model }}</span>
            </div>
        @endforeach
	</div>
</div>
        
@endsection