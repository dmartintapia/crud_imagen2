<div class="container">    

    

    <!--<h1>{{ $modo }} dato</h1>-->

    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error )
            <li>{{$error}}</li>            
        @endforeach
        </ul>
    </div>        
    @endif

    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="" value="{{isset($usuario->nombre)?$usuario->nombre:old('nombre')}}">
    </div>

    <div class="form-group">
    <label for="apellido">Apellido</label>
    <input class="form-control" type="text" name="apellido" id=""value="{{isset($usuario->apellido)?$usuario->apellido:old('apellido')}}">
    </div>


    <div class="form-group">
    <label for="tipoUsuario">Tipo de Persona</label>
    <input class="form-control" type="text" name="tipoUsuario" id=""value="{{isset($usuario->tipoUsuario)?$usuario->tipoUsuario:old('tipoUsuario')}}">
    </div>
    
    <br>


    <input type="submit" class="btn btn-success"  value="{{ $modo }} dato">
    <!--<button type="text" class="btn btn-primary">Guardar</button>-->

    <a href="{{ url('usuario' )}}" class="btn btn-primary" >Regresar</a>

    <br>

</div>