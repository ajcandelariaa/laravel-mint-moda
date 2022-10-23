<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mint Moda</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')
    <h1 class="text-3xl font-bold underline bg-green-500">
        Hello world!
    </h1>
    @include('footer')
</body>
</html>