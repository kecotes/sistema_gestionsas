<table class="table table-responsive" id="adicciones-table">
    <thead>
        <tr>
            <th>Valor adicional</th>
        <th>Valor anticipo adicional</th>

            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($adicciones as $adicciones)
        <tr>
            <td>{!! $adicciones->valoradicional !!}</td>
            <td>{!! $adicciones->valoranticipoadicional !!}</td>
            <td>
                {!! Form::open(['route' => ['adicciones.destroy', $adicciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('adicciones.show', [$adicciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <!--<a href="{!! route('adicciones.edit', [$adicciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>-->
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>