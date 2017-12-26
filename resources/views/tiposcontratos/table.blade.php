<table class="table table-responsive" id="tiposcontratos-table">
    <thead>
        <th>Tipo de Contrato</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($tiposcontratos as $tiposcontratos)
        <tr>
            <td>{!! $tiposcontratos->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tiposcontratos.destroy', $tiposcontratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tiposcontratos.show', [$tiposcontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tiposcontratos.edit', [$tiposcontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>