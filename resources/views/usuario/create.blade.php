@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nueva Persona</h1>
@stop

@section('content')
    
    <form action="{{ url('/usuario' )}}" method="POST" >
        @csrf
        @include('usuario.form',['modo'=>'Crear']);
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
654654654