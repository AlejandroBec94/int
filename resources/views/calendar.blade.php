@extends('layouts.layout')
{{--@section('TitlePage',"Calendario")--}}

@section('content')

    <style type="text/css">


        .modal-dialog {
            height: 85% !important;
            padding-top: 10%;
        }

        .modal-content {
            /*height: 100% !important;*/
            /*overflow: visible;*/
        }

        .modal-body {
            height: 80%;
            overflow: auto;
        }

        .btn-default {
            background: #fff !important;
        }

        /* picker */
        .color-picker {
            background: rgba(255, 255, 255, 0.75);
            padding: 10px;
            border: 1px solid rgba(203, 203, 203, 0.6);
            border-radius: 2px;
        }

        .color-picker > div {
            width: 40px;
            display: inline-block;
            height: 40px;
            margin: 5px;
            border-radius: 100%;
            opacity: 0.7;
        }

        .picker-wrapper {
            padding: 0px;
        }

        .color-picker > div:hover {
            opacity: 1;
        }

        .input-place::placeholder {
            color: white;
            font-weight: bold;
        }

    </style>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid" {{--style="display: none;" id="Events"--}}>
                <div class="box-header with-border">
                    <h4 class="box-title">Eventos</h4>
                </div>
                <div class="box-body">
                    <!-- the events -->
                    <div id="external-events">
                        {{--<div class="external-event bg-light-blue">Work on UI design</div>--}}
                        {{--@if(count($Events)==0)

                            <div class="alert alert-warning"><span>No existen eventos para mostrar.</span></div>

                        @endif--}}
                        @foreach($Events as $Event)

                            @if ($Event['EventStatus'] == 1 )

                                <div class="external-event " style="color:#fff;background-color: {{ $Event['EventBackground'] }};border-color: {{ $Event['EventBackground'] }};"
                                     data-title="{{ $Event['EventTitle'] }}">{{ $Event['EventTitle'] }}</div>

                            @endif

                        @endforeach
                        {{--<div class="checkbox">
                            <label for="drop-remove">
                                <input type="checkbox" id="drop-remove">
                                Borrar despues de asignar
                            </label>
                        </div>--}}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Event</h3>
                </div>
                <div class="box-body">
                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                        <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                        <ul class="fc-color-picker" id="color-chooser">
                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <div class="input-group">
                        <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                        <div class="input-group-btn">
                            <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
                        </div>
                        <!-- /btn-group -->
                    </div>
                    <!-- /input-group -->
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="modal fade" id="modal-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #fff;">&times;</span></button>
                    <input type="text" class="modal-title form-control input-place"
                           maxlength="20"
                           style="border-color: transparent;color: #fff;font-size: 30px;color: #fff;height: 34px;position: relative;top: -5px;"
                           placeholder="Agregar T&iacute;tulo"
                           spellcheck="false"
                           id="EventTitle"
                    >

                </div>
                <div class="modal-body" style="max-height: 480px;overflow-y: auto;">

                    <div class="col-md-12 text-center">

                        <div class="col-md-2 text-center" style="top: 2px;margin-left: -2px;">
                            <i class="fas fa-calendar fa-2x"></i>
                        </div>

                        <div class="input-daterange input-group col-md-10" id="datepicker">
                            <input type="text" class="input-sm form-control" id="EventStart" readonly/>
                            <span class="input-group-addon">a</span>
                            <input type="text" class="input-sm form-control" id="EventExpire" readonly/>
                        </div>

                    </div>

                    <br><br><br>

                    <div class="col-md-12 text-center" id="RangeTime" style="display: none;">

                        <div class="col-md-2 " style="top: 2px;">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>

                        <div class="input-group col-md-10">
                            <input type="text" class="input-sm form-control EventTime text-center" id="EventTimeStart"
                                   readonly/>
                            <span class="input-group-addon">a</span>
                            <input type="text" class="input-sm form-control EventTime text-center"
                                   id="EventTimeExpire" readonly/>
                        </div>

                        <br><br><br>

                    </div>


                    <div class="col-md-12">

                        <label>Todo el d&iacute;a</label>&nbsp;
                        <input type="checkbox" id="AllDay" onclick="$('#RangeTime').fadeToggle();" checked>

                    </div>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#Info">Informaci&oacute;n del Evento</a></li>
                        <li><a data-toggle="tab" href="#Guests">Invitados</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="Info" class="tab-pane fade in active">
                            <div class="form-group">

                                <div class="input-group col-md-12" style="top: 20px;">
                                    <span class="input-group-addon" id="basic-addon1"><i
                                                class="fa fa-map-marker"></i></span>
                                    <input type="text" class="form-control" placeholder="Añade Ubicación"
                                           aria-describedby="basic-addon1" id="EventUbication">
                                </div>

                                <br>
                                <br>

                                <div class="picker-wrapper col-md-12">
                                    <button class="btn btn-default"><i class="fas fa-palette"></i>&nbsp;
                                    </button>
                                    <div class="color-picker">
                                    </div>
                                </div>

                                <br>

                                <div class="col-md-12" style="margin-left: -16px; margin-top: 10px;">
                                    <select id="EventTag">
                                        <option value="Junta"><i class="user">Junta</i></option>
                                        <option value="Reunion"><i class="user">Reuni&oacute;n</i></option>
                                        <option value="Celebracion"><i class="user">Celebraci&oacute;n</i></option>
                                    </select>
                                </div>

                                <div class="col-md-12" style="width: 100%;margin-left: -16px; margin-top: 10px;">
                                    <textarea id="EventDescription" placeholder="Descripción"
                                              class="form-control"></textarea>
                                </div>

                            </div>
                        </div>
                        <div id="Guests" class="tab-pane fade in ">
                            <div class="form-group">

                                <div class="input-group col-md-12" style="top: 20px;">
                                    <select class="js-example-placeholder-multiple js-states form-control"
                                            name="EventGuests[]" id="EventGuests"
                                            style="height:35px !IMPORTANT; width: 100% !IMPORTANT;" multiple="multiple">
                                        @foreach($Users as $User)

                                            <option value="{{ $User->UserEmail }}">{{ $User->UserEmail }}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <br>
                                <br>


                            </div>
                        </div>


                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="EventEdit">Aceptar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


