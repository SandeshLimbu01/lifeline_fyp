<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Tooplate">

    <title>LifeLine</title>

    <!-- CSS FILES -->
    @include('frontend.style')

    <!--

Tooplate 2130 Waso Strategy

https://www.tooplate.com/view/2130-waso-strategy

Free Bootstrap 5 HTML Template

-->

</head>

<body id="section_1">

    @include('frontend.header')

    @include('frontend.nav')

    <main>

        {{-- @include('frontend.main') --}}
        @yield('content')

    </main>


    @include('frontend.footer')
    <!-- JAVASCRIPT FILES -->
    @include('frontend.script')

</body>

</html>