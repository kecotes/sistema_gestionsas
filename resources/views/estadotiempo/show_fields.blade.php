
<!-- Titulo Field -->
<div class="form-group">
{!! Form::label('titulo', 'Descripcion:') !!}
<p>{!! $actividadescontratos->titulo !!}</p>
</div>

<!-- Contenido Field -->
<div class="form-group">
{!! Form::label('descripcion', 'Observaciones:') !!}
<p>{!! $actividadescontratos->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
{!! Form::label('created_at', 'Fecha de Creacion:') !!}
<p>{!! $actividadescontratos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $actividadescontratos->updated_at !!}</p>
</div>

