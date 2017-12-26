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
    @foreach($actividadeseguimiento as $actividadeseguimiento)
        @if($actividadeseguimiento->descripcion != 'admin')
        <tr>
        <td>{!! $actividadeseguimiento->titulo !!}</td>
        <td>{!! $actividadeseguimiento->descripcion !!}</td>
        @foreach($users as $user)
            @if($actividadeseguimiento->iduser == $user->id)
            <td>{!! $user->name !!}</td>
            @endif
        @endforeach
        <td>{!! $actividadeseguimiento->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['actividadeseguimiento.destroy', $actividadeseguimiento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividadeseguimiento.show', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividadeseguimiento.edit', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $actividadeseguimiento->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
<table class="table table-responsive" id="actividadeseguimiento-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($actividadeseguimiento as $actividadeseguimiento)
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($actividadeseguimiento->descripcion != 'admin') && ($actividadeseguimiento->iduser == $idusers)) { 
        ?> 

        <tr>
        <td>{!! $actividadeseguimiento->titulo !!}</td>
        <td>{!! $actividadeseguimiento->descripcion !!}</td>
        <td>{!! $actividadeseguimiento->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['actividadeseguimiento.destroy', $actividadeseguimiento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividadeseguimiento.show', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividadeseguimiento.edit', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $actividadeseguimiento->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
