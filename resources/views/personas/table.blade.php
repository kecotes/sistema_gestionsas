<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Tipodocumento</th>
        <th>Documento</th>
        <th>Expedicion</th>
        <th>Estado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $personas)
        <tr>
            <td>{!! $personas->direccion !!}</td>
            <td>{!! $personas->telefono !!}</td>
            <td>{!! $personas->tipodocumento !!}</td>
            <td>{!! $personas->documento !!}</td>
            <td>{!! $personas->expedicion !!}</td>
            <td>{!! $personas->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['personas.destroy', $personas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$personas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$personas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>