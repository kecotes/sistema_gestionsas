
            <div class="box-header">
              <h3 class="box-title">FICHA TÉCNICA DEL CONTRATO DE OBRA OBJETO DE INTERVENTORÍA</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <td bgcolor="skin-green"><b>Entidad Contratante</b></td>
                  <td><p>{!! $entidadescontratantes->nombre !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Objeto del Contrato</b></td>
                  <td><p>{!! $contratos->objetocontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Contrato No.</b></td>
                  <td> <p>{!! $contratos->nocontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Apodo del Contrato</b></td>
                  <td><p>{!! $contratos->apodocontrato !!}</p></td>
                </tr>
              </table>
            </div>

<!-- Entidadcontratante Field -->
<div class="form-group">
    {!! Form::label('entidadcontratante', 'Entidad contratante:') !!}
    <p>{!! $entidadescontratantes->nombre !!}</p>
</div>

<!-- Objetocontrato Field -->
<div class="form-group">
    {!! Form::label('objetocontrato', 'Objeto del contrato:') !!}
    <p>{!! $contratos->objetocontrato !!}</p>
</div>

<!-- Nocontrato Field -->
<div class="form-group">
    {!! Form::label('nocontrato', 'Nombre del contrato:') !!}
    <p>{!! $contratos->nocontrato !!}</p>
</div>

<!-- Ncontrato Field -->
<div class="form-group">
    {!! Form::label('ncontrato', 'Numero del contrato:') !!}
    <p>{!! $contratos->ncontrato !!}</p>
</div>

<!-- Apodocontrato Field -->
<div class="form-group">
    {!! Form::label('apodocontrato', 'Apodo del contrato:') !!}
    <p>{!! $contratos->apodocontrato !!}</p>
</div>

<!-- Valorcontratol Field -->
<div class="form-group">
    {!! Form::label('valorcontratol', 'Valor del contrato (en letras):') !!}
    <p>{!! $contratos->valorcontratol !!}</p>
</div>

<!-- Valorcontrato Field -->
<div class="form-group">
    {!! Form::label('valorcontrato', 'Valor del contrato:') !!}
    <p>{!! $contratos->valorcontrato !!}</p>
</div>

<!-- Valoranticipol Field -->
<div class="form-group">
    {!! Form::label('valoranticipol', 'Valor del anticipo (en letras):') !!}
    <p>{!! $contratos->valoranticipol !!}</p>
</div>

<!-- Valoranticipo Field -->
<div class="form-group">
    {!! Form::label('valoranticipo', 'Valor del anticipo:') !!}
    <p>{!! $contratos->valoranticipo !!}</p>
</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group">
    {!! Form::label('porcentajeanticipo', 'Porcentaje de anticipo:') !!}
    <p>{!! $contratos->porcentajeanticipo !!}</p>
</div>

<!-- Formapago Field -->
<div class="form-group">
    {!! Form::label('formapago', 'Forma de pago:') !!}
    <p>{!! $contratos->formapago !!}</p>
</div>

<!-- Valoradicional Field -->
<div class="form-group">
    {!! Form::label('valoradicional', 'Valor adicional:') !!}
    <p>{!! $contratos->valoradicional !!}</p>
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group">
    {!! Form::label('valoranticipoadicional', 'Valor de anticipo adicional:') !!}
    <p>{!! $contratos->valoranticipoadicional !!}</p>
</div>

<!-- Plazoinicial Field -->
<div class="form-group">
    {!! Form::label('plazoinicial', 'Plazo inicial:') !!}
    <p>{!! $contratos->plazoinicial !!}</p>
</div>

<!-- Fechainiciacion Field -->
<div class="form-group">
    {!! Form::label('fechainiciacion', 'Fecha de iniciacion:') !!}
    <p>{!! $contratos->fechainiciacion !!}</p>
</div>

<!-- Fechafinalizacion Field -->
<div class="form-group">
    {!! Form::label('fechafinalizacion', 'Fecha de finalizacion:') !!}
    <p>{!! $contratos->fechafinalizacion !!}</p>
</div>

<!-- Tipocontrato Field -->
<div class="form-group">
    {!! Form::label('tipocontrato', 'Tipo de contrato:') !!}
    <p>{!! $tiposcontratos->nombre !!}</p>
</div>

<!-- residentes Field -->
<div class="form-group">
    {!! Form::label('residentes', 'Residente encargado:') !!}
    <p>{!! $residentes->nombre !!}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{!! $contratos->estado !!}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $contratos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $contratos->updated_at !!}</p>
</div>

