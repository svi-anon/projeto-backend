<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Projeto')</title>
</head>
<body>
    @include('partials.menu')

    @yield('content')
</body>
</html>