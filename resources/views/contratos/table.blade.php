<!-- Administrador -->
@if(Auth::user()->tipoUsuario == '1')
<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Numero del Contrato</th>
        <th>Objeto del Contrato</th>
        <th>Apodo del Contrato</th>
        <th>Valor del Contrato</th>
        <th colspan="4">Accion</th>
    </thead>
    <tbody>
    @foreach($contratos as $contratos)
        <tr>
            <td>{!! $contratos->ncontrato !!}</td>
            <td>{!! $contratos->objetocontrato !!}</td>
            <td>{!! $contratos->apodocontrato !!}</td>
            <td>{!! $contratos->valorcontrato !!}</td>
            <td>
                {!! Form::open(['route' => ['contratos.destroy', $contratos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contratos.show', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contratos.edit', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('contratos.edit', [$contratos->id]) !!}" class='btn btn-default btn'><i class="glyphicon glyphicon-duplicate"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn', 'onclick' => "return confirm('Seguro que desea eliminar?')"]) !!}
                </div>
              
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif

<!-- Resiente -->
@if(Auth::user()->tipoUsuario == '2')
<table class="table table-responsive" id="contratos-table">
    <thead>
        <th>Numero del Contrato</th>
        <th>Objeto del Contrato</th>
        <th>Apodo del Contrato</th>
        <th>Valor del Contrato</th>
        <th colspan="4">Accion</th>
    </thead>
    <tbody>
    @foreach($contratosRdt as $contratosRdt)
        <tr>
            <td>{!! $contratosRdt->ncontrato !!}</td>
            <td>{!! $contratosRdt->objetocontrato !!}</td>
            <td>{!! $contratosRdt->apodocontrato !!}</td>
            <td>{!! $contratosRdt->valorcontrato !!}</td>
            <td>
                <div class='btn-group'>
                    <a href="contratos/{{$contratosRdt->id}}" class='btn btn-default btn'><i class="glyphicon glyphicon-eye-open"></i></a>

                </div>
              
                {!! Form::close() !!}
            </td>
        @endforeach
    </tbody>
</table>

@endif