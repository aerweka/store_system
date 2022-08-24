<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('admin.partials.styles')
</head>

<body>

    <div class="o-page">
        @include('admin.partials.sidebar')

        <main class="o-page__content">
            @include('admin.partials.navbar')

            <div class="container">
                <div class="row">
                    @yield('page-content')
                </div>

                @include('admin.partials.footer')
            </div>
        </main>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
