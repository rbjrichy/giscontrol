<div>
    <div class="row m-0">
        <div class="form-group mr-3">
            <label for="dis_lev_id">Dis Lev</label>
            <select name="dis_lev" id="dis_lev_id" class="form-control" wire:model="selectedDis">
                <option value="">Distrito</option>
                @if ($distritos->count() > 0)
                    @foreach ($distritos as $distrito)
                    <option value="{{$distrito}}">{{$distrito}}</option>
                    @endforeach    
                @endif
            </select>
            {{-- {!! Form::select('dis_lev', $distritos, $respuesta->dis_lev, ['class'=>'form-control', 'id'=>'dis_lev_id', 'wire:model'=>'selectedDis']) !!} --}}
        </div>
        <div class="form-group mr-3">
            <label for="man_lev_id">Man Lev</label>
            <select name="man_lev" id="man_lev_id" class="form-control" wire:model="selectedMan">
                <option value="">Manzano</option>
                @if ($manzanos->count() > 0)
                    @foreach ($manzanos as $manzano)
                    <option value="{{$manzano}}">{{$manzano}}</option>
                    @endforeach    
                @endif
            </select>
        {{-- {!! Form::select('man_lev', $manzanos, $respuesta->man_lev, ['class'=>'form-control', 'id'=>'man_lev_id', 'wire:model'=>'selectedMan']) !!} --}}
        </div>
        <div class="form-group mr-3">
            <label for="pre_lev_id">Pre Lev</label>
            <select name="pre_lev" id="pre_lev_id" class="form-control" wire:model="selectedPre">
                <option value="">Predio</option>
                @if ($predios->count() > 0)
                    @foreach ($predios as $predio)
                    <option value="{{$predio}}">{{$predio}}</option>
                    @endforeach    
                @endif
            </select>
        {{-- {!! Form::select('pre_lev', $predios, $respuesta->pre_lev, ['class'=>'form-control', 'id'=>'pre_lev_id', 'wire:model'=>'selectedPre']) !!} --}}
        </div>
        <div>
            {{-- <label for="pre_lev_id">Pre Lev</label> <br> --}}
            {{-- <ul class="pagination pagination-sm m-0 float-right">
                @if ($predios->count() > 0)
                    @foreach ($predios as $predio)
                    <li class="page-item"><a class="page-link" href="#">{{$predio}}</a></li>
                    @endforeach    
                @endif
            </ul> --}}
            {{-- <ul class="pagination">
                @if ($predios->count() > 0)
                    @foreach ($predios as $predio)
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="tbl-datos" data-dt-idx="1" tabindex="0" class="page-link">{{$predio}}</a>
                    </li>
                    @endforeach    
                @endif
    
            </ul> --}}
            {{-- <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                    <span class="page-link">
                      2
                      <span class="sr-only">(current)</span>
                    </span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav> --}}
        </div>
    
    </div>
</div>
