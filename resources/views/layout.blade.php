<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("header")
<body class="antialiased">
    @include("navbar")
    @yield("content")
    @include("footer")
</body>
</html>