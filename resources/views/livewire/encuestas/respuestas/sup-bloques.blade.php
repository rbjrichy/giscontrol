<div>
    <form wire:submit.prevent="save">
        @csrf
        <h5>Bloque {{$bloque->num_bloque}} </h5>
        <div class="row d-block">
            <div class="form-group row ml-0">
                <span class="col-12 col-form-span">Superficie:</span>
                <div class="col-12">
                    <input type="text" class = "form-control mr-2" wire:model.lazy = "bloque.superficie_bloque" >
                    @error('bloque.superficie_bloque')
                        <span>{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
