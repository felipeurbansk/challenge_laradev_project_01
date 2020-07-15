<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME', 'LaraDev')}} - O melhor contéudo de desenvolvimento.</title>
    <meta name="author" content="freehtml5.co" />

    {!! $head ?? '' !!}

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{mix('front/assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{mix('front/assets/css/style.css')}}">

    <script src="{{mix('front/assets/js/modernizr.js')}}"></script>
    <script src="{{mix('front/assets/js/respond.js')}}"></script>

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    @include('front.includes.header')

    @yield('content')

    @include('front.includes.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="{{mix('front/assets/js/vendor.js')}}"></script>
<script src="{{mix('front/assets/js/main.js')}}"></script>

</body>
</html>
