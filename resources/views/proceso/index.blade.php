@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Proceso</h1>
@stop

@section('content')
    
    @if(Session::has('mensaje'))

    <div class="alert alert-success alert-dismissible  fade show" role="alert">

        {{ Session::get('mensaje')}}

   
   <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <!--<span aria-hidden="true">&times;</span>-->
    </button>

    </div> 

    @endif


<a href="{{ url('proceso/create' )}}" class="btn btn-success m-1"  >Nuevo Proceso</a>

<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearModal">
                   Crear Modal
</button>-->

<a href="" type=""></a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th scope="row">id</th>
            <th>idPersona</th>
            <th>caratula</th>
            <th>Tipo de Proceos</th>
            <th>Numeo de Carpeta</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($procesos as $proceso)
        <tr>
            <td>{{$proceso->id}}</td>
            <td>{{$proceso->idPersona}}</td>
            <td>{{$proceso->caratula}}</td>
            <td>{{$proceso->tipoProceso}}</td>
            <td>{{$proceso->numeroCarpeta}}</td>
            <td>
            <img class="img-thumbnail img-fluid " src="{{ asset('storage').'/'.$proceso->imagen}}" width="200" alt="">
            </td>

            <td>
               
                <a href="{{ url('/proceso/'.$proceso->id.'/edit')}}" class="btn btn-primary" width="200">
                   Editar
                </a>
               
                
                <!--<a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarModal{{$proceso->id.'/edit'}}">
                   Editar Modal
                </a>-->

               <form action="{{url('/proceso/'.$proceso->id)}}" class="d-inline" method="POST">
                @csrf  
                {{method_field('DELETE')}} 
                   <input class="btn btn-danger" type="submit"onclick="return confirm('quieres borrar')" value="Borrar">
               </form> 
               @include('proceso.modalEditar')
            </td>
        </tr>
        @endforeach
        
       

    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
                )
    </script>
@stop
