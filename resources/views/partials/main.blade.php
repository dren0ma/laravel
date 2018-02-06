<!DOCTYPE html>
<html class="has-navbar-fixed-top">

<head lang="en">
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!--   imports bulma   -->
    <link rel="stylesheet" type="text/css" href="{{asset('bulma/bulma.css')}}">

    <!--   imports custom stylesheets   -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!--   imports fontaweseome   -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

    <!--   google fonts    -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
@extends('partials/navbar')

@yield('main_content')

@extends('partials/footer')
</body>


    <!--   custom js    -->
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</html>