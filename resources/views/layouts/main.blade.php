<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} || @yield('title')</title>

    @yield('cdns')

    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')

    <main>
        <div class="container">
            @yield('main-content')
        </div>
    </main>

    @yield('script')

</body>

</html>
