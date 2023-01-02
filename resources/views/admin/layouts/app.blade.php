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
    

  
    
    <!-- ======= Icons used for dropdown (you can use your own) ======== -->


   
    


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
                            <!-- Notifications -->
                      <div class="container">
                        <div class="row justify-content-center text-center">
                          <div class="col-md">
                            <div class="dropdown custom-dropdown" >
                              <a href="#" data-toggle="dropdown" class="dropdown-link" aria-haspopup="true" aria-expanded="false">
                                <span class="wrap-icon icon-notifications"></span>
                                <span class="number"></span>
                                
                              </a>
                  
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="width: 240px">
                                <div class="title-wrap d-flex align-items-center">
                                  <h3 class="title mb-0">Notifications</h3>
                                  <a href="#" class="small ms-4">Mark all as read</a>
                                </div>
                  
                                <ul class="custom-notifications">

                                  
                                </ul>
                                <p class="text-center m-0 p-0"><a href="#" class="small">View All</a></p>
                                <!-- <a href="#" class="dropdown-item">All Rources</a>
                                <a href="#" class="dropdown-item">
                                  <strong>Dropbox</strong>
                                  <span>Lorem ipsum dolor sit amet harum.</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                  <strong>Google Drive</strong>
                                  <span>Lorem ipsum dolor sit amet harum.</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                  <strong>Eventbrite</strong>
                                  <span>Lorem ipsum dolor sit amet harum.</span>
                                </a> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
             <!-- ============= COMPONENT ============== -->
             <nav class="sidebar card py-4 mb-3 mt-4 w-50">
                <ul class="nav flex-column" id="nav_accordion" style="height: 100%">
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#"> Clinic <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('clinic.index') }}">Clinic Dates</a></li>
                            <li><a class="nav-link" href="{{ route('clinic.create') }}">Add Clinic</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#"> Appoinment <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item2" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('appointment.index') }}">Doctor Staff</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item3" href="#"> Doctor <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item3" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('doctor.index') }}">Doctor Staff</a></li>
                            <li><a class="nav-link" href="{{ route('doctor.create') }}">Add Doctor</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item4" href="#"> Nurse <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item4" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('nurse.index') }}">Nurse Staff</a></li>
                            <li><a class="nav-link" href="{{ route('nurse.create') }}">Add Nurse</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item5" href="#"> Patient <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item5" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('patient.index') }}">Patient Details</a></li>
                            <li><a class="nav-link" href="{{ route('patient.create') }}">Add Patient</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item6" href="#"> Roles <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item6" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Role List</a></li>
                            <li><a class="nav-link" href="{{ route('roles.create') }}">Add Role</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item7" href="#"> Users <i class="bi small bi-caret-down-fill"></i> </a>
                        <ul id="menu_item7" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="{{ route('users.index') }}"> User Details</a></li>
                            <li><a class="nav-link" href="{{ route('users.create') }}">Add User</a></li>
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
   
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>
    
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    @yield('tog-scripts')
    @yield('search-scripts')
    @yield('scripts')
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
    <script>
      function load_unseen_notification(view = ''){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });   
         $.ajax({
            
          url:"/no",
          method:"POST",
          data:{view:view},
          dataType:"json",
          success:function(data)
          {
            if(data.count > 0){
            $(".custom-notifications").empty();
            $.each(data.noti, function( k, v ) {
        
            var li = document.createElement("li");
            li.classList.add("unread");
            var a = document.createElement("a");
            a.classList.add("d-flex");
            a.setAttribute("href", "#");
            var div = document.createElement("div");
            div.classList.add("img");
            div.classList.add("mr-3");
            var img = document.createElement("img");
            img.setAttribute("src", "{{asset('images/person_1.jpg')}}");
            img.classList.add("img-fluid");
            div.appendChild(img);
            a.appendChild(div);
            li.appendChild(a);
            var div1 = document.createElement("div");
            div1.classList.add("text");
            div1.innerHTML = "<strong>Alex Stafford</strong> "+v.data.body;
            a.appendChild(div1);
            $(".custom-notifications").append(li);
            });
            
            }
            // else{
            //     $(".custom-notifications").empty();
            //     var li = document.createElement("li");
            //         li.classList.add("unread");
            //         li.innerHTML = "No Notification Found";
            //         $(".custom-notifications").append(li);
            // }
           if(data.count > 0)
           {

            $('.number').html(data.count);

           }
           else{

            $('.number').html('0');

           }
          }
         });
        }
        
        load_unseen_notification();

        $(document).on('click', '.dropdown-link', function(){

         $('.number').html('0');
         load_unseen_notification('yes');
              
        });

        setInterval(load_unseen_notification, 5000);

    </script>
   
   
    
   
    
   
    
</body>
</html>
