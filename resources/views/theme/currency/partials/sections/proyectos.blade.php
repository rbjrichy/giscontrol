<div id="proyects" class="section white_fonts" style="background: #2a2a2a;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-grid">
                    @php
                        $image_noticia_url = "https://picsum.photos/300";
                    @endphp
                    @foreach ($proyectos as $objPoryecto)
                        @php
                            $img_proyecto = $objPoryecto->imagenes()->first();
                            if(is_object($img_proyecto) ){
                                $image_proyecto_url = asset(Storage::url('archivos_img/'.$img_proyecto->ruta));
                            }
                        @endphp
                        <div class="img-contairner-grid">
                            <img class="img-grid img-fluid rounded-circle" src="{{$image_proyecto_url}}" alt="Imagenes de proyectos">
                        </div>
                    @endforeach
                 </div> 
            </div>
            <div class="col-md-6 layout_padding">
                <div class="full paddding_left_15">
                    <div class="heading_main text_align_left">
                       <h2><span class="theme_color">Nuestros</span> Proyectos</h2>    
                    </div>
                </div>
                <div class="full paddding_left_15">
                    <p>{{__('We currently have the following projects under construction, we manage to transmit the enthusiasm of our clients through continuous improvement, guided by the integrity, teamwork and innovation of our people')}}.</p>
                </div>
                <div class="full paddding_left_15">
                    <a class="main_bt" href="{{route('proyecto.list')}}">Proyectos ></a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
    <div class="item-grid" style="background-image:url({{$image_proyecto_url}});">
    </div>
 --}}