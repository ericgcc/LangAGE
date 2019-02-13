<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Évaluation LangAge</title>


    <link rel="apple-touch-icon" href="{!! asset("app-assets/images/ico/apple-icon-120.png") !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset("app-assets/images/ico/favicon.ico") !!}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- region::VENDOR CSS::-->
    {!! Html::style("app-assets/css/vendors.css") !!}
    @yield('vendor-styles')
    <!-- endregion::VENDOR CSS::-->

        <!--region::STACK CSS::-->
    {!! Html::style("app-assets/css/app.css") !!}
    {!! Html::style("assets/css/style.css") !!}
    <!--endregion::STACK CSS::-->

        <!--region::Page Level CSS::-->
    {!! Html::style("app-assets/css/core/menu/menu-types/horizontal-menu.css") !!}
    <!--endregion::Page Level CSS::-->

    <!--region::Custom CSS::-->
    @yield('view-styles')
    <!--endregion::Custom CSS::-->


</head>
<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template-nav/index.html"><img class="brand-logo" alt="LangAGE" src="{!! asset("app-assets/images/logo/stack-logo-light.png") !!}">
                        <h2 class="brand-text">LangAGE</h2></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="navbar-toggleable-sm" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Horizontal navigation-->
{{--<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-static navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">--}}
    {{--<!-- Horizontal menu content-->--}}
    {{--<div class="navbar-container main-menu-content" data-menu="menu-container">--}}
        {{--<!-- include ../../../includes/mixins-->--}}
        {{--<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">--}}
            {{--<li class="nav-item">--}}
                {{--<a id="tour" class="nav-link" href="javascript:;">--}}
                    {{--<i class="icon-control-play"></i>--}}
                    {{--<span>Démarrer le tour</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@yield('admin-navs')--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--<!-- /horizontal menu content-->--}}
{{--</div>--}}
<!-- Horizontal navigation-->

<div class="app-content content">
    <div class="content-wrapper">

        @yield('content-header')

        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">
            Copyright  &copy; {{date("Y")}}, All rights reserved.
        </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">
            <span style='font-weight: bolder; font-family:"Arial Black", Courier, monospace; color: #bdbdbd;'>{</span>
            <span style="font-weight: bolder; color: #f50057">Coded by</span>:
            <span style="color: #1de9b6;"><a href="https://linkedin.com/in/ericgcc/" target="_blank" class="m-link">@ericgcc</a></span>
            <span style='font-weight: bolder; font-family:"Arial Black", Courier, monospace; color: #bdbdbd;'>}</span>
        </span>
    </p>
</footer>

<!--region::VENDOR JS::-->
{!! Html::script("app-assets/js/core/libraries/jquery.min.js") !!}
{!! Html::script("app-assets/vendors/js/ui/popper.min.js") !!}
{!! Html::script("app-assets/js/core/libraries/bootstrap.min.js") !!}
{!! Html::script("app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js") !!}
{!! Html::script("app-assets/vendors/js/ui/unison.min.js") !!}
{!! Html::script("app-assets/vendors/js/ui/blockUI.min.js") !!}
{!! Html::script("app-assets/vendors/js/ui/jquery-sliding-menu.js") !!}
<!--endregion::VENDOR JS::-->

<!--region::PAGE VENDOR JS::-->
{!! Html::script("app-assets/vendors/js/ui/jquery.sticky.js") !!}
{!! Html::script("app-assets/vendors/js/charts/jquery.sparkline.min.js") !!}
@yield('vendor-scripts')
<!--endregion::PAGE VENDOR JS::-->

<!--region::STACK JS::-->
{!! Html::script("app-assets/js/core/app-menu.js") !!}
{!! Html::script("app-assets/js/core/app.js") !!}
<!--endregion::STACK JS::-->

<!--region::PAGE LEVEL JS::-->
{!! Html::script("app-assets/js/scripts/ui/breadcrumbs-with-stats.js") !!}
@yield('view-scripts')
<!--endregion::PAGE LEVEL JS::-->
</body>
</html>