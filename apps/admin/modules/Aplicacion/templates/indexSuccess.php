<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Aplicaciones</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Aplicacion/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Código</th>
      <th>Descripción</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($aplicaciones as $aplicacion): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Aplicacion/edit?id='.$aplicacion->getId()) ?>"><?php echo $aplicacion->getId() ?></a></td>
        <td class="center"><?php echo $aplicacion->getCodigo() ?></td>
        <td class="center"><?php echo $aplicacion->getDescripcion() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Aplicacion/edit?id='.$aplicacion->getId(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_aplicacion',
                        array('id'=>$aplicacion->getId()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
