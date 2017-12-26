<!-- Idcontratos Field -->
<div class="form-group col-sm-6">
<label>Contrato:</label>
<select name="idcontratos" class="form-control">
    @foreach ($contratos as $contratos)
        @if ($contratos->id==$usuarioscontratados->idcontratos)
            <option value="{{$contratos->id}}"selected> {{$contratos->contratos}} </option>
        @else
            <option value="{{$contratos->id}}"> {{$contratos->contratos}} </option>
        @endif
    @endforeach
</select>
</div>

<!-- uniontemporal Field -->
<div class="form-group col-sm-6">
    <label>Residente</label>
    <select name="idpersonas" class="form-control">
        @foreach ($personas as $personas)
            @if ($personas->id==$usuarioscontratados->idpersonas)
                <option value="{{$personas->id}}"selected> {{$personas->name}} </option>
            @else
                <option value="{{$personas->id}}"> {{$personas->name}} </option>
            @endif
        @endforeach
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuarioscontratados.index') !!}" class="btn btn-default">Cancel</a>
</div>
