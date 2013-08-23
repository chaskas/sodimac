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
