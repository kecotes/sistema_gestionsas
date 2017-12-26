<table class="table table-responsive" id="archivosbalancesfinancieros-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idbalancesfinancieros</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archivosbalancesfinancieros as $archivosbalancesfinancieros)
        <tr>
            <td>{!! $archivosbalancesfinancieros->archivo !!}</td>
            <td>{!! $archivosbalancesfinancieros->titulo !!}</td>
            <td>{!! $archivosbalancesfinancieros->descripcion !!}</td>
            <td>{!! $archivosbalancesfinancieros->idbalancesfinancieros !!}</td>
            <td>
                {!! Form::open(['route' => ['archivosbalancesfinancieros.destroy', $archivosbalancesfinancieros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archivosbalancesfinancieros.show', [$archivosbalancesfinancieros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archivosbalancesfinancieros.edit', [$archivosbalancesfinancieros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>