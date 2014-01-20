<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Servicios/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_servicio_tienda='.$form->getObject()->getIdServicioTienda() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['desc_servicio']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['desc_servicio'] ?>
      <?php echo $form['desc_servicio']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['estado']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['estado'] ?>
      <?php echo $form['estado']->renderError() ?>
    </div>
  </div>

  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('Servicios/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Servicios/delete?id_servicio_tienda='.$form->getObject()->getIdServicioTienda(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
