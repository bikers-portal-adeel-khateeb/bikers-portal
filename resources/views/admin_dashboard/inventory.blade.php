@extends('layouts.admin_app')

@section('admin_content')
  <body>
  <style>body{background-color: #afbdc4;}</style>
  </body>
    <div class="container-fluid mt-2"> 
      <div class="row">
        <div class="col-md-12 pt-3" style="background-color: white;">
          <h2 class="text-muted"><strong>Bikes Inventory</strong></h2>
            <table class="table table-striped table-hover table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Color</th>
                  <th>Description</th>
                  <th>Created_at</th>
                  <th>Action</th>
                </tr>
              </thead>
                <tbody>
                  @foreach ($bikes as $bike)
                    @php
                    static $count=1
                    @endphp
                <tr>
                  <td>@php echo $count++ @endphp</td>
                  <td>{{$bike->name}}</td>
                  <td>{{$bike->price}}</td>
                  <td>{{$bike->option}}</td>
                  <td>
                    <a href="#" data-toggle="popover" data-trigger="hover" 
                      title="Description" data-content="{{$bike->description}}" data-placement="left">
                        <i style="font-size: 20px;" class="fas fa-tv"></i>
                    </a>
                  </td>
                  <td>{{$bike->created_at}}</td>
                  <td>
                    <form style="display: inline;" action="{{ route('editProduct', $bike->id) }}" method="POST">
                      @csrf
                      <button class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button>
                    </form>
                    
                    <form style="display: inline;" action="{{ route('deleteProduct', $bike->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                      
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody> 
          </table>
        </div>
      </div>
    </div>

      <!-- //table for parts--> 
    <div class="container-fluid mt-5"> 
      <div class="row">
        <div class="col-md-12 pt-3" style="background-color: white;">
           <h2 class="text-muted"><strong>Parts Inventory</strong></h2>
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Price</th>
              <th>Color</th>
              <th>Description</th>
              <th>Created_at</th>
              <th>Action</th>
            </tr>
          </thead>
      <tbody>
        @foreach ($parts as $part)
          @php
          static $count1=1
          @endphp
              <tr>
                <td>@php echo $count1++ @endphp</td>
                <td>{{$part->name}}</td>
                <td>{{$part->price}}</td>
                <td>{{$part->option}}</td>
                <td><a href="#" data-toggle="popover" data-trigger="hover" 
                      title="Description" data-content="{{$part->description}}" data-placement="left">
                        <i style="font-size: 20px;" class="fas fa-tv"></i>
                    </a></td>
                    <td>{{$part->created_at}}</td>
                <td>
                  <form style="display: inline;" action="{{ route('editProduct', $part->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-primary btn-sm">
                     <i class="far fa-edit"></i>
                    </button>
                  </form>
                  
                     <form style="display: inline;" action="{{ route('deleteProduct', $part->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                      
                    </form></td>
              
              </tr>
@endforeach
      </tbody>

<!-- //table for parts
     -->  
      </table>
  </div>
 
        </div>
      </div>
     
   


 <div class="container-fluid mt-5">
      <div class="row">
      <div class="col-md-12 pt-3" style="background-color: white;">
        <h2 class="text-muted"><strong>Accessories Inventory</strong></h2>
        <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Color</th>
          <th>Description</th>
          <th>Created_at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
@foreach ($accessories as $accessory)
         @php
          static $count2=1
          @endphp
        <tr>
          <td>@php echo $count2++ @endphp</td>
          <td>{{$accessory->name}}</td>
          <td>{{$accessory->price}}</td>
          <td>{{$accessory->option}}</td>
          <td><a href="#" data-toggle="popover" data-trigger="hover" 
                      title="Description" data-content="{{$accessory->description}}" data-placement="left">
                        <i style="font-size: 20px;" class="fas fa-tv"></i>
                    </a></td>
                    <td>{{$part->created_at}}</td>

          <td>
            <form style="display: inline;" action="{{ route('editProduct', $accessory->id) }}" method="POST">
              @csrf
              <button class="btn btn-primary btn-sm">
                     <i class="far fa-edit"></i>
                    </button>
            </form>
            
                     <form style="display: inline;" action="{{ route('deleteProduct', $accessory->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                      
                    </form></td>
          
        </tr>
@endforeach
      </tbody>
    </table>
  </div>
      </div>
    </div>
    
 


   <div class="container-fluid mt-5">
      <div class="row">
      <div class="col-md-12 pt-3" style="background-color: white;">
        <h2 class="text-muted"><strong>Rent Inventory</strong></h2>
        <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Rent</th>
          <th>Color</th>
          <th>City</th>
          <th>Description</th>
          <th>Created_at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
@foreach ($rentBike as $rbike)
         @php
          static $count2=1
          @endphp
        <tr>
          <td>@php echo $count2++ @endphp</td>
          <td>{{$rbike->name}}</td>
          <td>{{$rbike->rent}}</td>
          <td>{{$rbike->city->name}}</td>
          <td>{{$rbike->option}}</td>
          <td><a href="#" data-toggle="popover" data-trigger="hover" 
                      title="Description" data-content="{{$rbike->description}}" data-placement="left">
                        <i style="font-size: 20px;" class="fas fa-tv"></i>
                    </a></td>
                    <td>{{$rbike->created_at}}</td>

          <td>
            <form style="display: inline;" action="{{ route('editRent', $rbike->id) }}" method="POST">
              @csrf
              <button class="btn btn-primary btn-sm">
                     <i class="far fa-edit"></i>
                    </button>
            </form>
            
                     <form style="display: inline;" action="{{ route('deleteRent', $rbike->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                      
                    </form></td>
          
        </tr>
@endforeach
      </tbody>
    </table>
  </div>
      </div>
    </div>
    
  <br>
   <br>
@endsection