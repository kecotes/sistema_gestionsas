

<div class="form-group col-sm-6">
    {!! Form::label('objetocontrato', 'Objeto del contrato:') !!}
    {!! Form::textarea('objetocontrato', null, ['class' => 'form-control', 'rows' => '4']) !!}
</div>

<!-- entidadcontratante Field -->
<div class="form-group col-sm-6">
    <label>Entidad contratante</label>
    <select name="identidadescontratantes" class="form-control">
        @foreach ($entidadescontratantes as $entidadescontratantes)
                <option value="{{$entidadescontratantes->id}}"> {{$entidadescontratantes->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- Nocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nocontrato', 'Nombre del contrato:') !!}
    {!! Form::text('nocontrato', null, ['class' => 'form-control', 'placeholder' => '*Por lo general es el que aparece en el titulo del contrato']) !!}
</div>

<!-- Ncontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ncontrato', 'Numero del contrato:') !!}
    {!! Form::text('ncontrato', null, ['class' => 'form-control', 'placeholder' => '*Solo el numero del contrato (Ej. 006)']) !!}
</div>

<!-- Apodocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apodocontrato', 'Apodo del contrato:') !!}
    {!! Form::text('apodocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontratol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontratol', 'Valor del contrato (en letras):') !!}
    {!! Form::text('valorcontratol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valorcontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valorcontrato', 'Valor del contrato:') !!}
    {!! Form::text('valorcontrato', null, ['class' => 'form-control', 'placeholder' => '*Digitar valor entero, solo poner puntos para decimales Ej: 2869321.59']) !!}
</div>

<!-- Valoranticipol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipol', 'Valor del anticipo (en letras):') !!}
    {!! Form::text('valoranticipol', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoranticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipo', 'Valor del anticipo:') !!}
    {!! Form::text('valoranticipo', null, ['class' => 'form-control','placeholder' => '*Digitar valor entero, solo poner puntos para decimales Ej: 2869321.59']) !!}
</div>

<!-- Porcentajeanticipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porcentajeanticipo', 'Porcentaje del anticipo:') !!}
    {!! Form::text('porcentajeanticipo', null, ['class' => 'form-control','placeholder' => '*Valor en decimales (Ej. 0.50 que equivale al 50%)']) !!}
</div>

<!-- idcontratista Field -->
<div class="form-group col-sm-6">
    <label>Contratista</label>
    <select name="idcontratista" class="form-control">
        @foreach ($contratista as $contratista)
                <option value="{{$contratista->id}}"> {{$contratista->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- idrepresentante Field -->
<div class="form-group col-sm-6">
    <label>Representante Legal</label>
    <select name="representante" class="form-control">
        @foreach ($representante as $representante)
                <option value="{{$representante->id}}"> {{$representante->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- Select multiple
<div class="form-group col-sm-6">
    <label>Uniones Temporales</label>
    <select name="idunionestemporales" multiple class="form-control">
        @foreach ($unionestemporales as $unionestemporales)
                <option value="{{$unionestemporales->id}}"> {{$unionestemporales->nombre}} </option>
        @endforeach
    </select>
</div>-->

<!-- Formapago Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formapago', 'Forma de pago:') !!}
    {!! Form::text('formapago', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoradicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoradicional', 'Valor adicional:') !!}
    {!! Form::text('valoradicional', null, ['class' => 'form-control','placeholder' => '*Digitar valor entero, solo poner puntos para decimales Ej: 2869321.59. Poner 0 si no hay ']) !!}
</div>

<!-- Valoranticipoadicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoranticipoadicional', 'Valor del anticipo adicional:') !!}
    {!! Form::text('valoranticipoadicional', null, ['class' => 'form-control','placeholder' => '*Digitar valor entero, solo poner puntos para decimales Ej: 2869321.59. Poner 0 si no hay']) !!}
</div>

<!-- Plazoinicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plazoinicial', 'Plazo inicial:') !!}
    {!! Form::text('plazoinicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainiciacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainiciacion', 'Fecha iniciacion:') !!}
    {!! Form::date('fechainiciacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafinalizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafinalizacion', 'Fecha finalizacion:') !!}
    {!! Form::date('fechafinalizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control','placeholder' => '*Ej. En ejecucion, En espera']) !!}
</div>

<!-- tiposcontratos Field -->
<div class="form-group col-sm-6">
    <label>Tipo del contrato</label>
    <select name="idtiposcontratos" class="form-control">
        @foreach ($tiposcontratos as $tiposcontratos)
                <option value="{{$tiposcontratos->id}}"> {{$tiposcontratos->nombre}} </option>
        @endforeach
    </select>
</div>

<!-- Residentes Field -->
<div class="form-group col-sm-6">
    <label>Residente encargado</label>
    <select name="idresidentes" class="form-control">
        @foreach ($residentes as $residentes)
                <option value="{{$residentes->id}}"> {{$residentes->nombre}} </option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="exampleInputFile">Adjuntar Copia del Contrato</label>
    <input type="file" name="file">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('contratos.index') !!}" class="btn btn-default">Cancelar</a>
</div>



@push ('scripts')
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
@endpush