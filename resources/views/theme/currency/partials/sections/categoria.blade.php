<div id="categorys" class="section layout_padding about_bg article-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full paddding_left_15">
                    <div class="heading_main text_align_left">
                       <h2>{{__('Category')}} {{__('and')}} {{__('Products')}} </h2>    
                    </div>
                </div>
                <div class="full paddding_left_15">
                    <div class="row articles">
                        @foreach ($categorias as $objCategoria)
                        <div class="col-8 col-sm-4 col-lg-3 d-flex">
                           
                            <div class="full services_blog align-self-end efecto_img ">
                                <a href="{{route('product',[$objCategoria])}}">
                                    @php
                                        $image_categoria_url = "https://picsum.photos/300";
                                        $img_categoria = $objCategoria->imagenes()->first();
                                        if(is_object($img_categoria) ){
                                            $image_categoria_url = asset(Storage::url('archivos_img/'.$img_categoria->ruta));
                                        }
                                    @endphp
                                    <img class="img-fluid img-thumbnail" src="{{$image_categoria_url}}" />
                                </a>
                                <div style="min-height: 50px">
                                    <h3 class="name enlace mt-1">
                                        <a href="{{route('product',[$objCategoria])}}">
                                            {{Str::ucfirst(Str::lower($objCategoria->getNombre()))}}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>



{{-- <div class="content-imagen">
    @foreach ($categorias as $objCategoria)
        @php
            $img_categoria = $objCategoria->imagenes()->first();
            $image_categoria_url = asset(Storage::url('archivos_img/'.$img_categoria->ruta));
        @endphp
        <div class="tarjeta-img" style="background-image: url({{$image_categoria_url}})">
            <div class="textos">
                <a href="#">{{Str::ucfirst(Str::lower($objCategoria->getNombre()))}}</a>
            </div>
        </div>
        @endforeach
    </div> --}}