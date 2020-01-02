<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title or 'kodo' }}</title>

       
    </head>
    <body>
    	@include('layouts.nav')
    	@yield('bloc_body')
    </body>
</html>