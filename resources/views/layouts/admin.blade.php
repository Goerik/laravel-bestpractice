<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap-theme.min.css">

    <link href="{{asset('main.css')}}" rel='stylesheet' type='text/css'>

</head>
<body>

<div class="container">
    <h1>@yield('title')</h1>
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>

<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>