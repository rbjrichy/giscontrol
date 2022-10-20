<div>
    @php
        $config = [
            'format' => 'YYYY-MM-DD',
            'dayViewHeaderFormat' => 'MMM YYYY',
            // 'minDate' => "js:moment().startOf('month')",
            'maxDate' => "js:moment().endOf('day')",
            // 'daysOfWeekDisabled' => [0, 6],
            'locale' => 'es',
            // 'timeZone' => 'America/Caracas'
        ];
    @endphp
    <form wire:submit.prevent="save">
        @csrf
        <div class="card border-info mb-3">
            <div class="card-body text-secondary">
                <div class="row m-0">
                    <div class="col-3 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Doc. Adquisición</span>
                            @php
                                $siNo = [
                                    'si' => 'SI',
                                    'no' => 'NO',
                                ];
                            @endphp 
                            {!! Form::select('doc_adqui', $siNo, $respuesta->doc_adqui, ['class' => 'form-control mr-2', 'wire:model.defer'=>'respuesta.doc_adqui']) !!}
                        </div>
                    </div>
                    <div class="col-9 pl-0">
                        <div class="form-group">
                            <span class="text-secondary">Documento, notario, fecha</span>
                            <input type="text" class="form-control mr-2"  wire:model="respuesta.doc_notario_fecha" name="doc_notario_fecha"
                                placeholder="Documento, notario, fecha">
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <span>Datos DDRR</span>
                </div>
                <div class="row m-0">
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Matrícula</span>
                        <input type="text" class="form-control mr-2"  wire:model="respuesta.num_matricula" name="num_matricula"
                                placeholder="Matrícula">
                    </div>
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Asiento</span>
                        <input type="text" class="form-control mr-2"  wire:model="respuesta.ddrr_asiento" name="ddrr_asiento"
                                placeholder="Asiento">
                    </div>
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Lugar</span>
                        <input type="text" class="form-control mr-2"  wire:model.defer="respuesta.ddrr_lugar" name="ddrr_lugar"
                                placeholder="Lugar">
                    </div>
                    <div class="col-3 pl-0">
                        <span class="text-secondary">Fecha</span>
                        {{-- <x-adminlte-input-date name="ddrr_fecha" label-class="text-secondary"  wire:model.defer="respuesta.ddrr_fecha"
                            :config="$config" >
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-calendar-day"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date> --}}
                        <div class="form-group">
                            <div class="input-group">
                            <input type="text" id="ddrr_fecha" wire:model.defer="respuesta.ddrr_fecha" class="form-control flatpickr" placeholder="yyyy-mm-dd" >
                                {{-- <div class="input-group-append">
                                    <div class="input-group-text bg-dark">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('encuestas.respuestas.partials.buttons')
    </form>
</div>
