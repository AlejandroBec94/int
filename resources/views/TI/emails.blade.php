@extends('layouts.layout')
@section('TitlePage',"Administración Correos")
<style>

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

    label {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-right: 10px;
        cursor: pointer;
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

</style>
@section('content')

    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Correos - &Aacute;reas</h3>
                    <button class="pull-right btn btn-primary" href="javascript:void(0);" id="email_add">+</button>
                </div>
                <div class="alert alert-warning" style="margin:1%; text-align:center;">Los correos una vez creados no
                    pueden ser eliminados. <strong>Consulte al administrador para eliminación.</strong></div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="Emails" class="table table-bordered table-hover" style="max-width:100% !IMPORTANT">
                        <thead>
                        <tr>
                            <th style="text-align:center;">Formulario</th>
                            <th style="text-align:center;">Correo</th>
                            <th style="text-align:center;">Status</th>
                        </tr>
                        </thead>
                        <tbody style="max-width:100% !IMPORTANT" id="EmailTable">

                        @foreach ($Emails as $Email)
                            <tr style="text-align:center;" data-id="{{ $Email->EmailID }}">

                                {{-- <td>{{ $Users[$RequestUser['RequestUserID']]['UserName'] }}</td> --}}
                                <td>
                                    {{-- <input style="width:100%;height:100%;" value="{{ $Email->EmailName }}"> --}}
                                    <select style="width:100%;height:100%;" name="IntraMenus_{{ $Email->EmailID }}"
                                            id="IntraMenus_{{ $Email->EmailID }}" data-value='{{ $Email->MenuID }}'
                                            class="select2 IntraMenus">

                                        @foreach($Menus as $Menu)
                                            @if($Menu->EmailPermission == 1)
                                                <option value="{{ $Menu->DocEntry }}"

                                                        @if($Menu->DocEntry == $Email->MenuID)

                                                        selected="selected"

                                                        @endif

                                                >{{ $Menu->MenuName }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </td>
                                <td>
                                    <select style="width:100%;height:100%;" class="select2 Emails"
                                            name="Emails_{{ $Email->EmailID }}" id="Emails_{{ $Email->EmailID }}">

                                        @foreach($Users as $User)

                                            @if($User->UserStatus == 1)
                                                <option value="{{ $User->UserEmail }}"

                                                        @if($User->UserEmail == $Email->Email)

                                                        selected="selected"

                                                        @endif

                                                >{{ $User->UserEmail }}</option>
                                            @endif

                                        @endforeach

                                    </select>
                                </td>
                                {{-- <td>{{ date("d/m/Y",strtotime($RequestUser->RequestDate)) }}</td> --}}
                                {{-- <td>{{ date("d/m/Y",strtotime($RequestUser->DocDate)) }}</td> --}}
                                <td>
                                    <input type="radio"

                                           @if($Email->EmailStatus == 0)

                                           checked

                                           @endif

                                           class="EmailsStatus" name="Email_{{ $Email->EmailID }}"
                                           id="EmailDisable_{{ $Email->EmailID }}" value="EmailDisable"
                                           @if($Email->EmailsStatus == 0) checked @endif/>
                                    <label for="EmailDisable_{{ $Email->EmailID }}"><span class="red"></span></label>

                                    <input type="radio"

                                           @if($Email->EmailStatus == 1)

                                           checked

                                           @endif

                                           class="EmailsStatus" name="Email_{{ $Email->EmailID }}"
                                           id="EmailEnable_{{ $Email->EmailID }}" value="EmailEnable"
                                           @if($Email->EmailsStatus == 1) checked @endif/>
                                    <label for="EmailEnable_{{ $Email->EmailID }}"><span class="green"></span></label>
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

@endsection()

@section('scripts')

    <script>

        $(function () {
            $('#Emails').DataTable({
                'scrollY':        '50vh',
                'scrollCollapse': true,
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': false,
                'autoWidth': false
            })
        })


        $("#email_add").on("click", function () {

            var random = Math.random().toString(36).replace('0.', '');

            $(".dataTables_empty").addClass("hidden");
            $("#EmailTable").append("<tr  style='text-align:center;'  id='none'><td><select style='width:100%;height:100%;' name='IntraMenus_" + random + "' id='IntraMenus_" + random + "' class='select2 IntraMenus'>@foreach($Menus as $Menu)@if($Menu->EmailPermission == 1)<option value='{{ $Menu->DocEntry }}'>{{ $Menu->MenuName }}</option>@endif @endforeach</select></td><td><select style='width:100%;height:100%;' class='select2' name='Emails_" + random + "' id='Emails_" + random + "'>@foreach($Users as $User)@if($User->UserStatus == 1)<option value='{{ $User->UserEmail }}'>{{ $User->UserEmail }}</option>@endif @endforeach</select></td><td style='text-align:center;'><input type='radio' class='EmailsStatus' name='Email_" + random + "' id='EmailDisable_" + random + "' value='EmailDisable' checked/><label for='EmailDisable_" + random + "' ><span class='red'></span></label><input type='radio' class='EmailsStatus' name='Email_" + random + "' id='EmailEnable_" + random + "' value='EmailEnable'  /><label for='EmailEnable_" + random + "'><span class='green'></span></label></td></tr>");
            addProp();

        });

        addProp();

        function addProp() {

            $('.select2').select2();
            $(".EmailsStatus").on("change", function (e) {

                var DChecked = $(this).attr('id');
                var id = DChecked.split("_");

                var token = $("#token").val();

                $.ajax({

                    url: "{{ url('/emails') }}",
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',

                    data: {
                        'EmailID': id[1],
                        'MenuID': $("#IntraMenus_" + id[1]).val(),
                        "Email": $("#Emails_" + id[1]).val(),
                        'EmailStatus': id[0]
                    },

                    beforeSend: function () {
                    },
                    success: function (response) {
                    }

                });


                console.log(id[0])

            });

            $(".select2").on("change", function () {
                var str = $(this).attr("id");
                var id = str.split("_");

                var token = $("#token").val();

                if ($("#EmailDisable_" + id[1]).is(":checked") == false) {

                    $.ajax({

                        url: "{{ url('/emails') }}",
                        headers: {'X-CSRF-TOKEN': token},
                        type: 'POST',

                        data: {
                            'EmailID': id[1],
                            'MenuID': $("#IntraMenus_" + id[1]).val(),
                            "Email": $("#Emails_" + id[1]).val()
                        },

                        beforeSend: function () {
                        },
                        success: function (response) {
                        }
                    });

                }

            });
        }

        $(".select2").select2();

        // $('.IntraMenus').select2().val($(this).val()).trigger('change');


    </script>

@endsection()
