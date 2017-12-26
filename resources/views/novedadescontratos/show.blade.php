@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Informacion del Contrato
        </h1>
    </section>
    <div class="content">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
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
                  <td bgcolor="#82E0AA"><b>Entidad Contratante</b></td>
                  <td><p>{!! $entidadescontratantes->nombre !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Objeto del Contrato</b></td>
                  <td><p>{!! $contratos->objetocontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Contrato No.</b></td>
                  <td><p>{!! $contratos->nocontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Apodo del Contrato</b></td>
                  <td><p>{!! $contratos->apodocontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del contrato (en letras)</b></td>
                  <td><p>{!! $contratos->valorcontrato !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del anticipo (en letras)</b></td>
                  <td><p>{!! $contratos->valoranticipol !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor del anticipo</b></td>
                  <td><p>{!! $contratos->valoranticipo !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Porcentaje de anticipo</b></td>
                  <td><p>{!! $contratos->porcentajeanticipo !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Forma de pago</b></td>
                  <td><p>{!! $contratos->formapago !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor adicional</b></td>
                  <td><p>{!! $contratos->valoradicional !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Valor de anticipo adicional</b></td>
                  <td><p>{!! $contratos->valoranticipoadicional !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Plazo inicial</b></td>
                  <td><p>{!! $contratos->plazoinicial !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de inicio</b></td>
                  <td><p>{!! $contratos->fechainiciacion !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de finalizacion</b></td>
                  <td><p>{!! $contratos->fechafinalizacion !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Tipo de contrato</b></td>
                  <td><p>{!! $tiposcontratos->nombre !!}</p></td>
                </tr>
                <tr>
                  <td bgcolor="#82E0AA"><b>Residente encargado</b></td>
                  <td><p>{!! $residentes->nombre !!}</p></td>
                </tr>
              </table>
            </div><br>
            <!-- /.box-body -->
                <a href="{!! route('contratos.index') !!}" class="btn btn-default">Atras</a>

          </div>
          <!-- /.box -->
          
        </div>                     
        
    </div>

    </div>

   

@endsection
