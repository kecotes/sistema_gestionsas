<table class="table table-responsive" id="entidadescontratantes-table">
    <thead>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Departamento</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($entidadescontratantes as $entidadescontratantes)
        <tr>
            <td>{!! $entidadescontratantes->nombre !!}</td>
            <td>{!! $entidadescontratantes->telefono !!}</td>
            <td>{!! $entidadescontratantes->direccion !!}</td>
            <td>{!! $entidadescontratantes->ciudad !!}</td>
            <td>{!! $entidadescontratantes->departamento !!}</td>
            <td>
                {!! Form::open(['route' => ['entidadescontratantes.destroy', $entidadescontratantes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('entidadescontratantes.show', [$entidadescontratantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('entidadescontratantes.edit', [$entidadescontratantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>