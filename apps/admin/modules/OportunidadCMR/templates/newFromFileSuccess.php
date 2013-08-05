<?php use_stylesheets_for_form($form_file) ?>
<?php use_javascripts_for_form($form_file) ?>
<?php include_partial('sidebar'); ?>

<form 
	action="<?php echo url_for('OportunidadCMR/createFromFile') ?>" 
	method="post" 
	<?php $form_file->isMultipart() and print 'enctype="multipart/form-data" ' ?> 
	class="form-horizontal"
>

  <?php echo $form_file->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form_file->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form_file['file']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form_file['file'] ?>
      <?php echo $form_file['file']->renderError() ?>
    </div>
  </div>


  <div class="form-actions">
    <input type="submit" value="Siguiente" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('OportunidadCMR/index') ?>" class="btn">Cancelar</a>

  </div>

</form>