

<div class="form-group col-sm-6">
    <?php echo Form::label('objetocontrato', 'Objeto del contrato:'); ?>

    <?php echo Form::textarea('objetocontrato', null, ['class' => 'form-control', 'rows' => '4']); ?>

</div>

<!-- entidadcontratante Field -->
<div class="form-group col-sm-6">
    <label>Entidad contratante</label>
    <select name="identidadescontratantes" class="form-control">
        <?php $__currentLoopData = $entidadescontratantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidadescontratantes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($entidadescontratantes->id); ?>"> <?php echo e($entidadescontratantes->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nocontrato', 'Nombre del contrato:'); ?>

    <?php echo Form::text('nocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('ncontrato', 'Numero del contrato:'); ?>

    <?php echo Form::text('ncontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apodocontrato', 'Apodo del contrato:'); ?>

    <?php echo Form::text('apodocontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontratol', 'Valor del contrato (en letras):'); ?>

    <?php echo Form::text('valorcontratol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valorcontrato', 'Valor del contrato:'); ?>

    <?php echo Form::text('valorcontrato', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipol', 'Valor del anticipo (en letras):'); ?>

    <?php echo Form::text('valoranticipol', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipo', 'Valor del anticipo:'); ?>

    <?php echo Form::text('valoranticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('porcentajeanticipo', 'Porcentaje del anticipo:'); ?>

    <?php echo Form::text('porcentajeanticipo', null, ['class' => 'form-control']); ?>

</div>

<!-- idcontratista Field -->
<div class="form-group col-sm-6">
    <label>Contratista</label>
    <select name="idcontratista" class="form-control">
        <?php $__currentLoopData = $contratista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratista): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($contratista->id); ?>"> <?php echo e($contratista->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- idrepresentante Field -->
<div class="form-group col-sm-6">
    <label>Representante Legal</label>
    <select name="representante" class="form-control">
        <?php $__currentLoopData = $representante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $representante): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($representante->id); ?>"> <?php echo e($representante->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Select multiple
<div class="form-group col-sm-6">
    <label>Uniones Temporales</label>
    <select name="idunionestemporales" multiple class="form-control">
        <?php $__currentLoopData = $unionestemporales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unionestemporales): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($unionestemporales->id); ?>"> <?php echo e($unionestemporales->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>-->

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('formapago', 'Forma de pago:'); ?>

    <?php echo Form::text('formapago', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoradicional', 'Valora dicional:'); ?>

    <?php echo Form::text('valoradicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('valoranticipoadicional', 'Valor ddel anticipo adicional:'); ?>

    <?php echo Form::text('valoranticipoadicional', null, ['class' => 'form-control']); ?>

</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('plazoinicial', 'Plazo inicial:'); ?>

    <?php echo Form::text('plazoinicial', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechainiciacion', 'Fecha iniciacion:'); ?>

    <?php echo Form::date('fechainiciacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafinalizacion', 'Fecha finalizacion:'); ?>

    <?php echo Form::date('fechafinalizacion', null, ['class' => 'form-control']); ?>

</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div>

<!-- tiposcontratos Field -->
<div class="form-group col-sm-6">
    <label>Tipo del contrato</label>
    <select name="idtiposcontratos" class="form-control">
        <?php $__currentLoopData = $tiposcontratos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiposcontratos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($tiposcontratos->id); ?>"> <?php echo e($tiposcontratos->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Residentes Field -->
<div class="form-group col-sm-6">
    <label>Residente encargado</label>
    <select name="idresidentes" class="form-control">
        <?php $__currentLoopData = $residentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $residentes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option value="<?php echo e($residentes->id); ?>"> <?php echo e($residentes->nombre); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<!-- Tipoarchivo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipoarchivo', 'Que archivo adjunto va a subir:'); ?>

    <?php echo Form::select('tipoarchivo', ['15' => 'Copia del Contrato','16' => 'Acta de Inicio','17' => 'CDP'], null, ['class' => 'form-control']); ?>

</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Archivo</label>
    <input type="file" name="file">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Guardar', ['class' => 'btn btn-success']); ?>

    <a href="<?php echo route('contratos.index'); ?>" class="btn btn-default">Cancelar</a>
</div>



<?php $__env->startPush('scripts'); ?>
<script>
    var total=0;
    cont=0;
    total=0;
    subtotal=[];
    $("#pidarticulo").change(mostrarValores);
    $("#guardar").hide();
    $(document).on('ready',function(){
    $('select[name=pidarticulo]').val(1);
    $('.selectpicker').selectpicker('refresh')
        mostrarValores();
    });

		
    function recargar(){
    
    }

    function mostrarValores(){
        datosArticulo=document.getElementById('pidarticulo').value.split('_');
        $("#pprecio_venta").val(datosArticulo[2])
        $("#pstock").val(datosArticulo[1]);
        $("#pimpuesto").val(datosArticulo[3]);
    }


    function agregar(){
        datosArticulo=document.getElementById('pidarticulo').value.split('_');
        idarticulo=datosArticulo[0];
        articulo=$("#pidarticulo option:selected").text();
        stock=$("#pstock").val();
        cantidad=$("#pcantidad").val();
        impuesto=$("#pimpuesto").val(); 
        descuento=$("#pdescuento").val();
        precio_venta=$("#pprecio_venta").val();
			
		if (idarticulo!="" && cantidad!="" && cantidad>0 && descuento!="" && precio_venta!=""){
			if(Number(stock)>=Number(cantidad)){
                subtotal[cont]=(((cantidad*precio_venta)/100*impuesto)+(cantidad*precio_venta)-descuento);
                total=total+subtotal[cont];

                var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input name="impuesto[]" value="'+impuesto+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td><input type="number"name="descuento[]" value="'+descuento+'"></td><td>'+subtotal[cont]+'</td></tr>';
                cont++;
                $('#total').html("$/ " + total);
                $('#total_venta').val(total);
                evaluar();
                $('#detalles').append(fila);
                limpiar();
                $('select[name=pidarticulo]').val(1);
                $('.selectpicker').selectpicker('refresh')
                mostrarValores();
		    }
            else{
                alert('la cantidad a vender supera el stock');
            }
	    }
	    else{
		alert("Error al ingresar el detalle de la venta, revise los datos del articulo");
	    }
	}

	function limpiar(){
        $("#pcantidad").val("");
        $("#pdescuento").val("");
        $("#pprecio_venta").val("");
        $("#pstock").val("");
        }

    function evaluar(){
		var indice = document.getElementById('idcliente').selectedIndex
		if(total>0){		
		    if(indice=0){
				alert("Debe seleccionar un cliente")
			}
			else{
				$("#guardar").show();
			}
		}
		else{
			$("#guardar").hide();
		}	
	}	

	function eliminar(index){
        total=total-subtotal[index];
        $('#total').html("$/. "+total);
        $('#total_venta').val(total);
        $('#fila'+index).remove();
        evaluar();
	}

</script>
<?php $__env->stopPush(); ?>