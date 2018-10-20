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
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html">
            <b>Intra</b>Net</a>
        <br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9x5gCexOmydYgZVqd4BfbEMCtUCatCFIZp2TayjJsOHOID9XOZA"
             alt="NikkenLogo"
             style="max-height: 150px;border-radius: 30px;box-shadow: 2px 2px 15px rgb(70, 66, 66);">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Accede a la Intranet de Nikken Latinoam&eacute;rica</p>

        <form id="LoginForm">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="UserEmail">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="UserPassword">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block" id="Submit">Accesar</button>
                </div>
                <!-- /.col -->
            </div>

        </form>

        <!-- /.social-auth-links -->

        <a href="#">Olvide mi contrase&ntilde;a</a>
        <br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<link src="https://unpkg.com/sweetalert/dist/sweetalert.min.css"></link>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });

    $("#LoginForm").validate({


        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            UserEmail: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            UserPassword: {
                required: true,
            }
        },
        // Specify validation error messages
        messages: {
            UserPassword: {
                required: "Porfavor Ingrese el Password",
            },
            UserEmail: "Porfavor Ingrese el correo electrónico"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            // form.submit();
            login();

        }
    });

    function login() {
        var form_data = [];
        console.log($("[name='UserEmail']").val());
        form_data = {
            'UserEmail': $("[name='UserEmail']").val(),
            'UserPassword': $("[name='UserPassword']").val(),
        }

        var token = $("#token").val();
        $.ajax({

            url: "{{ url('/login') }}",
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',

            data: form_data,

            beforeSend: function () {
            },
            success: function (response) {

                swal(response['mensaje'], '', response['type']);
                if (response['type'] == "success") {
                    location.href = "/";
                }
            }
        });
    }
</script>
</body>
</html>
