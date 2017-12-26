<table class="table table-responsive" id="archivospolizas-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idpolizas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archivospolizas as $archivospolizas)
        <tr>
            <td>{!! $archivospolizas->archivo !!}</td>
            <td>{!! $archivospolizas->titulo !!}</td>
            <td>{!! $archivospolizas->descripcion !!}</td>
            <td>{!! $archivospolizas->idpolizas !!}</td>
            <td>
                {!! Form::open(['route' => ['archivospolizas.destroy', $archivospolizas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archivospolizas.show', [$archivospolizas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archivospolizas.edit', [$archivospolizas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>