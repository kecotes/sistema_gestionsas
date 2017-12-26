<table class="table table-responsive" id="numuniones-table">
    <thead>
        <th>Contratista</th>
        <th>Union Temporal</th>
        <th>Porcentaje</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($numuniones as $numuniones)
        <tr>
            <td>{!! $numuniones->idpjuridicas !!}</td>
            <td>{!! $numuniones->idunionestemporales !!}</td>
            <td>{!! $numuniones->porcentaje !!}</td>
            <td>
                {!! Form::open(['route' => ['numuniones.destroy', $numuniones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('numuniones.show', [$numuniones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('numuniones.edit', [$numuniones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>