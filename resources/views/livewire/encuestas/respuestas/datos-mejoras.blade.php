<div>
    <form wire:submit.prevent="save">
        <div class="col-6 ml-0 pl-0">
            <div class="card border-info ml-2 mb-3">
                <div class="card-body text-secondary">
                    <h5>Mejora {{$mejora->num_mejora}} </h5>
                    <div class="row d-block">
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Num Mejora:</span>
                            <div class="col-6">
                                {!! Form::number('num_mejora', $mejora->num_mejora, ['class' => 'form-control', 'wire:model.lazy'=>'mejora.num_mejora']) !!}
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Nombre Mejora:</span>
                            @php
                                $listMejoras = [
                                    '' => '--',
                                    'piscina' => 'PISCINA',
                                    'area_deportiva' => 'AREA DEPORTIVA',
                                    'parrillero' => 'PARRILLERO',
                                    'muro' => 'MURO',
                                    'garaje' => 'GARAJE',
                                ];
                                $listTipologias = [
                                    '' => '--',
                                    'buena' => 'BUENA',
                                    'regular' => 'REGULAR',
                                    'mala' => 'MALA',
                                ];
                                $listConservacion = [
                                    '' => '--',
                                    'excelente' => 'EXCELENTE',
                                    'muy_bueno' => 'MUY BUENO',
                                    'bueno' => 'BUENO',
                                    'regular' => 'REGULAR',
                                    'malo' => 'MALO',
                                    'ruinas' => 'RUINAS',
                                ];
                            @endphp
                                    
                            <div class="col-6">
                                {!! Form::select('nombre_mejora', $listMejoras, $mejora->nombre_mejora, ['class' => 'form-control', 'wire:model.lazy'=>'mejora.nombre_mejora']) !!}
                                @error('mejora.nombre_mejora')
                                    <span>{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Tipología:</span>
                            <div class="col-6">
                                {!! Form::select('tipologia_mejora', $listTipologias, $mejora->tipologia_mejora, ['class' => 'form-control', 'wire:model.lazy'=>'mejora.tipologia_mejora']) !!}
                                @error('mejora.tipologia_mejora')
                                    <span>{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Año Construcción:</span>
                            <div class="col-6">
                                {!! Form::number('anio_const_mejora', $mejora->anio_const_mejora, ['class' => 'form-control', 'wire:model.lazy'=>'mejora.anio_const_mejora']) !!}
                                @error('mejora.anio_const_mejora')
                                    <span>{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Conservación:</span>
                            <div class="col-6">
                                {!! Form::select('consevacion_mejora', $listConservacion, $mejora->consevacion_mejora, ['class' => 'form-control', 'wire:model.lazy'=>'mejora.consevacion_mejora']) !!}
                                @error('mejora.consevacion_mejora')
                                    <span>{{$message}} </span>
                                @enderror
    
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Superficie:</span>
                            <div class="col-6">
                                {!! Form::text('superficie_mejora', $mejora->superficie_mejora,  ['class' => 'form-control', 'wire:model.lazy'=>'mejora.superficie_mejora']) !!}
                                @error('mejora.superficie_mejora')
                                    <span>{{$message}} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @include('encuestas.respuestas.partials.buttons')    
                </div>
            </div>
        </div>
    </form>
</div>
