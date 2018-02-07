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
                
                <!-- Novedades Fechas-->
                @foreach($novedadesfechas as $novedadesfechas)
                <?php
                    echo '<tr>';
                        switch ($novedadesfechas->agregar) {
                            case 0:
                            break;
                            case 2:
                            ?>
                        <td bgcolor="#82E0AA"><b>Fecha Inicio</b></td>
                        <td>{!! $novedadesfechas->fechainiciacion !!}</td>
                        <?php break; 
                            case 3:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha Suspension</b></td>
                        <td>{!! $novedadesfechas->fechasuspension !!}</td>
                        <?php break; 
                            case 4:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha Reinicio</b></td>
                        <td>{!! $novedadesfechas->fechareinicio !!}</td>
                        <?php break; 
                            case 5:
                        ?>
                        <td bgcolor="#82E0AA"><b>Adicion en Tiempo (En Dias)</b></td>
                        <td>{!! $novedadesfechas->adicciontiempo !!}</td>
                        <?php break; 
                            case 6:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha de Terminacion</b></td>
                        <td>{!! $novedadesfechas->fechafinalizacion !!}</td>
                        <?php break; 
                            case 7:
                        ?>
                        <td bgcolor="#82E0AA"><b>Fecha de Terminacion Segun Adicion</b></td>
                        <td>{!! $novedadesfechas->fechafinalizacionadiccion !!}</td>         
                    </tr>
                    <?php } ?>
                @endforeach
                <tr>
                  <td bgcolor="#82E0AA"><b>Fecha de Final de Terminacion</b></td>
                  <td><p>{!! $novedadesfechas->fechafinalizacion !!}</p></td>
                </tr>
                <!-- Fin -->

                <tr>
                  <td bgcolor="#82E0AA"><b>Tipo de contrato</b></td>
                  <td><p>{!! $tiposcontratos->nombre !!}</p></td>
                </tr>
                
             </table>
            </div><br>

          <!-- Polizas -->

               <div class="box-header">
                 <h3 class="box-title">SEGUIMIENTO A LAS GARANTÍAS</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Fecha de expedicion</th>
                  <th bgcolor="#82E0AA">Tipo de Poliza</th>
                  <th bgcolor="#82E0AA">No. de Poliza</th>
                  <th bgcolor="#82E0AA">Tipo de Certificado</th>
                  <th bgcolor="#82E0AA">Observaciones</th>
                </thead>
                <tbody>
                @foreach($polizas as $polizas)                  
                    <td><p>{!! $polizas->fechaexpedicion !!}</p></td>
                    <td><p>{!! $polizas->tipopoliza !!}</p></td>
                    <td><p>{!! $polizas->npoliza !!}</p></td>
                    <td><p>{!! $polizas->tipocertificado !!}</p></td>
                    <td><p>{!! $polizas->observaciones !!}</p></td>
                </tr>
                @endforeach
                </tbody>
                </table>
              </div><br>


        <!-- Estados Polizas -->

        <div class="box-header">
                 <h3 class="box-title">ESTADOS DE POLIZAS</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                <tr>
                  <th bgcolor="#82E0AA">Amparo</th>
                  <th bgcolor="#82E0AA">Vigencia Desde</th>
                  <th bgcolor="#82E0AA">Vigencia Hasta</th>
                  <th bgcolor="#82E0AA">Valor Asegurado</th>
                  <th bgcolor="#82E0AA">Estado Poliza</th>
                </thead>
                <tbody>
                @foreach($estadospolizas as $estadospolizas)                  
                    <td><p>{!! $estadospolizas->amparo !!}</p></td>
                    <td><p>{!! $estadospolizas->vigenciadesde !!}</p></td>
                    <td><p>{!! $estadospolizas->vigenciahasta !!}</p></td>
                    <td><p>{!! $estadospolizas->valorasegurado !!}</p></td>
                    <td><p>{!! $estadospolizas->estadopoliza !!}</p></td>
                </tr>
                @endforeach
                </tbody>
                </table>
              </div><br>

        <!-- Balance Financiero -->

            <div class="box-header">
                 <h3 class="box-title">BALANCE FINANCIERO</h3>
               </div>

              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                <thead>
                  <th bgcolor="#82E0AA">Concepto</th>
                  <th bgcolor="#82E0AA">Valor</th>
                  <th bgcolor="#82E0AA">Descarga</th>
                </thead>
                <tbody>
                <tr>
                    <td><b>VALOR INCIAL DEL CONTRATO</b></td>                
                    <td><p>{!! $contratos->valorcontrato !!}</p></td>
                </tr>
                <tr>
                    <td>Anticipo</td>
                    <td><p>{!! $contratos->valoranticipo !!}</p></td>
                <tr>
                <tr>
                    <td>Valor Adiccional</td>
                    <td><p>{!! $contratos->valoradicional !!}</p></td>
                <tr>
                <tr>
                    <td>Valor Anticipo Adiccional</td>
                    <td><p>{!! $contratos->valoranticipoadicional !!}</p></td>
                <tr>
                @foreach($balancesfinancieros as $balancesfinancieros) 
                  @if($balancesfinancieros->estado != "Acta parcial inicial")
                  </tr>
                      <!-- <td>Acta Parcial # {!! $i++ !!} </td> -->
                      <td>{!! $balancesfinancieros->estado  !!}</td> 
                      <td><p>{!! $balancesfinancieros->actaparcial  !!}</p></td>
                      <td><a href="descargarc/{{ $balancesfinancieros->id }}" target="_blank"><button class="btn btn-info">Descargar</button></a></td>
                  </tr>
                  @endif
                @endforeach
                </tr>
                    <td><b>PENDIENTE POR PAGAR</b></td>
                    <td><b>{!! $balancesfinancieros->pendientepagar  !!}</b></td>
                </tr>
                </tbody>
                </table>
            </div><br><br>

            
            <!-- Archivos Contratos -->
              <div class="box-header">
                <h3 class="box-title">DOCUMENTOS ADJUNTOS DEL CONTRATO</h3>
              </div>
              @foreach($archivoscontratos as $archivoscontratos)
                  <ul>
                    <li>{!! $archivoscontratos->tipo !!}  <a href="descargarb/{{ $archivoscontratos->id }}"  target="_blank"><button class="btn  btn-info">Descargar</button></a>
                  </ul>  
              @endforeach

</table>