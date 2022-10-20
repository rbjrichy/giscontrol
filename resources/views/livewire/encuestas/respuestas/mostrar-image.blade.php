<div>
    <h4>Imagen actual</h4>
    @if ($image_url!='')
        <img class="img-fluid" src="{{asset($image_url)}}" alt="croquis del terreno" height="200" width="200">
    @endif
</div>
