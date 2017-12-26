<table class="table table-responsive" id="archivosactividadescontratos-table">
    <thead>
        <th>Archivo</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Idactividadescontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archivosactividadescontratos as $archivosactividadescontratos)
        <tr>
            <td>{!! $archivosactividadescontratos->archivo !!}</td>
            <td>{!! $archivosactividadescontratos->titulo !!}</td>
            <td>{!! $archivosactividadescontratos->descripcion !!}</td>
            <td>{!! $archivosactividadescontratos->idactividadescontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['archivosactividadescontratos.destroy', $archivosactividadescontratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archivosactividadescontratos.show', [$archivosactividadescontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archivosactividadescontratos.edit', [$archivosactividadescontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>