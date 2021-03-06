<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class= "col-lg-8 col-md-8 col-sm-8 col-xs-12">

		<h3>Resumen Vehículos</h3>
		<?php echo $__env->make('traza.listas.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<a href="<?php echo e(URL::to('getExportNominaVehiculos')); ?>"> <button class="btn btn-success">Exportar excel</button></a>
	</div>
</div>
<div class= "row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class= "table table-striped table-bordered table-condensed table-hover">
				<thead  style="background-color:#f0e68c ;">
					
					<th>Vehículo</th>
					<th>Conductor</th>
					<th>Cantidad de viajes</th>
					<th>Costo Acarreo </th>
					<th>Pago Transporte</th>
					<th>Opción</th>
				</thead>
				<?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr >
					<td><?php echo e($vehi->placa); ?></td>
					<td><?php echo e($vehi->nombre); ?></td>
					<td><?php echo e($vehi->contador); ?>

						<td>$ <?php echo e(number_format($vehi->costo_acarreo,2)); ?></td>
						<td> $ <?php echo e(number_format($vehi->total*$vehi->contador,2)); ?></td>
						<td>
							<?php echo Form::open(array('url'=>'traza/listas','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>


							<a href=""><button type="submit" class="btn btn" value="<?php echo e($vehi->idVehiculo); ?>" name="searchText" ">Detalle</button></a>	<br>
							
							<?php echo e(Form:: close()); ?>

						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>	
			</div>
			<?php echo e($vehiculos->render()); ?>


		</div>
	</div>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>