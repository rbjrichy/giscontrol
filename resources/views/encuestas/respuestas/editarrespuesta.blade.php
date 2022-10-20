<div class="row">
    <div class="col-5 col-sm-3">
        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="vert-tabs-ubicacion-tab" data-toggle="pill" href="#vert-tabs-ubicacion" role="tab"
                aria-controls="vert-tabs-ubicacion" aria-selected="false">1. UBICACIÓN DEL INMUEBLE</a>
            <a class="nav-link" id="vert-tabs-identificacion-tab" data-toggle="pill" href="#vert-tabs-identificacion" role="tab"
                aria-controls="vert-tabs-identificacion" aria-selected="true">2. IDENTIFICACION DEL TITULAR DE DOMINIO</a>
            <a class="nav-link" id="vert-tabs-derecho-propietario-tab" data-toggle="pill" href="#vert-tabs-propietario"
                role="tab" aria-controls="vert-tabs-propietario" aria-selected="false">3. DERECHO PROPIETARIO</a>
            <a class="nav-link" id="vert-tabs-otros-datos-predio-tab" data-toggle="pill" href="#vert-tabs-datos-predio"
                role="tab" aria-controls="vert-tabs-datos-predio" aria-selected="false">4. OTROS DATOS DEL PREDIO</a>
            <a class="nav-link" id="vert-tabs-otros-datos-terreno-tab" data-toggle="pill" href="#vert-tabs-datos-terreno"
                role="tab" aria-controls="vert-tabs-datos-terreno" aria-selected="false">5. DATOS DEL TERRENO</a>
            <a class="nav-link" id="vert-tabs-datos-construccion-tab" data-toggle="pill" href="#vert-tabs-datos-construccion"
                role="tab" aria-controls="vert-tabs-datos-construccion" aria-selected="false">6. DATOS DE LA CONSTRUCCIÓN </a>
            <a class="nav-link" id="vert-tabs-otros-mejoras-tab" data-toggle="pill" href="#vert-tabs-mejoras"
                role="tab" aria-controls="vert-tabs-mejoras" aria-selected="false">7. MEJORAS ADICIONALES</a>
            {{-- <a class="nav-link" id="vert-tabs-tipologia-tab" data-toggle="pill" href="#vert-tabs-tipologia"
                role="tab" aria-controls="vert-tabs-tipologia" aria-selected="false">9. TIPOLOGIA DE LA EDIFICACION</a>
            <a class="nav-link" id="vert-tabs-superficies-tab" data-toggle="pill" href="#vert-tabs-superficies"
                role="tab" aria-controls="vert-tabs-superficies" aria-selected="false">8. SUPERFICIES</a>
            <a class="nav-link" id="vert-tabs-croquis-tab" data-toggle="pill" href="#vert-tabs-croquis"
                role="tab" aria-controls="vert-tabs-croquis" aria-selected="false">10. CROQUIS FICHA CATASTRAL</a> --}}
        </div>
    </div>
    <div class="col-7 col-sm-9">
        <div class="tab-content" id="vert-tabs-respuestas">
            <div class="tab-pane text-left fade active show" id="vert-tabs-ubicacion" role="tabpanel"
                aria-labelledby="vert-tabs-ubicacion-tab">
                {{-- @include('encuestas.respuestas.partials.ubicacion') --}}
                @livewire('encuestas.respuestas.ubicacion', ['respuesta' => $respuesta])
            </div>
            <div class="tab-pane fade" id="vert-tabs-identificacion" role="tabpanel"
                aria-labelledby="vert-tabs-identificacion-tab">
                {{-- @include('encuestas.respuestas.partials.identificacion') --}}
                @livewire('encuestas.respuestas.identificacion', ['respuesta' => $respuesta])

            </div>
            <div class="tab-pane fade" id="vert-tabs-propietario" role="tabpanel"
                aria-labelledby="vert-tabs-derecho-propietario-tab">
                {{-- @include('encuestas.respuestas.partials.der_propietario') --}}
                @livewire('encuestas.respuestas.der-propietario', ['respuesta' => $respuesta])
            </div>
            <div class="tab-pane fade" id="vert-tabs-datos-predio" role="tabpanel"
                aria-labelledby="vert-tabs-otros-datos-predio-tab">
                {{-- @include('encuestas.respuestas.partials.otros_datos_predio') --}}
                @livewire('encuestas.respuestas.datos-predio', ['respuesta' => $respuesta])

            </div>
            <div class="tab-pane fade" id="vert-tabs-datos-terreno" role="tabpanel"
                aria-labelledby="vert-tabs-otros-datos-terreno-tab">
                {{-- @include('encuestas.respuestas.partials.datos_terreno') --}}
                @livewire('encuestas.respuestas.datos-terreno', ['respuesta' => $respuesta])
            </div>
            <div class="tab-pane fade" id="vert-tabs-datos-construccion" role="tabpanel"
                aria-labelledby="vert-tabs-datos-construccion-tab">
                {{-- @include('encuestas.respuestas.partials.datos_construccion') --}}
                @php
                    $bloques = $respuesta->bloques()->orderBy('num_bloque')->get();
                @endphp

                @foreach ($bloques as $bloque)
                    @livewire('encuestas.respuestas.datos-construccion', ['bloque' => $bloque])
                @endforeach                
            </div>
            <div class="tab-pane fade" id="vert-tabs-mejoras" role="tabpanel"
                aria-labelledby="vert-tabs-otros-mejoras-tab">
                {{-- @include('encuestas.respuestas.partials.datos_mejoras') --}}
                @php
                    $mejoras = $respuesta->mejoras()->orderBy('num_mejora')->get();
                @endphp
                {{-- <div class="row"> --}}
                    @foreach ($mejoras as $mejora)
                        @livewire('encuestas.respuestas.datos-mejoras', ['mejora' => $mejora])
                    @endforeach 
                {{-- </div> --}}
            </div>
            {{-- <div class="tab-pane fade" id="vert-tabs-tipologia" role="tabpanel"
                aria-labelledby="vert-tabs-tipologia-tab">
                9. TIPOLOGIA DE LA EDIFICACION
            </div>
            <div class="tab-pane fade" id="vert-tabs-superficies" role="tabpanel"
                aria-labelledby="vert-tabs-superficies-tab">
                8. SUPERFICIES
            </div>
            <div class="tab-pane fade" id="vert-tabs-croquis" role="tabpanel"
                aria-labelledby="vert-tabs-croquis-tab">
                10. CROQUIS FICHA CATASTRAL
            </div> --}}
        </div>
    </div>
</div>
