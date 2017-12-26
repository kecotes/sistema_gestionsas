<table class="table table-responsive" id="funcionarios-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipofuncionario</th>
        <th>Usuario</th>
        <th>Idpnaturales</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($funcionarios as $funcionarios)
        <tr>
            <td>{!! $funcionarios->nombre !!}</td>
            <td>{!! $funcionarios->apellido !!}</td>
            <td>{!! $funcionarios->tipofuncionario !!}</td>
            <td>{!! $funcionarios->usuario !!}</td>
            <td>{!! $funcionarios->idpnaturales !!}</td>
            <td>
                {!! Form::open(['route' => ['funcionarios.destroy', $funcionarios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('funcionarios.show', [$funcionarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('funcionarios.edit', [$funcionarios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>