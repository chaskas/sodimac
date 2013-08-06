<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Tiendas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_tienda='.$form->getObject()->getIdTienda() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="form-horizontal">

<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <?php echo $form->renderHiddenFields(false) ?>
  <div class="control-group">
    <?php echo $form->renderGlobalErrors() ?>
  </div>

  <div class="control-group">
    <?php echo $form['id_tienda']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_tienda'] ?>
      <?php echo $form['id_tienda']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['nombre']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['nombre'] ?>
      <?php echo $form['nombre']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['direccion']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['direccion'] ?>
      <?php echo $form['direccion']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['latitud']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['latitud'] ?>
      <?php echo $form['latitud']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['longitud']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['longitud'] ?>
      <?php echo $form['longitud']->renderError() ?>
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
    <?php echo $form['horario']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['horario'] ?>
      <?php echo $form['horario']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['id_region']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_region'] ?>
      <?php echo $form['id_region']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['id_tipo_tienda']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_tipo_tienda'] ?>
      <?php echo $form['id_tipo_tienda']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['id_pais']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['id_pais'] ?>
      <?php echo $form['id_pais']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['gerente']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['gerente'] ?>
      <?php echo $form['gerente']->renderError() ?>
    </div>
  </div>

  <div class="control-group">
    <?php echo $form['busc_producto']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $form['busc_producto'] ?>
      <?php echo $form['busc_producto']->renderError() ?>
    </div>
  </div>

  <?php foreach ($form['servicios'] as $key => $respuesta): ?>
  <div class="page-header">
    <h5>Agregar Servicio:</h5>
  </div>

  <div class="control-group">
    <?php echo $respuesta['id_servicio_tienda']->renderLabel(null, array('class'=>'control-label')) ?>
    <div class="controls">
      <?php echo $respuesta['id_servicio_tienda'] ?>
      <?php echo $respuesta['id_servicio_tienda']->renderError() ?>
    </div>
  </div>

  <?php endforeach; ?>

  <div class="form-actions">
    <input type="submit" value="Guardar" class="btn btn-primary"/>
    
    <a href="<?php echo url_for('Tiendas/index') ?>" class="btn">Cancelar</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;<?php echo link_to('Eliminar', 'Tiendas/delete?id_tienda='.$form->getObject()->getIdTienda(), array('method' => 'delete', 'confirm' => '¿Estás seguro?')) ?>
    <?php endif; ?>
  </div>
