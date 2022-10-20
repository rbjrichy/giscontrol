<div id="news" class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span class="theme_color"></span>{{__('News')}}</h2>    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($noticias as $objNoticia)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="full news_blog">
                    @php
                        $image_noticia_url = "https://picsum.photos/300";
                        $img_noticia = $objNoticia->imagenes()->first();
                        if(is_object($img_noticia) ){
                            $image_noticia_url = asset(Storage::url('archivos_img/'.$img_noticia->ruta));
                        }
                    @endphp
                   <img class="img-fluid" src="{{$image_noticia_url}}" alt="#" />
                   <div class="overlay"><a class="main_bt transparent" href="{{route('noticia.detalle',[$objNoticia])}}">{{__('View')}}</a></div>
                   <div class="blog_details">
                    <h3>{{substr($objNoticia->getNombre(),0,50)}}</h3>
                    <p>
                        {{substr($objNoticia->getDescripcion(),0,100)}}
                    </p>
                   </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row margin-top_30">
            <div class="col-sm-12">
                <div class="full">
                    <div class="center">
                        <a class="main_bt" href="{{route('noticia.list')}} ">{{__('See more')}} ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>