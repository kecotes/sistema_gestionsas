<!-- Formulario de Administrador -->
@if(Auth::user()->tipoUsuario == '1')
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Contrato:</label>
<div class="col-lg-10">
<select name="idcontratos" class="form-control">
    <option value="">Buscar...</option>
    @foreach ($contratosADM as $contratosADM)
            <option value="{{$contratosADM->id}}"> {{$contratosADM->contratos}} </option>
    @endforeach
</select>
</div>
</div>
@endif

<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="8"/>
<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">

<!-- Titulo Field -->
<div class="form-group col-sm-6">
{!! Form::label('titulo', 'Descripcion:') !!}
{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-6">
{!! Form::label('contenido', 'Observaciones:') !!}
{!! Form::text('contenido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
<label for="exampleInputFile">Adjuntar Archivo</label>
<input type="file" name="file">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('correspondencia.index') !!}" class="btn btn-default">Cancelar</a>
</div>
