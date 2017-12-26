<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Documento</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($residentes as $residentes)
        <tr>
            <td>{!! $residentes->nombre !!}</td>
            <td>{!! $residentes->apellido !!}</td>
            <td>{!! $residentes->direccion !!}</td>
            <td>{!! $residentes->telefono !!}</td>
            <td>{!! $residentes->documento !!}</td>
            <td>
                {!! Form::open(['route' => ['residentes.destroy', $residentes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('residentes.show', [$residentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('residentes.edit', [$residentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Seguro que desea eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
