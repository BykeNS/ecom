<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url('images/fabric.jpg');  background-size: cover;">
    <div id="app">
        

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                         <div class="text-center">
                         <div class="btn" style="margin-top: 55px;" >
                            <button type="button" class="btn btn-primary">
                                <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('Login') }}</a></button>&nbsp;&nbsp;
                           
                            <button type="button" class="btn btn-default">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                            
                            </div>
                           </div> 
                        @else
                            
                        @endguest
                    </ul>
                

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
