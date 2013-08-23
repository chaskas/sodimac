<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Editar Aplicación</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Aplicacion/index') ?>" class="btn btn-primary">Atrás</a>
      </div>
    </div>
  </div>
</div>

<?php include_partial('form', array('form' => $form)) ?>

<div class="page-header">
    <h5>Paises actuales:</h5>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>País</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach($paises as $pais) : ?>
		<tr>
			<td class="center"><?php echo $pais->getPais() ?></td>
			<td></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>