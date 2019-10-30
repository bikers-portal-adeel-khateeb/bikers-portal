@extends('layouts.admin_app')

@section('admin_content')

<body>
	<style>body{background-color: #afbdc4;}</style>
</body>

<div class="container mt-4 shadow" style="background-color: white"> <br />
  <h4 class="text-muted">Edit Product</h4> <br />
    <form action="{{route('updateProduct', $product->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" 
                    value="{{$product->name}}" name="name" required>
                </div>
            </div>
            <div class="form-group row">
              <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="model" 
                    value="{{$product->model}}" name="model" required>
                </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="description" 
                    value="{{$product->description}}" name="description" required>
                </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="price" 
                    value="{{$product->price}}" name="price" required>
                </div>
            </div>
            <div class="form-group row">
              <label for="option" class="col-sm-2 col-form-label">Option</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="option" 
                    value="{{$product->option}}" name="option" required>
                </div>
            </div>
            <div class="form-group row">
              <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-4">
                  <input type="file" class="form-control-file" id="image" name="image">
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-4">
                  <button type="submit" class="btn btn-primary btn-block">
                  Submit
                 </button>                 
              </div>
            </div> 
            <br />
    </form>
</div>
  
@endsection