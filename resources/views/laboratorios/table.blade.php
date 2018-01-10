<!-- Administrador -->
@if(Auth::user()->tipoUsuario == '1')
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Residente</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($laboratorios as $laboratorios)
        @if($laboratorios->descripcion != 'admin')
        <tr>
        <td>{!! $laboratorios->titulo !!}</td>
        <td>{!! $laboratorios->descripcion !!}</td>
        @foreach($users as $user)
            @if($laboratorios->iduser == $user->id)
            <td>{!! $user->name !!}</td>
            @endif
        @endforeach
        <td>{!! $laboratorios->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['laboratorios.destroy', $laboratorios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('laboratorios.show', [$laboratorios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('laboratorios.edit', [$laboratorios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $laboratorios->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>
@endif

<!-- Resiente -->
@if(Auth::user()->tipoUsuario == '2')
<table class="table table-responsive" id="controlequipos-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($laboratorios as $laboratorios)
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($laboratorios->descripcion != 'admin') && ($laboratorios->iduser == $idusers)) { 
        ?> 

        <tr>
        <td>{!! $laboratorios->titulo !!}</td>
        <td>{!! $laboratorios->descripcion !!}</td>
        <td>{!! $laboratorios->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['laboratorios.destroy', $laboratorios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('laboratorios.show', [$laboratorios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('laboratorios.edit', [$laboratorios->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $laboratorios->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta usted seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        <?php } ?>
    @endforeach
    </tbody>
</table>
@endif
