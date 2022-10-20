<div>
    <form wire:submit.prevent="save">
        <div class="card border-info mb-3">
            <div class="card-body text-secondary">
                <div class="row m-0">
                    <div class="col-3 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Origen del asentamiento</span>
                            @php
                                $option = [
                                    'class' => 'form-control mr-2',
                                ];
                                $listOrigenAsentamiento = [
                                    'area_planificada' => 'AREA PLANIFICADA',
                                    'area_no_planificada' => 'AREA NO PLANIFICADA',
                                ];
                            @endphp
                            {!! Form::select('orig_asentamiento', $listOrigenAsentamiento, $respuesta->orig_asentamiento, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.orig_asentamiento']) !!}
                            @error('respuesta.orig_asentamiento')
                                <span>{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Nombre Inmueble</span>
                            <input type="text" class="form-control mr-2" wire:model="respuesta.nombre_inmueble"
                                name="respuesta.nombre_inmueble" placeholder="Nombre Inmueble">
                            @error('respuesta.nombre_inmueble')
                                <span>{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Tipo Inmueble</span>
                            @php
                                $listTipoInmu = [
                                    'casa' => 'CASA',
                                    'lote' => 'LOTE',
                                    'condominio_horizontal' => 'CONDOMINIO HORIZONTAL',
                                    'condominio_vertical' => 'CONDOMINIO VERTICAL',
                                    'equip_municipal' => 'EQUIP. MUNICIPAL',
                                    'baldio' => 'BALDIO',
                                ];
                            @endphp
                            {!! Form::select('tipo_inmueble', $listTipoInmu, $respuesta->tipo_inmueble, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.tipo_inmueble']) !!}
                            @error('respuesta.tipo_inmueble')
                                <span>{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Locación</span>
                            @php
                                $listLocacion = [
                                    'alquiler' => 'ALQUILER',
                                    'anticretico' => 'ANTICRETICO',
                                    'mixto' => 'MIXTO',
                                    'otros' => 'OTROS',
                                ];
                            @endphp
                            {!! Form::select('locacion', $listLocacion, $respuesta->locacion, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.locacion']) !!}
                            @error('respuesta.locacion')
                                <span>{{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Forma <br> Adquisición</span>
                        @php
                            $listFormaAdqui = [
                                'compra' => 'COMPRA',
                                'sucesion_hereditaria' => 'SUCESION HEREDITARIA',
                                'adjudicacion' => 'ADJUDICACION',
                                'usucapion' => 'USUCAPION',
                            ];
                        @endphp
                        {!! Form::select('forma_adquisicion', $listFormaAdqui, $respuesta->forma_adquisicion, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.forma_adquisicion']) !!}
                        @error('respuesta.forma_adquisicion')
                            <span>{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Financiamiento <br> Adquisición</span>
                        @php
                            $listFinanAdqui = [
                                'finan_propio' => 'PROPIO',
                                'finan_bancario' => 'SUCESION BANCO',
                                'finan_mutual' => 'MUTUAL',
                                'finan_otro_tipo' => 'OTRO TIPO DE FINANCIAMIENTO',
                            ];
                        @endphp
                        {!! Form::select('finan_adq_inmueble', $listFinanAdqui, $respuesta->finan_adq_inmueble, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.finan_adq_inmueble']) !!}
                        @error('respuesta.finan_adq_inmueble')
                            <span>{{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 ml-0 pl-0">
                <div class="card border-info ml-2 mb-3">
                    <div class="card-body text-secondary">
                        <h5>Estado Tributario</h5>
                        <div class="row d-block">
                            <div class="form-group row ml-0">
                                <span class="col-6 col-form-span">Zona Homogenea:</span>
                                <div class="col-6">
                                    <input type="text" wire:model="respuesta.zona_homogenea" class="form-control" placeholder="Zona Homogenea" >
                                    @error('respuesta.zona_homogenea')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-6 col-form-span">Exclusion Tributaria:</span>
                                <div class="col-6">
                                    <input type="text" wire:model="respuesta.exclusion_tributaria" class="form-control" placeholder="Exclusion Tributaria">
                                    @error('respuesta.exclusion_tributaria')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-6 col-form-span">Exencion Tributaria:</span>
                                <div class="col-6">
                                    <input type="text" wire:model="respuesta.exencion_tributaria" class="form-control" placeholder="Exencion Tributaria">
                                    @error('respuesta.exencion_tributaria')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-6 col-form-span">Ultima Gestion Pagada IMPBI:</span>
                                <div class="col-6">
                                    <input type="text" wire:model="respuesta.ultima_gestion_pagada" class="form-control" placeholder="Ultima Gestion Pagada IMPBI">
                                    @error('respuesta.ultima_gestion_pagada')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-6 col-form-span">Nº PMC GAM:</span>
                                <div class="col-6">
                                    <input type="text" wire:model="respuesta.pmc_gam" class="form-control" placeholder="Nº PMC GAM">
                                    @error('respuesta.pmc_gam')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 ml-0 pl-0">
                <div class="card border-info ml-2 mb-3">
                    <div class="card-body text-secondary">
                        <h5>Estado Tributario</h5>
                        <div class="row d-block">
                            <div class="form-group row ml-0">
                                <span class="col-8 col-form-span">Con Inscripcion Catastral:</span>
                                @php
                                    $siNo = [
                                        'si' => 'SI',
                                        'no' => 'NO',
                                    ];
                                @endphp
                                <div class="col-4">
                                    {!! Form::select('ins_catastral', $siNo, $respuesta->ins_catastral, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.ins_catastral']) !!}
                                    @error('respuesta.ins_catastral')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-8 col-form-span">Con Linea Municipal Aprobado:</span>
                                <div class="col-4">
                                    {!! Form::select('linea_muni_apro', $siNo, $respuesta->linea_muni_apro, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.linea_muni_apro']) !!}
                                    @error('respuesta.linea_muni_apro')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-8 col-form-span">Con Plano de Predio NO Aprobado:</span>
                                <div class="col-4">
                                    {!! Form::select('plano_pre_no_apro', $siNo, $respuesta->plano_pre_no_apro, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.plano_pre_no_apro']) !!}
                                    @error('respuesta.plano_pre_no_apro')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ml-0">
                                <span class="col-8 col-form-span">Plano Emitido por:</span>
                                <div class="col-4">
                                    @php
                                        $emitidoPor = [
                                            'gam' => 'GAM',
                                            'particular' => 'PARTICULAR',
                                        ];
                                    @endphp
                                    {!! Form::select('plano_emitido_por', $emitidoPor, $respuesta->plano_emitido_por, ['class' => 'form-control mr-2', 'wire:model.defer' => 'respuesta.plano_emitido_por']) !!}
                                    @error('respuesta.plano_emitido_por')
                                        <span>{{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('encuestas.respuestas.partials.buttons')
    </form>
</div>
