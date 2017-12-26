<table class="table table-responsive" id="contratosprues-table">
    <thead>
        <th>Entidadcontratante</th>
        <th>Objetocontrato</th>
        <th>Nocontrato</th>
        <th>Ncontrato</th>
        <th>Apodocontrato</th>
        <th>Valorcontratol</th>
        <th>Valorcontrato</th>
        <th>Valoranticipol</th>
        <th>Valoranticipo</th>
        <th>Porcentajeanticipo</th>
        <th>Formapago</th>
        <th>Valoradicional</th>
        <th>Valoranticipoadicional</th>
        <th>Plazoinicial</th>
        <th>Fechainiciacion</th>
        <th>Fechafinalizacion</th>
        <th>Tipocontrato</th>
        <th>Estado</th>
        <th>Idpersonas</th>
        <th>Identidadescontratantes</th>
        <th>Idtiposcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contratosprues as $contratosprue)
        <tr>
            <td>{!! $contratosprue->entidadcontratante !!}</td>
            <td>{!! $contratosprue->objetocontrato !!}</td>
            <td>{!! $contratosprue->nocontrato !!}</td>
            <td>{!! $contratosprue->ncontrato !!}</td>
            <td>{!! $contratosprue->apodocontrato !!}</td>
            <td>{!! $contratosprue->valorcontratol !!}</td>
            <td>{!! $contratosprue->valorcontrato !!}</td>
            <td>{!! $contratosprue->valoranticipol !!}</td>
            <td>{!! $contratosprue->valoranticipo !!}</td>
            <td>{!! $contratosprue->porcentajeanticipo !!}</td>
            <td>{!! $contratosprue->formapago !!}</td>
            <td>{!! $contratosprue->valoradicional !!}</td>
            <td>{!! $contratosprue->valoranticipoadicional !!}</td>
            <td>{!! $contratosprue->plazoinicial !!}</td>
            <td>{!! $contratosprue->fechainiciacion !!}</td>
            <td>{!! $contratosprue->fechafinalizacion !!}</td>
            <td>{!! $contratosprue->tipocontrato !!}</td>
            <td>{!! $contratosprue->estado !!}</td>
            <td>{!! $contratosprue->idpersonas !!}</td>
            <td>{!! $contratosprue->identidadescontratantes !!}</td>
            <td>{!! $contratosprue->idtiposcontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['contratosprues.destroy', $contratosprue->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contratosprues.show', [$contratosprue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contratosprues.edit', [$contratosprue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>