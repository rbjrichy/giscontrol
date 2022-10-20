<div class="card border-info mb-3">
    <div class="card-body text-secondary">
        <div class="row m-0">
            <div class="col-3 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Doc. Adquisición</span>
                    @php
                        $options = [
                            'class' => 'form-control mr-2',
                        ];
                        $siNo = [
                            'si' => 'SI',
                            'no' => 'NO',
                        ];
                    @endphp 
                    {!! Form::select('doc_adqui', $siNo, $respuesta->doc_adqui, $options) !!}
                </div>
            </div>
            <div class="col-9 pl-0">
                <div class="form-group">
                    <span class="text-secondary">Documento, notario, fecha</span>
                    <input type="text" class="form-control mr-2" value="{{ $respuesta->doc_notario_fecha }}" name="doc_notario_fecha"
                        placeholder="Documento, notario, fecha">
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-3 pl-0">
                <span class="text-secondary">Matrícula</span>
                <input type="text" class="form-control mr-2" value="{{ $respuesta->num_matricula }}" name="num_matricula"
                        placeholder="Matrícula">
            </div>
            <div class="col-3 pl-0">
                <span class="text-secondary">Asiento</span>
                <input type="text" class="form-control mr-2" value="{{ $respuesta->ddrr_asiento }}" name="ddrr_asiento"
                        placeholder="Asiento">
            </div>
            <div class="col-3 pl-0">
                <span class="text-secondary">Lugar</span>
                <input type="text" class="form-control mr-2" value="{{ $respuesta->ddrr_lugar }}" name="ddrr_lugar"
                        placeholder="Lugar">
            </div>
            <div class="col-3 pl-0">
                <span class="text-secondary">Fecha</span>
                <input type="text" class="form-control mr-2" value="{{ $respuesta->ddrr_fecha }}" name="ddrr_fecha"
                        placeholder="Fecha">
            </div>
        </div>
    </div>
</div>

