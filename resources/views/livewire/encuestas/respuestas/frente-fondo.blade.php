<div>
    <form wire:submit.prevent="save">
        @csrf
    <div class="card border-info ml-2 mb-3">
        <div class="card-body text-secondary">
            <h5>FRENTE FONDO</h5>
            <div class="row d-block">
                <div class="form-group row ml-0">
                    <span class="col-6 col-form-span">Frente:</span>
                    <div class="col-6">
                        <input type="text" class="form-control mr-2" wire:model="respuesta.frente" placeholder="Frente">
                    </div>
                    @error('respuesta.frente')
                        <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group row ml-0">
                    <span class="col-6 col-form-span">Fondo:</span>
                    <div class="col-6">
                        <input type="text" class="form-control mr-2" wire:model="respuesta.fondo" placeholder="Fondo">
                    </div>
                    @error('respuesta.fondo')
                        <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="row invisible">
                <button type="submit" class="btn btn-success btn-block">Guardar</button>  
            </div>
        </div>
    </div>
    </form>
</div>
