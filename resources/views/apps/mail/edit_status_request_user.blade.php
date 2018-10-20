<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
La solicitud {{ $RequestID }} ha sido

@if($status == 3)
    aceptada
@elseif($status == 2)
    puesta en espera
@elseif($status == 4)
    cancelada

@endif

por <strong> {{ Auth::user()->UserName }} </strong>


</body>
</html>
