@extends('layouts.admin_app')

@section('admin_content')

<body>
  <style>body{background-color: #afbdc4;}</style>
</body>

<div class="container mt-4 shadow" style="background-color: white"> <br />
  <h5 class="text-muted">Add Bikes for Rent</h5> <br />
    <form action="{{ route('updateRent', $rentbike->id) }}"  method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                   <input type="text" class="form-control" id="name" name="name" value="{{$rentbike->name}}" required>
                </div>
            </div>
                <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-4">
                       <input type="text" class="form-control" id="description" 
                           name="description"  value="{{$rentbike->description}}" required>
                    </div>
                </div>
                    <div class="form-group row">
                      <label for="rent" class="col-sm-2 col-form-label">Rent</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="rent" 
                               name="rent"  value="{{$rentbike->rent}}" required>
                        </div>
                    </div>
                        <div class="form-group row">
                          <label for="option" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-4">
                               <input type="text" class="form-control" id="option" 
                                  placeholder="Enter product detail" name="option"  value="{{$rentbike->option}}" required>
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