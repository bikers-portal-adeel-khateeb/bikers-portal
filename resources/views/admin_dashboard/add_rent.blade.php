@extends('layouts.admin_app')

@section('admin_content')

<body>
  <style>body{background-color: #afbdc4;}</style>
</body>
<div class="container">
  @include('errors')
</div>
<div class="container mt-0 mb-5 shadow" style="background-color: white"> <br />
  <h5 class="text-muted">Add Bikes for Rent</h5> <br />
    <form action="{{route('storeRent')}}"  method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group row">
          <label for="city" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-4">
              <select class="form-control" name="city" id="city">
                  @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach  
              </select>
            </div>
        </div>
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                   <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
                <div class="form-group row">
                  <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-4">
                       <input type="text" class="form-control" id="description" 
                           name="description" required>
                    </div>
                </div>
                    <div class="form-group row">
                      <label for="rent" class="col-sm-2 col-form-label">Rent</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="rent" 
                               name="rent" required>
                        </div>
                    </div>
                        <div class="form-group row">
                          <label for="option" class="col-sm-2 col-form-label">Option</label>
                            <div class="col-sm-4">
                               <input type="text" class="form-control" id="option" 
                                  placeholder="Enter product detail" name="option" required>
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