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
    @foreach($ejefisicofinancieras as $ejefisicofinancieras)
        @if($ejefisicofinancieras->descripcion != 'admin')
        <tr>
        <td>{!! $ejefisicofinancieras->titulo !!}</td>
        <td>{!! $ejefisicofinancieras->descripcion !!}</td>
        @foreach($users as $user)
            @if($ejefisicofinancieras->iduser == $user->id)
            <td>{!! $user->name !!}</td>
            @endif
        @endforeach
        <td>{!! $ejefisicofinancieras->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['ejefisicofinancieras.destroy', $ejefisicofinancieras->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ejefisicofinancieras.show', [$ejefisicofinancieras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ejefisicofinancieras.edit', [$ejefisicofinancieras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $ejefisicofinancieras->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
<table class="table table-responsive" id="ejecucionfisicofinancieras-table">
    <thead>
        <th>Descripcion</th>
        <th>Observaciones</th>
        <th>Fecha de creacion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ejefisicofinancieras as $ejefisicofinancieras)
        <!-- Condicion no permite mostrar los archivos con descripcion admin, y solo muestra los archivos del usuario logeado -->
        <?php 
        if(($ejefisicofinancieras->descripcion != 'admin') && ($ejefisicofinancieras->iduser == $idusers)) { 
        ?> 

        <tr>
        <td>{!! $ejefisicofinancieras->titulo !!}</td>
        <td>{!! $ejefisicofinancieras->descripcion !!}</td>
        <td>{!! $ejefisicofinancieras->created_at !!}</td>
            <td>
                {!! Form::open(['route' => ['ejefisicofinancieras.destroy', $ejefisicofinancieras->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ejefisicofinancieras.show', [$ejefisicofinancieras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ejefisicofinancieras.edit', [$ejefisicofinancieras->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="descargarEje/{{ $ejefisicofinancieras->idejecuarch }}" class='btn btn-default btn btn-xs' target="_blank"><i class="glyphicon glyphicon-download"></i></a> 
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
