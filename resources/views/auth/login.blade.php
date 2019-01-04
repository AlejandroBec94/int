<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Intranet</title>
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
        <p class="login-box-msg">Accede a la Intranet de Nikken Latinoam&eacute;rica</p>

        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="loginForm">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo') }}</label>
            <!--
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}"
                           required autofocus style="background-color: !IMPORTANT;"> @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>-->
                <div class="col-md-6">
                    <input id="UserNick" type="text"
                           class="form-control{{ $errors->has('UserNick') ? ' is-invalid' : '' }}"
                           name="UserNick" value="{{ old('UserNick') }}"
                           required autofocus style="background-color: !IMPORTANT;"> @if ($errors->has('UserNick'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('UserNick') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           required> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-4">
                    <button type="submit" class="btn btn-primary btn-block" id="login"
                            style="background-color:#3CB5C2;">
                        <label id="label">{{ __('Accesar') }}</label>
                        <img src="{{asset('images/load.gif')}}" style="width:30px;" id="loading" class="hidden">
                        {{--<img src="{{asset('images/load.gif')}}">--}}
                    </button>

                    <a class="btn btn-link" href="/forgot_password">
                        Olvidé mi contraseña
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>
</div>
</body>

<!-- jQuery 3 -->
<script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
<script>

    $(document).ready(function () {
        $("#login").on("click", function () {
            $(this).attr("disabled","disabled");
            $("#label").addClass("hidden");
            $("#loading").removeClass("hidden");
            $("#loginForm").submit();
        });
    });

    var images = ['background.jpg', 'background2.jpg', 'background3.jpg', 'background4.jpg', 'background6.jpg', 'background7.jpg', 'background8.jpg', 'background9.jpg', 'background10.jpg', 'background11.jpg', 'background12.jpg', 'background13.jpg', 'background14.jpg', 'background15.jpg', 'background16.jpg', 'background17.jpg', 'background18.jpg', 'background19.jpg'];
    document.getElementsByClassName('login-page')[0].style.backgroundImage = 'url({{ asset('img/') }}/' + images[Math.floor(Math.random() * images.length)] + ')';


</script>
</html>
