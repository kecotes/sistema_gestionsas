
<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $entidadescontratantes->nombre !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $entidadescontratantes->telefono !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $entidadescontratantes->direccion !!}</p>
</div>

<!-- Ciudad Field -->
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    <p>{!! $entidadescontratantes->ciudad !!}</p>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:') !!}
    <p>{!! $entidadescontratantes->departamento !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha de creacion:') !!}
    <p>{!! $entidadescontratantes->created_at !!}</p>
</div>

