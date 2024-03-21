<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body>

    <div class="container">

        @include('includes.header')

        <h1 class="text-center">Crea Comic</h1>

        @include('includes.alert')

        @include('includes.comics.form')

    </div>
</body>

</html>
