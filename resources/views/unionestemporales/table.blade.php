<table class="table table-responsive" id="unionestemporales-table">
    <thead>
        <th>Nombre</th>
        <th>Nit</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($unionestemporales as $unionestemporales)
        <tr>
            <td>{!! $unionestemporales->nombre !!}</td>
            <td>{!! $unionestemporales->documento !!}</td>

            <td>
                {!! Form::open(['route' => ['unionestemporales.destroy', $unionestemporales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unionestemporales.show', [$unionestemporales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unionestemporales.edit', [$unionestemporales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>