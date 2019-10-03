<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Selling &mdash; Website by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
            <div class="site-wrap" id="app">
                @include('partials.mobile')
                @include('partials.navbar')
                @include('partials.header')
                @yield('content')

                @include('partials.footer')
            </div>


        <script src="{{asset('js/app.js')}}"></script>
    </body>

</html>
