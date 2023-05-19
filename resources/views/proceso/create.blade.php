@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo Proceso</h1>
@stop

@section('content')
    
    <form action="{{ url('/proceso' )}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('proceso.form',['modo'=>'Crear']);
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
