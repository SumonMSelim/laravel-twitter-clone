<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')
    <title>{{ $pageTitle ?? config('app.name') }}</title>
</head>
<body>

<div class="container mx-auto">
    <div class="flex">
        @include('partials._left-menu')

        @yield('main')

        @include('partials._right-menu')
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
