<table class="table table-responsive" id="anexosejecucionfisicofinancieras-table">
    <thead>
        <th>Administracion</th>
        <th>Administracionporcentaje</th>
        <th>Imprevisto</th>
        <th>Imprevistoporcentaje</th>
        <th>Iddatosejecucion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($anexosejecucionfisicofinancieras as $anexosejecucionfisicofinanciera)
        <tr>
            <td>{!! $anexosejecucionfisicofinanciera->administracion !!}</td>
            <td>{!! $anexosejecucionfisicofinanciera->administracionporcentaje !!}</td>
            <td>{!! $anexosejecucionfisicofinanciera->imprevisto !!}</td>
            <td>{!! $anexosejecucionfisicofinanciera->imprevistoporcentaje !!}</td>
            <td>{!! $anexosejecucionfisicofinanciera->iddatosejecucion !!}</td>
            <td>
                {!! Form::open(['route' => ['anexosejecucionfisicofinancieras.destroy', $anexosejecucionfisicofinanciera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('anexosejecucionfisicofinancieras.show', [$anexosejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('anexosejecucionfisicofinancieras.edit', [$anexosejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>