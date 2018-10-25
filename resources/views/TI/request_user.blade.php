@extends('layouts.layout')

@section('TitlePage',"Solicitud de Usuario")
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

                        <br>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Nombre de Usuario</label>

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
                                    <label>Cargo</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <input type="text" class="form-control" name="UserJobTitle">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Jefe Directo</label>

                                    <select name="UserChiefID" id="UserChiefID" class="form-control"
                                            style="height:35px !IMPORTANT;">
                                        @foreach ($users as $UserInfo)
                                            <option value="{{$UserInfo->UserID}}">{{ $UserInfo->UserName }}</option>
                                        @endforeach
                                    </select>
                                    <!-- /.input group -->
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group text-center">
                                    <label>Fecha del Movimiento</label>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" name="RequestDate" name="RequestDate"
                                               readonly>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </li>
                        </ul>
                        {{-- <a class="btn btn-primary btn-block" href="/mail/1">Enviar Solicitud</a> --}}
                        <a class="btn btn-primary btn-block" href="javascript:void(0);" id="UserSave">Enviar
                            Solicitud</a>
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

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Nombre del colaborador que sustituye</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" id="UserReplace" name="UserReplace">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!--  -->
                        <div class="form-group">
                            <label>Movimiento a Realizar</label>

                            <select name="MoveRequest" id="MoveRequest" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="Up">Alta</option>
                                <option value="Down">Baja</option>
                                <option value="Update">Modificación</option>
                                <option value="Temp">Temporal</option>
                                <option value="Definitive">Definitiva</option>
                            </select>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Tipo de Plaza</label>

                            <select name="TypePlace" id="TypePlace" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="new">Nueva</option>
                                <option value="exist">Existente</option>
                            </select>
                            <!-- /.input group -->
                        </div>


                        <div class="form-group">
                            <label>¿Requiere de un Equipo?</label>


                            <select name="UserEquipment" id="UserEquipment" class="form-control"
                                    style="height:35px !IMPORTANT;">
                                <option value="yes">Si</option>
                                <option value="no">No</option>
                            </select>
                            <!-- /.input group -->
                        </div>

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Sistemas y/o Herramientas</label>

                            <select name="UserTools[]" id="UserTools" class="form-control"
                                    style="height:35px !IMPORTANT;" multiple>
                                <option value="EmailAccount">Cuenta de Mail</option>
                                <option value="Vista">Vista</option>
                                <option value="SAP">SAP</option>
                                <option value="Intra">Intranet</option>
                            </select>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Otros: </label>

                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" id="OtherTool" name="OtherTool"
                                       placeholder="Especificar Herramienta">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label>Comentarios: </label>

                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" id="RequestComment" name="RequestComment"
                                       placeholder="Comentario">
                            </div>
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

        $("input[name=RequestDate]").datepicker({
            format: 'dd/mm/yyyy',
        });

        $('#MoveRequest').select2({});

        $('#TypePlace').select2({});

        // $('#UserCountry').select2({

        // });
        $('#UserEquipment').select2({});

        $("#UserTools").select2({});

        $("#UserChiefID").select2({});

        $("#UserSave").on("click", function (e) {

            e.preventDefault();

            var form_data = [];

            form_data = {

                'UserName': $("[name='UserName']").val(),
                'UserJobTitle': $("[name='UserJobTitle']").val(),
                'UserChiefID': $("[name='UserChiefID']").val(),
                'RequestDate': $("[name='RequestDate']").val(),
                'UserReplace': $("[name='UserReplace']").val(),
                'MoveRequest': $("[name='MoveRequest']").val(),
                'TypePlace': $("[name='TypePlace']").val(),
                'UserEquipment': $("[name='UserEquipment']").val(),
                'UserTools': JSON.stringify($("#UserTools").val()),
                'OtherTool': $("[name='OtherTool']").val(),
                'RequestComment': $("[name='RequestComment']").val(),

            }

            var token = $("#token").val();
            $.ajax({

                url: "{{ url('/requests') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: form_data,

                beforeSend: function () {
                    // alert("akus")
                },
                success: function (response) {

                    console.log(response)
                    swal(response['mensaje'], '', response['type']);
                    if (response['type'] == "success") {
                        location.href = "/requests";
                    }

                }
            });

        });


    </script>

@endsection()

