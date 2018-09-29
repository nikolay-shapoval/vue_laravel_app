<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery.formstyler.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top header-nav" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">btn</a></li>
                <li><a href="#">btn</a></li>
                <li><a href="#">btn</a></li>
            </ul>
            <div id="header_right" style="">
                <div id="right_info">
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><img src="img/pic.jpg" alt=""></li>
                                        <li><span>Магомедов Ахмед Гаджиевич</span><br>
                                            <span id="min">Оператор</span>
                                        </li>
                                    </ul>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="app">
    <tabs-panel></tabs-panel>
    <div id="main" class="container-fluid">
        <div class="row">
            <sidebar></sidebar>
            <router-view v-cloak></router-view>
            <footbar></footbar>
        </div>
    </div>
</div>

<!--SCRIPTS-->
<script src="js/matchMedia.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/main.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
