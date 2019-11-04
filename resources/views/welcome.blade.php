<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ ('css/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            position: flex;
            z-index: 99;

        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 30px;
        }

        .content {
            text-align: center;
        }

        .title {
            top: 30%;
            margin-bottom: 30px;
            position: fixed;
            z-index: 99;
            text-align: center;
            border-style: solid;
            border-color: white;
            border-width: 10px;
            padding: 0px 25px 0px 25px;
        }

        .links>a {
            color: #ffffff;
            padding: 5px 25px 5px 25px;
            margin: 0px 20px 0px 10px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border-style: solid;
            border-color: white;

        }
        #titulo{
            font-size: 200px;
        }

        #particleas-js {
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: -1;
        }
    </style>
</head>

<body class="blue-gradient">
    <div>
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a type="button" class="nav-link btn btn-primary btn-rounded waves-effect btn-sm z-depth-2" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a type="buttom" class="nav-link btn btn-default btn-rounded waves-effect btn-sm z-depth-2" href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    <DIV id="particles-js" S>
        <div class="content flex-center">

            <div id="titulo" class="title z-depth-5">
                ɛduΜατ
            </div>

        </div>
    </DIV>
    <script type="text/javascript" src="{{ ('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ ('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ ('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ ('js/mdb.min.js') }}"></script>
    <script>
        if (screen.width <= 900)
        document.getElementById('titulo').style.fontSize = '100px';
    </script>



    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/particulas.js') }}"></script>
</body>

</html>