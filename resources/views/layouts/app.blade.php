<html>
    <head>
        <title> Halaman @yield('title')</title>
    </head>
</html>

<body>
    @section('sidebar')
        Ini adalah master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
</body>