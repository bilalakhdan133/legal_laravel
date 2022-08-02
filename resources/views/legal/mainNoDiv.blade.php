<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Legal Analytics</title>
  <!-- link -->
  <link rel="shortcut icon" href="assets/img/brands/logolegal.png">
  <link rel="stylesheet" type="text/css" href="assets/css/icon.css"">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="{{ url('/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ url('/css/style.css') }}">

</head>

<body>

    @include('legal/header')
    @yield('container')
    @include('legal/footerNoDiv')
    


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ url('/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/theme.js') }}"></script>
</body>


</html>