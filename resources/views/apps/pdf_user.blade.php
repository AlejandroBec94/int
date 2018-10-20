<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <style>

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
            width: 100%;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
        }

        #project {
            float: left;
            margin-left: 5%;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="clearfix">
    <div id="logo">
        <img src="https://http2.mlstatic.com/pimag-waterfall-filtro-de-agua-nikken-paq-repuestos-extra-D_NQ_NP_686760-MLM26487757098_122017-F.jpg">
    </div>
    <h1>Solicitud de Usuario</h1>

    <div id="project">
        <div><span>Fecha:</span> {{ $Date }}</div>
        {{-- <div><span>&Aacute;rea o Departamento:</span> John Doe</div> --}}
        <br>

    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">Movimiento a Realizar</th>
            <th class="desc">
                @if($MoveRequest == "Down")
                    Baja
                @elseif($MoveRequest == "Up")
                    Alta
                @elseif($MoveRequest == "Update")
                    Modificación
                @elseif($MoveRequest == "Temp")
                    Temporal
                @elseif($MoveRequest == "Definitive")
                    Definitivo
                @endif
            </th>

        </tr>
        <tr>
            <th class="service">Tipo de Plaza</th>
            <th class="desc">
                @if($TypePlace == "new")
                    Nueva
                @elseif($TypePlace == "exist")
                    Existente
                @endif
            </th>

        </tr>
        <tr>
            <th class="service">Nombre del Colaborador al que sustituye</th>
            <th class="desc">{{$UserReplace}}</th>

        </tr>
        <tr>
            <th class="service">¿Requiere de un Equipo?</th>
            <th class="desc">
                @if($UserEquipment == "yes")
                    Si
                @elseif($UserEquipment == "no")
                    No
                @endif
            </th>

        </tr>
        <tr>
            <th class="service">Nombre del Usuario</th>
            <th class="desc">{{$UserName}}</th>

        </tr>
        <tr>
            <th class="service">Cargo</th>
            <th class="desc">{{$UserJobTitle}}</th>

        </tr>
        <tr>
            <th class="service">Jefe Inmediato</th>
            <th class="desc">{{$UserChiefName}}</th>

        </tr>
        <tr>
            <th class="service">Mail Jefe Inmediato</th>
            <th class="desc">{{ $UserChiefEmail }}</th>

        </tr>
        <tr>
            <th class="service">Fecha del Movimiento</th>
            <th class="desc">{{$RequestDate}}</th>

        </tr>
        <tr>
            <th class="service">Sistemas y/o Herramientas</th>
            <th class="desc">
                @php
                    $tools = "";
                        foreach (json_decode($UserTools) as $key => $value) {
                            if($value == "EmailAccount"){
                                $tools .= "Cuenta Email  ";
                            }
                            elseif($value == "Intra"){
                                $tools .= "Intranet  ";
                            }
                            else{
                                $tools .= $value."  ";
                            }
                        }
                @endphp
                {{ $tools }}
            </th>

        </tr>
        <tr>
            <th class="service">Otros Sistemas y/o Herrmaientas</th>
            <th class="desc">{{ $OtherTool }}</th>

        </tr>
        <tr>
            <th class="service">Comentarios</th>
            <th class="desc">{{ $RequestComment }}</th>
        </tr>
        </thead>

    </table>

</main>
<footer>
    Información Adicional :D
</footer>
</body>
</html>
