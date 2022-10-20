<div>
    <form wire:submit.prevent="save">
        @csrf
        <h5>Superficie Terreno</h5>
        <div class="row d-block">
            <div class="form-group row ml-0">
                <div class="col-12">
                    <input type="text" class="form-control mr-2" wire:model="respuesta.super_terreno">
                    @error('respuesta.super_terreno')
                        <span class="text-danger small">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
