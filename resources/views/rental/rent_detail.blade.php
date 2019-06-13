@extends('layouts.app')

@section('content')
<div class="container">
            @include('errors')
  
</div>        
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-sm-4 mt-5 ml-5">
          <div class="card cards-height-set">
              <a href="#">
                  <img class="card-img-top img-fluid shadow" 
                    src="{{asset('public/storage/image')}}/{{$rentbike->image}}" 
                      alt="Card image" style="width:100%">
                </a>
          </div>
        </div>
      <div class="offset-1 col-sm-6 mt-1">
        <h3>{{$rentbike->name}}</h3>
          <hr /> <br />
            <table class="table table-borderless table-sm">
                <thead>
                  <tr>
                    <th>Rent <hr class="my-0"></th>
                    <th>Color <hr class="my-0"></th>
                    <th>Description <hr class="my-0"></th> 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="w-25" style="font-size: 20px;">
                    <i class="fab fa-amazon-pay" style="font-size: 20px;"></i> {{$rentbike->rent}}/day
                  </td>
                    <td class="w-25">{{$rentbike->option}}</td>
                    <td>{{$rentbike->description}}</td>
                  </tr>
                </tbody>
            </table>
              <hr>
              <form method="post" action="{{ route('askRent',$rentbike->id) }}">
                @csrf
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="start_date"><strong>Start date</strong></label>
                <input type="date" class="form-control" name="start_date"
                   id="start_date"  required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="end_date"><strong>  End date</strong></label>
                <input type="date" class="form-control" name="end_date"
                   id="end_date" placeholder="" value="" required>
              </div>
        </div>
              <button class="btn btn-lg mt-4 btn-block btn-primary">Go for rent &nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button>
              </form>
            
      </div>
    </div>
  </div>
@endsection