<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style5.css') }}" rel="stylesheet">

</head>
<body>

<div id="app">
    @guest
        <div class="header">
            <div class="navigation">
                <div class="navigation-right">
                    <a class="navigation" href="{{route('login')}}"> Login </a>
                    <a class="navigation" href="{{route('register')}}"> Register </a>


                </div>

                <div class="navigation-left">
                    <h1 class="name"> Automatiseur Test </h1>
                </div>
            </div>
        </div>
    @else
        <div class="header">
            <div class="navigation">
                <div class="navigation-right">
                    <div style="display: inline-flex">
                        <span style="color: white; margin-top: 32px">{{ \Auth::user()->pseudo }}</span>
                        <a href="{{ route('catalog') }}">Catalogue</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </div>

                <div class="navigation-left">
                    <h1 class="name"> Automatiseur </h1>
                </div>
            </div>
        </div>
    @endguest

    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer style="margin-top: 100px">
    <title>Footer</title>
    <div class="footer">
        <div class="footer-text">
            <ul style="text-align: center">
                <a href="#" target="_blank"><img src="{{URL::asset('/image/Image_facebook32.png')}}"></a>
                <a href="#" target="_blank"><img src="{{URL::asset('/image/Image_twitter32.png')}}"></a>
                <p>©Copyright projet automatisateur</p>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
