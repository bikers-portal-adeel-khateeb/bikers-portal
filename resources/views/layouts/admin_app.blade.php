@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
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
                            <li class="nav-item"><a class="dropdown-item" href="{{ url('/admin_dashboard/create')}}">Add product</a></li>
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
