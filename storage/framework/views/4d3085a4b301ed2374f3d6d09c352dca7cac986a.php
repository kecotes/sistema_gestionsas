
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
                  <td><p><?php echo $entidadescontratantes->nombre; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Objeto del Contrato</b></td>
                  <td><p><?php echo $contratos->objetocontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Contrato No.</b></td>
                  <td> <p><?php echo $contratos->nocontrato; ?></p></td>
                </tr>
                <tr>
                  <td bgcolor="green"><b>Apodo del Contrato</b></td>
                  <td><p><?php echo $contratos->apodocontrato; ?></p></td>
                </tr>
              </table>
            </div>

<!-- Entidadcontratante Field -->
<div class="form-group">
    <?php echo Form::label('entidadcontratante', 'Entidad contratante:'); ?>

    <p><?php echo $entidadescontratantes->nombre; ?></p>
</div>

<!-- Objetocontrato Field -->
<div class="form-group">
    <?php echo Form::label('objetocontrato', 'Objeto del contrato:'); ?>

    <p><?php echo $contratos->objetocontrato; ?></p>
</div>

<!-- Nocontrato Field -->
<div class="form-group">
    <?php echo Form::label('nocontrato', 'Nombre del contrato:'); ?>

    <p><?php echo $contratos->nocontrato; ?></p>
</div>

<!-- Ncontrato Field -->
<div class="form-group">
    <?php echo Form::label('ncontrato', 'Numero del contrato:'); ?>

    <p><?php echo $contratos->ncontrato; ?></p>
</div>

<!-- Apodocontrato Field -->
<div class="form-group">
    <?php echo Form::label('apodocontrato', 'Apodo del contrato:'); ?>

    <p><?php echo $contratos->apodocontrato; ?></p>
</div>

<!-- Valorcontratol Field -->
<div class="form-group">
    <?php echo Form::label('valorcontratol', 'Valor del contrato (en letras):'); ?>

    <p><?php echo $contratos->valorcontratol; ?></p>
</div>

<!-- Valorcontrato Field -->
<div class="form-group">
    <?php echo Form::label('valorcontrato', 'Valor del contrato:'); ?>

    <p><?php echo $contratos->valorcontrato; ?></p>
</div>

<!-- Valoranticipol Field -->
<div class="form-group">
    <?php echo Form::label('valoranticipol', 'Valor del anticipo (en letras):'); ?>

    <p><?php echo $contratos->valoranticipol; ?></p>
</div>

<!-- Valoranticipo Field -->
<div class="form-group">
    <?php echo Form::label('valoranticipo', 'Valor del anticipo:'); ?>

    <p><?php echo $contratos->valoranticipo; ?></p>
</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group">
    <?php echo Form::label('porcentajeanticipo', 'Porcentaje de anticipo:'); ?>

    <p><?php echo $contratos->porcentajeanticipo; ?></p>
</div>

<!-- Formapago Field -->
<div class="form-group">
    <?php echo Form::label('formapago', 'Forma de pago:'); ?>

    <p><?php echo $contratos->formapago; ?></p>
</div>

<!-- Valoradicional Field -->
<div class="form-group">
    <?php echo Form::label('valoradicional', 'Valor adicional:'); ?>

    <p><?php echo $contratos->valoradicional; ?></p>
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group">
    <?php echo Form::label('valoranticipoadicional', 'Valor de anticipo adicional:'); ?>

    <p><?php echo $contratos->valoranticipoadicional; ?></p>
</div>

<!-- Plazoinicial Field -->
<div class="form-group">
    <?php echo Form::label('plazoinicial', 'Plazo inicial:'); ?>

    <p><?php echo $contratos->plazoinicial; ?></p>
</div>

<!-- Fechainiciacion Field -->
<div class="form-group">
    <?php echo Form::label('fechainiciacion', 'Fecha de iniciacion:'); ?>

    <p><?php echo $contratos->fechainiciacion; ?></p>
</div>

<!-- Fechafinalizacion Field -->
<div class="form-group">
    <?php echo Form::label('fechafinalizacion', 'Fecha de finalizacion:'); ?>

    <p><?php echo $contratos->fechafinalizacion; ?></p>
</div>

<!-- Tipocontrato Field -->
<div class="form-group">
    <?php echo Form::label('tipocontrato', 'Tipo de contrato:'); ?>

    <p><?php echo $tiposcontratos->nombre; ?></p>
</div>

<!-- residentes Field -->
<div class="form-group">
    <?php echo Form::label('residentes', 'Residente encargado:'); ?>

    <p><?php echo $residentes->nombre; ?></p>
</div>

<!-- Estado Field -->
<div class="form-group">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <p><?php echo $contratos->estado; ?></p>
</div>


<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $contratos->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $contratos->updated_at; ?></p>
</div>

