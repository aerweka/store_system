<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('auth-page')</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('admin.partials.styles')
</head>

<body>

    @yield('auth-content')

    @include('admin.partials.scripts')
</body>

</html>
