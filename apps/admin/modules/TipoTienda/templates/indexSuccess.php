<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Tipos de tiendas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('TipoTienda/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Tipo</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipos as $tipo): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('TipoTienda/edit?id_tipo_tienda='.$tipo->getIdTipoTienda()) ?>"><?php echo $tipo->getIdTipoTienda() ?></a></td>
        <td><?php echo $tipo->getDescTipoTienda() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'TipoTienda/edit?id_tipo_tienda='.$tipo->getIdTipoTienda(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_tipo_tienda',
                        array('id_tipo_tienda'=>$tipo->getIdTipoTienda()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>