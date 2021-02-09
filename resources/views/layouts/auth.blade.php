<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
</head>
<body>
<div class="container flex h-screen items-center justify-center mx-auto">
    @yield('content')
</div>
</body>
</html>
