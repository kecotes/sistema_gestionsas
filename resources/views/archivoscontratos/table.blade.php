<table class="table table-responsive" id="archivoscontratos-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Tipo</th>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archivoscontratos as $archivoscontratos)
        <tr>
            <td>{!! $archivoscontratos->archivo !!}</td>
            <td>{!! $archivoscontratos->titulo !!}</td>
            <td>{!! $archivoscontratos->descripcion !!}</td>
            <td>{!! $archivoscontratos->tipo !!}</td>
            <td>{!! $archivoscontratos->idcontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['archivoscontratos.destroy', $archivoscontratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archivoscontratos.show', [$archivoscontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archivoscontratos.edit', [$archivoscontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>