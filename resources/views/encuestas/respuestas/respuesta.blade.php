<div class="row d-block">
    @include('partes.alertas')
    <div class="g_contenedor">
        <h5 class="text-muted">1. UBICACIÓN DEL INMUEBLE</h5>
        <div class="row p-0 m-0 mb-3">
            <div class="col-9 p-0 m-0">
                <table class="table-striped border">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <span class="text_tit">1.2 CODIGO DE LEVANTAMIENTO</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Distrito</td>
                            <td>Manzano</td>
                            <td>Predio</td>
                        </tr>
                        <tr>
                            <td class="text-center">{{ $respuesta->dis_lev }}</td>
                            <td class="text-center">{{ $respuesta->man_lev }}</td>
                            <td class="text-center">{{ $respuesta->pre_lev }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table-striped border" style="width:100%">
                    <tbody>
                        <tr>
                            <td><span class="text_tit">1.3 CENTRO URBANO</span></td>
                            <td><span class="text_tit">1.4 BARRIO/URB.</span></td>
                            <td><span class="text_tit">1.5 AVENIDA, CALLE, CALLEJON O PLAZA</span></td>
                            <td><span class="text_tit">1.6 N°</span></td>
                        </tr>
                        <tr>
                            <td>{{ $respuesta->centro_urbano }}</td>
                            <td>{{ $respuesta->barrio_urbanizacion }}</td>
                            <td>{{ $respuesta->direccion_inmu }}</td>
                            <td>{{ $respuesta->num_inmu }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><span class="text_tit">2.1 NOMBRE COMPLETO ó RAZON SOCIAL</span></td>
                        </tr>
                        <tr>
                            <td colspan="4">{{ $respuesta->nomb_razon_social }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3 p-0 m-0">
                @if (is_null($respuesta->ruta_foto_predio))
                    <a class="btn btn-success btn-sm"
                        href="{{ route('admin.encuesta.descargar.img', [$respuesta->id]) }}">
                        <i class="fas fa-download"> Descargar</i>
                    </a>
                @else
                    <img class="foto_predio rounded mx-auto d-block"
                        src="{{ asset(Storage::url($respuesta->ruta_foto_predio)) }} " alt="imagen">
                @endif
                <div class="text-center">
                    <h5>{{ strtoupper($respuesta->tipo_inmueble) }}</h5>
                </div>
            </div>
        </div>
        <h5 class="text-muted">2 OTROS DATOS DEL PREDIO</h5>
        <div class="mb-3 border">
            <table class="table-striped" style="width:100%">
                <tr>
                    <td colspan="5"><span class="text_tit">2.2 ANTERIOR TITULAR DE DOMINIO</span></td>
                    <td><span class="text_tit">2.3 PERSONERIA</span></td>
                    <td><span class="text_tit">2.4 TITULARIDAD</span></td>
                    <td><span class="text_tit">2.5 TIPO TITULARIDAD</span></td>
                </tr>
                <tr>
                    <td colspan="5">{{ $respuesta->tit_dominio_ant }}</td>
                    <td>{{ $respuesta->personeria }}</td>
                    <td>{{ $respuesta->titularidad }}</td>
                    <td>{{ $respuesta->tipo_titularidad }}</td>
                </tr>
                <tr>
                    <td colspan="6"><span class="text_tit">2.6 DOCUMENTO DE IDENTIFICACIÓN</span></td>
                    <td colspan="1"><span class="text_tit">2.8 TELÉFONO</span></td>
                    <td colspan="1"><span class="text_tit">2.9 Whats App</span></td>
                </tr>
                <tr>
                    <td colspan="2">Tipo Documento</td>
                    <td colspan="2">Número</td>
                    <td colspan="2">Expedido</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">{{ $respuesta->tipo_doc_iden }}</td>
                    <td colspan="2">{{ $respuesta->num_doc_iden }}</td>
                    <td colspan="2">{{ $respuesta->expedido }}</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
        <h5 class="text-muted">3. DERECHO PROPIETARIO</h5>
        <div class="mb-3">
            <table class="table-striped" style="width:100%">
                <tr>
                    <td><span class="text_tit">3.1 DOC. ADQUISICION</span></td>
                    <td colspan="2"><span class="text_tit">3.2 DOCUMENTO, Nº, NOTARIO y FECHA</span></td>
                    <td colspan="4"><span class="text_tit">3.3 REGISTRO EN DERECHOS REALES</span></td>
                </tr>
                <tr>
                    <td>{{ $respuesta->tipo_titularidad }}</td>
                    <td colspan="2">{{ $respuesta->doc_notario_fecha }}</td>
                    <td>Matricula</td>
                    <td>Asiento</td>
                    <td>Lugar</td>
                    <td>Fecha</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                    <td>{{ $respuesta->num_matricula }}</td>
                    <td>{{ $respuesta->ddrr_asiento }}</td>
                    <td>{{ $respuesta->ddrr_lugar }}</td>
                    <td>{{ $respuesta->ddrr_fecha }}</td>
                </tr>
            </table>
        </div>
        <h5 class="text-muted">4. OTROS DATOS DEL PREDIO</h5>
        <div class="row p-0 m-0 mb-3">
            <div class="col-9 p-0 m-0 pr-2">
                <table class="table-striped border" style="width:100%">
                    <tr>
                        <td><span class="text_tit">4.1 ORIGEN DEL ASENTAMIENTO</span></td>
                        <td><span class="text_tit">4.2 NOMBRE DEL INMUEBLE</span></td>
                        <td><span class="text_tit">4.3 TIPO DE INMUEBLE</span></td>
                        <td><span class="text_tit">4.4 LOCACIÓN</span></td>
                    </tr>
                    <tr>
                        <td>{{ $respuesta->orig_asentamiento }}</td>
                        <td>{{ $respuesta->nombre_inmueble }}</td>
                        <td>{{ $respuesta->tipo_inmueble }}</td>
                        <td>{{ $respuesta->locacion }}</td>
                    </tr>
                    <tr>
                        <td bgcolor="#f8f9fa" colspan="4">
                            <table class="" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td colspan="3"><span class="text_tit">4.6 ESTADO TRIBUTARIO</span></td>
                                        <td colspan="2"><span class="text_tit">4.7 FORMA DE ADQUISICIÓN</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Zona Homogenea:</td>
                                        <td>Ultima Gestion Pagada IMPBI:</td>
                                        <td>Nº PMC GAM</td>
                                        <td colspan="2">{{ $respuesta->forma_adquisicion }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $respuesta->zona_homogenea }}</td>
                                        <td>{{ $respuesta->ultima_gestion_pagada }}</td>
                                        <td>{{ $respuesta->pmc_gam }}</td>
                                        <td colspan="2"><span class="text_tit">4.8 FINANC. ADQUISICION</span></td>
                                    </tr>
                                    <tr>
                                        <td>Exencion Tributaria:</td>
                                        <td>Exclusion Tributaria:</td>
                                        <td>&nbsp;</td>
                                        <td colspan="2">{{ $respuesta->finan_adq_inmueble }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $respuesta->exclusion_tributaria }}</td>
                                        <td>{{ $respuesta->exencion_tributaria }}</td>
                                        <td>&nbsp;</td>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-3 p-0 m-0">
                <table class="table-striped border" style="width:100%">
                    <tr>
                        <td colspan="2"><span class="text_tit">4.5 ESTADO CATASTRAL</span></td>
                    </tr>
                    <tr>
                        <td>Con Inscripcion Catastral:</td>
                        <td><span class="pl-2 pr-2">{{ $respuesta->ins_catastral }}</span></td>
                    </tr>
                    <tr>
                        <td>Con Linea Municipal Aprobado:</td>
                        <td><span class="pl-2 pr-2">{{ $respuesta->linea_muni_apro }}</span></td>
                    </tr>
                    <tr>
                        <td>Con Plano de Predio NO Aprobado:</td>
                        <td><span class="pl-2 pr-2">{{ $respuesta->plano_pre_no_apro }}</span></td>
                    </tr>
                    <tr>
                        <td>Plano Emitido por:</td>
                        <td><span class="pl-2 pr-2">{{ $respuesta->plano_emitido_por }}</span></td>
                    </tr>
                </table>
            </div>
        </div>
        <h5 class="text-muted">5. DATOS DEL TERRENO</h5>
        <div class="row mb-3">
            <div class="col-9">
                <table class="table-striped border">
                    <tbody>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">5.1 TIPO DE VÍA (K1)</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->tipo_de_via }}</span></td>
                            <td colspan="2">
                                <div class="text_tit pr-2">5.7 SERVICIOS (K5)</div>
                            </td>
                            <td colspan="2">
                                <div class="text_tit pr-2">5.5 FRENTE FONDO (K6)</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">5.2 TOPOGRAFÍA (K2)</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->topografia }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Energia Electrica:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->ener_electrica }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Frente :</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->frente }}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">5.3 FORMA (K3)</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->forma }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Agua Potable:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->agua_potable }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Fondo:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->fondo }}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">5.4 UBICACIÓN (K4)</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->ubicacion }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Telefono:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->telefono }}</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">5.6 REVESTIMIENTO DE VIA</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->revestimiento_via }}</span></td>
                            <td>
                                <div class="text_tit pr-2">Alcantarillado:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->alcantarillado }}</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>

                            <td colspan="2">&nbsp;</td>
                            <td>
                                <div class="text_tit pr-2">Gas Domiciliario:</div>
                            </td>
                            <td><span class="mr-4">{{ $respuesta->gas_domiciliario }}</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                croquis del terreno
            </div>
        </div>
        <h5 class="text-muted">6. DATOS DE LA CONSTRUCCIÓN </h5>
        <div class="row p-0 m-0 mb-3">
            <div class="mr-2">
                6.5 DESTINO / USO (KK3) %
                <table class="table-striped border">
                    <tbody>
                        <tr>
                            <td>
                                <div class="text_tit pr-2">Comercial</div>
                            </td>
                            <td>
                                <div class="text_tit pr-2">Oficinas</div>
                            </td>
                            <td>
                                <div class="text_tit pr-2">Residen.</div>
                            </td>
                            <td>
                                <div class="text_tit pr-2">Industrial</div>
                            </td>
                            <td>
                                <div class="text_tit pr-2">Serv. Pub.</div>
                            </td>
                            <td>
                                <div class="text_tit pr-2">Recreac.</div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $respuesta->du_comercial }}</td>
                            <td>{{ $respuesta->du_oficinas }}</td>
                            <td>{{ $respuesta->du_residencial }}</td>
                            <td>{{ $respuesta->du_industrial }}</td>
                            <td>{{ $respuesta->du_servicio_publico }}</td>
                            <td>{{ $respuesta->du_recreacion }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if (count($respuesta->bloques) > 0)
            <h5 class="text-muted">6.1 Nº BLOQUES</h5>
            <div class="row p-0 m-0 mb-3">
                @foreach ($respuesta->bloques as $bloque)
                    <div class="mr-2">
                        <table class="table-striped border">
                            <tbody>
                                <tr>
                                    <th colspan="2">BLOQUE {{ $bloque->num_bloque }}</th>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">6.2 TIPOLOGIA EDIF</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $bloque->tipologia_edif }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">6.3 AÑO CONST. (KK1)</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $bloque->anio_contrucion }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">6.4 ESTADO CONSERV. (KK2)</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $bloque->estado_consevacion }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">6.6 Nº PLANTAS</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $bloque->num_plantas }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">SUPERFICIE BLOQUE
                                            {{ $bloque->num_bloque }}</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $bloque->superficie_bloque }}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        @endif
        @if (count($respuesta->mejoras) > 0)
            <h5 class="text-muted">7. MEJORAS ADICIONALES</h5>
            <div class="row p-0 m-0 mb-3">
                @foreach ($respuesta->mejoras as $mejora)
                    <div class="mr-2 border">
                        <table class="table-striped">
                            <tbody>
                                <tr>
                                    <th colspan="2">MEJORA {{ $mejora->num_mejora }}</th>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">7.1 NOMBRE MEJORA</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $mejora->nombre_mejora }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">7.2 TIPOLOGIA</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $mejora->tipologia_mejora }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">7.3 AÑO CONSTRUC</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $mejora->anio_const_mejora }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">7.4 CONSERVACION</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $mejora->consevacion_mejora }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text_tit">7.5 SUPERFICIE (m²)</span></td>
                                    <td>
                                        <div class="pr-2 pl-2">{{ $mejora->superficie_mejora }}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    @if (count($respuesta->bloques) > 0)
        @php
            $bloque1 = $respuesta->bloques[0] ?? null;
            $bloque2 = $respuesta->bloques[1] ?? null;
            $bloque3 = $respuesta->bloques[2] ?? null;
        @endphp
        9. TIPOLOGIA DE LA EDIFICACION

        <div class="row p-0 m-0">
            <div class="col-6">
                <table class="table-bordered">
                    <tr>
                        <td colspan="5"><span class="text_tit mr-2 ml-2">ITEMS CONSTRUCTIVOS EDIFICACIÓN</span></td>
                    </tr>
                    <tr>
                        <td><span class="text_tit mr-2 ml-2">No.</span></td>
                        <td><span class="text_tit mr-2 ml-2">9.1 OBRA GRUESA</span></td>
                        <td><span class="mr-2 ml-2">B1</span></td>
                        <td><span class="mr-2 ml-2">B2</span></td>
                        <td><span class="mr-2 ml-2">B3</span></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cimientos</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->cimientos ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->cimientos ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->cimientos ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Estructuras</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->estructuras ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->estructuras ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->estructuras ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Muros y Tabiques</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->muros_tabiques ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->muros_tabiques ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->muros_tabiques ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td><span class="text_tit mr-2 ml-2">No.</span></td>
                        <td><span class="text_tit mr-2 ml-2">9.2 OBRA FINA</span></td>
                        <td><span class="mr-2 ml-2">B1</span></td>
                        <td><span class="mr-2 ml-2">B2</span></td>
                        <td><span class="mr-2 ml-2">B3</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Revest. Muro Externo</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->reves_muro_ext ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->reves_muro_ext ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->reves_muro_ext ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cubierta ó Techo</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->cubierta_techo ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->cubierta_techo ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->cubierta_techo ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Revest. Muro Interno</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->reves_muro_int ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->reves_muro_int ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->reves_muro_int ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Acabado de Pisos</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->acabado_pisos ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->acabado_pisos ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->acabado_pisos ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Carpinteria</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->carpinteria ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->carpinteria ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->carpinteria ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td><span class="text_tit mr-2 ml-2">No.</span></td>
                        <td><span class="text_tit mr-2 ml-2">9.2 OBRA FINA</span></td>
                        <td><span class="mr-2 ml-2">B1</span></td>
                        <td><span class="mr-2 ml-2">B2</span></td>
                        <td><span class="mr-2 ml-2">B3</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Electricidad</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->electricidad ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->electricidad ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->electricidad ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Agua Potable</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->agua ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->agua ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->agua ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Alcantarillado</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->alcantarillado ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->alcantarillado ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->alcantarillado ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Artefactos Sanitarios</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->art_sanitarios ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->art_sanitarios ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->art_sanitarios ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Artefactos de Cocina</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->art_concina ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->art_concina ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->art_concina ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">Sumatória</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->sumatoria ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->sumatoria ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->sumatoria ?? '' }}</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">Tipología</td>
                        <td><span class="mr-2 ml-2">{{ $bloque1->tipologia ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque2->tipologia ?? '' }}</span></td>
                        <td><span class="mr-2 ml-2">{{ $bloque3->tipologia ?? '' }}</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-6">

            </div>
        </div>
    @endif
</div>