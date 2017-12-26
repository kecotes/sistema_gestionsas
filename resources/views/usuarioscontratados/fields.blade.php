<!-- Idcontratos Field -->
<div class="form-group col-sm-6">
<label>Contrato:</label>
<select name="idcontratos" class="form-control">
    @foreach ($contratos as $contratos)
            <option value="{{$contratos->id}}"> {{$contratos->contratos}} </option>
    @endforeach
</select>
</div>

<!-- uniontemporal Field -->
<div class="form-group col-sm-6">
    <label>Residente</label>
    <select name="idpersonas" class="form-control">
        @foreach ($personas as $personas)
                <option value="{{$personas->id}}"> {{$personas->name}} </option>
        @endforeach
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarioscontratados.index') !!}" class="btn btn-default">Cancel</a>
</div>
