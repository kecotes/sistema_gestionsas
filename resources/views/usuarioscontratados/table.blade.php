<table class="table table-responsive" id="usuarioscontratados-table">
    <thead>
        <tr>
            <th>Residente</th>
            <th>Contrato</th>
            <th colspan="3">Accion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarioscontratados as $usuarioscontratados)
        <tr>
            @foreach($personas as $persona)
                @if($usuarioscontratados->idpersonas == $persona->id)
                <td>{!! $persona->name !!}</td>
                @endif
            @endforeach

            @foreach($contratos as $contrato)
                @if($usuarioscontratados->idcontratos == $contrato->id)
                <td>{!! $contrato->contratos !!}</td>
                @endif
            @endforeach

            <td>
                {!! Form::open(['route' => ['usuarioscontratados.destroy', $usuarioscontratados->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('usuarioscontratados.show', [$usuarioscontratados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <!-- <a href="{!! route('usuarioscontratados.edit', [$usuarioscontratados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>