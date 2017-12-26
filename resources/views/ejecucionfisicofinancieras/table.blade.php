<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Item</th>
        <th>Tema</th>
        <th>Descripcion</th>
        <th>Unidad</th>
        <th>Valunitario</th>
        <th>Proyectadocantidad</th>
        <th>Proyectadototalunitario</th>
        <th>Proyectadoporcentaje</th>
        <th>Ejecutadocantidad</th>
        <th>Ejecutadototalunitario</th>
        <th>Ejecutadoporcentaje</th>
        <th>Porejecutarcantidad</th>
        <th>Porejecutartotalunitario</th>
        <th>Porejecutarporcentaje</th>
        <th>Iddatosejecucion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ejecucionfisicofinancieras as $ejecucionfisicofinanciera)
        <tr>
            <td>{!! $ejecucionfisicofinanciera->item !!}</td>
            <td>{!! $ejecucionfisicofinanciera->tema !!}</td>
            <td>{!! $ejecucionfisicofinanciera->descripcion !!}</td>
            <td>{!! $ejecucionfisicofinanciera->unidad !!}</td>
            <td>{!! $ejecucionfisicofinanciera->valunitario !!}</td>
            <td>{!! $ejecucionfisicofinanciera->proyectadocantidad !!}</td>
            <td>{!! $ejecucionfisicofinanciera->proyectadototalunitario !!}</td>
            <td>{!! $ejecucionfisicofinanciera->proyectadoporcentaje !!}</td>
            <td>{!! $ejecucionfisicofinanciera->ejecutadocantidad !!}</td>
            <td>{!! $ejecucionfisicofinanciera->ejecutadototalunitario !!}</td>
            <td>{!! $ejecucionfisicofinanciera->ejecutadoporcentaje !!}</td>
            <td>{!! $ejecucionfisicofinanciera->porejecutarcantidad !!}</td>
            <td>{!! $ejecucionfisicofinanciera->porejecutartotalunitario !!}</td>
            <td>{!! $ejecucionfisicofinanciera->porejecutarporcentaje !!}</td>
            <td>{!! $ejecucionfisicofinanciera->iddatosejecucion !!}</td>
            <td>
                {!! Form::open(['route' => ['ejecucionfisicofinancieras.destroy', $ejecucionfisicofinanciera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ejecucionfisicofinancieras.show', [$ejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ejecucionfisicofinancieras.edit', [$ejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>