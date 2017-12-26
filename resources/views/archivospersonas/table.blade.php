<table class="table table-responsive" id="archivospersonas-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idpersonas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archivospersonas as $archivospersonas)
        <tr>
            <td>{!! $archivospersonas->archivo !!}</td>
            <td>{!! $archivospersonas->titulo !!}</td>
            <td>{!! $archivospersonas->descripcion !!}</td>
            <td>{!! $archivospersonas->idpersonas !!}</td>
            <td>
                {!! Form::open(['route' => ['archivospersonas.destroy', $archivospersonas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archivospersonas.show', [$archivospersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archivospersonas.edit', [$archivospersonas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>