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
    <title>LangAgeEvaluation</title>
    <link rel="apple-touch-icon" href="{!! asset("assets/images/ico/apple-icon-120.png") !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset("assets/images/ico/favicon.ico") !!}">
    {!! Html::style("https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i") !!}

    <!-- BEGIN VENDOR CSS-->
    {!! Html::style("assets/css/app/vendors.css") !!}
    {!! Html::style("assets/css/nouislider/nouislider.min.css") !!}
    {!! Html::style("assets/css/UbaPlayer/ubaplayer.css") !!}
    {!! Html::style("assets/css/webui-popover/jquery.webui-popover.min.css") !!}
    <!-- END VENDOR CSS-->

    <!-- BEGIN STACK CSS-->
    {!! Html::style("assets/css/app/app.css") !!}
    <!-- END STACK CSS-->

    <!-- BEGIN Page Level CSS-->
    {!! Html::style("assets/css/app/core/menu/horizontal-menu.css") !!}
    {!! Html::style("assets/css/app/core/colors/palette-gradient.css") !!}
    {!! Html::style("assets/css/nouislider/noui-slider.css") !!}
    {!! Html::style("assets/css/nouislider/palette-noui.css") !!}
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    {!! Html::style("assets/css/views/index.css") !!}
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
                        <h2 class="brand-text">LangAge Evaluation</h2>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="row questions">
                                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3 col offset-2">
                                            <div class="card border-blue-grey">
                                                <div class="card-header">
                                                    <h2 class="text-bold-600 text-center">Question 1</h2>
                                                    <div class="heading-elements">
                                                        <ul class="list-inline mb-0">
                                                            <li>
                                                                <a>
                                                                    <i class="fa fa-info-circle" id="info-q1"></i>
                                                                    <div class="webui-popover-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue sollicitudin hendrerit. Quisque accumsan risus non nulla consequat, non porta arcu condimentum. Suspendisse nec odio et risus suscipit vestibulum. Quisque vehicula consectetur eros, quis tempus ipsum fermentum quis. Cras venenatis convallis vestibulum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                            <div class="card border-blue-grey">
                                                <div class="card-header">
                                                    <h2 class="text-bold-600 text-center">Question 2</h2>
                                                    <div class="heading-elements">
                                                        <ul class="list-inline mb-0">
                                                            <li>
                                                                <a>
                                                                    <i class="fa fa-info-circle" id="info-q2"></i>
                                                                    <div class="webui-popover-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue sollicitudin hendrerit. Quisque accumsan risus non nulla consequat, non porta arcu condimentum. Suspendisse nec odio et risus suscipit vestibulum. Quisque vehicula consectetur eros, quis tempus ipsum fermentum quis. Cras venenatis convallis vestibulum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                            <div class="card border-blue-grey">
                                                <div class="card-content">
                                                    <div class="card-header">
                                                        <h2 class="text-bold-600 text-center">Question 3</h2>
                                                        <div class="heading-elements">
                                                            <ul class="list-inline mb-0">
                                                                <li>
                                                                    <a>
                                                                        <i class="fa fa-info-circle" id="info-q3"></i>
                                                                        <div class="webui-popover-content">
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim.</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum sem in tortor dignissim porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue sollicitudin hendrerit. Quisque accumsan risus non nulla consequat, non porta arcu condimentum. Suspendisse nec odio et risus suscipit vestibulum. Quisque vehicula consectetur eros, quis tempus ipsum fermentum quis. Cras venenatis convallis vestibulum</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                    </div>
                                    {!! Form::open(['class' => 'form form-horizontal form-custom-bordered']) !!}
                                    {{--<form class="form form-horizontal form-custom-bordered">--}}
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end"> <!--align-items-center-->
                                                <label>1.&nbsp;&nbsp;</label>
                                                <div id="ubaplayer"></div>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/1_a053_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>2.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/2_e025_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>3.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/3_a048_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>4.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/4_q013_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>5.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/5_d011_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>6.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/6_c018_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>7.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/7_e047_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>8.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/8_a027_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>9.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/9_c053_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>10.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/10_c017_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>11.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/11_a025_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>12.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/12_d048_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>13.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/13_c027_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>14.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/14_c037_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>
                                        <div class="row last">
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1 offset-1 d-flex justify-content-end">
                                                <label>15.&nbsp;&nbsp;</label>
                                                <ul class="ubaplayer-controls">
                                                    <li>
                                                        <a class="ubaplayer-button" href="{!! asset("assets/tracks/15_a013_début.mp3") !!}"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-3">
                                                <fieldset class="form-group slider">
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-1 col-lg-1 col-md-1 mb-1"></div>
                                        </div>

                                        <div class="form-actions right">
                                            <div class="row">
                                                <div class="col-xl-11 col-lg-11 col-md-11 mb-11 button-set">
                                                    <button type="button" class="btn btn-warning mr-1">
                                                        <i class="fa fa-save"></i> Save
                                                    </button>
                                                    <button type="submit" class="btn btn-primary" id="submit">
                                                        <i class="fa fa-check-square-o"></i> Submit
                                                    </button>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 mb-1 button-set"></div>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
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
{!! Html::script("assets/js/wNumb/wNumb.js") !!}
{!! Html::script("assets/js/nouislider/nouislider.min.js") !!}
{!! Html::script("assets/js/UbaPlayer/jquery.ubaplayer.min.js") !!}
{!! Html::script("assets/js/webui-popover/jquery.webui-popover.min.js") !!}
<!-- END PAGE VENDOR JS-->

<!-- BEGIN STACK JS-->
{!! Html::script("assets/js/app/core/app-menu.js") !!}
{!! Html::script("assets/js/app/core/app.js") !!}
{!! Html::script("assets/js/app/customizer.js") !!}
<!-- END STACK JS-->

<!-- BEGIN PAGE LEVEL JS-->
{!! Html::script("assets/js/views/index.js") !!}
<!-- END PAGE LEVEL JS-->
</body>
</html>