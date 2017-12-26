<table class="table table-responsive" id="usuarioscreados-table">
    <thead>
        <th>Idpersonas</th>
        <th>Idusers</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($usuarioscreados as $usuarioscreados)
        <tr>
            <td>{!! $usuarioscreados->idpersonas !!}</td>
            <td>{!! $usuarioscreados->idusers !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarioscreados.destroy', $usuarioscreados->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarioscreados.show', [$usuarioscreados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuarioscreados.edit', [$usuarioscreados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>