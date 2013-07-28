<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Tiendas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_tienda='.$form->getObject()->getIdTienda() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('Tiendas/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'Tiendas/delete?id_tienda='.$form->getObject()->getIdTienda(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['direccion']->renderLabel() ?></th>
        <td>
          <?php echo $form['direccion']->renderError() ?>
          <?php echo $form['direccion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['latitud']->renderLabel() ?></th>
        <td>
          <?php echo $form['latitud']->renderError() ?>
          <?php echo $form['latitud'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['longitud']->renderLabel() ?></th>
        <td>
          <?php echo $form['longitud']->renderError() ?>
          <?php echo $form['longitud'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telefono']->renderLabel() ?></th>
        <td>
          <?php echo $form['telefono']->renderError() ?>
          <?php echo $form['telefono'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['horario']->renderLabel() ?></th>
        <td>
          <?php echo $form['horario']->renderError() ?>
          <?php echo $form['horario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_region']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_region']->renderError() ?>
          <?php echo $form['id_region'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_tipo_tienda']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_tipo_tienda']->renderError() ?>
          <?php echo $form['id_tipo_tienda'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_pais']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_pais']->renderError() ?>
          <?php echo $form['id_pais'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['gerente']->renderLabel() ?></th>
        <td>
          <?php echo $form['gerente']->renderError() ?>
          <?php echo $form['gerente'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['busc_producto']->renderLabel() ?></th>
        <td>
          <?php echo $form['busc_producto']->renderError() ?>
          <?php echo $form['busc_producto'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
