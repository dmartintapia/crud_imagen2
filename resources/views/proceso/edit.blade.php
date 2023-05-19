@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Proceso</h1>
@stop

@section('content')
    
    <form action="{{ url('/proceso/'.$proceso->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('proceso.form',['modo'=>'Editar']);
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

