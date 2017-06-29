<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
        <link rel="stlesheet" href= "{{ URL::to('src/css/main.css')}}">
    </head>
    <body>
        @include('includes.header')
        <div class='container'>
            @yield('content')
        </div>
        
        <script src=""></script>
    </body>
</html>