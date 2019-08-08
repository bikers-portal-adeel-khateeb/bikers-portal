<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top pt-0 pb-0 shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <button type="button" class="btn btn-outline-warning rounded-circle py-1 px-4"
                        style="font-weight: bold;">ᛒ℘
                    </button>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto navbar-left" id="myDIV">
                        <li class="nav-item nav-left ml-2">
                            <div class="dropdown">
                                <a data-toggle="dropdown" class="nav-link dropdown-toggle 
                                    @if (request()->url() == route('bikes'))
                                        {{'active'}}
                                    @endif" href="#">{{ __('Bikes') }} 
                                </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('kawasaki') }}">
                                            Kawasaki
                                        </a>
                                        <a class="dropdown-item" href="{{ route('yamaha') }}">
                                            Yamaha
                                        </a>
                                        <a class="dropdown-item" href=" {{ route('honda') }}">
                                            Honda
                                        </a>
                                        <a class="dropdown-item" href="{{ route ('suzuki') }}">
                                            Suzuki
                                        </a>
                                    </div>
                            </div>
                                
                        </li>
                        <li class="nav-item nav-left ml-2">
                            <div class="dropdown">
                                <a data-toggle="dropdown" class="nav-link dropdown-toggle
                                    @if (request()->url() == route('parts'))
                                        {{'active'}}
                                    @endif" href="#">{{ __('Parts') }}
                                </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('engine_covers') }}">       Engine covers
                                        </a>
                                        <a class="dropdown-item" href="{{ route('air_cleaner') }}">
                                            Air cleaner
                                        </a>
                                        <a class="dropdown-item" href="{{ route('turn_lights') }}">
                                            Turn lights
                                        </a>
                                        <a class="dropdown-item" href="{{ route('headlight') }}">
                                            Headlight
                                        </a>
                                        <a class="dropdown-item" href="{{ route('tyre') }}">
                                            Tyre
                                        </a>
                                        <a class="dropdown-item" href="{{ route('rim') }}">
                                            Rim
                                        </a> 
                                    </div>
                            </div>
                               
                        </li>
                        <li class="nav-item nav-left ml-2">
                            <div class="dropdown">
                                <a data-toggle="dropdown" class="nav-link dropdown-toggle 
                                    @if (request()->url() == route('accessories'))
                                        {{'active'}}
                                    @endif" href="#">{{ __('Accessories') }}
                                </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('watches') }}">
                                            Watches
                                        </a>
                                        <a class="dropdown-item" href="{{ route('glasses') }}">
                                            Glasses
                                        </a>
                                        <a class="dropdown-item" href="{{ route('helmet') }}">
                                            Helmet
                                        </a>
                                        <a class="dropdown-item" href="{{ route('gloves') }}">
                                            Gloves
                                        </a>
                                        <a class="dropdown-item" href="{{ route('jacket') }}">
                                            Jacket
                                        </a>
                                        <a class="dropdown-item" href="{{ route('shoes') }}">
                                            Shoes
                                        </a>
                                    </div> 
                            </div>
                                
                        </li>
                        <li class="nav-item nav-left ml-2">
                            <a class="nav-link @if (request()->url() == route('rent'))
                                {{'active'}}@endif" href="{{ route('rent') }}">{{ __('Rent') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item nav-right ml-2">
                                <a class="nav-link  @if (request()->url() == route('login'))
                                    {{'active'}}@endif" href="{{ route('login') }}">{{ __('Login') }}&nbsp; 
                                    <i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item nav-right ml-2">
                                    <a class="nav-link  @if (request()->url() == route('register'))
                                    {{'active'}}@endif" href="{{ route('register') }}">
                                    <i class="fas fa-user"></i>&nbsp; {{ __('Register') }}</a>
                                </li>
                            @endif
                                
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role->name == 'admin')
                                        <a class="dropdown-item" href="{{ route('admin_dashboard') }}">
                                            {{ __('Admin Dashboard') }}
                                        </a>
                                    @endif 
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </div>
                            </li>

                        @endguest

                                <li class="nav-item nav-right ml-2">
                                    <a class="nav-link @if (request()->url() == route('cart'))
                                    {{'active'}} @endif" href="{{ route('cart') }}">
                                        
                                        @if (auth()->user())
                                        @if (auth()->user()->role->name == 'customer')
                                        {{-- ////////////////////////////////// --}}
                                        <i class="fas fa-shopping-cart"></i>
                                        @if (session('cart'))
                                            <span class="badge badge-warning" style="border-radius: 2px; padding-bottom: 1px;">
                                                {{ count(session('cart')) }}
                                                @endif
                                            </span>
                                                {{ __('') }}
                                        {{-- //////////////////////////// --}}
                                        @endif

                                        @else

                                            {{-- ////////////////////////////////// --}}
                                        <i class="fas fa-shopping-cart"></i>
                                        @if (session('cart'))
                                            <span class="badge badge-warning" style="border-radius: 2px; padding-bottom: 1px;">
                                                {{ count(session('cart')) }}
                                        @endif
                                            </span>
                                                {{ __('') }}
                                        {{-- //////////////////////////// --}}
                                        @endif
                                    </a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>


        
