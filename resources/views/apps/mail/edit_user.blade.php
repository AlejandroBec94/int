<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

Estimado usuario.<br> <strong>{{ Auth::user()->UserName }}.</strong> ha editado el siguiente usuario:
<strong> {{ $UserName }} </strong>

</body>
</html>