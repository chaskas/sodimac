<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('OportunidadCMR/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_opor_cmr='.$form->getObject()->getIdOporCmr() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('OportunidadCMR/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'OportunidadCMR/delete?id_opor_cmr='.$form->getObject()->getIdOporCmr(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['sku']->renderLabel() ?></th>
        <td>
          <?php echo $form['sku']->renderError() ?>
          <?php echo $form['sku'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['precio_internet']->renderLabel() ?></th>
        <td>
          <?php echo $form['precio_internet']->renderError() ?>
          <?php echo $form['precio_internet'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['precio_cmr']->renderLabel() ?></th>
        <td>
          <?php echo $form['precio_cmr']->renderError() ?>
          <?php echo $form['precio_cmr'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_vigencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_vigencia']->renderError() ?>
          <?php echo $form['fecha_vigencia'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
