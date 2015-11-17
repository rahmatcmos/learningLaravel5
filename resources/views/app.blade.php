<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Page</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="navbar-brand">pi</div>
    </div>
    <div class="container">
        @yield('content')

        <br>
        @yield('footer')
    </div>
</body>
</html>