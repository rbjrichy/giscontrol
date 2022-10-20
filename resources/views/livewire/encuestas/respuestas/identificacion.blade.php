<div>
    <form wire:submit.prevent="save">
        <div class="card border-info mb-3">
            <div class="card-body text-secondary">
                <div class="row m-0">
                    <div class="col-12 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Nombre Completo ó Razón Social</span>
                            <input type="text" class="form-control mr-2" value="{{ $respuesta->nomb_razon_social }}" wire:model="respuesta.nomb_razon_social" name="nomb_razon_social"
                                id="distrito_lev" placeholder="Nombre Completo ó Razón Social">
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-6 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Anterior titular del dominio</span>
                            <input type="text" class="form-control mr-2" value="{{ $respuesta->tit_dominio_ant }}" wire:model="respuesta.tit_dominio_ant" name="tit_dominio_ant"
                                id="distrito_lev" placeholder="Anterior titular del dominio">
                        </div>
                    </div>
                    <div class="col-2 pl-0">
                        <span class="text-secondary">Personería</span>
                        @php
                            $optiones = [
                                'class' => 'form-control mr-2',
                            ];
                            $listPersoneria = [
                                'natural' => 'NATURAL',
                                'juridica' => 'JURIDICA',
                            ];
                        @endphp 
                        {!! Form::select('personeria', $listPersoneria, $respuesta->personeria, ['class'=>'form-control mr-2', 'wire:model'=>'respuesta.personeria']) !!}
                    </div>
                    <div class="col-2 pl-0">
                        @php
                            $listTitularidad = [
                                'propietario' => 'PROPIETARIO',
                                'poseedor' => 'POSEEDOR',
                            ];
                        @endphp
                        <span class="text-secondary">Titularidad</span>
                        {!! Form::select('titularidad', $listTitularidad, $respuesta->titularidad, ['class'=>'form-control mr-2', 'wire:model'=>'respuesta.titularidad']) !!}
                        
                    </div>
                    <div class="col-2 pl-0">
                        @php
                            $listTipoTitularidad = [
                                'publico' => 'PUBLICO',
                                'privado' => 'PRIVADO',
                            ];
                        @endphp
                        <span class="text-secondary">Tipo Titularidad</span>
                        {!! Form::select('tipo_titularidad', $listTipoTitularidad, $respuesta->tipo_titularidad, ['class'=>'form-control mr-2', 'wire:model'=>'respuesta.tipo_titularidad']) !!}
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-2">
                        @php
                            $listTipoDocumentoIden = [
                                'ci' => 'CI',
                                'nit' => 'NIT',
                                'ci_extrajero' => 'CI EXTRANJERO',
                            ];
                        @endphp
                        <span class="text-secondary">Tipo</span>
                        {!! Form::select('tipo_doc_iden', $listTipoDocumentoIden, $respuesta->tipo_doc_iden, ['class'=>'form-control mr-2', 'wire:model.defer'=>'respuesta.tipo_doc_iden']) !!}
                    </div>
                    <div class="col-2">
                        <span class="text-secondary">Número</span>
                        {!! Form::text('num_doc_iden', $respuesta->num_doc_iden, ['class'=>'form-control mr-2', 'wire:model'=>'respuesta.num_doc_iden']) !!}
                    </div>
                    <div class="col-2">
                        @php
                            $listExpedido = [
                                'ch' => 'CH',
                                'lp' => 'LP',
                                'cb' => 'CB',
                                'or' => 'OR',
                                'pt' => 'PT',
                                'tj' => 'TJ',
                                'sc' => 'SC',
                                'be' => 'BE',
                                'pd' => 'PD',
                                'bo' => 'BO',
                            ];
                        @endphp               
                        <span class="text-secondary">Expedido</span>
                        {!! Form::select('expedido', $listExpedido, $respuesta->expedido, ['class'=>'form-control mr-2', 'wire:model.defer'=>'respuesta.expedido']) !!}
                    </div>
                    <div class="col-3">
                        <span class="text-secondary">Teléfono</span>
                        {!! Form::text('num_telefono', $respuesta->num_telefono, ['class'=>'form-control mr-2']) !!}
                    </div>
                    @php
                        // , 'wire:model'=>'respuesta.num_telefono'
                        // , 'wire:model'=>'respuesta.whatsapp'
                    @endphp
                    <div class="col-3">
                        <span class="text-secondary">Whatsapp</span>
                        {!! Form::text('whatsapp', $respuesta->whatsapp, ['class'=>'form-control mr-2']) !!}
                    </div>
                </div>
            </div>
        </div>   
        @include('encuestas.respuestas.partials.buttons')
    </form>
</div>
