<table class="table table-responsive" id="anexosfisicofinancieras-table">
    <thead>
        <th>Administracion</th>
        <th>Administracionporcentaje</th>
        <th>Imprevisto</th>
        <th>Imprevistoporcentaje</th>
        <th>Iddatosejecucion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($anexosfisicofinancieras as $anexosfisicofinanciera)
        <tr>
            <td>{!! $anexosfisicofinanciera->administracion !!}</td>
            <td>{!! $anexosfisicofinanciera->administracionporcentaje !!}</td>
            <td>{!! $anexosfisicofinanciera->imprevisto !!}</td>
            <td>{!! $anexosfisicofinanciera->imprevistoporcentaje !!}</td>
            <td>{!! $anexosfisicofinanciera->iddatosejecucion !!}</td>
            <td>
                {!! Form::open(['route' => ['anexosfisicofinancieras.destroy', $anexosfisicofinanciera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('anexosfisicofinancieras.show', [$anexosfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('anexosfisicofinancieras.edit', [$anexosfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>