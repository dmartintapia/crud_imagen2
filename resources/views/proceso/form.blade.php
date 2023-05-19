    

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
        <label for="idPersona">Id Persona(Select)</label>
        <input class="form-control" type="text" name="idPersona" id="" value="{{isset($proceso->idPersona)?$proceso->idPersona:old('idPersona')}}">
        </div>

        <div class="form-group">
        <label for="caratula">Caratula</label>
        <input class="form-control" type="text" name="caratula" id=""value="{{isset($proceso->caratula)?$proceso->caratula:old('caratula')}}">
        </div>

        <div class="form-group">
        <label for="tipoProceso">Tipo de Proceso</label>
        <input class="form-control" type="text" name="tipoProceso" id=""value="{{isset($proceso->tipoProceso)?$proceso->tipoProceso:old('tipoProceso')}}">

        <div class="form-group">
        <label for="numeroCarpeta">Numero de Carpeta</label>
        <input class="form-control" type="text" name="numeroCarpeta" id=""value="{{isset($proceso->numeroCarpeta)?$proceso->numeroCarpeta:old('numeroCarpeta')}}">
        </div>
        <br>
        @if(isset($proceso->imagen))
            <img src="{{ asset('storage').'/'.$proceso->imagen}}" width="200" alt="">
        @endif
        <br>
        <input class="form-control" type="file" name="imagen" id=""value="">
        <br>


        <input type="submit" class="btn btn-success"  value="{{ $modo }} dato">
        <!--<button type="text" class="btn btn-primary">Guardar</button>-->

        <a href="{{ url('proceso' )}}" class="btn btn-primary" >Regresar</a>
    
        <br>
        
    </div>