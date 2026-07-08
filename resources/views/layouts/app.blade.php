<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials._head')
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <a href="https://wa.link/laet80" class="float-wa" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    @include('layouts.partials._navbar')

    @yield('content')

    @include('layouts.partials._footer')

    @include('layouts.partials._footer-scripts')
</body>

</html>
