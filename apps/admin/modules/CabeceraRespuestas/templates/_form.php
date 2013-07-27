<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('CabeceraRespuestas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_enc_cab_resp='.$form->getObject()->getIdEncCabResp() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('CabeceraRespuestas/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'CabeceraRespuestas/delete?id_enc_cab_resp='.$form->getObject()->getIdEncCabResp(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nro_boleta']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_boleta']->renderError() ?>
          <?php echo $form['nro_boleta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_compra']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_compra']->renderError() ?>
          <?php echo $form['fecha_compra'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_tienda']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_tienda']->renderError() ?>
          <?php echo $form['id_tienda'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['rut']->renderLabel() ?></th>
        <td>
          <?php echo $form['rut']->renderError() ?>
          <?php echo $form['rut'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['dv']->renderLabel() ?></th>
        <td>
          <?php echo $form['dv']->renderError() ?>
          <?php echo $form['dv'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre_completo']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_completo']->renderError() ?>
          <?php echo $form['nombre_completo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ciudad']->renderLabel() ?></th>
        <td>
          <?php echo $form['ciudad']->renderError() ?>
          <?php echo $form['ciudad'] ?>
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
        <th><?php echo $form['celular']->renderLabel() ?></th>
        <td>
          <?php echo $form['celular']->renderError() ?>
          <?php echo $form['celular'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['edad']->renderLabel() ?></th>
        <td>
          <?php echo $form['edad']->renderError() ?>
          <?php echo $form['edad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sexo']->renderLabel() ?></th>
        <td>
          <?php echo $form['sexo']->renderError() ?>
          <?php echo $form['sexo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['compra_para']->renderLabel() ?></th>
        <td>
          <?php echo $form['compra_para']->renderError() ?>
          <?php echo $form['compra_para'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
