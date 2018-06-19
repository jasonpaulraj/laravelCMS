<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel CMS</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('lib/img/content/favicon.ico')}}"/>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <link href="{{asset('adminLTE/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('adminLTE/css/_all-skins.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
        <link href="{{asset('css/backend.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
        @yield('stylesheets')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('layouts.backend.header')
            @include('layouts.backend.sidebar')
            @yield('content')

        </div>
        @include('layouts.backend.footer')
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{asset('adminLTE/js/adminlte.min.js')}}" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>