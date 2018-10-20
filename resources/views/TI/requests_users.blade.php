@extends('_layouts.layout')
@section('TitlePage',"Solicitudes de Usuario")

@section('content')
<style>

    .centered-modal.in {
        display: flex !important;
    }

    .centered-modal .modal-dialog {
        margin: auto;
    }

    /*
    {{-- other --}}  */

    input[type="radio"] {
        display: none;
    }

    input[type="radio"]:checked + label span {
        transform: scale(1.25);
    }

    input[type="radio"]:checked + label .red {
        border: 2px solid #711313;
        border-radius: 30px;
    }

    input[type="radio"]:checked + label .yellow {
        border: 2px solid #816102;
        border-radius: 30px;
    }

    input[type="radio"]:checked + label .green {
        border: 2px solid #0e4e1d;
        border-radius: 30px;
    }


    label:hover span {
        transform: scale(1.25);
    }

    label span {
        display: block;
        width: 100%;
        height: 100%;
        transition: transform .2s ease-in-out;
    }

    label span.red {
        background: #DB2828;
        border-radius: 30px;
    }

    label span.yellow {
        background: #FBBD08;
        border-radius: 30px;
    }

    label span.green {
        background: #21BA45;
        border-radius: 30px;
    }

    /* .dataTables_filter {
        float: right !important;
         position: relative;
        display: inline-table;
    } */

</style>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    <div class="row" style="max-height:100% !IMPORTANT">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Solicitudes</h3>
                    <a class="pull-right btn btn-primary" href="/request/user">Agregar</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="TableArea" class="table table-bordered table-hover" >
                        <thead>
                        <tr>
                            <th style="text-align:center;">Pa&iacute;s</th>
                            <th style="text-align:center;">Solicitada por</th>
                            <th style="text-align:center;">Tipo de solicitud</th>
                            <th style="text-align:center;">Fecha de Movimiento</th>
                            <th style="text-align:center;">Creaci&oacute;n</th>
                            <th style="text-align:center;">Status</th>
                        </tr>
                        </thead>
                        <tbody style="max-width:100% !IMPORTANT">

                        @foreach ($RequestUsers as $RequestUser)
                            <tr style="text-align:center;" data-id="{{ $RequestUser['RequestID'] }}">
                                <td><img src="img/{{ $Users[$RequestUser['RequestUserID']]['UserCountry'] }}ico.png"
                                         style="width:35px;"
                                         alt="{{ $Users[$RequestUser['RequestUserID']]['UserCountry'] }}"><span
                                            style="display:none;text-transform: capitalize;">{{ $Users[$RequestUser['RequestUserID']]['UserCountry'] }}</span>
                                </td>
                                <td>{{ $Users[$RequestUser['RequestUserID']]['UserName'] }}</td>
                                <td>
                                    @if($RequestUser['MoveRequest'] == "Up")
                                        Alta
                                    @elseif($RequestUser['MoveRequest'] == "Down")
                                        Baja
                                    @elseif($RequestUser['MoveRequest'] == "Update")
                                        Modificaci&oacute;n
                                    @elseif($RequestUser['MoveRequest'] == "Temp")
                                        Temporal
                                    @elseif($RequestUser['MoveRequest'] == "Definitive")
                                        Definitiva
                                    @endif
                                </td>
                                <td>{{ date("d/m/Y",strtotime($RequestUser->RequestDate)) }}</td>
                                <td>{{ date("d/m/Y",strtotime($RequestUser->DocDate)) }}</td>
                                <td style="text-center">


                                    <input type="radio" class="RequestStatus"
                                           name="Request_{{ $RequestUser->RequestID }}"
                                           id="RequestNull_{{ $RequestUser->RequestID }}" value="RequestNull"
                                           @if($RequestUser->RequestStatus == 4) checked @endif/>
                                    <label for="RequestNull_{{ $RequestUser->RequestID }}"
                                           style="display: inline-block;width: 15px;height: 15px;margin-right: 10px;cursor: pointer;"><span
                                                class="red"></span></label>

                                    <input type="radio" class="RequestStatus"
                                           name="Request_{{ $RequestUser->RequestID }}"
                                           id="RequestWait_{{ $RequestUser->RequestID }}" value="RequestWait"
                                           @if($RequestUser->RequestStatus == 2) checked @endif/>
                                    <label for="RequestWait_{{ $RequestUser->RequestID }}"
                                           style="display: inline-block;width: 15px;height: 15px;margin-right: 10px;cursor: pointer;"><span
                                                class="yellow"></span></label>

                                    <input type="radio" class="RequestStatus"
                                           name="Request_{{ $RequestUser->RequestID }}"
                                           id="RequestAccept_{{ $RequestUser->RequestID }}" value="RequestAccept"
                                           @if($RequestUser->RequestStatus == 3) checked @endif/>
                                    <label for="RequestAccept_{{ $RequestUser->RequestID }}"
                                           style="display: inline-block;width: 15px;height: 15px;margin-right: 10px;cursor: pointer;"><span
                                                class="green"></span></label>

                                    @if($RequestUser->RequestStatus == 3)

                                        <i class="fa fa-fas fa-comment-alt pull-right"
                                           onclick="RequestObservations({{ $RequestUser->RequestID }})"
                                           style="cursor:pointer;position:absolute;"></i>

                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    <div id="RequestObservations" class="modal fade centered-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="box-header with-border">
                        <h3 class="box-title">Observaciones</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="modal-body">

                    <div class="box box-primary direct-chat direct-chat-primary">

                        <div class="box-body" id="box-body" style="max-height:300px; overflow-y:auto;">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="Observation" id="Observation" placeholder="Escribe el mensaje..."
                                   class="form-control">
                            <span class="input-group-btn">
                            <a type="submit" class="btn btn-primary btn-flat" href="javascript:void(0);"
                               onclick="NewObservation($('#Observation').data('id'))">Observar &nbsp;<i
                                        class="far fa-eye"></i> </a>
                        </span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection()

