@extends('layouts.layout')

@section('TitlePage',"Usuarios")
@section('TitleSubMenu',"Creación")


@section('content')

    <!-- SELECT2 EXAMPLE -->

    <!-- /.box -->
    <form method="POST" action="/users/store" enctype="multipart/form-data">

        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        <div class="row">

            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <div class="check pull-right">
                            <input id="UserStatus" type="checkbox">
                            <label for="UserStatus"></label>
                        </div>
                        <img class="profile-user-img img-responsive img-circle" style="cursor:pointer;" id="UserPhoto"
                             src="{{ asset('fotos_intra/Foto_default.jpg') }}" alt="User profile picture">
                        <input type="file" class="hidden" id="FilePhoto" name="FilePhoto">

                        <br>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Nombre Completo</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <input type="text" class="form-control" name="UserName">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Correo Electr&oacute;nico</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="example@nikkenlatam.com"
                                               name="UserEmail">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Nombre Usuario</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-user-tag"></i>
                                        </div>
                                        <input type="text" class="form-control" placeholder="rjmex" name="UserNick">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Contrase&ntilde;a</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <input type="password" class="form-control" placeholder="**********"
                                               name="UserPassword" id="UserPassword">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Verificar Contrase&ntilde;a</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <input type="password" class="form-control" placeholder="**********"
                                               id="UserPassword2">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                        </ul>

                        <button type="submit" class="btn btn-primary btn-block" id="SaveUser">
                            <label id="label">{{ __('Aceptar') }}</label>
                            <img src="{{asset('images/load.gif')}}" style="width:30px;" id="loading" class="hidden">
                        </button>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- /.box -->
            </div>
            <div class="col-md-8">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">General</h3>
                    </div>
                    <div class="box-body">
                        <!--  -->
                        <div class="form-group">
                            <label>Puesto</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <input type="text" class="form-control" name="UserJobTitle">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!--  -->
                        <div class="form-group">
                            <label>&Aacute;rea</label>


                            <select name="UserArea" id="UserArea" class="form-control" style="height:35px !IMPORTANT;">
                                <option value=""></option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->AreaName }}"
                                            data-info="{{ $area->AreaPermissions }}"
                                            id="{{ $area->AreaID }}">{{ $area->AreaName }}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-6">
                            <label>Pa&iacute;s Origen</label>


                            <select name="UserCountry" id="UserCountry" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="colombia" select>Colombia</option>
                                <option value="mexico">México</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="peru">Perú</option>
                                <option value="panama">Panamá</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="salvador">El Salvador</option>
                                <option value="costarica" >Costa Rica</option>
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-6">
                            <label>Origen</label>


                            <select name="UserCountryControl" id="UserCountryControl" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="latinoamerica" selected>Latinoam&eacute;rica</option>
                                <option value="colombia">Colombia</option>
                                <option value="mexico">México</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="peru">Perú</option>
                                <option value="panama">Panamá</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="salvador">El Salvador</option>
                                <option value="costarica" >Costa Rica</option>
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Fecha de Nacimiento</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-birthday-cake"></i>
                                </div>
                                <input type="text" class="form-control" id="UserBorn" name="UserBorn">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Jefe Directo</label>

                            <select name="UserChiefID" id="UserChiefID" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                @foreach ($users as $UserInfo)
                                    <option value="{{$UserInfo->UserID}}">{{ $UserInfo->UserName }}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Permisos</label>

                            <select name="UserPermissions[]" id="UserPermissions" class="form-control"
                                    style="height:35px !IMPORTANT;" multiple>
                                <option value="VC">Vista completa</option>
                                <option value="VSV">Vista sin venta</option>
                                <option value="VCVM"> Vista con variables mensuales</option>
                                <option value="VI">Vista de invitado</option>
                                <option value="AI">Administración de la Intranet</option>
                                <option value="ACB">Administración de Cuentas Bancarias</option>
                                <option value="ACE">Administración de Compra Empleado</option>
                                <option value="CER">Reporte Compra Empleado</option>
                                <option value="News">Noticias</option>
                                <option value="CU">Control de Usuarios</option>
                                <option value="CtrlUsrs">Consulta Usuarios</option>
                                <option value="CW">Camaras Web</option>
                                <option value="GCE">Gestión de Compra Empleado</option>
                                <option value="RE">Reporte de Empleado</option>
                                <option value="CO">Colombia</option>
                                <option value="MX">M&eacute;xico</option>
                                <option value="ECU">Ecuador</option>
                                <option value="PAN">Panam&aacute;</option>
                                <option value="SAL">Salvador</option>
                                <option value="GTM">Guatemala</option>
                                <option value="CRI">Costa Rica</option>
                                <option value="PR">Per&uacute;</option>
                                <option value="IC">Informes Comerciales</option>
                                <option value="CC">Consulta Comerciantes</option>
                                <option value="MP">Mensaje Pedidos</option>
                                <option value="RS">Reporte de Seminarios</option>
                                <option value="SA">Saldos Acumulados</option>
                                <option value="CCR">Consulta CheckRegister</option>
                                <option value="CuadreMVS">Cuadre MCOM, Vista y SAP</option>
                                <option value="SV">Solicitud Vacaciones</option>
                            </select>
                            <!-- /.input group -->
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- /.box -->

            </div>
            <!-- /.col (left) -->

            <!-- /.col (right) -->
        </div>


    </form>

