@extends('layouts.app')

@section('content')

<div class="container">
	@include('errors')
</div>
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-sm-4 mt-5 ml-5">
			<a href="#">
				<img class="img-fluid shadow" 
				src="{{ asset('public/storage/image')}}/{{ $product->image }}" 
				alt="Card image" style="width:100%">
			</a>
		</div>
		<div class="offset-1 col-sm-6 mt-1">
			<h3>{{ $product->name }} {{ $product->model }}</h3>
			<hr /> <br />
			<table class="table table-borderless table-sm">
				<thead>
					<tr>
						<th>Price <hr class="my-0"></th>
						<th>Color <hr class="my-0"></th>
						<th>Description <hr class="my-0"></th> 
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="w-25" style="font-size: 20px;">
							<i class="fab fa-amazon-pay" style="font-size: 20px;"></i>
							{{ $product->price }}
						</td>
						<td class="w-25">{{ $product->option }}</td>
						<td>{{ $product->description }}</td>
					</tr>
				</tbody>
			</table>
			<hr>
			<a href="{{ route('addToCart', $product->id) }}" class="btn btn-success btn-lg">
				<i class="fas fa-cart-plus"></i> &nbsp;&nbsp; Add to Cart
			</a>
			&nbsp;&nbsp;
			<form style="display:inline;" action="{{ route('addToCart', $product->id) }}" 
				method="GET">
				<button type="submit" name="buy_it_now" class="btn btn-primary btn-lg">
					<i class="fas fa-play"></i> &nbsp;&nbsp; Buy it Now
				</button>
			</form>


			<a href="{{ route('/') }}" class="btn btn-dark btn-lg btn-block mt-5">
				<i class="fas fa-arrow-left"></i> &nbsp;&nbsp;&nbsp; Continue Shopping
			</a>                
		</div>
	</div>
</div>
@endsection
