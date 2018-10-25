@extends('layouts.layout')

@section('TitlePage',"Dashboard")

@section('content')

    <style>
        .video-container {
            position: relative; /* keeps the aspect ratio */
            padding-bottom: 56.25%; /* fine tunes the video positioning */
            padding-top: 60px;
            overflow: hidden;
            margin-bottom: -1px;
            margin-right: -1px;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .event a {
            background-color: #5FBA7D !important;
            color: #ffffff !important;
        }

        body {
            height: 250% !IMPORTANT;
        }


    </style>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokenL">

    <!-- Main content -->
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>Ordenes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Compras Empleado</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>Solicitudes Cambio Clabe</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Ver m&aacute;s <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Solicitudes de movimiento</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Ver m&aacute;s o <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        @php
            $Data = json_decode($Dash['UserDashboardSorted']);
        @endphp

        <section class="col-lg-7 ">
            <!-- Custom tabs (Charts with tabs)-->
            <ul class="connectedSortable SortableLeft" style="list-style-type: none;
        list-style: none;     margin-left: -25px; max-height: 100%;">

                @if($DashLeft != "")

                    @foreach ($DashLeft as $Left)

                        @if($Left == 'News')

                            <li id="News">

                                <div class="row" id="News">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Noticias</h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button id="News" type="button" class="btn btn-box-tool"
                                                                data-toggle="modal" data-target="#modal-news">
                                                            <i class="fa fa-cog"></i></button>

                                                    </div>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove">
                                                        <i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number1" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">
                                                        @php
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach($News as $New)
                                                            @if($New['FileType'] == "Url" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )
                                                                @php

                                                                    $UrlR = [];
                                                                    $Url = parse_str( parse_url( $New['FileUrl'], PHP_URL_QUERY ), $UrlR );

                                                                @endphp


                                                                <div class="video-container item @if($ii == 0) active @endif">
                                                                    <div class="youtube-video"
                                                                         id='{{ $UrlR['v'] }}'></div>
                                                                    <div class="carousel-caption">{{ $New['NewName'] }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if($New['FileType'] == "Archivo" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <img src="{{ asset('img/') }}/{{ $New['FileUrl'] }}"
                                                                         alt="Second slide" style="width: 100%;">

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif
                                                            @if($New['FileType'] == "Info" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <div style="height: 320px; background-color: {{ $New['NewBackground'] }}; text-align: center; color: {{ $New['NewColorWord'] }};   ">

                                                                        <p style="    position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">{{ $New['NewDescription'] }}</p>

                                                                    </div>

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif


                                                            @php

                                                                $ii++;

                                                            @endphp

                                                        @endforeach


                                                    </div>
                                                    <div class="controls">
                                                        <a class="left carousel-control" href="#random_number1"
                                                           data-slide="prev">
                                                            <div class="left-button">
                                                                <div class="glyphicon glyphicon-chevron-left"></div>
                                                            </div>
                                                        </a>
                                                        <a class="right carousel-control" href="#random_number1"
                                                           data-slide="next">
                                                            <div class="right-button">
                                                                <div class="glyphicon glyphicon-chevron-right"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                        @if($Left == 'Calendar')

                            <li id="Calendar">
                                <!-- Calendar -->
                                <div class="box box-solid ">
                                    <div class="box-header with-border">
                                        <i class="fa fa-calendar"></i>

                                        <h3 class="box-title">Calendario Nikken</h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <!-- button with a dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-box-tool"
                                                        data-widget="collapse"><i
                                                            class="fa fa-minus"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <a id="News" href="/calendar" type="button" class="btn btn-box-tool"
                                                    >
                                                        <i class="fa fa-cog"></i></a>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"></div>
                                    </div>

                                    <!-- /.box-body -->
                                </div>
                                @if(count($EventsInfo) > 0)
                                    <div class="">
                                        <div class="box box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Eventos</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="box-group" id="accordion">
                                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                    @foreach($EventsInfo as $event)

                                                        @if($event['EventDateExpire'] > date("Y-m-d") && $event['EventDateStart'] > date("Y-m-d"))

                                                            <div class="panel box "
                                                                 style=";background-color: {{ $event['EventBackground'] }}">
                                                                <a data-toggle="collapse"
                                                                   style="text-decoration: none;"
                                                                   data-parent="#accordion"
                                                                   href="#{{ $event['EventID'] }}">
                                                                    <div class="box-header with-border">
                                                                        <h4 class="box-title" style="color: #fff;">

                                                                            {{ $event['EventTitle'] }}
                                                                        </h4>
                                                                        <small class="pull-right" style="color: #fff">
                                                                            {{ date("D d M y",strtotime($event['EventDateStart'])) }}
                                                                        </small>
                                                                    </div>
                                                                </a>

                                                                <div id="{{ $event['EventID'] }}"
                                                                     class="panel-collapse collapse ">
                                                                    <div class="box-body" style="color: #fff;">
                                                                        @if($event['EventDescription'])
                                                                            <h3>Descripción</h3>
                                                                            {{ $event['EventDescription'] }}
                                                                        @endif
                                                                        @if(count((array)json_decode($event['EventGuests'])) > 0)
                                                                            <h4>Invitados</h4>

                                                                            <ul class="list-group">
                                                                                @foreach(json_decode($event['EventGuests']) as $Guest)
                                                                                    <li class="list-group-item"
                                                                                        style="color: {{ $event['EventBackground'] }};">{{ $Guest }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endif

                                                    @endforeach

                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                            @endif
                            <!-- /.box -->
                            </li>

                        @endif

                        @if($Left == 'NikkenYoutube')

                            <li id="NikkenYoutube">

                                <div class="row" id="NikkenYoutube">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Canal de Youtube</h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>


                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number3" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">
                                                        @php
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach($YoutubeVideos as $video)

                                                            <div class="video-container item @if($ii == 0) active @endif">
                                                                <div class="youtube-video"
                                                                     id='{{ $video['v_id'] }}'></div>
                                                                <div class="carousel-caption">{{ $video['v_name'] }}
                                                                </div>
                                                            </div>

                                                            @php

                                                                $ii++;

                                                            @endphp

                                                        @endforeach


                                                    </div>
                                                    <div class="controls">
                                                        <a class="left carousel-control" href="#random_number3"
                                                           data-slide="prev">
                                                            <div class="left-button">
                                                                <div class="glyphicon glyphicon-chevron-left"></div>
                                                            </div>
                                                        </a>
                                                        <a class="right carousel-control" href="#random_number3"
                                                           data-slide="next">
                                                            <div class="right-button">
                                                                <div class="glyphicon glyphicon-chevron-right"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                        @if($Left == 'UsersBirthday')

                            <li id="UsersBirthday">

                                <div class="row" id="UsersBirthday">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Cumpleaños <strong>{{ date('M') }}</strong></h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button id="FileBirthday" type="button"
                                                                class="btn btn-box-tool">
                                                            <i class="fas fa-cloud-upload-alt"></i></button>

                                                        <input type="file" id="FileBirthdayInput" class="hidden">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number1" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">

                                                        <div class="item active ">
                                                            <img src="{{ asset('/img/UsersBirthDay.jpg') }}"
                                                                 alt="ImageBirthday" id="ImageBirthday"
                                                                 style="width: 100%;">
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                    @endforeach

                @endif

            </ul>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 ">

            <ul class="connectedSortable SortableRight" style="list-style-type: none;
        list-style: none;     margin-left: -25px;">

                @if($DashRight != "")

                    @foreach ($DashRight as $Right)

                        @if($Right == 'News')

                            <li id="News">

                                <div class="row" id="News">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Noticias</h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button id="News" type="button" class="btn btn-box-tool"
                                                                data-toggle="modal" data-target="#modal-news">
                                                            <i class="fa fa-cog"></i></button>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number1" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">
                                                        @php
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach($News as $New)

                                                            @if($New['FileType'] == "Url" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "Regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                @php

                                                                    $UrlR = [];
                                                                    $Url = parse_str( parse_url( $New['FileUrl'], PHP_URL_QUERY ), $UrlR );

                                                                @endphp


                                                                <div class="video-container item @if($ii == 0) active @endif">
                                                                    <div class="youtube-video"
                                                                         id='{{ $UrlR['v'] }}'></div>
                                                                    <div class="carousel-caption">{{ $New['NewName'] }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if($New['FileType'] == "Archivo" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "Regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <img src="{{ asset('img/') }}/{{ $New['FileUrl'] }}"
                                                                         alt="Second slide">

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif
                                                            @if($New['FileType'] == "Info" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "Regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <div style="height: 320px; background-color: {{ $New['NewBackground'] }}; text-align: center; color: {{ $New['NewColorWord'] }};   ">

                                                                        <p style="    position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">{{ $New['NewDescription'] }}</p>

                                                                    </div>

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif


                                                            @php

                                                                $ii++;

                                                            @endphp

                                                        @endforeach


                                                    </div>
                                                    <div class="controls">
                                                        <a class="left carousel-control" href="#random_number1"
                                                           data-slide="prev">
                                                            <div class="left-button">
                                                                <div class="glyphicon glyphicon-chevron-left"></div>
                                                            </div>
                                                        </a>
                                                        <a class="right carousel-control" href="#random_number1"
                                                           data-slide="next">
                                                            <div class="right-button">
                                                                <div class="glyphicon glyphicon-chevron-right"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                        @if($Right == 'News')

                            <li id="News">

                                <div class="row" id="News">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Noticias</h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button id="News" type="button" class="btn btn-box-tool"
                                                                data-toggle="modal" data-target="#modal-news">
                                                            <i class="fa fa-cog"></i></button>

                                                    </div>
                                                    <button type="button" class="btn btn-box-tool" data-widget="remove">
                                                        <i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number1" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">
                                                        @php
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach($News as $New)
                                                            @if($New['FileType'] == "Url" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )
                                                                @php

                                                                    $UrlR = [];
                                                                    $Url = parse_str( parse_url( $New['FileUrl'], PHP_URL_QUERY ), $UrlR );

                                                                @endphp


                                                                <div class="video-container item @if($ii == 0) active @endif">
                                                                    <div class="youtube-video"
                                                                         id='{{ $UrlR['v'] }}'></div>
                                                                    <div class="carousel-caption">{{ $New['NewName'] }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if($New['FileType'] == "Archivo" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <img src="{{ asset('img/') }}/{{ $New['FileUrl'] }}"
                                                                         alt="Second slide" style="width: 100%;">

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif
                                                            @if($New['FileType'] == "Info" && ($New['CountriesView'] == Auth::user()->UserCountry || $New['CountriesView'] == "regional") && $New['ExpireDate'] >= date("Y-m-d") )

                                                                <div class="item @if($ii == 0) active @endif">
                                                                    <div style="height: 320px; background-color: {{ $New['NewBackground'] }}; text-align: center; color: {{ $New['NewColorWord'] }};   ">

                                                                        <p style="    position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">{{ $New['NewDescription'] }}</p>

                                                                    </div>

                                                                    <div class="carousel-caption">
                                                                        {{ $New['NewName'] }}
                                                                    </div>
                                                                </div>

                                                            @endif


                                                            @php

                                                                $ii++;

                                                            @endphp

                                                        @endforeach


                                                    </div>
                                                    <div class="controls">
                                                        <a class="left carousel-control" href="#random_number1"
                                                           data-slide="prev">
                                                            <div class="left-button">
                                                                <div class="glyphicon glyphicon-chevron-left"></div>
                                                            </div>
                                                        </a>
                                                        <a class="right carousel-control" href="#random_number1"
                                                           data-slide="next">
                                                            <div class="right-button">
                                                                <div class="glyphicon glyphicon-chevron-right"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                        @if($Right == 'Calendar')

                            <li id="Calendar">
                                <!-- Calendar -->
                                <div class="box box-solid ">
                                    <div class="box-header with-border">
                                        <i class="fa fa-calendar"></i>

                                        <h3 class="box-title">Calendario Nikken</h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <!-- button with a dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-box-tool"
                                                        data-widget="collapse"><i
                                                            class="fa fa-minus"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <a id="News" href="/calendar" type="button" class="btn btn-box-tool"
                                                    >
                                                        <i class="fa fa-cog"></i></a>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"></div>
                                    </div>

                                    <!-- /.box-body -->
                                </div>
                                @if(count($EventsInfo) > 0)
                                    <div class="">
                                        <div class="box box-solid">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Eventos</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="box-group" id="accordion">
                                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                    @foreach($EventsInfo as $event)

                                                        @if($event['EventDateExpire'] > date("Y-m-d") && $event['EventDateStart'] > date("Y-m-d"))

                                                            <div class="panel box "
                                                                 style=";background-color: {{ $event['EventBackground'] }}">
                                                                <div class="box-header with-border">
                                                                    <h4 class="box-title">
                                                                        <a data-toggle="collapse"
                                                                           style="text-decoration: none;color: #fff;"
                                                                           data-parent="#accordion"
                                                                           href="#{{ $event['EventID'] }}">
                                                                            {{ $event['EventTitle'] }}
                                                                        </a>
                                                                    </h4>
                                                                    <small class="pull-right" style="color: #fff">
                                                                        {{ date("D d M y",strtotime($event['EventDateStart'])) }}
                                                                    </small>
                                                                </div>
                                                                <div id="{{ $event['EventID'] }}"
                                                                     class="panel-collapse collapse ">
                                                                    <div class="box-body" style="color: #fff;">
                                                                        @if($event['EventDescription'])
                                                                            <h3>Descripción</h3>
                                                                            {{ $event['EventDescription'] }}
                                                                        @endif
                                                                        @if(count((array)json_decode($event['EventGuests'])) > 0)
                                                                            <h4>Invitados</h4>

                                                                            <ul class="list-group">
                                                                                @foreach(json_decode($event['EventGuests']) as $Guest)
                                                                                    <li class="list-group-item"
                                                                                        style="color: {{ $event['EventBackground'] }};">{{ $Guest }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endif

                                                    @endforeach

                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                            @endif
                            <!-- /.box -->
                            </li>

                        @endif

                        @if($Right == 'NikkenYoutube')

                            <li id="NikkenYoutube">

                                <div class="row" id="NikkenYoutube">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Canal de Youtube</h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>


                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number3" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">
                                                        @php
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach($YoutubeVideos as $video)

                                                            <div class="video-container item @if($ii == 0) active @endif">
                                                                <div class="youtube-video"
                                                                     id='{{ $video['v_id'] }}'></div>
                                                                <div class="carousel-caption">{{ $video['v_name'] }}
                                                                </div>
                                                            </div>

                                                            @php

                                                                $ii++;

                                                            @endphp

                                                        @endforeach


                                                    </div>
                                                    <div class="controls">
                                                        <a class="left carousel-control" href="#random_number3"
                                                           data-slide="prev">
                                                            <div class="left-button">
                                                                <div class="glyphicon glyphicon-chevron-left"></div>
                                                            </div>
                                                        </a>
                                                        <a class="right carousel-control" href="#random_number3"
                                                           data-slide="next">
                                                            <div class="right-button">
                                                                <div class="glyphicon glyphicon-chevron-right"></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                        @if($Right == 'UsersBirthday')

                            <li id="UsersBirthday">

                                <div class="row" id="UsersBirthday">

                                    <!-- /.col -->
                                    <div class="col-md-12">
                                        <div class="box box-solid ">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Cumpleaños <strong>{{ date('M') }}</strong></h3>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-box-tool"
                                                            data-widget="collapse"><i
                                                                class="fa fa-minus"></i>
                                                    </button>
                                                    <div class="btn-group">
                                                        <button id="FileBirthday" type="button"
                                                                class="btn btn-box-tool">
                                                            <i class="fas fa-cloud-upload-alt"></i></button>

                                                        <input type="file" id="FileBirthdayInput" class="hidden">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">

                                                <div id="random_number1" class="carousel slide youtube-carousel"
                                                     data-ride="carousel" data-interval="false">
                                                    <div class="carousel-inner">

                                                        <div class="item active ">
                                                            <img src="{{ asset('/img/UsersBirthDay.jpg') }}"
                                                                 alt="ImageBirthday" id="ImageBirthday"
                                                                 style="width: 100%;">
                                                        </div>

                                                    </div>

                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </li>

                        @endif

                    @endforeach

                @endif

            </ul>

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    <div class="modal fade" id="modal-news">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edición de Noticias</h4>
                </div>
                <div class="modal-body" style="max-height: 500px;overflow-y: auto;">

                    <div id="app">
                        <news-component :news="'{{  json_encode($News) }}'"
                                        :token="'{{ csrf_token() }}'"></news-component>
                    </div>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection()

@section("scripts")
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">--}}
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{-- Video News --}}
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">--}}
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">--}}
    {{--<link rel="stylesheet" href="../Content/themes/base/minified/jquery.ui.core.min.css" />--}}
    {{--<link rel="stylesheet" href="../Content/themes/base/minified/jquery.ui.theme.min.css" />--}}
    {{--<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>--}}
    <script>

        $("#FileBirthday").on("click", function () {
            $("#FileBirthdayInput").trigger("click");

            $(function () {
                $('#FileBirthdayInput').change(function (e) {
                    addImage(e);
                });

                function addImage(e) {
                    var file = e.target.files[0],
                        imageType = /image.*/;

                    if (!file.type.match(imageType))
                        return;

                    var reader = new FileReader();
                    reader.onload = fileOnload;
                    reader.readAsDataURL(file);
                }

                function fileOnload(e) {
                    // $("#imgFile").removeClass('hidden');

                    var result = e.target.result;
                    $('#ImageBirthday').attr("src", result);

                    var file_data = $('#FileBirthdayInput').prop('files')[0];
                    var form_data = new FormData();

                    form_data.append('FileBirthdayInput', file_data);

                    var token = "{{ csrf_token() }}";
                    $.ajax({
                        url: "{{ url('/usersBirthday') }}",
                        headers: {'X-CSRF-TOKEN': token},
                        type: 'POST',

                        data: form_data,
                        contentType: false,
                        processData: false,

                        beforeSend: function () {
                            // alert("akus")
                        },
                        success: function (response) {

                            console.log(response)

                        }
                    });

                }
            });

        });

        //Start Youtube API
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var youtubeReady = false;

        //Variable for the dynamically created youtube players
        var players = new Array();
        var isPlaying = false;

        function onYouTubeIframeAPIReady() {
            //The id of the iframe and is the same as the videoId
            jQuery(".youtube-video").each(function (i, obj) {
                players[obj.id] = new YT.Player(obj.id, {
                    videoId: obj.id,
                    playerVars: {
                        controls: 2,
                        rel: 0,
                        autohide: 1,
                        showinfo: 0,
                        modestbranding: 1,
                        wmode: "transparent",
                        html5: 1
                    },
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            });
            youtubeReady = true;
        }


        function onPlayerStateChange(event) {
            var target_control = jQuery(event.target.getIframe()).parent().parent().parent().find(".controls");

            var target_caption = jQuery(event.target.getIframe()).parent().find(".carousel-caption");
            switch (event.data) {
                case -1:
                    jQuery(target_control).fadeIn(500);
                    jQuery(target_control).children().unbind('click');
                    break
                case 0:
                    jQuery(target_control).fadeIn(500);
                    jQuery(target_control).children().unbind('click');
                    break;
                case 1:
                    jQuery(target_control).children().click(function () {
                        return false;
                    });
                    jQuery(target_caption).fadeOut(500);
                    jQuery(target_control).fadeOut(500);
                    break;
                case 2:
                    jQuery(target_control).fadeIn(500);
                    jQuery(target_control).children().unbind('click');
                    break;
                case 3:
                    jQuery(target_control).children().click(function () {
                        return false;
                    });
                    jQuery(target_caption).fadeOut(500);
                    jQuery(target_control).fadeOut(500);
                    break;
                case 5:
                    jQuery(target_control).children().click(function () {
                        return false;
                    });
                    jQuery(target_caption).fadeOut(500);
                    jQuery(target_control).fadeOut(500);
                    break;
                default:
                    break;
            }
        };

        jQuery(window).bind('load', function () {
            jQuery(".carousel-caption").fadeIn(500);
            jQuery(".controls").fadeIn(500);
        });

        jQuery('.carousel').bind('slid.bs.carousel', function (event) {
            jQuery(".controls").fadeIn(500);
        });

        $(function () {

            // datepicker
            $('#calendar').datepicker({
                format: 'yyyy-mm-dd',
                // multidate: true,
                // todayHighlight: true,
                minDate: 0,
            });

            _events = '{{ json_encode($Events) }}';

            _events = _events.replace(/&quot;/g, '"');

            _events = JSON.parse(_events);

            // $('#calendar').datepicker('setDates', ['2018-10-17'])
            $('#calendar').datepicker('setDates', _events)

        });
    </script>

@endsection()
