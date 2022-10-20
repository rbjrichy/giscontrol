<div class="card border-info mb-3">
    <div class="card-body text-secondary">
        <div class="row m-0">
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Tipo de vía (K1)</span>
                    @php
                        $options = [
                            'class' => 'form-control mr-2',
                        ];
                        $listTipoVia = [
                            'avenida_principal' => 'AVENIDA PRINCIPAL',
                            'avenida_secundaria' => 'AVENIDA SECUNDARIA',
                            'calle_principal' => 'CALLE PRINCIPAL',
                            'calle_secundaria' => 'CALLE SECUNDARIA',
                            'calle_terciaria_y_callejon' => 'CALLE TERCIARIA Y CALLEJON',
                        ];
                    @endphp
                    {!! Form::select('tipo_de_via', $listTipoVia, $respuesta->tipo_de_via, $options) !!}
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Topografía (K2)</span>
                    @php
                        $listTopografia = [
                            'plano' => 'PLANO',
                            'semi_plano' => 'SEMI PLANO',
                            'pendiente' => 'PENDIENTE',
                            'muy_pendiente' => 'MUY PENDIENTE',
                            'barranco' => 'BARRANCO',
                        ];
                    @endphp
                    {!! Form::select('topografia', $listTopografia, $respuesta->topografia, $options) !!}
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Forma (K3)</span>
                    @php
                        $listForma = [
                            'regular' => 'REGULAR',
                            'irregular' => 'IRREGULAR',
                            'muy_irregular' => 'MUY IRREGULAR',
                        ];
                    @endphp
                    {!! Form::select('forma', $listForma, $respuesta->forma, $options) !!}
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Ubicación (K4)</span>
                    @php
                        $listUbicacion = [
                            'esquina' => 'ESQUINA',
                            'media' => 'MEDIA (CENTRO)',
                        ];
                    @endphp
                    {!! Form::select('ubicacion', $listUbicacion, $respuesta->ubicacion, $options) !!}
                </div>
            </div>
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Revestimiento de vía</span>
                    @php
                        $listRevesVia = [
                            'asfalto' => 'ASFALTO',
                            'adoquin' => 'ADOQUIN',
                            'cemento' => 'CEMENTO',
                            'loseta_ladrillo' => 'LOSETA-LADRILLO',
                            'piedra' => 'PIEDRA',
                            'ripio' => 'RIPIO',
                            'tierra' => 'TIERRA',
                        ];
                    @endphp
                    {!! Form::select('revestimiento_via', $listRevesVia, $respuesta->revestimiento_via, $options) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6 ml-0 pl-0">
        <div class="card border-info ml-2 mb-3">
            <div class="card-body text-secondary">
                <h5>SERVICIOS (K5)</h5>
                <div class="row d-block">
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Energia Electrica:</span>
                        @php
                            $siNo = [
                                'si' => 'SI',
                                'no' => 'NO'
                            ];
                        @endphp
                        <div class="col-4">
                            {!! Form::select('ener_electrica', $siNo, $respuesta->ener_electrica, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Agua Potable:</span>
                        
                        <div class="col-4">
                            {!! Form::select('agua_potable', $siNo, $respuesta->agua_potable, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Teléfono:</span>
                        
                        <div class="col-4">
                            {!! Form::select('telefono', $siNo, $respuesta->telefono, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Alcantarillado:</span>
                        
                        <div class="col-4">
                            {!! Form::select('alcantarillado', $siNo, $respuesta->alcantarillado, $options) !!}
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-6 col-form-span">Gas Domiciliario:</span>
                        
                        <div class="col-4">
                            {!! Form::select('gas_domiciliario', $siNo, $respuesta->gas_domiciliario, $options) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 ml-0 pl-0">
        <div class="card border-info ml-2 mb-3">
            <div class="card-body text-secondary">
                <h5>FRENTE FONDO (K6)</h5>
                <div class="row d-block">
                    
                    <div class="form-group row ml-0">
                        <span class="col-8 col-form-span">Frente:</span>
                        <div class="col-4">
                            <input type="text" class="form-control mr-2" value="{{ $respuesta->frente }}" name="frente"
                        placeholder="Frente">
                        </div>
                    </div>
                    <div class="form-group row ml-0">
                        <span class="col-8 col-form-span">Fondo:</span>
                        <div class="col-4">
                            <input type="text" class="form-control mr-2" value="{{ $respuesta->fondo }}" name="fondo"
                        placeholder="Fondo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
