<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.metadata')
    </head>
    
    <body>

        @yield('content')

    </body>
</html>
