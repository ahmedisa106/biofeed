<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Bio Feed International @yield('title')</title>

@include('frontmodule::includes.css')



</head>

<body>

<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

    @include('frontmodule::includes.header')

    @yield('content')

    <a href="https://api.whatsapp.com/send?phone=+2001001481916&text= "
       class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"
        ></i>
    </a>

   @include('frontmodule::includes.footer')


</div><!-- end layout-theme -->

<span class="scroll-top bg-color_second"> <i class="fa fa-angle-up"> </i></span>

@include('frontmodule::includes.js')
</body>
</html>
