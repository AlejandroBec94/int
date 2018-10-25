@extends('layouts.layout')

@section('MenuHref',"/")
@section('TitlePage',"Inducción Staff")


@section('content')
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <style>

        .youtube-carousel {
            border: 4px solid #00a65a;
        }

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

        .carousel-control .glyphicon-chevron-left {
            top: 35%;
            font-size: 20px;
            left: 5%;
            margin: 0;
        }

        .carousel-control .glyphicon-chevron-right {
            top: 35%;
            font-size: 20px;
            left: 33%;
            margin: 0;
        }

        .carousel-control.left, .carousel-control.right {
            background-image: none;
            color: #ffffff;
            top: 50%;
            transform: translate(0,-50%);
            -webkit-transform: translate(0,-50%);
            -ms-transform: translate(0,-50%);
            opacity: 1;
            height: 120px;
        }

        .controls {
            display: none;
        }

        .carousel-control:hover {
            text-decoration: none;
            filter: alpha(opacity=60);
            outline: 0;
            opacity: 0.6;
        }

        .left-button {
            height: 70px;
            width: 35px;
            border-radius: 0 90px 90px 0;
            top: 50%;
            -webkit-transform: translate(0,-50%);
            -ms-transform: translate(0,-50%);
            transform: translate(0,-50%);
            -moz-border-radius: 0 90px 90px 0;
            -webkit-border-radius: 0 90px 90px 0;
            background-color: #00a65a;
            display: inline-block;
            position: relative;
            float: left;
            /*subpixel bug*/
            margin-left: -1px;
        }

        .right-button {
            height: 70px;
            width: 35px;
            border-radius: 90px 0 0 90px;
            top: 50%;
            -webkit-transform: translate(0,-50%);
            -ms-transform: translate(0,-50%);
            transform: translate(0,-50%);
            -moz-border-radius: 90px 0 0 90px;
            -webkit-border-radius: 90px 0 0 90px;
            background-color: #00a65a;
            display: inline-block;
            position: relative;
            float: right;
            /*subpixel bug*/
            margin-right: -1px;
        }


        .carousel-caption {
            display: none;
            background: none repeat scroll 0 0 #00a65a;
            bottom: 0;
            font-size: 12px;
            text-align: center;
            opacity: 1;
            padding: 7px 30px 7px;
            text-transform: uppercase;
            z-index: 11;
            pointer-events: none;
        }

        @media screen and (min-width: 768px) {
            .right-button {
                height: 120px;
                width: 60px;
                border-radius: 90px 0 0 90px;
                -moz-border-radius: 90px 0 0 90px;
                -webkit-border-radius: 90px 0 0 90px;
                display: inline-block;
                position: relative;
                float: right;
            }

            .left-button {
                height: 120px;
                width: 60px;
                border-radius: 0 90px 90px 0;
                -moz-border-radius: 0 90px 90px 0;
                -webkit-border-radius: 0 90px 90px 0;
                display: inline-block;
                position: relative;
                float: left;
            }

            .carousel-control .glyphicon-chevron-left {
                top: 35%;
                font-size: 35px;
                left: 5%;
            }

            .carousel-control .glyphicon-chevron-right {
                top: 35%;
                font-size: 35px;
                left: 35%;
            }

            .carousel-caption {
                font-size: 18px;
                padding: 15px 20px 15px;
            }
        }

        @media screen and (min-width: 992px) {
            .carousel-caption {
                font-size: 18px;
                padding: 15px 20px 15px;
            }
        }
    
    </style>


<div class="container">
   <br>
   <br>
   <br>
   <br>
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div id="random_number1" class="carousel slide youtube-carousel"  data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div class="video-container item active">
            <div class="youtube-video" id='j3YFbNYFXz0'></div>
            <div class="carousel-caption">Una historia que contar. NIKKEN Latinoamérica 25 años</div>
          </div>
          <div class="video-container item">
            <div class="youtube-video" id='zn3dVkrzpSM'></div>
            <div class="carousel-caption">The Nikken Rollout - How to Demo the Sleep System</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='Xh8X0YdmTz4'></div>
            <div class="carousel-caption">Hogar De Bienestar con Luis Kasuga</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='iGnNoG8qbco'></div>
            <div class="carousel-caption">ALMOHADAS NIKKEN / kenko dream makura / kenko pillow oyasumi</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='FdZbYRTjbZ8'></div>
            <div class="carousel-caption">Air Wellness Power 5 Pro de NIKKEN. Mantenimiento y cambio de repuestos.</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='5hFb7w0VZHU'></div>
            <div class="carousel-caption">New Nikken PiMag Waterfall</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='aBq5VPukgcs'></div>
            <div class="carousel-caption">Instalación de Filtro Aqua Pour Deluxe de Nikken</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='lRMESLbfvTE'></div>
            <div class="carousel-caption">NIKKEN PiMag Ultra Shower System</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='_cwajDJJ4e8'></div>
            <div class="carousel-caption">Stress Eraser Is What I Call It</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='IMCk2YMMDj8'></div>
            <div class="carousel-caption">Harness the Power of Magnets in a small, easy to use NIKKEN PowerPatch</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='rzdsQWFlqY8'></div>
            <div class="carousel-caption">JOYERÍA TRIPHASE NIKKEN</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='fOHx4g7gMsg'></div>
            <div class="carousel-caption">Jade GreenZymes</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='Be_xr_oTdnc'></div>
            <div class="carousel-caption">Lactoferrin Gold 1.8 de Nikken</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='7IC_EMIpxNg'></div>
            <div class="carousel-caption">Nikken... tecnologia magnetica avanzada</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='9dRzs-SUq74'></div>
            <div class="carousel-caption">INFRARROJO LEJANO DE NIKKEN</div>
          </div>
          <div class="video-container item ">
            <div class="youtube-video" id='IRKbQbhWC5k'></div>
            <div class="carousel-caption">A 6 mins de emprender tu negocio</div>
          </div>
        </div>
        <div class="controls">
          <a class="left carousel-control" href="#random_number1" data-slide="prev">
            <div class="left-button">
              <div class="glyphicon glyphicon-chevron-left"></div>
            </div>
          </a>
          <a class="right carousel-control" href="#random_number1" data-slide="next">        
            <div class="right-button">
              <div class="glyphicon glyphicon-chevron-right"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection()
@section('scripts')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  

    <script >

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
                    jQuery(target_control).children().click(function () { return false; });
                    jQuery(target_caption).fadeOut(500);
                    jQuery(target_control).fadeOut(500);
                    break;
                case 2:
                    jQuery(target_control).fadeIn(500);
                    jQuery(target_control).children().unbind('click');
                    break;
                case 3:
                    jQuery(target_control).children().click(function () { return false; });
                    jQuery(target_caption).fadeOut(500);
                    jQuery(target_control).fadeOut(500);
                    break;
                case 5:
                    jQuery(target_control).children().click(function () { return false; });
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


    </script>




@endsection()
