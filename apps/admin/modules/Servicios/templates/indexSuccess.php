<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Servicios</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Servicios/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="center">Id</th>
      <th class="center">Nombre</th>
      <th class="center">Estado</th>
      <th class="center">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($servicios as $servicio): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Servicios/edit?id_servicio_tienda='.$servicio->getIdServicioTienda()) ?>"><?php echo $servicio->getIdServicioTienda() ?></a></td>
        <td><?php echo $servicio->getDescServicio() ?></td>
        <td class="center"><?php echo image_tag($servicio->getEstadoImg()) ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Servicios/edit?id_servicio_tienda='.$servicio->getIdServicioTienda(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_servicio',
                        array('id_servicio_tienda'=>$servicio->getIdServicioTienda()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>