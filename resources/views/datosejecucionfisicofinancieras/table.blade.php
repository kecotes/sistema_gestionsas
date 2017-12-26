<table class="table table-responsive" id="datosejecucionfisicofinancieras-table">
    <thead>
        <th>Item</th>
        <th>Tema</th>
        <th>Descripcion</th>
        <th>Ejecucionacumitem</th>
        <th>Estado</th>
        <th>Idcontratos</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($datosejecucionfisicofinancieras as $datosejecucionfisicofinanciera)
        <tr>
            <td>{!! $datosejecucionfisicofinanciera->item !!}</td>
            <td>{!! $datosejecucionfisicofinanciera->tema !!}</td>
            <td>{!! $datosejecucionfisicofinanciera->descripcion !!}</td>
            <td>{!! $datosejecucionfisicofinanciera->ejecucionacumitem !!}</td>
            <td>{!! $datosejecucionfisicofinanciera->estado !!}</td>
            <td>{!! $datosejecucionfisicofinanciera->idcontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['datosejecucionfisicofinancieras.destroy', $datosejecucionfisicofinanciera->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('datosejecucionfisicofinancieras.show', [$datosejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('datosejecucionfisicofinancieras.edit', [$datosejecucionfisicofinanciera->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>