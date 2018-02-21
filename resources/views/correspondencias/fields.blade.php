<!-- Idcontratos Field -->
<div class="form-group col-sm-12">
    <label class="col-lg-2 control-label">
    Contrato:</label>
    <div class="col-lg-10">
    <select name="idcontratos" class="form-control">
        @foreach ($contratos as $contratos)
                <option value="{{$contratos->id}}"> {{$contratos->nocontrato}} </option>
        @endforeach
    </select>
    </div>
</div>

<!-- Destinatario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destinatario', 'Destinatario:') !!}
    {!! Form::text('destinatario', null, ['class' => 'form-control']) !!}
</div>

<!-- Remitente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remitente', 'Remitente:') !!}
    {!! Form::text('remitente', null, ['class' => 'form-control']) !!}
</div>

<!-- Asunto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asunto', 'Asunto:') !!}
    {!! Form::text('asunto', null, ['class' => 'form-control']) !!}
</div>


<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
        {!! Form::label('tipo', 'Tipo de Correspondencia: ') !!}
        {!! Form::select('tipo', ['Enviada' => 'Enviada', 'Recibida' => 'Recibida'], null, ['class' => 'form-control']) !!}
    </div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('correspondencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
