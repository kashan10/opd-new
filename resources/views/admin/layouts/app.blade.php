<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    

   
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- ======= Icons used for dropdown (you can use your own) ======== -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<style type="text/css">

.sidebar li .submenu{ 
	list-style: none; 
	margin: 0; 
	padding: 0; 
	padding-left: 1rem; 
	padding-right: 1rem;
}
.sidebar .nav-link {
    font-weight: 500;
    color: var(--bs-dark);
}
.sidebar .nav-link:hover {
    color: var(--bs-primary);
}

</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav>
        
        <section class="section-content py-3" >
            <div class="row" >
        <aside class="col-lg-3" style="height: 100%" > 
            <!-- ============= COMPONENT ============== -->
            <nav class="sidebar card py-4 mb-3 mt-4">
            <ul class="nav flex-column" id="nav_accordion" style="height: 100%">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Link name </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"> Submenu links <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="#">Submenu item 1 </a></li>
                        <li><a class="nav-link" href="#">Submenu item 2 </a></li>
                        <li><a class="nav-link" href="#">Submenu item 3 </a> </li>
                    </ul>
            
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#"> More menus <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="#">Submenu item 4 </a></li>
                        <li><a class="nav-link" href="#">Submenu item 5 </a></li>
                        <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                        <li><a class="nav-link" href="#">Submenu item 6 </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Another page </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Demo link </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Menu item </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Something </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Other link </a>
                </li>
            </ul>
            </nav>
            <!-- ============= COMPONENT END// ============== -->	
                    </aside>
        <main class="col-lg-9 py-4" style="height: 100%">
            
            @yield('content')
          
        </main>
    </div>
    </section>

    </div>
    
 
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
