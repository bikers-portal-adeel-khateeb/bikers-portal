@extends('layouts.app')

@section('content')
	<div class="col-sm-6 offset-3 mt-5 pt-5">
		<h1 style="color: green"><i style="color:green" class="fas fa-check-circle"></i>
			Thank You for your Order!
		</h1>
		<h4 class="ml-5">You can check your status on your <a href="{{ route('profile') }}">profile</a>.</h4>
	</div>
@endsection