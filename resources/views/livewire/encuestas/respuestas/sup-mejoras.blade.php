<div>
    <form wire:submit.prevent="save">
        @csrf
        <h5>Mejora {{$mejora->num_mejora}} </h5>
        <div class="row d-block">
            <div class="form-group row ml-0">
                <span class="col-12 col-form-span">Superficie:</span>
                <div class="col-12">
                    <input type="text" class = "form-control mr-2" wire:model.lazy = "mejora.superficie_mejora" >
                    @error('mejora.superficie_mejora')
                        <span>{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
