<div>
    <form wire:submit.prevent="save">
     
    <div class="card border-success mb-3">
        <div class="card-body text-secondary">
            <h5 class="card-title">Codigo Catastral</h5> <br>
            <div class="row m-0">
                <input type="number" wire:model="respuesta.dis" class="form-control mr-2"  style="width: 6rem"
                    name="distrito" id="distrito_id" placeholder="Distrito">
                <input type="number" wire:model="respuesta.man" class="form-control mr-2"  style="width: 6rem"
                    name="manzano" id="manzano_id" placeholder="Manzano">
                <input type="number" wire:model="respuesta.pre" class="form-control mr-2"  style="width: 6rem"
                    name="predio" id="predio_id" placeholder="Predio">
            </div>
    
        </div>
    </div>
    <div class="card border-secondary mb-3">
        <div class="card-body text-secondary">
            <h5 class="card-title">Codigo Catastral Levantamiento</h5> <br>
            <div class="row m-0">
                <input type="number" wire:model="respuesta.dis_lev" class="form-control mr-2"  style="width: 6rem"
                    name="dis_lev" id="distrito_lev" placeholder="Distrito">
                <input type="number" wire:model="respuesta.man_lev" class="form-control mr-2"  style="width: 6rem"
                    name="man_lev" id="manzano_lev" placeholder="Manzano">
                <input type="number" wire:model="respuesta.pre_lev" class="form-control mr-2"  style="width: 6rem"
                    name="pre_lev" id="predio_lev" placeholder="Predio">
            </div>
    
        </div>
    </div>
    
    <div class="card border-info mb-3">
        <div class="card-body text-secondary">
            <div class="row m-0">
                <div class="col-6 pl-0">
                    <div class="form-group">
                        <span class="text-secondary">Centro Urbano</span>
                        <input type="text" class="form-control mr-2"  wire:model="respuesta.centro_urbano" name="centro_urbano"
                            id="distrito_lev" placeholder="Centro Urbano">
                    </div>
                </div>
                <div class="col-6 pl-0">
                    <span class="text-secondary">Barrio / Urbanización</span>
                    <input type="text" class="form-control mr-2"  wire:model="respuesta.barrio_urbanizacion" name="barrio_urbanizacion"
                        id="manzano_lev" placeholder="Barrio / Urbanización">
                </div>
            </div>
            <div class="row m-0">
                <div class="col-10 pl-0">
                    <div class="form-group">
                        <span class="text-secondary">Avenida, Calle, Callejón o Plaza</span>
                        <input type="text" class="form-control mr-2"  wire:model="respuesta.direccion_inmu" name="direccion_inmu"
                            id="distrito_lev" placeholder="Avenida, Calle, Callejón o Plaza">
                    </div>
                </div>
                <div class="col-2 pl-0">
                    <span class="text-secondary">Número</span>
                    <input type="text" class="form-control mr-2"  wire:model="respuesta.num_inmu" name="num_inmu"
                        id="manzano_lev" placeholder="Número">
                </div>
            </div>
        </div>
    </div>

    @include('encuestas.respuestas.partials.buttons')

</form>
</div>