@section('scripts')

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    <script>

        $(function () {

            $('#TableArea').DataTable({

                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': false,
                'dom': 'Bfrtip',
                // 'dom':

                "buttons": [
                    {
                        "extend": 'pdf',
                        "text": 'PDF',
                        "className": 'btn btn-info btn-xs',
                        'title': Math.random().toString(36).replace('0.', '')
                    },
                    {
                        "extend": 'excel',
                        "text": 'Excel',
                        "className": 'btn btn-info btn-xs',
                        'title': Math.random().toString(36).replace('0.', '')
                    },
                    {
                        "extend": 'print',
                        "text": 'Imprimir',
                        "className": 'btn btn-info btn-xs',
                        'title': Math.random().toString(36).replace('0.', '')
                    },
                ],
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": "Anterior", // This is the link to the previous page
                        "sNext": "Siguiente", // This is the link to the next page
                    },
                    "sSearch": "<i class='fas fa-search'></i>"
                }

            })

        })

        $(".RequestStatus").on("change", function (e) {

            // e.preventDefault();
            var status = $(this).val();
            var token = $("#token").val();

            var RequestID = $(this).parent().parent().data("id");

            $.ajax({

                url: "{{ url('/request/updateStatus') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: {'Status': status, 'RequestID': RequestID},

                beforeSend: function () {
                },
                success: function (response) {

                    swal(response['mensaje'], '', response['type']);

                }
            });

        });

        function RequestObservations(RequestID) {

            var token = $("#token").val();

            $.ajax({

                url: "{{ url('/request/getObservations') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: {'RequestID': RequestID},

                beforeSend: function () {
                    $("#box-body").html("");
                    $("#box-body").css('max-height:300px; overflow-y:auto;');
                },
                success: function (response) {
                    console.log(response['messages']);
                    // json = response['messages'];
                    $("#box-body").html(response['messages']);
                    $("#Observation").attr({"data-id": RequestID})
                    $("#RequestObservations").modal('show');

                }

            });

        }

        function NewObservation(RequestID) {

            var token = $("#token").val();

            $.ajax({

                url: "{{ url('/request/putObservations') }}",
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',

                data: {'Observation': $("#Observation").val(), 'RequestID': RequestID},

                beforeSend: function () {
                },
                success: function (response) {

                    if (response['type'] == 'error') {

                        $("#Observation").attr({"style": "border-color:red"});

                    }
                    else {

                        var html = $("#box-body").html();

                        html = html + response['messages'];
                        $("#box-body").html(html)
                        $("#Observation").val('');

                    }


                }

            });

        }


    </script>

@endsection()
