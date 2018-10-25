@extends('layouts.layout')
@section('TitlePage',"Áreas")

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de &Aacute;reas</h3>
                    <a class="pull-right btn btn-primary" href="/area/new">Agregar</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="TableArea" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Acr&oacute;nimo</th>
                            <th>Nombre</th>
                            <th>Creaci&oacute;n</th>
                            <th>Comentarios</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($areas as $area)
                            <tr>
                                <td><a href="/areas/{{ $area->AreaID }}">{{ $area->AreaID }}</a></td>
                                <td>{{ $area->AreaAcronym }}
                                </td>
                                <td>{{ $area->AreaName }}</td>
                                <td>{{ date("d/m/Y",strtotime($area->DocDate)) }}</td>
                                <td>{{ $area->AreaDescription }}</td>
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
            $('#TableArea').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': false,
                'autoWidth': false
            })
        })
    </script>

@endsection()
