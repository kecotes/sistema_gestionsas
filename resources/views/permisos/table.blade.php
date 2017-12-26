<table class="table table-responsive" id="permisos-table">
    <thead>
        <th>Tipopermiso</th>
        <th>Idfuncionarios</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($permisos as $permisos)
        <tr>
            <td>{!! $permisos->tipopermiso !!}</td>
            <td>{!! $permisos->idfuncionarios !!}</td>
            <td>
                {!! Form::open(['route' => ['permisos.destroy', $permisos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permisos.show', [$permisos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permisos.edit', [$permisos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>