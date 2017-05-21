@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
		<h3>
			Editar Nombre Abscisa  :{{$abscisa->nombre}}</h3> 
			<a href="http://localhost:8000/traza/abscisas"><button class="btn btn-success">Retornar</button></a>
			@if (count($errors)> 0 )
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($abscisa,['method'=>'PATCH','action'=>['AbscisaController@update',$abscisa->idAbscisa]])!!}
			{{Form::token()}}
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control"
						value="{{$abscisa->nombre}}" 
						placeholder="Nombre...">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" name="descripcion" class="form-control"
						value="{{$abscisa->descripcion}}" 
						placeholder="descripcion...">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="volumen_llenado_teorico">Volumen llenado teorico</label>
						<input type="text" name="volumen_llenado_teorico" class="form-control"
						value="{{$abscisa->volumen_llenado_teorico}}" 
						placeholder="vol...">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="volumen_excavado_teorico">Volumen excavado teorico</label>
						<input type="text" name="volumen_excavado_teorico" class="form-control"
						value="{{$abscisa->volumen_excavado_teorico}}" 
						placeholder="vol...">
					</div>
				</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="volumen_real_llenado">Volumen Real llenado</label>
						<input type="text" name="volumen_real_llenado" class="form-control"
						value="{{$abscisa->volumen_real_llenado}}" 
						placeholder="vol...">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="volumen_real_excavado">Volumen Real Excavado</label>
						<input type="text" name="volumen_real_excavado" class="form-control"
						value="{{$abscisa->volumen_real_llenado}}" 
						placeholder="vol...">
					</div>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label> </label>
						<div>
							<button class="btn btn-primary" type="submit">Guardar</button>
							<button  class="btn btn-danger" type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>
{!!Form::close()!!}

@stop