<table class="table table-responsive" id="subcontratos-table">
    <thead>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subcontratos as $subcontratos)
        <tr>
            <td>{!! $subcontratos->idcontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['subcontratos.destroy', $subcontratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subcontratos.show', [$subcontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subcontratos.edit', [$subcontratos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>