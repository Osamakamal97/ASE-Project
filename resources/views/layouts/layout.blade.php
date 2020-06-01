<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>@yield('title')</title>
    @include('layouts.header-meta')
</head>
<body class="body-bg" onload="startTime()">
@include('layouts.header')
<main>
    @yield('content')
</main>
@include('layouts.footer')
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
@include('layouts.footer-meta')
</body>
</html>
