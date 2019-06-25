<label for="name">Nome do Coordenador</label>
<div class="form-group">
    <input tipe="text"name="name" value="{{old ('name') ?? $coordc->name}}" class="form-control">
    <div>{{$errors->first('name')}}</div>
</div>

<label for="cpf">CPF</label>
<div class="form-group">
    <input tipe="text"name="cpf" value="{{old ('cpf') ?? $coordc->cpf}}" class="form-control">
    <div>{{$errors->first('cpf')}}</div>
</div>

@csrf