@endsection()

@section('scripts')

    <script src="{{ asset('plugins/piklor/src/piklor.js')  }}"></script>
    <script>

        $("#EventTag").select2({});
        $("#EventGuests").select2({
            placeholder: "Selecciona un invitado",
        });

        $('.input-daterange').datepicker({
            format: "MM d, yyyy",
            startDate: '1d',
        });


        $(".EventTime").datetimepicker({
            pickDate: false
            // format: 'DD-MM-YYYY'
        });


        $(function () {

            $(".datepicker-inline").addClass("hidden")

            /* initialize the external events
             -----------------------------------------------------------------*/
            function init_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    })

                })
            }

            init_events($('#external-events div.external-event'))

            _events = '{{ $CalendarEvents }}';

            _events = _events.replace(/&quot;/g, '"');

            _events = JSON.parse(_events);
            // _events = JSON.parse(_events);

            console.log(_events)

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()
            $('#calendar').fullCalendar({
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día'
                },
                eventLimit: true,
                views: {
                    agenda: {
                        eventLimit: 6 // adjust to 6 only for agendaWeek/agendaDay
                    }
                },
                //Random default events
                events:_events,
                displayEventTime: false,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    var EventID = randomString(50, '#Aa');

                    var form_data = {

                        'EventID': EventID,
                        'EventTitle': $(this).data('title'),
                        'EventBackground': $(this).css('background-color'),
                        'EventDateStart': date.toISOString(),
                        'EventAllDay': true,

                    };

                    var token = $("#token").val();

                    $.ajax({

                        url: "/calendar/putEvent",
                        headers: {'X-CSRF-TOKEN': token},
                        type: 'POST',

                        data: form_data,

                        beforeSend: function () {

                        },
                        success: function (response) {

                            console.log(response)

                        }

                    });

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject')

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject)

                    // assign it the date that was reported
                    copiedEventObject.id = EventID
                    copiedEventObject.start = date
                    copiedEventObject.allDay = allDay
                    copiedEventObject.backgroundColor = $(this).css('background-color')
                    copiedEventObject.borderColor = $(this).css('border-color')
                    copiedEventObject.allDay = true

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

                    // is the "remove after drop" checkbox checked?
                    // if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove()
                    // }

                    console.log(copiedEventObject)
                },
                eventClick: function (event, delta, revertFunc, jsEvent, ui, view) {

                    var date = new Date(event.start);

                    if (!event.end){
                        var date2 = new Date(event.start);
                    }
                    else{
                        var date2 = new Date(event.end);
                    }

                    console.log(event.date)

                    var pk = new Piklor(".color-picker", [
                            "#1abc9c"
                            , "#2ecc71"
                            , "#3498db"
                            , "#9b59b6"
                            , "#34495e"
                            , "#16a085"
                            , "#27ae60"
                            , "#2980b9"
                            , "#8e44ad"
                            , "#2c3e50"
                            , "#f1c40f"
                            , "#e67e22"
                            , "#e74c3c"
                            , "#ecf0f1"
                            , "#95a5a6"
                            , "#f39c12"
                            , "#d35400"
                            , "#c0392b"
                            , "#bdc3c7"
                            , "#7f8c8d"
                        ], {
                            open: ".picker-wrapper .btn"
                        })
                        , wrapperEl = pk.getElm(".modal-header")
                        , wrapperEl2 = pk.getElm(".modal-title")
                    ;

                    pk.colorChosen(function (col) {
                        wrapperEl.style.backgroundColor = col;
                        wrapperEl2.style.backgroundColor = col;
                    });

                    $("#modal-event").modal("show");
                    $(".modal-title").val(event.title);
                    $(".modal-title").css({'background-color': event.backgroundColor});
                    $(".modal-header").css({'background-color': event.backgroundColor});
                    $("#EventStart").val(moment(date, "HH:mm:ss").add(1, 'days').format('MMM D, YYY' + 'Y'));
                    $("#EventExpire").val(moment(date2, "HH:mm:ss").add(1, 'days').format('MMM D, YYYY'));
                    $('#AllDay').prop('checked', event.allDay);

                    if (event.allDay == false && $('#RangeTime').css('display') == 'none'){
                        $('#RangeTime').fadeToggle();
                    }
                    else if (event.allDay == true ){
                        $('#RangeTime').css({"display":'none'});
                    }

                    $("#EventTimeStart").val(moment(event.start, "HH:mm:ss").format('hh:mm A'));
                    $("#EventTimeExpire").val(moment(event.end, "HH:mm:ss").format('hh:mm A'));

                    $("#EventDescription").val(event.description);
                    $("#EventUbication").val(event.ubication);

                    if (event.tag) {
                        $("#EventTag").select2().val(event.tag).trigger('change');
                    }

                    EventID = event.id;

                    $("#EventEdit").on("click", function () {
                        EventEdit(event,EventID);
                    });


                    $('#EventGuests').select2().val(event.guests).trigger('change');

                    return false;

                },
                eventResize: function (event, delta, revertFunc, jsEvent, ui, view) {

                    var form_data = {

                        'EventID'               : event.id,
                        'EventDatetimeStart'   : moment(event.start).format("YYYY-MM-DD HH:mm"),
                        'EventDatetimeExpire'   : moment(event.end).format("YYYY-MM-DD HH:mm")

                    };

                    var token = $("#token").val();

                    $.ajax({

                        url: "/calendar/editDatetimeEvent",
                        headers: {'X-CSRF-TOKEN': token},
                        type: 'POST',

                        data: form_data,

                        beforeSend: function () {

                        },
                        success: function (response) {

                            console.log(response)

                        }

                    });
                    //Resize Event
                    // console.log(event.start.format());
                    // console.log(event.id);
                    // console.log(event.start.format());

                },
                eventDrop: function (event, delta, revertFunc, jsEvent, ui, view) {

                    var form_data = {

                        'EventID'               : event.id,
                        'EventDatetimeStart'    : moment(event.start).format("YYYY-MM-DD HH:mm"),
                        'EventDatetimeExpire'   : moment(event.end).format("YYYY-MM-DD HH:mm")

                    };

                    var token = $("#token").val();

                    $.ajax({

                        url: "/calendar/editDatetimeEvent",
                        headers: {'X-CSRF-TOKEN': token},
                        type: 'POST',

                        data: form_data,

                        beforeSend: function () {

                        },
                        success: function (response) {

                            console.log(response)

                        }

                    });

                },
                eventRender: function (eventObj, $el) {

                    var guests = eventObj.guests;

                    var ii = 0;
                    for (var i in guests) {
                        ii++;
                    }
                    if (eventObj.description && ii <= 0) {

                        $el.popover({
                            headerStyle: "backgroundColor: '#f0c674",
                            title: '<h4>' + eventObj.title + "</h4><small>" + eventObj.tag + "</small>",
                            content: eventObj.description,
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true,
                        });

                    }
                    else if (!eventObj.description && eventObj.guests && ii > 0) {

                        $el.popover({
                            headerStyle: "backgroundColor: '#f0c674",
                            title: '<h4>' + eventObj.title + " </h4><small>" + eventObj.tag + "</small>",
                            content: "<strong>Invitados:</strong><br><div style='word-wrap: break-word;'>" + eventObj.guests + "</div>",
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true,
                        });

                    }
                    else if (eventObj.description && eventObj.guests && ii > 0) {

                        $el.popover({
                            headerStyle: "backgroundColor: '#f0c674",
                            title: '<h4>' + eventObj.title + "</h4><small>" + eventObj.tag + "</small>",
                            content: eventObj.description + "<br><br><strong>Invitados:</strong><br><div style='word-wrap: break-word;'>" + eventObj.guests + "</div>",
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true,
                        });

                    }
                },

            })

            function EventEdit(event,EventID) {

                if(EventID != event.id){
                    return false;
                }
                event.title = $("#EventTitle").val();
                event.backgroundColor = $(".modal-header").css('background-color');
                event.guests = $("#EventGuests").val();
                event.borderColor = $(".modal-header").css('background-color');
                if (!$("#AllDay").is(":checked")) {
                    event.start = new Date($("#EventStart").val() + " " + $("#EventTimeStart").val());
                    event.end = new Date($("#EventExpire").val() + " " + $("#EventTimeExpire").val());
                }
                else {
                    event.start = $("#EventStart").val();
                    event.end = $("#EventExpire").val();
                }
                event.allDay = $("#AllDay").is(":checked");
                event.description = $("#EventDescription").val();
                event.tag = $("#EventTag").val();

                var EventStart = $("#EventStart").val();

                var form_data = {

                    'EventID'           : event.id,
                    'EventTitle'        : event.title,
                    'EventBackground'   : event.backgroundColor,
                    'EventGuests'       : event.guests,
                    'EventDateStart'    : moment($("#EventStart").val()).format('YYYY-MM-DD'),
                    'EventDateExpire'   : moment($("#EventExpire").val()).format('YYYY-MM-DD'),
                    'EventTimeStart'    : $("#EventTimeStart").val(),
                    'EventTimeExpire'   : $("#EventTimeExpire").val(),
                    'EventAllDay'       : event.allDay,
                    'EventDescription'  : event.description,
                    'EventTag'          : event.tag,
                    'EventUbication'    : $("#EventUbication").val(),

                };

                var token = $("#token").val();

                $.ajax({

                    url: "/calendar/editEvent",
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',

                    data: form_data,

                    beforeSend: function () {

                    },
                    success: function (response) {

                        console.log(response)

                    }

                });

                $('#calendar').fullCalendar('updateEvent', event);
                $("#modal-event").modal("hide");

            }

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function (e) {
                e.preventDefault()
                //Save color
                currColor = $(this).css('color')
                //Add color effect to button
                $('#add-new-event').css({'background-color': currColor, 'border-color': currColor})
            })
            $('#add-new-event').click(function (e) {
                e.preventDefault()
                //Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }
                /*Create Random ID*/
                var EventID = randomString(50, '#Aa');

                //Create events
                var event = $('<div />')
                event.css({
                    'id': EventID,
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                })
                event.data("title", val)
                event.addClass('external-event');

                console.log(event.html(val));
                // return false;

                // event.html(val)
                $('#external-events').prepend(event)

                //Add draggable funtionality
                init_events(event)

                //Remove event from text input
                $('#new-event').val('')

                var form_data = {

                    'EventID': EventID,
                    'EventTitle': val,
                    'EventBackground': currColor

                };

                var token = $("#token").val();

                $.ajax({

                    url: "/calendar/addEvent",
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',

                    data: form_data,

                    beforeSend: function () {

                    },
                    success: function (response) {

                        console.log(response)

                    }

                });

                // $("#Events").fadeToggle();
            })
        });

        function randomString(length, chars) {
            var mask = '';
            if (chars.indexOf('a') > -1) mask += 'abcdefghijklmnopqrstuvwxyz';
            if (chars.indexOf('A') > -1) mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (chars.indexOf('#') > -1) mask += '0123456789';
            if (chars.indexOf('!') > -1) mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
            var result = '';
            for (var i = length; i > 0; --i) result += mask[Math.floor(Math.random() * mask.length)];
            return result;
        }

    </script>



@endsection()
