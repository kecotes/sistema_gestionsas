
<table class="table table-hover">

    @foreach($novedadesfechas as $novedadesfechas)
    <?php
    $cont=1;
        echo "<tr>";
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
            <td bgcolor="#82E0AA"><b>Nueva Fecha Terminacion </b></td>
            <td>{!! $novedadesfechas->fechafinalizacion !!}</td>
            <?php break; 
                case 5:
            ?>
            <td bgcolor="#82E0AA"><b>Adicion en Tiempo (En Dias)</b></td>
            <td>{!! $novedadesfechas->adicciontiempo !!}</td>
            <td bgcolor="#82E0AA"><b>Nueva Fecha Terminacion </b></td>
            <td>{!! $novedadesfechas->fechafinalizacion !!}</td>
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
</table>
