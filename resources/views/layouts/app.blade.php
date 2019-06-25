<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PPCWeb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>

@include('nav')
    <div id="app">


        <div class="container">

            @if(session()->has('message'))
            <br>
            <br>
            <div class="alert alert-success" role="alert">
                <strong>Mensagem:</strong> {{session()->get('message')}}
            </div>
            @endif

            @if(session('success'))
                    <br>
                    <br>
                    <div class="alert alert-success" role="alert">
                        <strong>Pronto!</strong> {{ session('success') }}
                    </div>
            @endif

            @if(session('warning'))
                    <br>
                    <br>
                    <div class="alert alert-warning" role="alert">
                        <strong>Então...</strong> {{ session('warning') }}
                    </div>
            @endif

            @if(session('danger'))
                    <br>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <strong>Alerta</strong> {{ session('danger') }}
                    </div>
            @endif

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        </div>

    </div>


</body>


</html>
