<div class="card border-info mb-3">
    <div class="card-body text-secondary">
        <div class="row m-0">
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Origen del asentamiento</span>
                    @php
                        $options = [
                            'class' => 'form-control mr-2',
                        ];
                        $listOrigenAsentamiento = [
                            'area_planificada' => 'AREA PLANIFICADA',
                            'area_no_planificada' => 'AREA NO PLANIFICADA',
                        ];
                    @endphp
                    {!! Form::select('orig_asentamiento', $listOrigenAsentamiento, $respuesta->orig_asentamiento, $options) !!}
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Nombre Inmueble</span>
                    <input type="text" class="form-control mr-2" value="{{ $respuesta->nombre_inmueble }}"
                        name="nombre_inmueble" placeholder="Nombre Inmueble">
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
                            'n__de_prop_hz' => 'EQUIP. MUNICIPAL',
                            'n__de_inmueble_en_cond' => 'BALDIO',
                        ];
                    @endphp
                    {!! Form::select('tipo_inmueble', $listTipoInmu, $respuesta->tipo_inmueble, $options) !!}
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
                    {!! Form::select('locacion', $listLocacion, $respuesta->locacion, $options) !!}
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
                {!! Form::select('forma_adquisicion', $listFormaAdqui, $respuesta->forma_adquisicion, $options) !!}
            </div>
            <div class="col-3 pl-0">
                <span class="text-secondary">Financiamiento Adquisición</span>
                @php
                    $listFinanAdqui = [
                        'finan_propio' => 'PROPIO',
                        'finan_bancario' => 'SUCESION BANCO',
                        'finan_mutual' => 'MUTUAL',
                        'finan_otro_tipo' => 'OTRO TIPO DE FINANCIAMIENTO',
                    ];
                @endphp
                {!! Form::select('finan_adq_inmueble', $listFinanAdqui, $respuesta->finan_adq_inmueble, $options) !!}
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
                            <input type="text" class="form-control" placeholder="Zona Homogenea" value="{{$respuesta->zona_homogenea}}">
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Exclusion Tributaria:</span>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Exclusion Tributaria" value="{{$respuesta->exclusion_tributaria}}">
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Exencion Tributaria:</span>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Exencion Tributaria" value="{{$respuesta->exencion_tributaria}}">
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Ultima Gestion Pagada IMPBI:</span>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Ultima Gestion Pagada IMPBI" value="{{$respuesta->ultima_gestion_pagada}}">
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Nº PMC GAM:</span>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Nº PMC GAM" value="{{$respuesta->pmc_gam}}">
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
                                'no' => 'NO'
                            ];
                        @endphp
                        <div class="col-4">
                            {!! Form::select('ins_catastral', $siNo, $respuesta->ins_catastral, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-8 col-form-span">Con Linea Municipal Aprobado:</span>
                        <div class="col-4">
                            {!! Form::select('linea_muni_apro', $siNo, $respuesta->linea_muni_apro, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-8 col-form-span">Con Plano de Predio NO Aprobado:</span>
                        <div class="col-4">
                            {!! Form::select('plano_pre_no_apro', $siNo, $respuesta->plano_pre_no_apro, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-8 col-form-span">Plano Emitido por:</span>
                        <div class="col-4">
                            @php
                                $emitidoPor = [
                                    'gam' => 'GAM',
                                    'particular' => 'PARTICULAR'
                                ];
                            @endphp
                            {!! Form::select('plano_emitido_por', $emitidoPor, $respuesta->plano_emitido_por, $options) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
