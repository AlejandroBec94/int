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
                            <input id="UserStatus" type="checkbox"
                                   @if($user->UserStatus == 1)
                                   checked
                                    @endif
                            >
                            <label for="UserStatus"></label>
                        </div>
                        <img class="profile-user-img img-responsive img-circle" style="cursor:pointer;" id="UserPhoto"
                             src="{{ asset('fotos_intra/') }}/{{ $user->UserPhoto }}" alt="User profile picture">
                        {{-- <input type="file" class="hidden" id="FilePhoto" name="FilePhoto"> --}}


                        <br>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Nombre Completo</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <input type="text" class="form-control" name="UserName"
                                               value="{{ $user->UserName }}">
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
                                               name="UserEmail" value="{{ $user->UserEmail }}">
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
                                        <input type="text" class="form-control" placeholder="rjmex" name="UserNick"
                                               value="{{ $user->UserNick }}">
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

                        <button type="submit" class="btn btn-primary btn-block" id="SaveUser"><b>Editar Usuario</b>
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
                                <input type="text" class="form-control" name="UserJobTitle"
                                       value="{{ $user->UserJobTitle }}">
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
                                <option value="colombia">Colombia</option>
                                <option value="mexico">México</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="peru">Perú</option>
                                <option value="panama">Panamá</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="salvador">El Salvador</option>
                                <option value="costarica">Costa Rica</option>
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-6">
                            <label>Control</label>


                            <select name="UserCountryControl" id="UserCountryControl" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="latinoamerica">Latinoam&eacute;rica</option>
                                <option value="colombia">Colombia</option>
                                <option value="mexico">México</option>
                                <option value="ecuador">Ecuador</option>
                                <option value="peru">Perú</option>
                                <option value="panama">Panamá</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="salvador">El Salvador</option>
                                <option value="costarica">Costa Rica</option>
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Fecha de Nacimiento</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-birthday-cake"></i>
                                </div>
                                <input type="text" class="form-control" id="UserBorn" name="UserBorn"
                                       value="{{ $user->UserBorn }}">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Jefe Directo</label>

                            <select name="UserChiefID" id="UserChiefID" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                @foreach ($UsersInfo as $UserInfo)
                                    <option value="{{ $UserInfo->UserID }}">{{ $UserInfo->UserName }}</option>
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

        var list = [];
        @if($user->UserPermissions)
        @foreach(json_decode($user->UserPermissions)  as $Permission)

        list.push('{{ $Permission }}');

        @endforeach
        @endif

        $('#UserPermissions').select2().val(list).trigger('change');
        $('#UserCountry').select2().val('{{ $user->UserCountry }}').trigger('change');
        $('#UserCountryControl').select2().val('{{ $user->UserCountryControl }}').trigger('change');
        $('#UserArea').select2().val('{{ $user->UserArea }}').trigger('change');

        $("#UserBorn").datepicker({
            format: 'dd/mm/yyyy',

        });

        $('#UserChiefID').select2({});

        $('#UserArea').select2({
            placeholder: "Selecciona un Área",
            allowClear: true
        });

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

            e.preventDefault();

            if ($("#UserPassword").val() != '') {
                if ($("#UserPassword").val() != $("#UserPassword2").val() || $("#UserPassword").val() == '') {
                    swal("Contraseñas no coinciden", "Verifique nuevamente las contraseñas.", "warning");

                    return false;
                }
            }

            // var file_data = $('#FilePhoto').prop('files')[0];

            var form_data = [];

            form_data = {
                //  'FilePhoto':file_data,
                'UserName': $("[name='UserName']").val(),
                'UserNick': $("[name='UserNick']").val(),
                'UserEmail': $("[name='UserEmail']").val(),
                'UserJobTitle': $("[name='UserJobTitle']").val(),
                'UserArea': $("[name='UserArea']").val(),
                'UserCountry': $("[name='UserCountry']").val(),
                'UserCountryControl': $("[name='UserCountryControl']").val(),
                'UserBorn': $("[name='UserBorn']").val(),
                'UserPassword': $("[name='UserPassword']").val(),
                'UserChiefID': $("[name='UserChiefID']").val(),
                'UserPermissions': JSON.stringify($("#UserPermissions").val()),
                'UserStatus': $("#UserStatus").is(':checked'),

            }

            console.log(form_data)

            var token = $("#token").val();
            $.ajax({
                url: "/users/{{ $user->UserID }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'put',

                data: form_data,

                beforeSend: function () {
                    // alert("akus")
                },
                success: function (response) {

                    console.log(response)
                    swal(response['mensaje'], '', response['type']);

                }
            });

        });


    </script>

@endsection()

