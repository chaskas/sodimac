<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Zonas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Region/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>País</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($regiones as $region): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Region/edit?id='.$region->getId()) ?>"><?php echo $region->getIdRegion() ?></a></td>
        <td><?php echo $region->getDescRegion() ?></td>
        <td class="center"><?php echo $region->getPais() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Region/edit?id='.$region->getId(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_region',
                        array('id'=>$region->getId()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
