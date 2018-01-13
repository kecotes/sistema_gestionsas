<table class="table table-responsive" id="estadospolizas-table">
    <thead>
        <th>Amparo</th>
        <th>Vigencia desde</th>
        <th>Vigencia hasta</th>
        <th>Valor asegurado</th>
        <th>Estado de poliza</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($estadospolizas as $estadospolizas)
        <tr>
            <td>{!! $estadospolizas->amparo !!}</td>
            <td>{!! $estadospolizas->vigenciadesde !!}</td>
            <td>{!! $estadospolizas->vigenciahasta !!}</td>
            <td>{!! $estadospolizas->valorasegurado !!}</td>
            <td>{!! $estadospolizas->estadopoliza !!}</td>
            <td>
                {!! Form::open(['route' => ['estadospolizas.destroy', $estadospolizas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estadospolizas.show', [$estadospolizas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estadospolizas.edit', [$estadospolizas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('polizas.index') !!}" class='btn btn-default btn-xs'><i class="fa fa-mail-reply"></i></a> 
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>