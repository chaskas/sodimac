<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Editar Tienda</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Tiendas/index') ?>" class="btn btn-primary">Atrás</a>
      </div>
    </div>
  </div>
</div>

<?php include_partial('form', array('form' => $form)) ?>

<div class="page-header">
    <h5>Servicios actuales:</h5>
  </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Servicio</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach($servicios as $servicio) : ?>
		<tr>
			<td><?php echo $servicio->getIdServicioTienda() ?></td>
			<td>Eliminar</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>