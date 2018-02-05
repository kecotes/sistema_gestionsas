<!-- Formulario de Administrador -->
@if(Auth::user()->tipoUsuario == '1')

<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Informe:</label>
<div class="col-lg-10">
<select name="idinformes" class="form-control">
    <option value="0">Buscar...</option>
    @foreach ($informesADM as $informesADM)
        <option value="{{$informesADM->id}}"> {{$informesADM->titulo}} </option>
    @endforeach
</select>
</div>
</div>
@endif


<!-- Formulario de Residente -->
@if(Auth::user()->tipoUsuario == '2')
<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
<label class="col-lg-2 control-label">Informe:</label>
<div class="col-lg-10">
<select name="idinformes" class="form-control">
    <option value="">Buscar...</option>
    @foreach ($informesRdt as $informesRdt)
            <option value="{{$informesRdt->id}}"> {{$informesRdt->titulo}} </option>
    @endforeach
</select>
</div>
</div>
@endif


<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">
<input type="hidden" name="idcontratos" value="{{ $idcontrato }}">

<div class="form-group col-sm-6">
{!! Form::label('titulo', 'Descripcion:') !!}
{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
{!! Form::label('contenido', 'Observaciones:') !!}
{!! Form::text('contenido', null, ['class' => 'form-control']) !!}
</div>


<!-- Formulario de Administrador -->
@if(Auth::user()->tipoUsuario == '1')

    <div class="form-group col-sm-6">
        {!! Form::label('decision', '¿Que desea hacer?') !!}
        {!! Form::select('decision', ['archivo' => 'Subir Archivo Actividad Seguimiento', 'formato' => 'Subir Archivo Formato inicial','informe' => 'Crear Informe Nuevo'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar</label>
    <input type="file" name="file">
    </div>

    <input type="hidden" name="descripcionArch" value="admin"/>

@endif


<!-- Formulario de Residente -->
@if(Auth::user()->tipoUsuario == '2')
    <div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
    </div>
@endif


<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('actividadeseguimiento.index') !!}" class="btn btn-default">Cancelar</a>
</div>
