        <div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Proceso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                            
                    <!--<form action="{{url('/proceso')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">

                                @if(count($errors)>0)
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                    @foreach($errors->all() as $error )
                                        <li>{{$error}}</li>            
                                    @endforeach
                                    </ul>
                                </div>        
                                @endif
                                <form action="{{url('/proceso')}}" method="post" enctype="multipart/form-data">
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
                                </div>

                                <div class="form-group">
                                <label for="numeroCarpeta">Numero de Carpeta</label>
                                <input class="form-control" type="text" name="numeroCarpeta" id=""value="{{isset($proceso->numeroCarpeta)?$proceso->numeroCarpeta:old('numeroCarpeta')}}">
                                </div>
                                <br>
                                
                                <br>
                                <input class="form-control" type="file" name="imagen" id=""value="">
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>-->

                    <form action="{{url('/proceso')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('proceso.form',['modo'=>'Crear']);
                    </form>

                
                </div>
            </div>
        </div>  