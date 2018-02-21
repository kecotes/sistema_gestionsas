<table class="table table-responsive" id="correspondencias-table">
    <thead>
        <tr>
        <th>Tipo de Correspondencia</th>
        <th>Fecha</th>
        <th>Destinatario</th>
        <th>Remitente</th>
        <th>Asunto</th>
            <th colspan="3">Accion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($correspondencias as $correspondencias)
        <tr>    
                @if($correspondencias->tipo == "Enviada")
                    <td bgcolor="#82E0AA">{!! $correspondencias->tipo !!}</td>
                @else
                    <td bgcolor="yellow">{!! $correspondencias->tipo !!}</td>
                @endif
            <td>{!! $correspondencias->fecha !!}</td>
            <td>{!! $correspondencias->destinatario !!}</td>
            <td>{!! $correspondencias->remitente !!}</td>
            <td>{!! $correspondencias->asunto !!}</td>
            <td>
                {!! Form::open(['route' => ['correspondencias.destroy', $correspondencias->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('correspondencias.show', [$correspondencias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('correspondencias.edit', [$correspondencias->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarCorrespondencia/{{ $correspondencias->id }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>