<!-- Administrador -->
@if(Auth::user()->tipoUsuario == '1')
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th><b>Tipo<b></th>
        <th>Descripcion</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($correspondencia as $correspondencia)
        <tr>
        <td><b>{!! $correspondencia->descripcion !!}<b></td>
        <td>{!! $correspondencia->titulo !!}</td>
        <td>{!! $correspondencia->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['correspondencia.destroy', $correspondencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('correspondencia.show', [$correspondencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('correspondencia.edit', [$correspondencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $correspondencia->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
