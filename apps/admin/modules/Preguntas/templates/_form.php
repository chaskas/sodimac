<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Preguntas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_enc_preg='.$form->getObject()->getIdEncPreg() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['id_tipo_preg']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_tipo_preg'] ?>
      <?php echo $form['id_tipo_preg']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['valor_defecto']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['valor_defecto'] ?>
      <?php echo $form['valor_defecto']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['desc_pregunta']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['desc_pregunta'] ?>
      <?php echo $form['desc_pregunta']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['estado']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['estado'] ?>
      <?php echo $form['estado']->renderError() ?>
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
    
    <a href="<?php echo url_for('Preguntas/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Preguntas/delete?id_enc_preg='.$form->getObject()->getIdEncPreg(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
