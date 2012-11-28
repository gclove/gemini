<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-responsive.min.css') }}
    {{ HTML::style('css/darkstrap.css') }}
    {{ HTML::style('css/screen.css') }}

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
                                                                                                                    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
                       improve your experience.</p>
<![endif]-->
<div id="tabBar">
    <ul>
        <li><a href="#"><div class="tabBarIcon" id="projectTabBarIcon"></div>Projects</a></li><li><a href="#"><div class="tabBarIcon" id="clientsTabBarIcon"></div>Clients</a></li><li><a href="#"><div class="tabBarIcon" id="timesheetsTabBarIcon"></div>&nbsp;Time&nbsp;</a></li><li><a href="#"><div class="tabBarIcon" id="invoiceTabBarIcon"></div>Invoices</a></li><li><a href="#"><div class="tabBarIcon" id="usersTabBarIcon"></div>Users</a></li>
    </ul>
</div>

<div class="container-fluid">
    <div class="row-fluid" id="header">
        <div id="logo" class="span7">
            <div class="clientName">Creative Acceleration</div>
            <div id="dashboardHeader">gemini</div>
        </div>
        <div id="topRightView" class="span5">
            @yield('top_right')
        </div>
    </div>

    <div id="centralNav">
        <div class="row-fluid">
            @section("centralNav")
            <div class="span4"><a href="http://apple.com1" class="active">Overview</a></div>
            <div class="span4"><a href="http://apple.com1" class="">Time Logs</a></div>
            <div class="span4"><a href="http://apple.com1" class="">Change Orders</a></div>
            @yield_section
        </div>
        <div class="row-fluid hidden-phone">
            <div class="navLine">
                <div id="positionIndicator"></div>
            </div>
        </div>
    </div>
    <div id="legal">
        <? View::make('partials.legal');?>
    </div>
    <div class="row-fluid">

        <div class="span12">
            @yield('content')
        </div>
    </div>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/bootstrap-ck.js"></script>
</body>
</html>
