<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ ('css/style.css') }}" rel="stylesheet">
    <style>
        #footer {
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        .titulo {
            font-size: 25px;
            border-style: solid;
            border-color: white;
            padding: 0px 5px 0px 5px;
        }

        .imagen {
            max-width: 100%;
            height: auto;
        }

        .glass {
            background-color: rgba(255, 255, 255, .15);
            backdrop-filter: blur(5px);
            color: white;
        }

        .title {
            color: whitesmoke;
            font-size: 5vh;
        }

        .tab {
            display: inline-block;
            left: 150px;
            margin-left: 40px;
        }
        .separacion{
            margin: 30px 30px 30px 30px;
        }
        .conjunto{
            width: 40vh;
     height: 40vh;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 40%;
     border: 3px solid #555;
        }


        body {
            background-image: url("img/fondo1.png");
            background-repeat: no-repeat, repeat;
            background-color: lightblue;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-white shadow-sm navbar-dark blue-gradient">
            <div class="container">
                <a class="navbar-brand titulo z-depth-5 animated rotateInDownLeft delay-2s" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
@auth
    <div class="btn-group">
        <button type="button" class="btn btn-indigo">Temario</button>
        <button type="button" class="btn btn-indigo dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu text-center" >
          <a class="dropdown-item dropdown-item nav-link btn btn-indigo btn-rounded waves-effect z-depth-5 white-text"  href="{{ route('Conjuntos') }}">Conjuntos</a>
          <a class="dropdown-item dropdown-item nav-link btn btn-indigo btn-rounded waves-effect z-depth-5 white-text" href="#">Sub Conjuntos</a>
          <a class="dropdown-item dropdown-item nav-link btn btn-indigo btn-rounded waves-effect z-depth-5 white-text" href="#">Unión e intersección</a>
          <a class="dropdown-item dropdown-item nav-link btn btn-indigo btn-rounded waves-effect z-depth-5 white-text" href="#">Propiedades</a>
        </div>
      </div>

@endauth


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-rounded waves-effect btn-sm z-depth-2"
                                href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-default btn-rounded waves-effect btn-sm z-depth-2"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                            <!-- Split button -->
                        <li class="nav-item dropdown">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">{{ Auth::user()->name }}</button>
                                <button type="button" class="btn btn-primary dropdown-toggle px-3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item nav-link btn btn-unique btn-rounded waves-effect z-depth-5"
                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ ('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ ('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ ('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ ('js/mdb.min.js') }}"></script>
    @yield('script')
</body>

</html>