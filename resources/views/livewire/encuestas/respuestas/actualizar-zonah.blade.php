<div>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Distrito</th>
                <th>Manzano</th>
                <th>Zona Homogenea</th>
                <th>Cantidad</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respuestas as $respuesta)
                <tr>
                    <td scope="row">{{$respuesta->dis}}</td>
                    <td>{{$respuesta->man}}</td>
                    <td>{{$respuesta->zona_homogenea}}</td>
                    <td>{{$respuesta->cantidad}}</td>
                    <td><input type="text" class="form-control" wire:model.lazy="zonah" wire:keydown.enter="actualizarZona({{$respuesta->dis}},{{$respuesta->man}})"></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
