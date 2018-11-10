<!DOCTYPE html>
<html>

<head>

    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 35px !important;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }

        .select2-selection__choice {
            background-color: #2FBE12 !important;
        }

        .check {
            position: relative;
            background: linear-gradient(90deg, #62d66c, #48bf52);
            line-height: 0;
            -webkit-perspective: 400px;
            perspective: 400px;
        }

        .check input[type="checkbox"],
        .check label,
        .check label::before,
        .check label::after,
        .check {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            border-radius: 1rem;
            border: 0;
            transition: .35s ease-in-out;
            box-sizing: border-box;
            cursor: pointer;
        }

        .check label {
            width: 2.2rem;
            height: 1rem;
            background: #d7d7d7;
            overflow: hidden;
        }

        .check input[type="checkbox"] {
            position: absolute;
            z-index: 1;
            width: .8rem;
            height: .8rem;
            top: .1rem;
            left: .1rem;
            background: linear-gradient(45deg, #dedede, #ffffff);
            box-shadow: 0 6px 7px rgba(0, 0, 0, 0.3);
            outline: none;
        }

        .check input[type="checkbox"]:checked {
            left: 1.3rem;
        }

        .check input[type="checkbox"]:checked + label {
            background: transparent;
        }

        .check label::before,
        .check label::after {
            content: "· ·";
            position: absolute;
            overflow: hidden;
            left: .15rem;
            top: .5rem;
            height: 1rem;
            letter-spacing: -.04rem;
            color: #9b9b9b;
            font-family: "Times New Roman", serif;
            z-index: 2;
            font-size: .6rem;
            border-radius: 0;
            -webkit-transform-origin: 0 0 -.5rem;
            transform-origin: 0 0 -.5rem;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .check label::after {
            content: "●";
            top: .65rem;
            left: .3rem;
            height: .1rem;
            width: .35rem;
            font-size: .2rem;
            -webkit-transform-origin: 0 0 -.4rem;
            transform-origin: 0 0 -.4rem;
        }

        .check input[type="checkbox"]:checked + label::before,
        .check input[type="checkbox"]:checked + label::after {
            left: 1.55rem;
            top: .4rem;
            line-height: .1rem;
            -webkit-transform: rotateY(360deg);
            transform: rotateY(360deg);
        }

        .check input[type="checkbox"]:checked + label::after {
            height: .16rem;
            top: .55rem;
            left: 1.6rem;
            font-size: .6rem;
            line-height: 0;
        }

        .dataTables_wrapper .dataTables_length {
            float: left;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        html, body {
            max-width: 100%;
            overflow-x: none;
        }

        /*.modal .animation-content .modal-card {
            overflow: visible !important;
        }

        .modal-card-body {
            overflow: visible !important;
        }*/
        article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
            margin-top: 5px !IMPORTANT;
        }
        .control-sidebar-dark, .control-sidebar-dark + .control-sidebar-bg{
            top:5px;
        }


    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title',"Intranet") </title>
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('plugins/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap.css')}}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- Datetime picker -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!--Flags-->
    <link href="{{asset('plugins/flag-icon-css/css/flag-icon.css')}}" rel="stylesheet">
    {{-- DataTables --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

{{--TODO change skin with database conf--}}
<body class="hold-transition {{ Auth::user()->UserSkin }} sidebar-mini">
<div class="wrapper" style="max-height:100% !IMPORTANT">

    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo" style="position:fixed; ">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                    <b>Int</b>
                </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                    <b>Nikken </b>Latam</span>

        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-ellipsis-v"></i>
                <span class="sr-only "> Navegaci&oacute;n</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                {{--<li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle"
                                                 alt="User Image">
                                        </div>
                                        <h4>
                                            Support Team
                                            <small>
                                                <i class="fa fa-clock-o"></i> 5 mins
                                            </small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('img/user3-128x128.jpg')}}" class="img-circle"
                                                 alt="User Image">
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small>
                                                <i class="fa fa-clock-o"></i> 2 hours
                                            </small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('img/user4-128x128.jpg')}}" class="img-circle"
                                                 alt="User Image">
                                        </div>
                                        <h4>
                                            Developers
                                            <small>
                                                <i class="fa fa-clock-o"></i> Today
                                            </small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('img/user3-128x128.jpg')}}" class="img-circle"
                                                 alt="User Image">
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small>
                                                <i class="fa fa-clock-o"></i> Yesterday
                                            </small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('img/user4-128x128.jpg')}}" class="img-circle"
                                                 alt="User Image">
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small>
                                                <i class="fa fa-clock-o"></i> 2 days
                                            </small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">See All Messages</a>
                        </li>
                    </ul>
                </li>--}}
                <!-- Notifications: style can be found in dropdown.less -->
                {{--<li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that
                                        may not fit into the page and may cause
                                        design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all</a>
                        </li>
                    </ul>
                </li>--}}
                <!-- Tasks: style can be found in dropdown.less -->
                {{--<li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Make beautiful transitions
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>--}}
                <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('fotos_intra/')}}/{{ Auth::user()->UserPhoto }}" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('fotos_intra/')}}/{{ Auth::user()->UserPhoto }}" class="img-circle"
                                     alt="User Image">
                                <p>
                                    {{ Auth::user()->UserName }}
                                    <small>{{ Auth::user()->UserJobTitle }} </small>
                                </p>
                            </li>
                            {{--<!-- Menu Body -->
                        --}}{{--<li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>--}}{{--
                        <!-- Menu Footer-->--}}
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/profile" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}</a>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar">
                            <i class="fa fa-gears"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar lazybars-y"
           style="margin-top:2%;position:fixed;max-height:100%; overflow-y:auto;border-radius: 50px; "
           data-position="left" data-fade="true" data-offset="-5">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->
            {{--<form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </div>
            </form>--}}
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                {{--<li class="header">Navegaci&oacute;n</li>--}}

                <li class="">
                    <a href="/">
                        <i class="fas fa-tachometer-alt"></i>&nbsp;
                        <span>Dashboard</span>
                    </a>
                </li>

                {{--RH--}}
                <li class="treeview
                    @if(Request::segment(1) == "directory" || Request::segment(1) == "requests" || Request::segment(1) == "request"  || Request::segment(1) == "manager_content" )
                        active
                    @endif
                        " style="word-break: break-all;">
                    <a href="#">
                        <i class="fas fa-bezier-curve"></i>&nbsp;
                        <span>Recursos Humanos</span>
                        <span class="pull-right-container">

                                {{--
                                <span class="label label-primary pull-right">4</span> --}}
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu ">

                        @php
                            function aes_encrypt($String = "")
                            {

                                $plaintext = $String;
                                $password = 'LW(V3K%*TiQbJ5:gm;z!z:5;8Pd#6Xg[gk#}E*5=hq;K5}ky}L!8%a[G8Q)P6!5AVexdBA';
                                $method = 'aes-256-cbc';

                                $password = substr(hash('sha256', $password, true), 0, 32);

                                $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

                                $encrypted = base64_encode(base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv)));

                                return $encrypted;

                            }
                        @endphp

                        <li class="">
                            <a href="/doc/
                            @php

                                $data ['time2'] = date("Y-m-d H:i:s");
                                $data ['id']    = 1;
                                $data ['time']  = date("Y-m-d H:i:s");
                                echo aes_encrypt(json_encode($data));

                            @endphp
                                    " target="_blank">
                                <i class="far fa-hand-spock"></i>&nbsp;Conoce Nuestra Filosof&iacute;a</a>
                        </li>

                        <li class="">
                            <a href="https://nikken.we-know.net/" target="_blank">
                                <i class="fas fa-chalkboard-teacher"></i>&nbsp;Capacitaci&oacute;n e-Learning</a>
                        </li>

                        <li class="treeview @if(Request::segment(1) == "directory") active @endif">
                            <a href="#">
                                <i class="fas fa-map-pin"></i>&nbsp;
                                <span>Directorio Nikken</span>
                                <span class="pull-right-container">

                                            {{--
                                            <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="@if(Request::segment(2) == "lat") active @endif">
                                    <a href="/directory/lat">
                                        <img src="{{ asset('img/latinoamericawico.png') }}" style="width:20px;"></span>&nbsp;Latinoam&eacute;rica</a>
                                </li>
                                <li class="@if(Request::segment(2) == "mexico") active @endif">
                                    <a href="/directory/mexico">
                                        <span class="flag-icon flag-icon-mx"></span>&nbsp;M&eacute;xico</a>
                                </li>
                                <li class="@if(Request::segment(2) == "ecuador") active @endif">
                                    <a href="/directory/ecuador">
                                        <span class="flag-icon flag-icon-ec"></span>&nbsp;Ecuador</a>
                                </li>
                                <li class="@if(Request::segment(2) == "colombia") active @endif">
                                    <a href="/directory/colombia">
                                        <span class="flag-icon flag-icon-co"></span>&nbsp;Colombia</a>
                                </li>
                                <li class="@if(Request::segment(2) == "guatemala") active @endif">
                                    <a href="/directory/guatemala">
                                        <span class="flag-icon flag-icon-gt"></span>&nbsp;Guatemala</a>
                                </li>
                                <li class="@if(Request::segment(2) == "panama") active @endif">
                                    <a href="/directory/panama">
                                        <span class="flag-icon flag-icon-pa"></span>&nbsp;Panam&aacute;</a>
                                </li>
                                <li class="@if(Request::segment(2) == "salvador") active @endif">
                                    <a href="/directory/salvador">
                                        <span class="flag-icon flag-icon-sv"></span>&nbsp;El Salvador</a>
                                </li>
                                <li class="@if(Request::segment(2) == "costarica") active @endif">
                                    <a href="/directory/costarica">
                                        <span class="flag-icon flag-icon-cr"></span>&nbsp;Costa Rica</a>
                                </li>
                                <li class="@if(Request::segment(2) == "peru") active @endif">
                                    <a href="/directory/peru">
                                        <span class="flag-icon flag-icon-pe"></span>&nbsp;Per&uacute;</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview ">
                            <a href="#">
                                <i class="fas fa-sitemap"></i>&nbsp;
                                <span>Estructura Organizacional</span>
                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 4;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <img src="{{ asset('img/latinoamericawico.png') }}" style="width:20px;"></span>&nbsp;Latinoam&eacute;rica</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 5;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-mx"></span>&nbsp;M&eacute;xico</a>
                                </li>

                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 6;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-co"></span>&nbsp;Colombia</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 7;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-ec"></span>&nbsp;Ecuador</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 8;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-gt"></span>&nbsp;Guatemala</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 9;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-pa"></span>&nbsp;Panam&aacute;</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                            @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 10;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-sv"></span>&nbsp;El Salvador</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                            @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 11;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-cr"></span>&nbsp;Costa Rica</a>
                                </li>
                                <li class="">
                                    <a href="/doc/
                                                @php

                                        $data ['time2'] = date("Y-m-d H:i:s");
                                        $data ['id']    = 12;
                                        $data ['time']  = date("Y-m-d H:i:s");
                                        echo aes_encrypt(json_encode($data));

                                    @endphp
                                            " target="_blank">
                                        <span class="flag-icon flag-icon-pe"></span>&nbsp;Per&uacute;</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview">

                            <a href="#">
                                <i class="fas fa-user-astronaut"></i>&nbsp;
                                <span>Descripción de Puestos</span>
                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                            </a>
                            <ul class="treeview-menu ">

                                {{--Ecuador--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-ec"></i>&nbsp;
                                        <span>Ecuador</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Gerente General--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 26;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente General</a>
                                        </li>

                                        {{--Gerente C.F--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 27;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente C.F.</a>
                                        </li>

                                        {{--Coordinador S.C.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 28;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coordinador S.C.</a>
                                        </li>

                                        {{--Servicio al Cliente P.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 29;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicio al Cliente P.</a>
                                        </li>

                                        {{--Servicio al Cliente C.C.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 30;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicio al Cliente C.C.</a>
                                        </li>

                                        {{--Coordinador L.C.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 31;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coordinador L.C.</a>
                                        </li>

                                        {{--Analista C.G.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 32;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Analista C.G.</a>
                                        </li>

                                        {{--Analista C.I.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 33;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Analista C.I.</a>
                                        </li>

                                        {{--Analista C.C.P.--}}
                                        <li class="">
                                            <a href="/doc/
                                            @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 34;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Analista C.C.P.</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--Colombia--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-co"></i>&nbsp;
                                        <span>Colombia</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Comercial--}}
                                        <li class="treeview">

                                            <a href="#">
                                                <i class="fas fa-shopping-cart"></i>&nbsp;
                                                <span>Comercial</span>
                                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu ">

                                                {{--Gerente General--}}
                                                <li class="">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 35;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente General</a>
                                                </li>
                                                {{--Gerente Comercial E.C.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 36;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente Comercial
                                                        E.C.</a>
                                                </li>
                                                {{--Gerente Comercial N.Oc.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 37;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente Comercial
                                                        N.Oc.</a>
                                                </li>
                                                {{--Gerente Comercial N.Or.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 38;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente Comercial
                                                        N.Or.</a>
                                                </li>
                                                {{--Gerente Comercial O.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 39;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente Comercial
                                                        O.</a>
                                                </li>
                                                {{--Gerente Comercial S.O.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 40;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente Comercial
                                                        S.O.</a>
                                                </li>

                                            </ul>

                                        </li>
                                        {{--Fininanzas y Administracion--}}
                                        <li class="treeview">

                                            <a href="#" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                <i class="fas fa-clipboard-list"></i>&nbsp;
                                                <span>Fininanzas y Administraci&oacute;n</span>
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>

                                            <ul class="treeview-menu ">

                                                {{--Contralor--}}
                                                <li class="">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 41;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Contrador</a>
                                                </li>
                                                {{--Contador General--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 42;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Contador General</a>
                                                </li>
                                                {{--Coordinador Contable Bonif-Audit--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 43;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Coordinador Contable
                                                        Bonif-Audit</a>
                                                </li>
                                                {{--Asistente Tesorer&iacute;a--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 44;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Asistente Tesorer&iacute;a</a>
                                                </li>
                                                {{--Asistente Contable--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 45;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Asistente Contable</a>
                                                </li>

                                            </ul>

                                        </li>
                                        {{--Log&iacute;stica--}}
                                        <li class="treeview">

                                            <a href="#" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                <i class="fas fa-boxes"></i>&nbsp;
                                                <span>Log&iacute;stica</span>
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>

                                            <ul class="treeview-menu ">

                                                {{--Analista Comercio Exterior--}}
                                                <li class="">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 46;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Analista Comercio
                                                        Exterior</a>
                                                </li>
                                                {{--Coordinador Operativo--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 47;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Coordinador Operativo</a>
                                                </li>

                                            </ul>

                                        </li>
                                        {{--Almacen--}}
                                        <li class="treeview">

                                            <a href="#" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                <i class="fas fa-dolly-flatbed"></i>&nbsp;
                                                <span>Almacen</span>
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>

                                            <ul class="treeview-menu ">

                                                {{--Analista Comercio Exterior--}}
                                                <li class="">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 48;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Analista Comercio
                                                        Exterior</a>
                                                </li>
                                                {{--Coordinador Operativo--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 49;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Coordinador Operativo</a>
                                                </li>
                                                {{--Auxiliar Bodega--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 50;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Auxiliar Bodega</a>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>

                                </li>
                                {{--El salvador--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-sv"></i>&nbsp;
                                        <span>El salvador</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Gerente--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 51;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente </a>
                                        </li>
                                        {{--Contador General--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 52;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Contador General</a>
                                        </li>
                                        {{--Servicio al Cliente--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 53;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicio al Cliente</a>
                                        </li>
                                        {{--Servicios Generales--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 54;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicios Generales</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--Guatemala--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-gt"></i>&nbsp;
                                        <span>Guatemala</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Gerente--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 55;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente </a>
                                        </li>
                                        {{--Contador General--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 56;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Contador General</a>
                                        </li>
                                        {{--Servicio al Cliente--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 57;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicio al Cliente</a>
                                        </li>
                                        {{--Servicios Generales--}}
                                        <li class="">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 58;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicios Generales</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--M&eacute;xico--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-mx"></i>&nbsp;
                                        <span>M&eacute;xico</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Analista Contable de Ingresos--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 59;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Analista Contable de Ingresos
                                            </a>
                                        </li>
                                        {{--Auxiliar de Almac&eacute;n Cuamatla--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 60;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Auxiliar de Almac&eacute;n
                                                Cuamatla</a>
                                        </li>
                                        {{--Auxiliar Contable--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 61;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Auxiliar Contable</a>
                                        </li>
                                        {{--Contador General--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 62;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Contador General</a>
                                        </li>
                                        {{--Coord de Comercio Ext. y Compras Locales--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 63;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coord de Comercio Ext. y Compras
                                                Locales</a>
                                        </li>
                                        {{--Coord. de Bonificaciones y Tesorer&iacute;a--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 64;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coord. de Bonificaciones y
                                                Tesorer&iacute;a</a>
                                        </li>
                                        {{--Coord. Impuestos y N&oacute;mina--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 65;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coord. Impuestos y N&oacute;mina</a>
                                        </li>
                                        {{--Gerente de Admon. y Finanzas--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 66;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente de Admon. y Finanzas</a>
                                        </li>
                                        {{--Servicio al Cte y Comercial--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 67;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicio al Cte y Comercial</a>
                                        </li>
                                        {{--Tec. de Informaci&oacute;n--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 68;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Tec. de Informaci&oacute;n</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--Panam&aacute;--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-pa"></i>&nbsp;
                                        <span>Panam&aacute;</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Gerente General--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 69;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente General</a>
                                        </li>
                                        {{--Contador General--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 70;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Contador General</a>
                                        </li>
                                        {{--Coord. Log&iacute;stica Comercial--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 71;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coord. Log&iacute;stica Comercial</a>
                                        </li>
                                        {{--Ejecutivo Servicio al Cliente--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 72;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Ejecutivo Servicio al Cliente</a>
                                        </li>
                                        {{--Servicios Generales--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 73;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Servicios Generales</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--Per&uacte;--}}
                                <li class="treeview">

                                    <a href="#">
                                        <i class="flag-icon flag-icon-pe"></i>&nbsp;
                                        <span>Per&uacute;</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Gerente General--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 74;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente General</a>
                                        </li>
                                        {{--Gerente Finanzas y Admin.--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 75;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Gerente Finanzas y Admin.</a>
                                        </li>
                                        {{--Auxiliar Contable--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 76;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Auxiliar Contable</a>
                                        </li>
                                        {{--Jefe Servicio al Cliente--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 77;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Jefe Servicio al Cliente</a>
                                        </li>
                                        {{--Ejecutivo de Servicio al Cliente--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 78;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Ejecutivo de Servicio al Cliente</a>
                                        </li>
                                        {{--Coordinador Log&iacute;stico--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 79;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Coordinador Log&iacute;stico</a>
                                        </li>
                                        {{--Auxiliar de Bodega--}}
                                        <li class="" style="white-space: normal;width: 100%;word-break: keep-all; ">
                                            <a href="/doc/
                                                    @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 80;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp" target="_blank">
                                                <i class="fas fa-user-ninja"></i>&nbsp;Auxiliar de Bodega</a>
                                        </li>

                                    </ul>

                                </li>
                                {{--Regional--}}
                                <li class="treeview">

                                    <a href="#">
                                        <img src="/img/latinoamericawico.png" style="width:20px;"></img>&nbsp;
                                        <span>Regional</span>
                                        <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                            <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                    </a>
                                    <ul class="treeview-menu ">

                                        {{--Grupo Directivo--}}
                                        <li class="treeview">

                                            <a href="#">
                                                <i class="fas fa-object-group"></i>&nbsp;
                                                <span>Grupo Directivo</span>
                                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu ">

                                                {{--Direcci&oacute;n General--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 81;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Direcci&oacute;n General</a>
                                                </li>
                                                {{--Direcci&oacute;n Finanzas--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 82;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Direcci&oacute;n Finanzas</a>
                                                </li>
                                                {{--Direcci&oacute;n Comercial--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 83;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Direcci&oacute;n
                                                        Comercial</a>
                                                </li>

                                            </ul>

                                        </li>
                                        {{--Grupo de Servicio--}}
                                        <li class="treeview">

                                            <a href="#">
                                                <i class="fas fa-concierge-bell"></i>&nbsp;
                                                <span>Regional</span>
                                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu ">

                                                {{--Auditor Interno--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 84;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Auditor Interno</a>
                                                </li>
                                                {{--Gerente de Capital Humano--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 85;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente de Capital Humano</a>
                                                </li>
                                                {{--Directora Seminario Plata--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 86;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Directora Seminario Plata</a>
                                                </li>
                                                {{--Gerencia Oper. y Plan. de la demanda--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 87;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerencia Oper. y Plan. de
                                                        la demanda</a>
                                                </li>
                                                {{--Gerente de Plandeaci&oacute;n--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 88;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente de Plandeaci&oacute;n</a>
                                                </li>
                                                {{--Gerente de Compras--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 89;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente de Compras</a>
                                                </li>
                                                {{--Gerente de Mercadotecnia--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 90;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Gerente de Mercadotecnia</a>
                                                </li>
                                                {{--Encargado de Comunicaciones--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 91;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Encargado de
                                                        Comunicaciones</a>
                                                </li>
                                                {{--Ger. de Tec. de Informaci&oacute;n--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 92;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Ger. de Tec. de Informaci&oacute;n</a>
                                                </li>
                                                {{--Supervisor de Soporte T.I.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 93;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Supervisor de Soporte
                                                        T.I.</a>
                                                </li>
                                                {{--Supervisor de Analisis y Desarrollo en T.I.--}}
                                                <li class=""
                                                    style="white-space: normal;width: 100%;word-break: keep-all; ">
                                                    <a href="/doc/
                                                    @php

                                                        $data ['time2'] = date("Y-m-d H:i:s");
                                                        $data ['id']    = 94;
                                                        $data ['time']  = date("Y-m-d H:i:s");
                                                        echo aes_encrypt(json_encode($data));

                                                    @endphp" target="_blank">
                                                        <i class="fas fa-user-ninja"></i>&nbsp;Supervisor de Analisis y
                                                        Desarrollo en T.I.</a>
                                                </li>

                                            </ul>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="@if(Request::segment(1) == "manager_content") active @endif ">
                            <a href="/manager_content">
                                <i class="fas fa-archive"></i>&nbsp;Gestor de Contenido</a>
                        </li>

                        <li class="">
                            <a href="/doc/
                                    @php

                                $data ['time2'] = date("Y-m-d H:i:s");
                                $data ['id']    = 3;
                                $data ['time']  = date("Y-m-d H:i:s");
                                echo aes_encrypt(json_encode($data));

                            @endphp" target="_blank">
                                <i class="fas fa-phone-volume"></i>&nbsp;Extensiones/Anexos Telef&oacute;nicos</a>
                        </li>

                        <li class="
                                        @if(Request::segment(1) == "requests" )
                                active
@endif
                                ">
                            <a href="/requests">
                                <i class="fas fa-user-clock"></i>&nbsp;Solicitudes de Alta/Baja Staff</a>
                        </li>

                        <li class="
                                        @if(Request::segment(1) == "request" && Request::segment(2) == "user")
                                active
@endif
                                ">
                            <a href="/request/user">
                                <i class="fas fa-user-check"></i>&nbsp;Solicitud de Alta/Baja Staff</a>
                        </li>

                    </ul>
                </li>
                <li class="treeview
                    @if(Request::segment(1) == "staff"  )
                        active
                    @endif
                        " style="word-break: break-all;">
                    <a href="#">
                        <i class="fas fa-users"></i>&nbsp;
                        <span>Staff de Nikken</span>
                        <span class="pull-right-container">

                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu ">

                        <li class="

                        @if(Request::segment(1) == "staff"  )
                                active
@endif

                                ">

                            <a href="/staff/induction">
                                <i class="fab fa-leanpub"></i>&nbsp;Inducci&oacute;n a Colaboradores
                            </a>

                        </li>
                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:1281/modules/staff_buy/consult/" target="_blank">
                                <i class="fas fa-shopping-cart"></i>&nbsp;Compra de Productos Staff
                            </a>

                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fas fa-umbrella-beach"></i>&nbsp;
                                <span>Incidencias/Vacaciones</span>
                                <span class="pull-right-container">

                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="">

                                    <a href="http://intranet.nikkenlatam.com:8080/Intranetlat/solicitudes.jsp"
                                       target="_blank">
                                        <i class="fas fa-suitcase-rolling"></i>&nbsp;Solicitud
                                    </a>

                                </li>
                                <li class="">

                                    <a href="http://intranet.nikkenlatam.com:8080/Solicitud_Regional/menu.jsp"
                                       target="_blank">
                                        <i class="fas fa-calendar-check"></i>&nbsp;Administraci&oacute;n Solicitudes
                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="">

                            <a href="http://nikken.crmdesk.com/support/login.aspx" target="_blank">
                                <i class="fas fa-ambulance"></i>&nbsp;Help Desk
                            </a>

                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-donate"></i>&nbsp;
                        <span>Comercial</span>
                        <span class="pull-right-container">

                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>

                    <ul class="treeview-menu">

                        <li class="">

                            <a href="https://nikkenlatam.com/interno/panel-marketing/pages/general/login.php"
                               target="_blank">
                                <i class="fas fa-bullhorn"></i>&nbsp;Panel de Marketing
                            </a>

                        </li>
                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:8080/Intranetlat/chk_Register.jsp" target="_blank">
                                <i class="fas fa-list"></i>&nbsp;Informaci&oacute;n Check Register
                            </a>

                        </li>
                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:8080/Nutrired/" target="_blank">
                                <i class="fas fa-leaf"></i>&nbsp;Informaci&oacute;n de Nutrired
                            </a>

                        </li>
                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:8080/Intranetlat/Cabecera_Repositorio.jsp"
                               target="_blank">
                                <i class="fas fa-folder"></i>&nbsp;Repositorio de Archivos
                            </a>

                        </li>

                    </ul>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-shopping-basket"></i>&nbsp;
                        <span>Productos</span>
                        <span class="pull-right-container">

                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>

                    <ul class="treeview-menu">

                        <li class="treeview ">
                            <a href="#">
                                <i class="fas fa-ban"></i>&nbsp;
                                <span>Productos no Disponibles</span>
                                <span class="pull-right-container">

                                                    {{--
                                                    <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                                </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="">
                                    <a href="https://nikkenlatam.com/productos-no-disponibles/mexico.php"
                                       target="_blank">
                                        <span class="flag-icon flag-icon-mx"></span>&nbsp;M&eacute;xico</a>
                                </li>
                                <li class=" ">
                                    <a href="https://nikkenlatam.com/productos-no-disponibles/ecuador.php"
                                       target="_blank">
                                        <span class="flag-icon flag-icon-ec"></span>&nbsp;Ecuador</a>
                                </li>
                                <li class="">
                                    <a href="https://nikkenlatam.com/productos-no-disponibles/colombia.php"
                                       target="_blank">
                                        <span class="flag-icon flag-icon-co"></span>&nbsp;Colombia</a>
                                </li>
                                <li class="">
                                    <a href="https://nikkenlatam.com/productos-no-disponibles/guatemala.php"
                                       target="_blank">
                                        <span class="flag-icon flag-icon-gt"></span>&nbsp;Guatemala</a>
                                </li>
                                <li class="https://nikkenlatam.com/productos-no-disponibles/panama.php">
                                    <a href="" target="_blank">
                                        <span class="flag-icon flag-icon-pa"></span>&nbsp;Panam&aacute;</a>
                                </li>
                                <li class="https://nikkenlatam.com/productos-no-disponibles/elsalvador.php">
                                    <a href="" target="_blank">
                                        <span class="flag-icon flag-icon-sv"></span>&nbsp;El Salvador</a>
                                </li>
                                <li class="https://nikkenlatam.com/productos-no-disponibles/costarica.php">
                                    <a href="" target="_blank">
                                        <span class="flag-icon flag-icon-cr"></span>&nbsp;Costa Rica</a>
                                </li>
                                <li class="">
                                    <a href="https://nikkenlatam.com/productos-no-disponibles/peru.php" target="_blank">
                                        <span class="flag-icon flag-icon-pe"></span>&nbsp;Per&uacute;</a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="http://intranet.nikkenlatam.com:8080/FAQ/ver_faqs.jsp" target="_blank">
                                <span class="fas fa-question"></span>&nbsp;Preguntas Frecuentes</a>
                        </li>
                        <li class="">
                            <a href="http://intranet.nikkenlatam.com:8080/Intranetlat/RMAProd_Test.jsp" target="_blank">
                                <span class="fas fa-tasks"></span>&nbsp;RMA</a>
                        </li>
                        <li class="">
                            <a href="http://intranet.nikkenlatam.com:8080/AdministracionArchivos/registros.jsp"
                               target="_blank">
                                <span class="fas fa-ruler-vertical"></span>&nbsp;Registros Sanitarios y Certificados</a>
                        </li>

                    </ul>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-exchange-alt"></i>&nbsp;
                        <span>Procesos Locales</span>
                        <span class="pull-right-container">

                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>

                    <ul class="treeview-menu">

                        <li class="treeview">

                            <a href="#">
                                <i class="flag-icon flag-icon-mx"></i>&nbsp;
                                <span>Mexico</span>
                                <span class="pull-right-container">

                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                            </a>

                            <ul class="treeview-menu">

                                <li class="">
                                    <a href="https://187.188.86.20:10443/importivrdb/ImportCsv.php" target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Carga archivos IVR</a>
                                </li>

                                <li class="treeview">

                                    <a href="#">
                                        <i class="far fa-file-alt"></i>&nbsp;
                                        <span>Formatos ABI</span>
                                        <span class="pull-right-container">

                                                        <i class="fa fa-angle-left pull-right"></i>
                                                    </span>
                                    </a>

                                    <ul class="treeview-menu">

                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 13;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="far fa-envelope"></span>&nbsp;Validación RMA</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 14;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-briefcase"></span>&nbsp;Sesi&oacute;n de
                                                Negocios</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 15;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-atlas"></span>&nbsp;Clausulas Autochip</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 16;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-file-signature"></span>&nbsp;Contrato C.I</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 17;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-file-signature"></span>&nbsp;Contrato C.B</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 18;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fab fa-wpforms"></span>&nbsp;Formato 9052</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 19;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fab fa-wpforms"></span>&nbsp;Formato Garant&iacute;a</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 20;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fab fa-wpforms"></span>&nbsp;Formato Siminarios</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 21;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fab fa-wpforms"></span>&nbsp;Formato Fiscal</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 22;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-magic"></span>&nbsp;Inscrpci&oacute;n Autoship</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 23;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="far fa-comments"></span>&nbsp;Inscrpci&oacute;n SMS</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 24;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-book"></span>&nbsp;Manual Repuestos</a>
                                        </li>
                                        <li class="">
                                            <a href="/doc/

                                                        @php

                                                $data ['time2'] = date("Y-m-d H:i:s");
                                                $data ['id']    = 25;
                                                $data ['time']  = date("Y-m-d H:i:s");
                                                echo aes_encrypt(json_encode($data));

                                            @endphp

                                                    " target="_blank">
                                                <span class="fas fa-clipboard-list"></span>&nbsp;Orden Unificada</a>
                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="treeview">

                            <a href="#">
                                <i class="flag-icon flag-icon-co"></i>&nbsp;
                                <span>Colombia</span>
                                <span class="pull-right-container">

                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                            </a>

                            <ul class="treeview-menu">

                                <li class="">
                                    <a href="https://facturaelectronica.ptesa.com/FacturacionElectronicaWeb/faces/login.xhtml"
                                       target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Factura Electr&oacute;nica</a>
                                </li>
                                <li class="">
                                    <a href="https://secure.payulatam.com/login.zul" target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Payu</a>
                                </li>
                                <li class="">
                                    <a href="http://nikken.bsoft-mx.net/colombia/scp/staff.php?id=7" target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Tickets SC</a>
                                </li>
                                <li class="">
                                    <a href="http://190.131.244.54:8080/queuemetrics/autenticazione.jsp"
                                       target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Queuemetrics</a>
                                </li>
                                <li class="">
                                    <a href="http://190.131.244.54:8080/queuemetrics/autenticazione.jsp"
                                       target="_blank">
                                        <span class="fas fa-upload"></span>&nbsp;Credibanco</a>
                                </li>

                            </ul>

                        </li>

                    </ul>

                </li>

                {{--TI--}}
                <li class="treeview
                    @if(Request::segment(1) == "users" || Request::segment(1) == "user" || Request::segment(1) == "area" || Request::segment(1) == "areas" || Request::segment(1) == "emails")
                        active
                    @endif
                        " style="word-break: break-all;">
                    <a href="#">
                        <i class="fas fa-laptop"></i>&nbsp;
                        <span>TI</span>
                        <span class="pull-right-container">

                                {{--
                                <span class="label label-primary pull-right">4</span> --}}
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu ">

                        <li class="treeview
                            @if(Request::segment(1) == "users" || Request::segment(1) == "user" || Request::segment(1) == "requests"|| Request::segment(1) == "request")
                                active
                            @endif
                                " style="word-break: break-all;">
                            <a href="#">
                                <i class="fas fa-users"></i>&nbsp;
                                <span>Usuarios</span>
                                <span class="pull-right-container">
                                        {{--
                                        <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="
                                        @if(Request::segment(1) == "users")
                                        active
@endif
                                        ">
                                    <a href="/users">
                                        <i class="fas fa-users"></i>&nbsp; Lista de Usuarios</a>
                                </li>
                                <li class="
                                        @if(Request::segment(1) == "user" && Request::segment(2) == "new")
                                        active
@endif
                                        ">
                                    <a href="/user/new">
                                        <i class="fas fa-user-plus"></i>&nbsp; Nuevo Usuario</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview
                            @if(Request::segment(1) == "areas" || Request::segment(1) == "area" )
                                active
                            @endif
                                " style="word-break: break-all;">
                            <a href="#">
                                <i class="fas fa-building"></i>&nbsp;
                                <span>&Aacute;reas</span>
                                <span class="pull-right-container">
                                        {{--
                                        <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="
                                        @if(Request::segment(1) == "areas")
                                        active
                            @endif
                                        ">
                                    <a href="/areas">
                                        <i class="fas fa-building"></i>&nbsp; &Aacute;reas</a>
                                </li>
                                <li class="
                                        @if(Request::segment(1) == "area" && Request::segment(2) == "new")
                                        active
                            @endif
                                        ">
                                    <a href="/area/new">
                                        <i class="fas fa-coffee"></i>&nbsp; Nueva &Aacute;rea</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview
                            @if(Request::segment(1) == "emails")
                                active
                            @endif
                                " style="word-break: break-all;">
                            <a href="#">
                                <i class="fas fa-envelope"></i>&nbsp;
                                <span>Correos</span>
                                <span class="pull-right-container">
                                        {{--
                                        <span class="label label-primary pull-right">4</span> --}}
                                    <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                            </a>
                            <ul class="treeview-menu ">

                                <li class="
                                        @if(Request::segment(1) == "emails")
                                        active
                            @endif
                                        ">
                                    <a href="/emails">
                                        <i class="fas fa-at"></i>&nbsp; Correos</a>
                                </li>

                            </ul>
                        </li>

                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:8080/Lista_Precios/" target="_blank">
                                <i class="fas fa-dollar-sign"></i>&nbsp;Precios Articulos
                            </a>

                        </li>

                        <li class="">

                            <a href="http://intranet.nikkenlatam.com:8080/Intranetlat/Estado_de_Cuenta.jsp"
                               target="_blank">
                                <i class="fas fa-file-invoice-dollar"></i>&nbsp;Generaci&oacute;n Estado de Cuenta
                            </a>

                        </li>


                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


        </section>

        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="    position: relative;">
        <div class="pull-right hidden-xs">
            <strong>Copyright &copy; Nikken 2018 reserved. &nbsp;</strong>

        </div>
        <b>Powered by</b>
        <a href="https://www.linkedin.com/in/alejandro-becerra-ortiz/" target="_blank">Alejandro Becerra Ortiz
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/AlejandroBec94" target="_blank" style="text-decoration: none;">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://gitlab.com/a.becerra" target="_blank" style="text-decoration: none;">
            <i class="fab fa-gitlab"></i>
        </a>


    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="position: fixed;background-color: #1F1F2A;">

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

            <li>
                <a href="#control-sidebar-home-tab" data-toggle="tab">
                    <i class="fa fa-home"></i>
                </a>
            </li>

        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
                <div>
                    <h4 class="control-sidebar-heading">Configuraci&oacute;n de Perfil</h4>
                    {{--<div class="form-group">
                        <label class="control-sidebar-subheading">
                            <input type="checkbox" data-controlsidebar="control-sidebar-open" class="pull-right">
                            Barra de Herramientas siempre visible
                        </label>
                        <p>La barra de herramientas estar&aacute; siempre visible en todas las pantallas.</p>
                    </div>--}}
                    {{--<div class="form-group">
                        <label class="control-sidebar-subheading">
                            <input type="checkbox" data-layout="layout-boxed" class="pull-right">
                            Boxed Layout
                        </label>
                        <p>Activate the boxed layout
                        </p>
                    </div>--}}
                    {{--<div class="form-group">
                        <label class="control-sidebar-subheading">
                            <input type="checkbox" data-layout="sidebar-collapse" class="pull-right">
                            Toggle Sidebar
                        </label>
                        <p>Toggle the left sidebar's state (open or collapse)</p>
                    </div>--}}

                    {{--
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            <input type="checkbox" data-sidebarskin="toggle" class="pull-right">
                            Toggle Right Sidebar Skin
                        </label>
                        <p>Toggle between dark and light skins for the right sidebar</p>
                    </div>--}}

                    <ul class="list-unstyled clearfix" id="skins">

                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-green"
                                    id="skin-green"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-green-active"></span><span class="bg-green"
                                                                                style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #1F1F2A"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin">Nikken</p></li>

                        <li style="float:left; width: 33.33333%; padding: 5px;">
                            <a href="javascript:void(0)" data-skin="skin-black" id="skin-black"
                               style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                               class="clearfix full-opacity-hover">
                                <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix">
                                    <span style="display:block; width: 20%; float: left; height: 7px; background: #fefefe">
                                    </span>
                                    <span style="display:block; width: 80%; float: left; height: 7px; background: #fefefe">
                                    </span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #222">
                                    </span>
                                    <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                    </span>
                                </div>
                            </a>
                            <p class="text-center no-margin">Relax</p>
                        </li>

                        <li style="float:left; width: 33.33333%; padding: 5px;">
                            <a href="javascript:void(0)" data-skin="skin-blue" id="skin-blue"
                               style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                               class="clearfix full-opacity-hover">
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9">
                                    </span>
                                    <span class="bg-light-blue"
                                          style="display:block; width: 80%; float: left; height: 7px;">
                                    </span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #1F1F2A">
                                    </span>
                                    <span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                    </span>
                                </div>
                            </a>
                            <p class="text-center no-margin">
                                Azul
                            </p>
                        </li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a href="javascript:void(0)"
                                                                                   data-skin="skin-purple"
                                                                                   style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                                                                   class="clearfix full-opacity-hover"
                                                                                   id="skin-purple">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-purple-active"></span><span class="bg-purple"
                                                                                 style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #1F1F2A"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin">Morado</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-red"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-red"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-red-active"></span><span class="bg-red"
                                                                              style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #1F1F2A"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin">Rojo</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-yellow"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-yellow"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-yellow-active"></span><span class="bg-yellow"
                                                                                 style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #1F1F2A"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin">Amarillo</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-blue-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-blue-light"
                                    class="clearfix full-opacity-hover">
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9"></span><span
                                            class="bg-light-blue"
                                            style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Azul Light</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-black-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-black-light"
                                    class="clearfix full-opacity-hover">
                                <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                            style="display:block; width: 20%; float: left; height: 7px; background: #fefefe"></span><span
                                            style="display:block; width: 80%; float: left; height: 7px; background: #fefefe"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Total Light</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-purple-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-purple-light"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-purple-active"></span><span class="bg-purple"
                                                                                 style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Morado Light</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-green-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-green-light"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-green-active"></span><span class="bg-green"
                                                                                style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Verde Light</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-red-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-red-light"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-red-active"></span><span class="bg-red"
                                                                              style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Rojo Light</p></li>
                        <li style="float:left; width: 33.33333%; padding: 5px;"><a
                                    href="javascript:void(0)"
                                    data-skin="skin-yellow-light"
                                    style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                                    id="skin-yellow-light"
                                    class="clearfix full-opacity-hover">
                                <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                           class="bg-yellow-active"></span><span class="bg-yellow"
                                                                                 style="display:block; width: 80%; float: left; height: 7px;"></span>
                                </div>
                                <div>
                                    <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc"></span><span
                                            style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7">
                                                                                    </span>
                                </div>
                            </a>
                            <p class="text-center no-margin" style="font-size: 12px">Amarillo Light</p>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Icon Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">
<!-- jQuery 3 -->
<script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
{{--<script src="{{ asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>--}}
<script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>


<!-- Bootstrap 3.3.7 -->
<script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- datepicker -->

<script src="{{asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<!-- datetimepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/js/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/dist/js/select2.js')}}"></script>

<!-- fullCalendar -->
<script src="{{asset('plugins//fullcalendar/dist/fullcalendar.min.js')}}"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>

{{-- Sweet Alert --}}
<link src="https://unpkg.com/sweetalert/dist/sweetalert.min.css"></link>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- App Vue JS --}}
<script src="/js/app.js"></script>

{{--Color Picker--}}
<link rel="stylesheet" href="https://unpkg.com/vue-swatches/dist/vue-swatches.min.css">
<script src="https://unpkg.com/vue-swatches"></script>
@yield("scripts")


<script>

    $('[data-skin]').on('click', function (e) {

        e.preventDefault()
        var token = "{{ csrf_token() }}";

        $.ajax({
            url: "{{ url('/changeSkin') }}",
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            data: {'skin': $(this).data('skin')},
        });

    });


</script>


</body>

</html>

