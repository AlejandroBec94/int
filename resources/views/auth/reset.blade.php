<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Olvidé mi contraseña Intranet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition login-page"
      style="background-image: url('{{ asset('img/background.jpg') }}');background-repeat:no-repeat;
              background-position:center;">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html">
            <b>Intra</b>Net</a>
        <br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9x5gCexOmydYgZVqd4BfbEMCtUCatCFIZp2TayjJsOHOID9XOZA"
             alt="NikkenLogo"
             style="max-height: 150px;border-radius: 30px;box-shadow: 2px 2px 15px rgb(70, 66, 66);">
    </div>
    <div class="login-box-body" style="background-color: rgba(255, 255, 255, .75);border-radius:30px;">
        <h4 class="login-box-msg">Hola <strong>{{ $DataInfo->UserInfo->UserName }}</strong>, escoge una nueva
            contraseña.
        </h4>
        <p class="login-box-msg">La contraseña tiene que tener al menos 8 caracteres que incluyan al menos un número o
            caracter especial.</p>
        <form>

            <div class="form-group row">

                <div class="col-md-12">
                    <label for="password">Contraseña nueva*</label>
                    <input id="password" type="password"
                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" value="{{ old('password') }}" placeholder="***********"
                           style="text-align: center"
                           required autofocus style="background-color: !IMPORTANT;"> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="password2">Vuelve a escribir tu contraseña*</label>
                    <input id="password2" type="password"
                           class="form-control {{ $errors->has('password2') ? ' is-invalid' : '' }}"
                           name="password2" value="{{ old('password2') }}" placeholder="***********"
                           style="text-align: center"
                           required autofocus style="background-color: !IMPORTANT;"> @if ($errors->has('password2'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password2') }}</strong>
                        </span>
                    @endif
                </div>

            </div>

            <!--<input class="btn btn-primary btn-block" style="background-color:#3CB5C2;" id="SendEmail" value="Enviar">-->
            <button type="submit" class="btn btn-primary btn-block" id="SendEmail"
                    style="background-color:#3CB5C2;">
                <label id="label">{{ __('Accesar') }}</label>
                <img src="{{asset('images/load.gif')}}" style="width:30px;" id="loading" class="hidden">
                {{--<img src="{{asset('images/load.gif')}}">--}}
            </button>

        </form>
    </div>
</div>
</div>
</body>
<script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>

{{-- Sweet Alert --}}
<link src="https://unpkg.com/sweetalert/dist/sweetalert.min.css"></link>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    var images = ['background.jpg', 'background2.jpg', 'background3.jpg', 'background4.jpg', 'background6.jpg', 'background7.jpg', 'background8.jpg', 'background9.jpg', 'background10.jpg', 'background11.jpg', 'background12.jpg', 'background13.jpg', 'background14.jpg', 'background15.jpg', 'background16.jpg', 'background17.jpg', 'background18.jpg', 'background19.jpg'];
    document.getElementsByClassName('login-page')[0].style.backgroundImage = 'url({{ asset('img/') }}/' + images[Math.floor(Math.random() * images.length)] + ')';

    $("#SendEmail").on("click", function (event) {

        $(this).attr("disabled","disabled");
        $("#label").addClass("hidden");
        $("#loading").removeClass("hidden");

        var token = "{{ csrf_token() }}";
        //event.preventDefault();
        $(this).prop("disabled",true);

        $.ajax({
            url: "/reset_password_send",
            headers: {'X-CSRF-TOKEN': token},
            type: 'post',

            data: {
                "password": $("#password").val(),
                "password2": $("#password2").val(),
                "UserID": '{{$DataInfo->UserInfo->UserID}}'
            },

            beforeSend: function () {
                // alert("akus")
            },
            success: function (response) {

                if (response['type'] == "success") {
                    swal(response['mensaje'], '', response['type']);

                    setTimeout(function () {
                        location.href = "/";
                    }, 6000);
                }
                else {
                    $("#SendEmail").prop("disabled",false);
                    swal(response['mensaje'], '', response['type']);

                }

            }
        });

    });

</script>
</html>
