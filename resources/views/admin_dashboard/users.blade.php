@extends('layouts.admin_app')

@section('admin_content')
<body>
  <style>body{background-color: #afbdc4;}</style>
  </body>
	
<div class="container-fluid mt-2">
  <div class="row">
    <div class="col-md-12 pt-3" style="background-color: white;">
          <h2 class="text-muted"><strong>Users</strong></h2>

      <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Role</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created_at</th>
          <th>Status</th>
          <th>Action</th>


        
        </tr>
      </thead>
      <tbody>
@foreach ($users as $user)

@php
static $count=1
@endphp
        <tr>
          <td>@php
            echo $count++
          @endphp</td>
          <td>{{$user->role->name}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at}}</td>
          <td> <span class="badge badge-pill 
                      {{$user->status=='active' ? 'badge-primary' : ''}}
                      {{$user->status=='blocked' ? 'badge-danger' : ''}}">{{$user->status}}</span></td>
          <td><a href="{{ route('blockUser', $user->id) }}"><button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-user-alt-slash"></i></button></a>
            <a href="{{ route('unblockUser', $user->id) }}""><button type="submit" class="btn btn-success btn-sm"><i class="fas fa-user-check"></i></button></a>
          </td>
          
         
          
        </tr>
@endforeach
      </tbody>

<!-- //table for parts
     -->  
      </table>
  </div>
  <br>
   <br>
    </div>
  </div>
    

@endsection