@extends('layouts.layout')

@section('MenuHref',"/areas")
@section('TitlePage',"Áreas")
@section('TitleSubMenu',"Edición")


@section('content')

    <!-- SELECT2 EXAMPLE -->
    <form class="form-group" method="POST" action="/areas/{{ $area->AreaID }}" autocomplete="off" id="FormArea">
        @method('PUT')

        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

        <div class="row">

            <div class="col-md-12">

                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">General</h3>
                    </div>
                    <div class="box-body">
                        <!--  -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Nombre del &Aacute;rea</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-coffee"></i>
                                    </div>
                                    <input type="text" class="form-control" id="AreaName" name="AreaName"
                                           placeholder="Recursos Humanos" value="{{ $area->AreaName }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label>Acr&oacute;nimo</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <input type="text" class="form-control" id="AreaAcronym" name="AreaAcronym"
                                           placeholder="RRHH" value="{{ $area->AreaAcronym }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                <label>Permisos</label>
                                <br>
                                <select name="AreaPermissions[]" id="AreaPermissions" class="form-control"
                                        style="height:35px !IMPORTANT;" multiple>
                                    <option value="VC">Vista completa</option>
                                    <option value="VSV">Vista sin venta</option>
                                    <option value="VCVM"> Vista con variables mensuales</option>
                                    <option value="VI">Vista de invitado</option>
                                    <option value="AI">Administración de la Intranet</option>
                                    <option value="ACB">Administración de Cuentas Bancarias</option>
                                    <option value="News">Noticias</option>
                                    <option value="CU">Control de Usuarios</option>
                                    <option value="CtrlUsrs">Consulta Usuarios</option>
                                    <option value="CW">Camaras Web</option>
                                    <option value="GCE">Gestión de Compra Empleado</option>
                                    <option value="RE">Reporte de Empleado</option>
                                    <option value="CP">Colombia</option>
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
                        <div class="col-md-12">

                            <div class="form-group">

                                <label>Descripci&oacute;n de &Aacute;rea</label>

                                <textarea id="AreaDescription" name="AreaDescription"
                                          style="width:100%;max-width:100%; max-height:100px;min-width:100%; min-height:50px;"></textarea>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary pull-right" id="SaveArea">

                            <label id="label">{{ __('Aceptar') }}</label>
                            <img src="{{asset('images/load.gif')}}" style="width:30px;" id="loading" class="hidden">


                        </button>

                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (left) -->

        </div>

    </form>

@endsection()



@section('scripts')

    <script>

        var list = [];
        @foreach(json_decode($area->AreaPermissions)  as $Permission)

        list.push('{{ $Permission }}');

        @endforeach

        $('#AreaPermissions').select2().val(list).trigger('change');


        $("#SaveArea").on("click", function (e) {

            e.preventDefault();

            $(this).attr("disabled","disabled");
            $("#label").addClass("hidden");
            $("#loading").removeClass("hidden");

            var form_data = [];

            form_data = {
                'AreaName': $("[name='AreaName']").val(),
                'AreaDescription': $("[name='AreaDescription']").val(),
                'AreaAcronym': $("[name='AreaAcronym']").val(),
                'AreaPermissions': JSON.stringify($("#AreaPermissions").val()),
            }

            var token = $("#token").val();

            $.ajax({

                url: "/areas/{{ $area->AreaID }}",
                headers: {'X-CSRF-TOKEN': token},

                data: form_data,
                type: 'put',

                beforeSend: function () {
                    // alert("akus")
                },
                success: function (response) {

                    console.log(response)
                    swal(response['mensaje'], '', response['type']);
                    $(this).attr("disabled",false);
                    $("#label").removeClass("hidden");
                    $("#loading").addClass("hidden");

                }
            });

        });


    </script>

@endsection()

