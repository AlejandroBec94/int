@extends('layouts.layout')
@section('TitlePage',"Usuarios")

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Usuarios</h3>
                    <a class="pull-right btn btn-primary" href="/user/new">Agregar</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="TableArea" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Creaci&oacute;n</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td><a href="/users/{{ $user->UserID }}">{{ $user->UserID }}</a></td>
                                <td>{{ $user->UserNick }}
                                </td>
                                <td>{{ $user->UserName }}</td>
                                <td>{{ $user->UserEmail }}</td>
                                <td>{{ date("d/m/Y",strtotime($user->DocDate)) }}</td>
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
                'scrollY':        '50vh',
                'scrollCollapse': true,
                'paging': true,
                'responsive': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                "language": {
                    "zeroRecords": "No existen coincidencias",
                    "info": "P&aacute;gina _PAGE_ de _PAGES_",
                    "infoEmpty": "No existen resultados",
                    "search": "Buscar:",
                },
                buttons: ['copy', 'excel', 'pdf', 'colvis']


            })
        })
    </script>

@endsection()
