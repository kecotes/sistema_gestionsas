
<!-- Administrador -->
@if(Auth::user()->tipoUsuario == '1')
{!! Form::open(array('url'=>'registrofotografico','method'=>'get','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
					<option value="">Buscar...</option>
					@foreach ($contratosADM as $contratosADM)
						<option value="{{$contratosADM->id}}" > {{$contratosADM->contratos}} </option>
					@endforeach
		</select>
		<span class="input-group-btn">
		<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
{{Form::close()}}
@endif

<!-- Resiente -->
@if(Auth::user()->tipoUsuario == '2')
{!! Form::open(array('url'=>'registrofotografico','method'=>'get','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<select name="searchText" class="form-control select2" class="form-control selectpicker"  data-live-search="true">
					<option value="">Buscar...</option>
					@foreach ($contratosRdt as $contratosRdt)
						<option value="{{$contratosRdt->id}}" > {{$contratosRdt->contratos}} </option>
					@endforeach
		</select>
		<span class="input-group-btn">
		<button type="submit" class="btn btn-success">Seleccionar contrato</button>
		</span>
	</div>
</div>
{{Form::close()}}
@endif