<!-- Formulario de Administrador -->
@if(Auth::user()->tipoUsuario == '1')
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    @foreach ($contratos as $contratos)
        @if ($contratos->id==$registrofotografico->idcontratos)
            <option value="{{$contratos->id}}"selected> {{$contratos->contratos}} </option>
        @else
            <option value="{{$contratos->id}}"> {{$contratos->contratos}} </option>
        @endif
    @endforeach
</select>
</div>
</div>
@endif

<!-- Formulario de Residente -->
@if(Auth::user()->tipoUsuario == '2')
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    @foreach ($contratosRdt as $contratosRdt)
        @if ($contratosRdt->id==$contratosRdt->idcontratos)
            <option value="{{$contratosRdt->id}}"selected> {{$contratosRdt->contratos}} </option>
        @else
            <option value="{{$contratosRdt->id}}"> {{$contratosRdt->contratos}} </option>
        @endif
    @endforeach
</select>
</div>
</div>
@endif

<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="5"/>
<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">

<!-- Titulo Field -->
<div class="form-group col-sm-6">
{!! Form::label('titulo', 'Descripcion:') !!}
{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
{!! Form::label('descripcion', 'Observaciones:') !!}
{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('registrofotografico.index') !!}" class="btn btn-default">Cancelar</a>
</div>
