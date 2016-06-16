<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ url('public/assets/css/footer-distributed-with-address-and-phones.css')}}">
        
    <link href="{{ url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('public/assets/css/datepicker3.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--Icons-->
    <script src="{{ url('public/assets/js/lumino.glyphs.js')}}"></script>
    
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        footer{
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: red;
        }
        
        .navbar-header .navbar-brand span {
            color: #30a5ff;
        }
        .navbar-brand li a{
            color: blue;
            text-decoration: none;
        }
        .navbar-brand ul{
            width: 700px;
            float: left;
        }
        .navbar-brand li{
            float: left;
            padding: 5px 10px;
            
            
            margin-right: 10px;
            list-style: none;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <div class="navbar-brand">
                    <ul>
                        <li><a href="{{ url('/nhan-vien')}}">DS.Nhân viên</a></li>
                        <li><a href="{{ url('/map') }}">Sơ đồ Cty</a></li>
                        @if(Auth::check())
                        <li><a href="{{ url('admin/user/list') }}">Quản lí</a></li>
                        @endif

                    </ul>

                </div>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        @if(!Auth::check())
                        <li><a href="{{ url('auth/login') }}">Login</a></li>
                        @else
                        <li><a href="{{ url('/') }}">{{ Auth::user()->username }}</a></li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
@include('include.footer')
</html>
