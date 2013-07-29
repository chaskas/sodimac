<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('CabeceraRespuestas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_enc_cab_resp='.$form->getObject()->getIdEncCabResp() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['nro_boleta']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['nro_boleta'] ?>
      <?php echo $form['nro_boleta']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['fecha_compra']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['fecha_compra'] ?>
      <?php echo $form['fecha_compra']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['id_tienda']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_tienda'] ?>
      <?php echo $form['id_tienda']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['rut']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['rut'] ?>
      <?php echo $form['rut']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['dv']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['dv'] ?>
      <?php echo $form['dv']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['nombre_completo']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['nombre_completo'] ?>
      <?php echo $form['nombre_completo']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['ciudad']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['ciudad'] ?>
      <?php echo $form['ciudad']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['telefono']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['telefono'] ?>
      <?php echo $form['telefono']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['celular']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['celular'] ?>
      <?php echo $form['celular']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['email']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['email'] ?>
      <?php echo $form['email']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['edad']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['edad'] ?>
      <?php echo $form['edad']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['sexo']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['sexo'] ?>
      <?php echo $form['sexo']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['compra_para']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['compra_para'] ?>
      <?php echo $form['compra_para']->renderError() ?>
    </div>
  </div>

  <?php foreach ($form['Respuestas'] as $key => $respuesta): ?>
  <div class="page-header">
    <h4>Pregunta <?php echo $key+1 ?>:</h4>
  </div>
  <div class="control-group">
    <?php echo $respuesta['id_enc_preg']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $respuesta['id_enc_preg'] ?>
      <?php echo $respuesta['id_enc_preg']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $respuesta['valor_resp']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $respuesta['valor_resp'] ?>
      <?php echo $respuesta['valor_resp']->renderError() ?>
    </div>
  </div>

  <?php endforeach; ?>
 
  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('CabeceraRespuestas/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'CabeceraRespuestas/delete?id_enc_cab_resp='.$form->getObject()->getIdEncCabResp(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
</form>