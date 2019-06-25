<label for="Denominação">Denominação do curso</label>
<div class="form-group">
    <input tipe="text"name="denominação" value="{{old ('denominação') ?? $curso->denominação}}" class="form-control">
    <div>{{$errors->first('denominação')}}</div>
</div>

<label for="Tipo">Tipo</label>
<div class="form-group">
    <input tipe="text"name="tipo" value="{{old ('tipo') ?? $curso->tipo}}" class="form-control">
    <div>{{$errors->first('tipo')}}</div>
</div>

<label for="modalidade">Modalidade</label>
<div class="form-group">
    <select name="modalidade" id="modalidade" class="form-control">
        <option value="" disabled>Selecione a modalidade do curso</option>

        @foreach($curso->modalidadeOptions() as $modalidadeOptionKey => $modalidadeOptionValue)
            <option value="{{ $modalidadeOptionKey }}" {{ $curso->modalidade == $modalidadeOptionValue ? 'selected' : '' }}>{{ $modalidadeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="coordc_id">Coordenador</label>
    <select name="coordc_id" id="coordc_id" class="form-control">
        <option value="" disabled>Selecione coordenador</option>
        @foreach($coordcs as $coordc)
            <option value="{{$coordc->id}}"{{ $coordc->id == $curso->coordc_id ? 'selected' : '' }}>{{$coordc->name}}</option>
        @endforeach

    </select>
</div>

<label for="habilitação">Habilitação</label>
<div class="form-group">
    <input tipe="habilitação"name="habilitação" value="{{old ('habilitação') ?? $curso->habilitação}}" class="form-control">
    <div>{{$errors->first('habilitação')}}</div>
</div>

<label for="local">Local de oferta</label>
<div class="form-group">
    <input tipe="local"name="local" value="{{old ('local') ?? $curso->local}}" class="form-control">
    <div>{{$errors->first('local')}}</div>
</div>

<label for="turno">Turnos de funcionamento</label>
<div class="form-group">
    <input tipe="turno"name="turno" value="{{old ('turno') ?? $curso->turno}}" class="form-control">
    <div>{{$errors->first('turno')}}</div>
</div>

<label for="vaga">Número de vagas para cada turno</label>
<div class="form-group">
    <input tipe="vaga"name="vaga" value="{{old ('vaga') ?? $curso->vaga}}" class="form-control">
    <div>{{$errors->first('vaga')}}</div>
</div>

<label for="carga">Carga horária do curso</label>
<div class="form-group">
    <input tipe="carga"name="carga" value="{{old ('carga') ?? $curso->carga}}" class="form-control">
    <div>{{$errors->first('carga')}}</div>
</div>

<hr>

<label for="regime">Regime letivo</label>
<div class="form-group">
    <input tipe="regime"name="regime" value="{{old ('regime') ?? $curso->regime}}" class="form-control">
    <div>{{$errors->first('regime')}}</div>
</div>

<label for="periodo">Periodo</label>
<div class="form-group">
    <input tipe="periodo"name="periodo" value="{{old ('periodo') ?? $curso->periodo}}" class="form-control">
    <div>{{$errors->first('periodo')}}</div>
</div>



@csrf