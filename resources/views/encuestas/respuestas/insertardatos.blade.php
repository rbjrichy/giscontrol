<div class="row">
    <div class="col-5 col-sm-3">
        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="vert-tabs-datos-tab" data-toggle="pill" href="#vert-tabs-datos" role="tab"
                aria-controls="vert-tabs-datos" aria-selected="true">Datos</a>
            <a class="nav-link" id="vert-tabs-croquis-tab" data-toggle="pill" href="#vert-tabs-croquis" role="tab"
                aria-controls="vert-tabs-croquis" aria-selected="false">Croquis</a>
            <a class="nav-link" id="vert-tabs-fotos-predio-tab" data-toggle="pill" href="#vert-tabs-fotos-predio"
                role="tab" aria-controls="vert-tabs-fotos-predio" aria-selected="false">Fotos predio</a>
        </div>
    </div>
    <div class="col-7 col-sm-9">
        <div class="tab-content" id="vert-tabs-tabContent">
            <div class="tab-pane text-left fade active show" id="vert-tabs-datos" role="tabpanel"
                aria-labelledby="vert-tabs-datos-tab">
                @livewire('encuestas.respuestas.cod-catastral', ['respuesta' => $respuesta])
                @php
                    $bloques = $respuesta->bloques()->orderBy('num_bloque')->get();
                    $mejoras = $respuesta->mejoras()->orderBy('num_mejora')->get();
                @endphp
                @if (count($bloques)>0)
                    <div class="row">
                        @foreach ($bloques as $bloque)
                        <div class="col-3 ml-0 pl-0">
                            <div class="card border-info ml-2 mb-3">
                                <div class="card-body text-secondary">
                                    @livewire('encuestas.respuestas.sup-bloques', ['bloque' => $bloque])
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-3 ml-0 pl-0">
                            <div class="card border-info ml-2 mb-3">
                                <div class="card-body text-secondary">
                                    @livewire('encuestas.respuestas.sumatoria-sup-bloques', ['resEncuesta' => $respuesta])
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (count($mejoras)>0)
                    <div class="row">
                        @foreach ($mejoras as $mejora)
                        <div class="col-3 ml-0 pl-0">
                            <div class="card border-info ml-2 mb-3">
                                <div class="card-body text-secondary">
                                    @livewire('encuestas.respuestas.sup-mejoras', ['mejora' => $mejora])
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-3 ml-0 pl-0">
                            <div class="card border-info ml-2 mb-3">
                                <div class="card-body text-secondary">
                                    @livewire('encuestas.respuestas.sumatoria-sup-mejoras', ['resEncuesta' => $respuesta])
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-3 ml-0 pl-0">
                        <div class="card border-info ml-2 mb-3">
                            <div class="card-body text-secondary">
                                @livewire('encuestas.respuestas.superficie-terreno', ['respuesta' => $respuesta])
                            </div>
                        </div>
                    </div>
                    <div class="col-3 ml-0 pl-0">
                        @livewire('encuestas.respuestas.frente-fondo', ['respuesta' => $respuesta])
                    </div>
                    
                </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-croquis" role="tabpanel" aria-labelledby="vert-tabs-croquis-tab">
                <div class="row">
                    <div class="col-6 m-auto">
                        @livewire('encuestas.respuestas.mostrar-image', ['respuesta' => $respuesta, 'carpeta' => 'croquis'])
                    </div>
                    <div class="col-6 m-auto">
                        @livewire('encuestas.respuestas.upload-image', ['respuesta' => $respuesta, 'carpeta' => 'croquis'])
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="vert-tabs-fotos-predio" role="tabpanel" aria-labelledby="vert-tabs-fotos-predio-tab">
                <div class="row">
                    <div class="col-6 m-auto">
                        @livewire('encuestas.respuestas.mostrar-image', ['respuesta' => $respuesta, 'carpeta' => 'encuestas'])
                    </div>
                    <div class="col-6 m-auto">
                        @livewire('encuestas.respuestas.upload-image', ['respuesta' => $respuesta, 'carpeta' => 'encuestas'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
