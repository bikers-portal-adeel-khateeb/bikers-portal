{{-- @extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 mt-0" style="position: fixed;background-color: #f2f2f2;height: 650px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_dashboard') }}">
                      <i style="color: red;" class="fas fa-tachometer-alt"></i>
                        &nbsp;<strong>Dashboard</strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fas fa-fighter-jet"></i>
                        &nbsp;Orders
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fas fa-shopping-cart"></i>
                        &nbsp;Products
                          <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="{{ route('create')}}">Add product</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="">Product list</a></li>
                        </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fas fa-users"></i>
                        &nbsp;Users
                    </a>
                </li>
            </ul>
        </div>
        <main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    
          @yield('admin_content')
       
        </main>
    </div>
</div>

	
@endsection
 --}}



 @extends('layouts.app')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="height: 650px; position:fixed; background-color: #f2f2f2">
            <ul class="navbar-nav">
                <li class="nav-item mt-2">
                    <a style="font-size: 17px;" class="nav-link" href="{{ route('admin_dashboard')}}">
                      <i style="color: red;" class="fas fa-tachometer-alt"></i> &nbsp; <strong>Dashboard</strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a style="font-size: 16px;" class="nav-link" href="{{route('orders')}}">
                      <i class="fas fa-truck"></i> &nbsp; <strong>Orders</strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a style="font-size: 16px;" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fas fa-shopping-cart"></i> &nbsp; <strong>Products</strong>
                          <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" 
                                href="{{ route('create')}}"><strong>Add product</strong></a></li>
                            <li class="nav-item"><a class="dropdown-item" 
                                href="{{ route('addRent')}}"><strong>Add Rent bike</strong></a></li>
                            
                        </ul>
                </li>

                <li class="nav-item">
                    <a style="font-size: 16px;" class="nav-link" href="{{ route('inventory')}}">
                      <i class=" fas fa-boxes"></i> &nbsp; <strong>Inventory</strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a style="font-size: 16px;" class="nav-link" href="{{route('users')}}">
                      <i class="fas fa-users"></i> &nbsp; <strong>Users</strong>
                    </a>
                </li>
            </ul>
        </div>
        <main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @include('errors')
          @yield('admin_content')
       
        </main>
    </div>
</div>

    
@endsection
