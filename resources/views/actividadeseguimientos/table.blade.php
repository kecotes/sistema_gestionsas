<table class="table table-responsive" id="actividadeseguimientos-table">
    <thead>
        <tr>
            <th>Nombreinforme</th>
        <th>Idactividadescontratos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actividadeseguimientos as $actividadeseguimiento)
        <tr>
            <td>{!! $actividadeseguimiento->nombreinforme !!}</td>
            <td>{!! $actividadeseguimiento->idactividadescontratos !!}</td>
            <td>
                {!! Form::open(['route' => ['actividadeseguimientos.destroy', $actividadeseguimiento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actividadeseguimientos.show', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actividadeseguimientos.edit', [$actividadeseguimiento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>