<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Évaluation LangAge</title>
    <link rel="apple-touch-icon" href="{!! asset("assets/images/ico/apple-icon-120.png") !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset("assets/images/ico/favicon.ico") !!}">
    {!! Html::style("https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i") !!}

    <!-- BEGIN VENDOR CSS-->
    {!! Html::style("assets/css/app/vendors.css") !!}
    <!-- END VENDOR CSS-->

        <!-- BEGIN STACK CSS-->
    {!! Html::style("assets/css/app/app.css") !!}
    <!-- END STACK CSS-->

    <!-- BEGIN Page Level CSS-->
    {!! Html::style("app-assets") !!}
    {!! Html::style("assets/css/app/core/colors/palette-gradient.css") !!}
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
      data-menu="horizontal-menu" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header" style="position: sticky">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.blade.php">
                        <img class="brand-logo" alt="stack admin logo"
                             src="{!! asset("assets/images/logo/stack-logo-light.png") !!}">
                        <h2 class="brand-text">Évaluation LangAge</h2>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body text-center">
            <!-- Basic form layouts section start -->
            <a class="btn btn-primary btn-min-width mr-1 mb-1" href="{{route('export')}}" role="button">Télécharger résultats</a>
            <!-- // Basic form layouts section end -->
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018, All rights reserved. </span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
{!! Html::script("assets/js/app/vendors.min.js") !!}
<!-- BEGIN VENDOR JS-->

<!-- BEGIN PAGE VENDOR JS-->
{!! Html::script("assets/js/jquery/jquery.sticky.js") !!}
<!-- END PAGE VENDOR JS-->

<!-- BEGIN STACK JS-->
{!! Html::script("assets/js/app/core/app-menu.js") !!}
{!! Html::script("assets/js/app/core/app.js") !!}
{!! Html::script("assets/js/app/customizer.js") !!}
<!-- END STACK JS-->

<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>