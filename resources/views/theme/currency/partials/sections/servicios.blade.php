<div id="services" class="section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span class="theme_color"></span>{{__('Services')}}</h2>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($servicios as $objServicio)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="full services_blog">
                    @php
                        $image_servicio_url = "https://picsum.photos/300";
                        $img_servicios = $objServicio->imagenes()->first();
                        if(is_object($img_servicios) ){
                            $image_servicio_url = asset(Storage::url('archivos_img/'.$img_servicios->ruta));
                        }
                    @endphp
                   <img class="img-responsive" src="{{$image_servicio_url}}" alt="#" />
                   <h4>{{$objServicio->getNombre()}}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row margin-top_30">
            <div class="col-sm-12">
                <div class="full">
                    <div class="center">
                        <a class="main_bt" href="{{route('servicio.list')}} ">{{__('See more')}} ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>