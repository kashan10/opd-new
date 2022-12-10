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
    

    @livewireScripts
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- ======= Icons used for dropdown (you can use your own) ======== -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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
                            <li>
                                <livewire:megaphone></livewire:megaphone>
                            </li>
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
            <div class="container">
            <div class="row" >
        <aside class="col w-25" style="height: 100%" > 
            <!-- ============= COMPONENT ============== -->
            <nav class="sidebar card py-4 mb-3 mt-4 w-50">
            <ul class="nav flex-column" id="nav_accordion" style="height: 100%">
                
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"> Doctor <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="{{ route('doctor.index') }}">list </a></li>
                        <li><a class="nav-link" href="{{ route('doctor.create') }}">Create </a></li>
                    </ul>
            
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#"> Nurse <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="{{ route('nurse.index') }}">list </a></li>
                        <li><a class="nav-link" href="{{ route('nurse.create') }}">Create </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item3" href="#"> Roles <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item3" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="{{ route('roles.index') }}">list </a></li>
                        <li><a class="nav-link" href="{{ route('roles.create') }}">Create </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item4" href="#"> Users <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item4" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="{{ route('users.index') }}">list </a></li>
                        <li><a class="nav-link" href="{{ route('users.create') }}">Create </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item5" href="#"> Clinic <i class="bi small bi-caret-down-fill"></i> </a>
                    <ul id="menu_item5" class="submenu collapse" data-bs-parent="#nav_accordion">
                        <li><a class="nav-link" href="{{ route('clinic.index') }}">list </a></li>
                        <li><a class="nav-link" href="{{ route('clinic.create') }}">Create </a></li>
                    </ul>
                </li>
                
            </ul>
            </nav>
            <!-- ============= COMPONENT END// ============== -->	
                    </aside>
        <main class="col-lg-9 py-4" style="height: 100%">
            
            @yield('content')
          
        </main>
    </div>
</div>
    </section>

    </div>
    
    <link rel="stylesheet" href="{{ asset('vendor/megaphone/css/megaphone.css') }}">
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
