

<!-- Idtipoactividades Field -->
<input type="hidden" name="idactividad" value="3"/>
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
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('actividadeseguimiento.index') !!}" class="btn btn-default">Cancelar</a>
</div>
