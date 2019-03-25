<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @component('componente_navbar', ['current' => $current])
        @endComponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>