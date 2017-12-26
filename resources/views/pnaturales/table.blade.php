<table class="table table-responsive" id="pnaturales-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipopnatural</th>
        <th>Idpersonas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pnaturales as $pnaturales)
        <tr>
            <td>{!! $pnaturales->nombre !!}</td>
            <td>{!! $pnaturales->apellido !!}</td>
            <td>{!! $pnaturales->tipopnatural !!}</td>
            <td>{!! $pnaturales->idpersonas !!}</td>
            <td>
                {!! Form::open(['route' => ['pnaturales.destroy', $pnaturales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pnaturales.show', [$pnaturales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pnaturales.edit', [$pnaturales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>