@endsection()



@section('scripts')

    <script>

        $("#UserBorn").datepicker({
            format: 'dd/mm/yyyy',

        });

        $('#UserArea').select2({
            placeholder: "Selecciona un Área",
            allowClear: true
        });

        $('#UserChiefID').select2({});

        // $('#UserCountry').select2({

        // });
        $('#UserPermissions').select2({});

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var baseUrl = "{{asset('img/')}}";
            var $state = $(
                '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + 'ico.png" class="img-flag" style="max-width:20px;" /> ' + state.text + '</span>'
            );
            return $state;
        };

        $("#UserCountry").select2({
            templateResult: formatState
        });
        $("#UserCountryControl").select2({
            templateResult: formatState
        });

        $("#UserArea").on("change", function () {

            // console.log(("#UserArea").select2().find(":selected").data("id"));
            $('#UserPermissions').select2().val(null).trigger('change');
            var Permissions = $('#UserArea option:selected').data('info');


            $('#UserPermissions').select2().val(Permissions).trigger('change');


        });

        $("#UserPhoto").on("click", function () {
            $("#FilePhoto").trigger("click");

            $(function () {
                $('#FilePhoto').change(function (e) {
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
                    $('#UserPhoto').attr("src", result);
                }
            });

        });

        $("#SaveUser").on("click", function (e) {

            $(this).attr("disabled","disabled");
            $("#label").addClass("hidden");
            $("#loading").removeClass("hidden");

            if ($("#UserPassword").val() != $("#UserPassword2").val() || $("#UserPassword").val() == '') {
                swal("Contraseñas no coinciden", "Verifique nuevamente las contraseñas.", "warning");
                $("#SaveUser").attr("disabled",false);
                $("#label").removeClass("hidden");
                $("#loading").addClass("hidden");
                return false;
            }

            event.preventDefault();

            var file_data = $('#FilePhoto').prop('files')[0];
            var form_data = new FormData();

            form_data.append('FilePhoto', file_data);
            form_data.append('UserName', $("[name='UserName']").val());
            form_data.append('UserNick', $("[name='UserNick']").val());
            form_data.append('UserEmail', $("[name='UserEmail']").val());
            form_data.append('UserJobTitle', $("[name='UserJobTitle']").val());
            form_data.append('UserArea', $("[name='UserArea']").val());
            form_data.append('UserCountry', $("[name='UserCountry']").val());
            form_data.append('UserCountryControl', $("[name='UserCountryControl']").val());
            form_data.append('UserBorn', $("[name='UserBorn']").val());
            form_data.append('UserPassword', $("[name='UserPassword']").val());
            form_data.append('UserStatus', $("#UserStatus").is(":checked"));
            form_data.append('UserChiefID', $("[name='UserChiefID']").val());

            form_data.append('UserPermissions', JSON.stringify($("#UserPermissions").val()));

            var token = $("#token").val();
            $.ajax({
                url: "{{ url('/users/store') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: form_data,
                contentType: false,
                processData: false,

                beforeSend: function () {

                },
                success: function (response) {

                    console.log(response)
                    swal(response['mensaje'], '', response['type']);
                    if (response['type'] == "success") {
                        location.href = "/users";
                    }
                    else{

                        $("#SaveUser").attr("disabled",false);
                        $("#label").removeClass("hidden");
                        $("#loading").addClass("hidden");

                    }

                }
            });



        });


    </script>

@endsection()

