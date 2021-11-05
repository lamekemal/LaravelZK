<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.include')
    </head>
    <body>

        <div>
            @yield('preloader')
        </div>
        <div>
            @include('layouts.header')
        </div>
        <main>
        @yield('content')
        </main>

        <div>
            <!--include('layouts.footer')-->
        </div>

    </body>
</html>
