@extends('layouts.layout')

@section('MenuHref',"/")
@section('TitlePage',"Perfil")


@section('content')


    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" style="width: 130px;height: 130px; cursor: pointer;"
                        id="UserImage" src="{{ asset('fotos_intra/') }}/{{ $UserInfo->UserPhoto }}" alt="User profile picture">

                    <input type="file" id="UserPhoto" class="hidden">
                    
                    <h3 class="profile-username text-center">{{ $UserInfo->UserName }}</h3>

                    <p class="text-muted text-center">{{ $UserInfo->UserJobTitle }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Pa&iacute;s</b> <a class="pull-right">
                                {{--flag-icon flag-icon-mx--}}
                                @switch($UserInfo['UserCountry'])

                                    @case('mexico')
                                    <i class="flag-icon flag-icon-mx"></i>
                                    @break
                                    @case('colombia')
                                    <i class="flag-icon flag-icon-co"></i>
                                    @break
                                    @case('peru')
                                    <i class="flag-icon flag-icon-pe"></i>
                                    @break
                                    @case('costa rica')
                                    <i class="flag-icon flag-icon-cr"></i>
                                    @break
                                    @case('el salvador')
                                    <i class="flag-icon flag-icon-sv"></i>
                                    @break
                                    @case('ecuador')
                                    <i class="flag-icon flag-icon-ec"></i>
                                    @break
                                    @case('guatemala')
                                    <i class="flag-icon flag-icon-gt"></i>
                                    @break
                                    @case('panama')
                                    <i class="flag-icon flag-icon-pa"></i>
                                    @break

                                @endswitch

                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Ingreso:</b> <i class="pull-right">{{ date("m/Y",strtotime($UserInfo->DocDate)) }}</i>
                        </li>
                        <li class="list-group-item">
                            <b>&Aacute;rea:</b> <i class="pull-right">{{ $UserInfo->UserArea }}</i>
                        </li>
                    </ul>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Informaci&oacute;n</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fas fa-gamepad" style="color: #00a138"></i> Control:</strong>

                    <p class="text-muted pull-right">
                        @switch($UserInfo['UserCountryControl'])

                            @case('latinoamerica')
                            <img src="/img/latinoamericawico.png"
                                 style="width:25px;background-color: #5fabb2;border-radius:50%;" data-toggle="tooltip"
                                 data-placement="top" title="Latinoam&eacute;rica"></img>&nbsp;
                            @break
                            @case('mexico')
                            <i class="flag-icon flag-icon-mx" data-toggle="tooltip" data-placement="top"
                               title="M&eacute;xico"></i>
                            @break
                            @case('colombia')
                            <i class="flag-icon flag-icon-co" data-toggle="tooltip" data-placement="top"
                               title="Colombia"></i>
                            @break
                            @case('peru')
                            <i class="flag-icon flag-icon-pe" data-toggle="tooltip" data-placement="top"
                               title="Per&uacte;"></i>
                            @break
                            @case('costa rica')
                            <i class="flag-icon flag-icon-cr" data-toggle="tooltip" data-placement="top"
                               title="Costa Rica"></i>
                            @break
                            @case('el salvador')
                            <i class="flag-icon flag-icon-sv" data-toggle="tooltip" data-placement="top"
                               title="El Salvador"></i>
                            @break
                            @case('ecuador')
                            <i class="flag-icon flag-icon-ec" data-toggle="tooltip" data-placement="top"
                               title="Ecuador"></i>
                            @break
                            @case('guatemala')
                            <i class="flag-icon flag-icon-gt" data-toggle="tooltip" data-placement="top"
                               title="Guatemala"></i>
                            @break
                            @case('panama')
                            <i class="flag-icon flag-icon-pa" data-toggle="tooltip" data-placement="top"
                               title="Panam&aacute;"></i>
                            @break

                        @endswitch
                    </p>

                    <hr>

                    <strong><i class="fas fa-mobile-alt"></i> Telefono:</strong>

                    <p class="text-muted pull-right">{{ $UserInfo->UserPhone }}</p>

                    <hr>

                    <strong><i class="fas fa-at" style="color: #0d6aad;"></i> Email:</strong>

                    <p class="text-muted pull-right">{{ $UserInfo->UserEmail }}</p>

                    <hr>

                    <strong><i class="fas fa-shield-alt" style="color: #00a138;"></i> Permisos</strong>

                    <p id="UserPermissions">

                        @foreach(json_decode($UserInfo->UserPermissions) as $Permission)

                            <span class="label" data-toggle="tooltip" data-placement="top" title="
                            @switch($Permission)

                                @case('VC')
                                        Vistaicompleta
                                        @break
                                @case('VSV')
                                        Vista sin venta
                                        @break
                                @case('VCVM')
                                        Vista con variables mensuales
                                        @break
                                @case('VI')
                                        Vista de invitado
                                        @break
                                @case('AI')
                                        Administración de la Intranet
                                        @break
                                @case('ACB')
                                        Administración de Cuentas Bancarias
                                        @break
                                @case('ACE')
                                        Administración de Compra Empleado
                                        @break
                                @case('CER')
                                        Reporte Compra Empleado
                                        @break
                                @case('News')
                                        Noticias
                                        @break
                                @case('CU')
                                        Control de Usuarios
                                        @break
                                @case('CtrlUsrs')
                                        Consulta Usuarios
                                        @break
                                @case('CW')
                                        Camaras Web
                                        @break
                                @case('GCE')
                                        Gestión de Compra Empleado
                                        @break
                                @case('RE')
                                        Reporte de Empleado
                                        @break
                                @case('CO')
                                        Colombia
                                        @break
                                @case('MX')
                                        México
                                        @break
                                @case('ECU')
                                        Ecuador
                                        @break
                                @case('PAN')
                                        Panamá
                                        @break
                                @case('SAL')
                                        Salvador
                                        @break
                                @case('GTM')
                                        Guatemala
                                        @break
                                @case('CRI')
                                        Costa Rica
                                        @break
                                @case('PR')
                                        Perú
                                        @break
                                @case('IC')
                                        Informes Comerciales
                                        @break
                                @case('CC')
                                        Consulta Comerciantes
                                        @break
                                @case('MP')
                                        Mensaje Pedidos
                                        @break
                                @case('RS')
                                        Reporte de Seminarios
                                        @break
                                @case('SA')
                                        Saldos Acumulados
                                        @break
                                @case('CCR')
                                        Consulta CheckRegister
                                        @break
                                @case('CuadreMVS')
                                        Cuadre MCOM, Vista y SAP
                                        @break
                                @case('SV')
                                        Solicitud Vacaciones
                                        @break

                            @endswitch"
                                  style="cursor:pointer;background-color: @php echo($colors[array_rand($colors)]); @endphp !IMPORTANT;">{{$Permission}}

                        </span>

                        @endforeach

                    </p>

                    <hr>

                    {{--<strong><i class="fa fa-file-text-o margin-r-5"></i> Descripci&oacute;n</strong>

                    <p></p>--}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    {{--<li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>--}}
                    {{--<li class="active"><a href="#timeline" data-toggle="tab">Actividad</a></li>--}}
                    <li class="active"><a href="#settings" data-toggle="tab">Configuraciones</a></li>
                </ul>
                <div class="tab-content">
                {{--<div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg"
                                 alt="user image">
                            <span class="username">
                      <a href="#">Jonathan Burke Jr.</a>
                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                    </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                        </p>
                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                            </li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i>
                                    Like</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i>
                                    Comments
                                    (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg"
                                 alt="User Image">
                            <span class="username">
                      <a href="#">Sarah Ross</a>
                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                    </span>
                            <span class="description">Sent you a message - 3 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome
                            tools to help create filler text for everyone from bacon lovers
                            to Charlie Sheen fans.
                        </p>

                        <form class="form-horizontal">
                            <div class="form-group margin-bottom-none">
                                <div class="col-sm-9">
                                    <input class="form-control input-sm" placeholder="Response">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                                 alt="User Image">
                            <span class="username">
                      <a href="#">Adam Jones</a>
                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                    </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="row margin-bottom">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                                        <br>
                                        <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                                        <br>
                                        <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                            </li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i>
                                    Like</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i>
                                    Comments
                                    (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                </div>--}}
                <!-- /.tab-pane -->
                    <div class="tab-pane " id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-aqua"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your
                                        friend request
                                    </h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera bg-purple"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="UserNick" class="col-sm-2 control-label">Usuario</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="UserNick" placeholder="jrmex">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="UserSkype" class="col-sm-2 control-label">Skype</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="UserSkype" >
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="UserPhone" class="col-sm-2 control-label">Tel&eacute;fono</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="UserPhone" >
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="UserPassword" class="col-sm-2 control-label">Contrase&ntilde;a</label>

                                <div class="col-sm-10">
                                    <input type="password" autocomplete="false" class="form-control" id="UserPassword" placeholder="***********">
                                </div>

                            </div>

                            <div class="form-group">
                                <div  class="col-sm-2"></div>

                                <div class="col-sm-10 ">
                                    <input type="password" class="form-control" autocomplete="false" id="UserPasswordCheck" placeholder="***********">
                                    <span style="color: red">{{ $errors->first("UserPasswordCheck") }}</span>
                                </div>

                            </div>

                            <div class="form-group ">
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <button id="DataSave" class="btn btn-info ">

                                        <label id="label">{{ __('Aceptar') }}</label>
                                        <img src="{{asset('images/load.gif')}}" style="width:30px;" id="loading" class="hidden">

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>

@endsection()
@section('scripts')

    <script>

        $("#DataSave").on("click",function () {
            var token = "{{ csrf_token() }}";
            event.preventDefault();

            $(this).attr("disabled", "disabled");
            $("#label").addClass("hidden");
            $("#loading").removeClass("hidden");

            var form_data = new FormData();

            form_data.append('UserNick', $("#UserNick").val());
            form_data.append('UserSkype', $("#UserSkype").val());
            form_data.append('UserPhone', $("#UserPhone").val());
            form_data.append('UserPassword', $("#UserPassword").val());
            form_data.append('UserPasswordCheck', $("#UserPasswordCheck").val());

            $.ajax({

                url: "{{ url('/profile/saveData') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: form_data,
                contentType: false,
                processData: false,

                success: function (response) {

                    console.log(response)
                    if (response['type'] == "success") {
                        swal(response['mensaje']," ", "success");
                    }

                    if (response['type'] == "error") {
                        swal("Error",response['mensaje'], "error");
                    }
                    $("#DataSave").attr("disabled", false);
                    $("#label").removeClass("hidden");
                    $("#loading").addClass("hidden");

                }

            });
        });

        $("#UserImage").on("click",function () {

            $("#UserPhoto").trigger("click");

                $('#UserPhoto').change(function (e) {
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
                    var result = e.target.result;
                    $('#UserImage').attr("src", result);
                }

        });

        $("#UserPhoto").on("change",function () {

            var token = "{{ csrf_token() }}";
            event.preventDefault();

            var file_data = $('#UserPhoto').prop('files')[0];
            var form_data = new FormData();

            form_data.append('UserPhoto', file_data);

            $.ajax({

                url: "{{ url('/profile/changeImage') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: form_data,
                contentType: false,
                processData: false,

                success: function (response) {

                    console.log(response)
                    if (response['type'] == "error") {
                        swal("Error", response['mensaje'], "error");
                    }

                }

            });
        });

    </script>

@endsection()
