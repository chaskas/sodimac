<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Oportunidad CMR</a>
      <div class="pull-right">
        <a href="<?php echo url_for('OportunidadCMR/newFromFile') ?>" class="btn btn-success">Cargar Excel</a>
        <a href="<?php echo url_for('OportunidadCMR/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>SKU</th>
      <th>Precio Internet</th>
      <th>Precio CMR</th>
      <th>Desde</th>
      <th>Hasta</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($oportunidad_cmrs as $oportunidad_cmr): ?>
      <tr>
        <td><a href="<?php echo url_for('OportunidadCMR/edit?id_opor_cmr='.$oportunidad_cmr->getIdOporCmr()) ?>"><?php echo $oportunidad_cmr->getIdOporCmr() ?></a></td>
        <td><?php echo $oportunidad_cmr->getSku() ?></td>
        <td><?php echo $oportunidad_cmr->getPrecioInternet() ?></td>
        <td><?php echo $oportunidad_cmr->getPrecioCmr() ?></td>
        <td class="center"><?php echo $oportunidad_cmr->getFechaVigDesFormatted() ?></td>
        <td class="center"><?php echo $oportunidad_cmr->getFechaVigHasFormatted() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'OportunidadCMR/edit?id_opor_cmr='.$oportunidad_cmr->getIdOporCmr(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_oportunidad',
                        array('id_opor_cmr'=>$oportunidad_cmr->getIdOporCmr()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

