@extends('_layouts.layout')

@section('MenuHref',"/")
@section('TitlePage',"Gestor de Contenido")


@section('content')

    <div id="app">
        <manager-content :token="'{{ csrf_token() }}'"></manager-content>
    </div>

@endsection
