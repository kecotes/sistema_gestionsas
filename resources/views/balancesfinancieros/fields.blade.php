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

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Descripcion del Acta Parcial:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Actaparcial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actaparcial', 'Valor:') !!}
<<<<<<< HEAD
    {!! Form::text('actaparcial', null, ['class' => 'form-control', 'placeholder' => '*Sin puntos ni comas']) !!}
=======
    {!! Form::text('actaparcial', null, ['class' => 'form-control']) !!}
>>>>>>> 09008b5a2ccac7b724849fb424ed165022bbbcfb
</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<input type="hidden" name="idresidentes" value="{{ Auth::user()->id }}">
<input type="hidden" name="pendiente" value="{{ $pendiente->pendientepagar }}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('balancesfinancieros.index') !!}" class="btn btn-default">Cancel</a>
</div>
