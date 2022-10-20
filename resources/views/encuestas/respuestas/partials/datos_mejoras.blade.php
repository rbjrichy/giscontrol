<div class="row">
@foreach ($respuesta->mejoras as $mejora)
    <div class="col-4 ml-0 pl-0">
        <div class="card border-info ml-2 mb-3">
            <div class="card-body text-secondary">
                <h5>Bloque {{$mejora->num_mejora}} </h5>
                <div class="row d-block">
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Num Bloque:</span>
                        <div class="col-6">
                            {!! Form::number('num_mejora', $mejora->num_mejora, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Nombre Mejora:</span>
                        @php
                            $listMejoras = [
                                'piscina' => 'PISCINA',
                                'area_deportiva' => 'AREA DEPORTIVA',
                                'parrillero' => 'PARRILLERO',
                                'muro' => 'MURO',
                                'garaje' => 'GARAJE',
                            ];
                            $listTipologias = [
                                'buena' => 'BUENA',
                                'regular' => 'REGULAR',
                                'mala' => 'MALA',
                            ];
                            $listConservacion = [
                                'excelente' => 'EXCELENTE',
                                'muy_bueno' => 'MUY BUENO',
                                'bueno' => 'BUENO',
                                'regular' => 'REGULAR',
                                'malo' => 'MALO',
                                'ruinas' => 'RUINAS',
                            ];
                        @endphp
                        		
                        <div class="col-6">
                            {!! Form::select('nombre_mejora', $listMejoras, $mejora->nombre_mejora, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Tipología:</span>
                        <div class="col-6">
                            {!! Form::select('tipologia_mejora', $listTipologias, $mejora->tipologia_mejora, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Año Construcción:</span>
                        <div class="col-6">
                            {!! Form::number('anio_const_mejora', $mejora->anio_const_mejora, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Conservación:</span>
                        <div class="col-6">
                            {!! Form::select('consevacion_mejora', $listConservacion, $mejora->consevacion_mejora, ['class' => 'form-control']) !!}

                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Superficie:</span>
                        <div class="col-6">
                            {!! Form::text('superficie_mejora', $mejora->superficie_mejora,  ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
