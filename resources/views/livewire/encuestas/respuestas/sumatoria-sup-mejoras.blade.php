<div>
    <form wire:submit.prevent="save">
        @csrf
        <h5>Superficie Total</h5>
        <div class="row d-block">
            <div class="form-group row ml-0">
                <span class="col-12 col-form-span">Sumatoria:</span>
                <div class="col-12">
                    <input type="text" class="form-control mr-2" wire:model="sumatoria_mejoras" readonly>
                </div>
            </div>
        </div>
    </form>
</div>
