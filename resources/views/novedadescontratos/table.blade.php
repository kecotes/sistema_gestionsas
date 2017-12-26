<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Nombre del Contrato</th>
        <th>Objeto del Contrato</th>
        <th>Apodo del Contrato</th>
        <th>Valor del Contrato</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($contratos as $contratos)
        <tr>
            <td>{!! $contratos->nocontrato !!}</td>
            <td>{!! $contratos->objetocontrato !!}</td>
            <td>{!! $contratos->apodocontrato !!}</td>
            <td>{!! $contratos->valorcontrato !!}</td>
            <td>
                {!! Form::open(['route' => ['contratos.destroy', $contratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contratos.show', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contratos.edit', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('contratos.edit', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-duplicate"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn', 'onclick' => "return confirm('Seguro que desea eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>