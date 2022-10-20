<div class="form-group">
    <label class="text-muted" for="centro_urbano">Centro Urbano</label><span class="small text-danger">(*)</span>
    <input type="text" name="centro_urbano" class="form-control form-control-sm" id="centro_urbano" placeholder="Centro Urbano" value="{{ old('centro_urbano', $encuesta->centro_urbano ?? null) }}" required>
    @error('centro_urbano')
        <div class="text-danger small m-1">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="text-muted" for="codigo_cu">Código</label><span class="small text-danger">(*)</span>
    <input type="text" name="codigo_cu" class="form-control form-control-sm" id="codigo_cu" placeholder="Código" value="{{ old('codigo_cu', $encuesta->codigo_cu ?? null) }}" required>
    @error('codigo_cu')
        <div class="text-danger small m-1">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="text-muted" for="descripcion">Descripción</label><span class="small text-danger">(*)</span>
    <input type="text" name="descripcion" class="form-control form-control-sm" id="descripcion" placeholder="Descripción" value="{{ old('descripcion', $encuesta->descripcion ?? null) }}" required>
    @error('descripcion')
        <div class="text-danger small m-1">{{ $message }}</div>
    @enderror
</div>
