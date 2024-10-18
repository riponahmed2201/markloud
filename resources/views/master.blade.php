<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarkLoud - Marketing Consultancy Agency</title>

    <!-- Stylesheet Starts-->
    @include('frontend.includes.stylesheet')
    <!-- Stylesheet Starts-->

</head>

<body class="enpix-bg-1">

    <!-- Preloader Starts-->
    @include('frontend.includes.preloader')
    <!-- Preloader Ends -->

    <!-- =========================== Menu Area =========================================== -->

    <!-- Header Starts -->
    @include('frontend.includes.header')
    <!-- Header Ends -->

    <main>
        @yield('content')
    </main>

    <!-- =========================== Footer Section =========================================== -->
    @include('frontend.includes.footer')

    <!-- scripts -->
    @include('frontend.includes.script')

</body>

</html>
