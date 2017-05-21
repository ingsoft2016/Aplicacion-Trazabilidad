@extends ('layouts.admin')
	@section ('contenido')
	<div class="row">
		<div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">

			<h3>Detalle Vehiculo Produccion </h3> <a href="http://localhost:8000/traza/listas"><button class="btn btn-success">Retornar</button></a>
		</div>
	</div>
	<div class= "row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class= "table table-striped table-bordered table-condensed table-hover">
					<thead class="bg-success">
					
						<th>Vehiculo</th>
						<th>Conductor</th>
						<th>Cantidad de viajes</th>
						<th>Costo Acarreo </th>
						<th>PagoTransporte</th>
						
					</thead>
					@foreach($vehiculos as $vehi)
					<tr >
						<td>{{$vehi->placa}}</td>
						<td>{{$vehi->nombre}}</td>
						<td>{{$vehi->cantidad_viajes}}
						<td> {{$vehi->costo_acarreo}} $</td>
							<td>{{$vehi->total}} $</td>
					</tr>
					@endforeach
				</table>	
						<h3 class= "bg-danger" >Movimientos</h3>
				<table class= "table table-striped table-bordered table-condensed table-hover">
					<thead class="bg-info">
						<th>Recibo</th>
						<th>Fecha</th>
						<th>Vehiculo</th>
						<th>Abscisa Cargue</th>
						<th>Abscisa Descargue</th>
						<th>Material</th>
						<th>Cantidad material</th>	
					</thead>
					@foreach($vehiculos2 as $vehi)
					<tr>
						<td>{{$vehi->numeroRecibo}}</td>
						<td>{{$vehi->fecha}}</td>
						<td>{{$vehi->placa}}</td>
						<td>{{$vehi->abscargue}}</td>
						<td>{{$vehi->absdescargue}}</td>
						<td>{{$vehi->material}}</td>
						<td>{{$vehi->cantidadMaterial}}</td>
					</tr>
					@include ('traza.vehiculosTransporte.modal')
					@endforeach
				</table>	
				

           
			</div>

	@endsection