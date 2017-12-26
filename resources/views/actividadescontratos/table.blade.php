<table class="table table-responsive" id="actividadescontratos-table">
    <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th>Idtipoactividades</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($actividadescontratos as $actividadescontratos)
        <tr>
            <td>{!! $actividadescontratos->titulo !!}</td>
            <td>{!! $actividadescontratos->contenido !!}</td>
            <td>{!! $actividadescontratos->estado !!}</td>
            <td>{!! $actividadescontratos->idcontratos !!}</td>
            <td>{!! $actividadescontratos->idtipoactividades !!}</td>
            <td>
                {!! Form::open(['route' => ['actividadescontratos.destroy', $actividadescontratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividadescontratos.show', [$actividadescontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividadescontratos.edit', [$actividadescontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>