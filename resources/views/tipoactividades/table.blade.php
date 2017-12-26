<table class="table table-responsive" id="tipoactividades-table">
    <thead>
        <th>Tipoactividad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoactividades as $tipoactividades)
        <tr>
            <td>{!! $tipoactividades->tipoactividad !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoactividades.destroy', $tipoactividades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoactividades.show', [$tipoactividades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoactividades.edit', [$tipoactividades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>