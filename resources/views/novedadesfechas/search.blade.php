{!! Form::open(array('url'=>'novedadesfechas','method'=>'get','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
			<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
				@foreach ($contratos as $contratos)
						<option value="{{$contratos->id}}"> {{$contratos->nocontrato}} </option>
				@endforeach
			</select>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
{{Form::close()}}
