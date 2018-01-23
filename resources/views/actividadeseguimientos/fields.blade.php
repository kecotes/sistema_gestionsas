<!-- Nombreinforme Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreinforme', 'Nombreinforme:') !!}
    {!! Form::text('nombreinforme', null, ['class' => 'form-control']) !!}
</div>

<!-- Idactividadescontratos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idactividadescontratos', 'Idactividadescontratos:') !!}
    {!! Form::text('idactividadescontratos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actividadeseguimientos.index') !!}" class="btn btn-default">Cancel</a>
</div>
