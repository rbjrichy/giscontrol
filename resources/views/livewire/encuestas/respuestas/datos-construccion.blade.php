<div>
<form wire:submit.prevent="save">
    @csrf
    <div class="row">
        <div class="col-4 ml-0 pl-0">
            <div class="card border-info ml-2 mb-3">
                <div class="card-body text-secondary">
                    <h5>Bloque {{$bloque->num_bloque}} </h5>
                    <div class="row d-block">
                        @php
                                $options = [
                                    'class' => 'form-control mr-2',
                                ];
                                $siNo = [
                                    'si' => 'SI',
                                    'no' => 'NO'
                                ];
                            @endphp
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Num Bloque:</span>
                            <div class="col-6">
                                {{-- {!! Form::number('num_bloque', $bloque->num_bloque, ['class' => 'form-control mr-2','wire:model.defer'=>'bloque.num_bloque']) !!} --}}
                                <input type="number" wire:model.defer="bloque.num_bloque"  id="num_bloque" class="form-control mr-2">
                                @error('bloque.num_bloque')
                                    <span>{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Num Plantas:</span>
                            <div class="col-6">
                                {!! Form::number('num_plantas', $bloque->num_plantas, ['class' => 'form-control mr-2','wire:model.defer'=>'bloque.num_plantas']) !!}
                                @error('bloque.num_plantas')
                                    <span>{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Año Construcción:</span>
                            <div class="col-6">
                                {!! Form::number('anio_contrucion', $bloque->anio_contrucion, ['class' => 'form-control mr-2','wire:model.defer'=>'bloque.anio_contrucion']) !!}
                                @error('bloque.anio_contrucion')
                                    <span>{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Estado Conservación:</span>
                            @php
                                $estadoConser = [
                                    'excelente' => 'EXCELENTE',
                                    'muy_bueno' => 'MUY BUENO',
                                    'bueno' => 'BUENO',
                                    'regular' => 'REGULAR',
                                    'malo' => 'MALO',
                                    'ruinas' => 'RUINAS'
                                ];
                            @endphp
                            <div class="col-6">
                                {!! Form::select('estado_consevacion', $estadoConser, $bloque->estado_consevacion, ['class' => 'form-control mr-2','wire:model.defer'=>'bloque.estado_consevacion']) !!}
                                @error('bloque.estado_consevacion')
                                    <span>{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-6 col-form-span">Superficie:</span>
                            <div class="col-6">
                                {!! Form::text('superficie_bloque', $bloque->superficie_bloque,  ['class' => 'form-control mr-2','wire:model.defer'=>'bloque.superficie_bloque']) !!}
                                @error('bloque.superficie_bloque')
                                    <span>{{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-4 ml-0 pl-0">
            <div class="card border-info ml-2 mb-3">
                <div class="card-body text-secondary">
                    <h5>Destino / Uso</h5>
                    <div class="row d-block">
                        
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Comercial:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_comercial }}" name="du_comercial">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Oficinas:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_oficinas }}" name="du_oficinas">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Residen.:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_residencial }}" name="du_residencial">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Industrial:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_industrial }}" name="du_industrial">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Serv. Pub.:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_servicio_publico }}" name="du_servicio_publico">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Recreac.:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->du_recreacion }}" name="du_recreacion">
                            </div>
                        </div>
                        <div class="form-group row ml-0">
                            <span class="col-8 col-form-span">Otros Usos:</span>
                            <div class="col-4">
                                <input type="text" class="form-control mr-2" value="{{ $bloque->otros_usos }}" name="otros_usos">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-4 ml-0 pl-0">
            <div class="card border-info ml-2 mb-3">
                <div class="card-body text-secondary">
                    <h5>Items Constructivos</h5>
                    <div class="row d-block">
                        <table class="table-bordered text-secondary">
                            @php
                                $list1346 = [
                                    '' => '--',
                                    '1' => '1',
                                    '3' => '3',
                                    '4' => '4',
                                    '6' => '6'
                                ];
                                $list2357 = [
                                    '' => '--',
                                    '2' => '2',
                                    '3' => '3',
                                    '5' => '5',
                                    '7' => '7'
                                ];
                                $list1356 = [
                                    '' => '--',
                                    '1' => '1',
                                    '3' => '3',
                                    '5' => '5',
                                    '6' => '6'
                                ];
                            @endphp
                            <tr>
                                <td colspan="3"><span>OBRA GRUESA</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cimientos</td>
                                <td>
                                    {!! Form::select('cimientos', $list1346, $bloque->cimientos,['wire:model.defer'=>'bloque.cimientos']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Estructuras</td>
                                <td>{!! Form::select('estructuras', $list2357, $bloque->estructuras,['wire:model.defer'=>'bloque.estructuras']) !!}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Muros y Tabiques</td>
                                <td>{!! Form::select('muros_tabiques', $list2357, $bloque->muros_tabiques,['wire:model.defer'=>'bloque.muros_tabiques']) !!}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><span>OBRA FINA</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Revest. Muro Externo</td>
                                <td>
                                    {!! Form::select('reves_muro_ext', $list1346, $bloque->reves_muro_ext,['wire:model.defer'=>'bloque.reves_muro_ext']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Cubierta ó Techo</td>
                                <td>
                                    {!! Form::select('cubierta_techo', $list1346, $bloque->cubierta_techo,['wire:model.defer'=>'bloque.cubierta_techo']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Revest. Muro Interno</td>
                                <td>
                                    {!! Form::select('reves_muro_int', $list1346, $bloque->reves_muro_int,['wire:model.defer'=>'bloque.reves_muro_int']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Acabado de Pisos</td>
                                <td>
                                    {!! Form::select('acabado_pisos', $list2357, $bloque->acabado_pisos,['wire:model.defer'=>'bloque.acabado_pisos']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Carpinteria</td>
                                <td>
                                    {!! Form::select('carpinteria', $list1356, $bloque->carpinteria,['wire:model.defer'=>'bloque.carpinteria']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><span>SERVICIOS</span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Electricidad</td>
                                <td>
                                    {!! Form::select('electricidad', $list1346, $bloque->electricidad,['wire:model.defer'=>'bloque.electricidad']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Agua Potable</td>
                                <td>
                                    {!! Form::select('agua', $list1346, $bloque->agua,['wire:model.defer'=>'bloque.agua']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Alcantarillado</td>
                                <td>
                                    {!! Form::select('alcantarillado', $list1346, $bloque->alcantarillado,['wire:model.defer'=>'bloque.alcantarillado']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Artefactos Sanitarios</td>
                                <td>
                                    {!! Form::select('art_sanitarios', $list1346, $bloque->art_sanitarios,['wire:model.defer'=>'bloque.art_sanitarios']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Artefactos de Cocina</td>
                                <td>
                                    {!! Form::select('art_concina', $list1346, $bloque->art_concina,['wire:model.defer'=>'bloque.art_concina']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Sumatória</td>
                                <td><span class="mr-2 ml-2">{{ $bloque->sumatoria ?? '' }}</span></td>
                            </tr>
                            <tr>
                                <td colspan="2">Tipología</td>
                                <td><span class="mr-2 ml-2">{{ $bloque->tipologia ?? '' }}</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('encuestas.respuestas.partials.buttons')    
</form>
<br>
<br><br>
</div>
