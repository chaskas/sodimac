<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Tiendas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Tiendas/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Tipo</th>
      <th>Pais</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tiendas as $tienda): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Tiendas/edit?id_tienda='.$tienda->getIdTienda()) ?>"><?php echo $tienda->getIdTienda() ?></a></td>
        <td class="desc"><?php echo $tienda->getNombre() ?></td>
        <td><?php echo $tienda->getTelefono() ?></td>
        <td class="center"><?php echo $tienda->getTipoTienda() ?></td>
        <td class="center"><?php echo $tienda->getPais() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Tiendas/edit?id_tienda='.$tienda->getIdTienda(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_tienda',
                        array('id_tienda'=>$tienda->getIdTienda()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>