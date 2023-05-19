        <div class="modal fade" id="editarModal{{$proceso->id.'/edit'}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Proceso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                            
            
                    <form action="{{url('/proceso')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('proceso.form',['modo'=>'Crear']);
                    </form>

                
                </div>
            </div>
        </div>  