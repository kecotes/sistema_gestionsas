
<dl>

<dt>Copia de Contrato</dt>
<dd><input type="file" name="file"></dd><br>

<dt>Acta de Inicio</dt>
<dd><input type="file" name="file2"></dd><br>

<dt>CDP</dt>
<dd><input type="file" name="file3"></dd><br>

<dt>RP</dt>
<dd><input type="file" name="file4"></dd><br>

<dt>Certificacion Bancaria</dt>
<dd><input type="file" name="file5"></dd><br>

<dt>Acto Consorcial (Si Aplica)</dt>
<dd><input type="file" name="file6"></dd><br>

<dt>RUT Union Temporal (Si Aplica)</dt>
<dd><input type="file" name="file7"></dd><br>

<dt>Registro Unico Tributario (RUT)</dt>
<dd><input type="file" name="file8"></dd><br>

<dt>Documento de Identidad</dt>
<dd><input type="file" name="file9"></dd><br>

</dl>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('contratos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
