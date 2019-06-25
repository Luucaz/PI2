<div class="form-group">
    <label for="curso_id">Curso</label>
    <select name="curso_id" id="curso_id" class="form-control">
        <option value="" disabled>Selecione o Curso</option>
        @foreach($cursos as $curso)
            <option value="{{$curso->id}}"{{ $curso->id == $ppc->curso_id ? 'selected' : '' }}>{{$curso->denominação}}</option>
        @endforeach
    </select>
</div>

<label for="perfil">Perfil do curso</label>
<div class="form-group">
    <input tipe="text"name="perfil" value="{{old ('perfil') ?? $ppc->perfil}}" class="form-control">
    <div>{{$errors->first('perfil')}}</div>
</div>

<label for="engresso">Perfil do Engresso</label>
<div class="form-group">
    <input tipe="text"name="engresso" value="{{old ('engresso') ?? $ppc->engresso}}" class="form-control">
    <div>{{$errors->first('engresso')}}</div>
</div>

<label for="acesso">Forma de Acesso Curso</label>
<div class="form-group">
    <input tipe="acesso"name="acesso" value="{{old ('acesso') ?? $ppc->acesso}}" class="form-control">
    <div>{{$errors->first('acesso')}}</div>
</div>

<label for="perfilforma">Representação Gráfica de um Perfil de Formação</label>
<div class="form-group">
    <input tipe="local"name="perfilforma" value="{{old ('perfilforma') ?? $ppc->perfilforma}}" class="form-control">
    <div>{{$errors->first('perfilforma')}}</div>
</div>

<label for="avaaprendi">Sistema de Avaliação do Processo Ensino Aprendizagem</label>
<div class="form-group">
    <input tipe="avaaprendi"name="avaaprendi" value="{{old ('avaaprendi') ?? $ppc->avaaprendi}}" class="form-control">
    <div>{{$errors->first('avaaprendi')}}</div>
</div>

<label for="avacurso">Sistema de Avaliação do Projeto do Curso</label>
<div class="form-group">
    <input tipe="avacurso"name="avacurso" value="{{old ('avacurso') ?? $ppc->avacurso}}" class="form-control">
    <div>{{$errors->first('avacurso')}}</div>
</div>

<label for="def">Política de Atendimento à Pessoas com Deficiência e/ou Mobilidade Reduzida</label>
<div class="form-group">
    <input tipe="def"name="def" value="{{old ('def') ?? $ppc->def}}" class="form-control">
    <div>{{$errors->first('def')}}</div>

<label for="tcc">Trabalho de Conclusão de Curso</label>
<div class="form-group">
    <input tipe="tcc"name="tcc" value="{{old ('tcc') ?? $ppc->tcc}}" class="form-control">
    <div>{{$errors->first('tcc')}}</div>
</div>

<label for="estagio">Estágio Curricular</label>
<div class="form-group">
    <input tipe="estagio"name="estagio" value="{{old ('estagio') ?? $ppc->estagio}}" class="form-control">
    <div>{{$errors->first('estagio')}}</div>
</div>

</div>

@csrf