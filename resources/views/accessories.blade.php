@extends('layouts.app')

@section('content')
<div class="container-fluid mt-2">
	<div class="row">
		@foreach ($accessories as $accessory)
	<div class="col-sm-3">
     <div class="card">
        <a href="{{url('product/detail')}}/{{$accessory->id}}">
          <img class="card-img-top img-fluid" src="{{asset('public/storage/image')}}/{{$accessory->image}}" 
            alt="Card image" style="width:100%">
          </a>
  </div>
   </div>
        @endforeach
	</div>
</div>
        
@endsection