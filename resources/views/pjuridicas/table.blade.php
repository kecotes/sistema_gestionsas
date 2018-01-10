<table class="table table-responsive" id="pjuridicas-table">
    <thead>
        <th>Nombre</th>
        <th>Tipo de Identificacion</th>
        <th>No</th>
        <th>Expedida</th>
        <th>Tipo de persona juridica</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($pjuridicas as $pjuridicas)
        <tr>
            <td>{!! $pjuridicas->nombre !!}</td>
            <td>{!! $pjuridicas->tipodocumento !!}</td>
            <td>{!! $pjuridicas->documento !!}</td>
            <td>{!! $pjuridicas->expedicion !!}</td>
            <td>{!! $pjuridicas->tipopjuridica !!}</td>
            <td>
                {!! Form::open(['route' => ['pjuridicas.destroy', $pjuridicas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pjuridicas.show', [$pjuridicas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pjuridicas.edit', [$pjuridicas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>