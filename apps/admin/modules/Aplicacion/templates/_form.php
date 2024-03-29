<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Aplicacion/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">

<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['codigo']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['codigo'] ?>
      <?php echo $form['codigo']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['descripcion']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['descripcion'] ?>
      <?php echo $form['descripcion']->renderError() ?>
    </div>
  </div>

  <div class="page-header">
    <h5>Agregar País:</h5>
  </div>

  <?php foreach ($form['paises'] as $key => $pais): ?>
  <div class="control-group">
    <?php echo $pais['id_pais']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $pais['id_pais'] ?>
      <?php echo $pais['id_pais']->renderError() ?>
    </div>
  </div>
  <?php endforeach; ?>

  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('Aplicacion/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Aplicacion/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
