<table class="table table-responsive" id="balancesfinancieros-table">
    <thead>
        <th>Acta parcial</th>
        <th>Pendiente por pagar</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($balancesfinancieros as $balancesfinancieros)
        <tr>
            <td>{!! $balancesfinancieros->actaparcial !!}</td>
            <td>{!! $balancesfinancieros->pendientepagar !!}</td>
            <td>{!! $balancesfinancieros->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['balancesfinancieros.destroy', $balancesfinancieros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('balancesfinancieros.show', [$balancesfinancieros->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-eye-open"></i></a> 
                    <a href="{!! route('balancesfinancieros.edit', [$balancesfinancieros->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarBalances/{{ $balancesfinancieros->idbalancesarch }}" class='btn btn-default btn' target="_blank"><i class="glyphicon glyphicon-download"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>