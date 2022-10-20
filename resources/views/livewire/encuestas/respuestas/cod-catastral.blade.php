<div>
    <form wire:submit.prevent="save">
        <div class="card border-success mb-3">
            <div class="card-body text-secondary">
                <h5 class="card-title">Codigo Catastral Vigente</h5> <br>
                <div class="row m-0">
                    <input type="number" wire:model.lazy="respuesta.dis" class="form-control mr-2"  style="width: 6rem"
                        id="distrito_id" placeholder="Distrito">
                    <input type="number" wire:model.lazy="respuesta.man" class="form-control mr-2"  style="width: 6rem"
                        id="manzano_id" placeholder="Manzano">
                    <input type="number" wire:model.lazy="respuesta.pre" class="form-control mr-2"  style="width: 6rem"
                        id="predio_id" placeholder="Predio">
                    <div style="width: 6rem">
                        @include('encuestas.respuestas.partials.buttons')
                    </div>
                    <div class="mr-2 ml-2" style="width: 16rem">
                        @if (isset($codigoRepetido))
                            @if (is_array($codigoRepetido) && count($codigoRepetido)>0 )
                            <label>El codigo se repite en:</label>
                            <ol>
                                @foreach ($codigoRepetido as $codRepe)
                                    <li><a href="{{route('admin.encuesta.respuesta.show',[$codRepe['encuesta_id'], $codRepe['id']])}}"> {{$codRepe['dis_lev']}}-{{$codRepe['man_lev']}}-{{$codRepe['pre_lev']}}</a> </li>
                                @endforeach
                            </ul>
                            @endif
                        @endif              
                    </div>
                </div>
                <div class="row m-0 mt-2">  
                    @if (count($errors) > 0)
                    <div class="alert alert-danger small">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif                  
                </div>
                
            </div>
        </div>
    </form>
</div>
