<div>
    <form wire:submit.prevent="save">
        <div wire:loading wire:target="image" class="alert alert-danger small" role="alert">
            <strong>¡Imágen cargando!</strong> Espere un momento hasta que la imagen se haya procesado.
        </div>
        <div class="text-center mb-4">
            @if ($image)
                <img class="img-fluid" src="{{$image->temporaryUrl()}}" alt="Imagen Temporal">
            @endif
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" wire:model="image" id="{{$idenFile}}" class="form-control-sm" accept="image/*">
            </div>
            @error('image')
                <div class="text-danger small m-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="row m-2">
            <button type="submit" class="btn btn-success float-right" wire:loading.attr="disabled" wire:target="save, image">Guardar</button>  
        </div>
    </form>
</div>
