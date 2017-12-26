<table class="table table-responsive" id="polizas-table">
    <thead>
        <th>Fecha de expedicion</th>
        <th>Tipo de poliza</th>
        <th>Nuemero de poliza</th>
        <th>Tipo de certificado</th>
        <th>Observaciones</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($polizas as $polizas)
        <tr>
            <td>{!! $polizas->fechaexpedicion !!}</td>
            <td>{!! $polizas->tipopoliza !!}</td>
            <td>{!! $polizas->npoliza !!}</td>
            <td>{!! $polizas->tipocertificado !!}</td>
            <td>{!! $polizas->observaciones !!}</td>
            <td>
                {!! Form::open(['route' => ['polizas.destroy', $polizas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('polizas.show', [$polizas->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="{!! route('polizas.edit', [$polizas->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('estadospolizas.index') !!}" class='btn btn-default' target="_blank"><i class="fa fa-mail-forward"></i></a> 
                    <a href="descargarPoliza/{{ $polizas->idpolizasarch }}" class='btn btn-default' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>