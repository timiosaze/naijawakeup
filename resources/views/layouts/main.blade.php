<!doctype html>
<html>
    <head>
        @include('partials.header')
    </head>
    <body class="body-classes">

       
        @include('partials.nav')   
                @yield('content')
        @include('partials.footer')
        @include('sweetalert::alert')

    </body>
</html>