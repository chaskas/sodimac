<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Respuestas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_enc_resp='.$form->getObject()->getIdEncResp() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['id_enc_preg']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_enc_preg'] ?>
      <?php echo $form['id_enc_preg']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['valor_resp']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['valor_resp'] ?>
      <?php echo $form['valor_resp']->renderError() ?>
    </div>
  </div>
<!-- 
  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['nro_boleta']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['nro_boleta'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['nro_boleta']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['fecha_compra']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['fecha_compra'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['fecha_compra']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['id_tienda']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['id_tienda'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['id_tienda']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['rut']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['rut'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['rut']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['dv']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['dv'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['dv']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['nombre_completo']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['nombre_completo'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['nombre_completo']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['ciudad']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['ciudad'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['ciudad']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['telefono']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['telefono'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['telefono']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['celular']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['celular'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['celular']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['email']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['email'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['email']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['edad']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['edad'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['edad']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['sexo']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['sexo'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['sexo']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php //echo $form['EncuestaCabeceraRespuestas']['compra_para']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php //echo $form['EncuestaCabeceraRespuestas']['compra_para'] ?>
      <?php //echo $form['EncuestaCabeceraRespuestas']['compra_para']->renderError() ?>
    </div>
  </div>
 -->
  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('Respuestas/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Respuestas/delete?id_enc_resp='.$form->getObject()->getIdEncResp(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
</form>