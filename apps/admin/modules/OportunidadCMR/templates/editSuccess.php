<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Editar</a>
      <div class="pull-right">
        <a href="<?php echo url_for('OportunidadCMR/index') ?>" class="btn btn-primary">Atrás</a>
      </div>
    </div>
  </div>
</div>

<?php include_partial('form', array('form' => $form)) ?>
