<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_javascript('jquery-ui.js'); ?>
<?php use_javascript('jquery.ui.datepicker-es.js'); ?>
<?php use_stylesheet('redmond/jquery-ui.css'); ?>

<form action="<?php echo url_for('OportunidadCMR/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_opor_cmr='.$form->getObject()->getIdOporCmr() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['sku']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['sku'] ?>
      <?php echo $form['sku']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['nombre_producto']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['nombre_producto'] ?>
      <?php echo $form['nombre_producto']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['precio_internet']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['precio_internet'] ?>
      <?php echo $form['precio_internet']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['unidad_med_int']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['unidad_med_int'] ?>
      <?php echo $form['unidad_med_int']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['precio_cmr']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['precio_cmr'] ?>
      <?php echo $form['precio_cmr']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['unidad_med_cmr']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['unidad_med_cmr'] ?>
      <?php echo $form['unidad_med_cmr']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['fecha_vig_des']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['fecha_vig_des']->render(array('class' => 'input-date')) ?>
      <?php echo $form['fecha_vig_des']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['fecha_vig_has']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['fecha_vig_has']->render(array('class' => 'input-date')) ?>
      <?php echo $form['fecha_vig_has']->renderError() ?>
    </div>
  </div>


  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('OportunidadCMR/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'OportunidadCMR/delete?id_opor_cmr='.$form->getObject()->getIdOporCmr(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>