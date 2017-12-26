<!-- contratista Field -->
<div class="form-group col-sm-6">
    <label>Contratista</label>
    <select name="contratista" class="form-control">
        @foreach ($contratista as $contratista)
                <option value="{{$contratista->id}}"> {{$contratista->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- uniontemporal Field -->
<div class="form-group col-sm-6">
    <label>Union Temporal</label>
    <select name="unionestemporales" class="form-control">
        @foreach ($unionestemporales as $unionestemporales)
                <option value="{{$unionestemporales->id}}"> {{$unionestemporales->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porcentaje', 'Porcentaje:') !!}
    {!! Form::text('porcentaje', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('numuniones.index') !!}" class="btn btn-default">Cancelar</a>
</div>
