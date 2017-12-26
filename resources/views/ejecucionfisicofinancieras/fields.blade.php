<!-- Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item', 'Item:') !!}
    {!! Form::text('item', null, ['class' => 'form-control']) !!}
</div>

<!-- Tema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tema', 'Tema:') !!}
    {!! Form::text('tema', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad', 'Unidad:') !!}
    {!! Form::text('unidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Valunitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valunitario', 'Valunitario:') !!}
    {!! Form::text('valunitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Proyectadocantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proyectadocantidad', 'Proyectadocantidad:') !!}
    {!! Form::text('proyectadocantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Proyectadototalunitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proyectadototalunitario', 'Proyectadototalunitario:') !!}
    {!! Form::text('proyectadototalunitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Proyectadoporcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proyectadoporcentaje', 'Proyectadoporcentaje:') !!}
    {!! Form::text('proyectadoporcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Ejecutadocantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ejecutadocantidad', 'Ejecutadocantidad:') !!}
    {!! Form::text('ejecutadocantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ejecutadototalunitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ejecutadototalunitario', 'Ejecutadototalunitario:') !!}
    {!! Form::text('ejecutadototalunitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Ejecutadoporcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ejecutadoporcentaje', 'Ejecutadoporcentaje:') !!}
    {!! Form::text('ejecutadoporcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Porejecutarcantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porejecutarcantidad', 'Porejecutarcantidad:') !!}
    {!! Form::text('porejecutarcantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Porejecutartotalunitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porejecutartotalunitario', 'Porejecutartotalunitario:') !!}
    {!! Form::text('porejecutartotalunitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Porejecutarporcentaje Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porejecutarporcentaje', 'Porejecutarporcentaje:') !!}
    {!! Form::text('porejecutarporcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Iddatosejecucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddatosejecucion', 'Iddatosejecucion:') !!}
    {!! Form::text('iddatosejecucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ejecucionfisicofinancieras.index') !!}" class="btn btn-default">Cancel</a>
</div>
