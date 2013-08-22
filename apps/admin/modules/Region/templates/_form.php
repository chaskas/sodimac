<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Region/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_region='.$form->getObject()->getIdRegion() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">

<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['id_region']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_region'] ?>
      <?php echo $form['id_region']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['desc_region']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['desc_region'] ?>
      <?php echo $form['desc_region']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['id_pais']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_pais'] ?>
      <?php echo $form['id_pais']->renderError() ?>
    </div>
  </div>

  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('Region/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Region/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
