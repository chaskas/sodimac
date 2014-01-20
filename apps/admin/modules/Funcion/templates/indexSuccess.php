<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Funciones</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Funcion/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Código</th>
      <th>Aplicación</th>
      <th>Descripción</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($funciones as $funcion): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Funcion/edit?id='.$funcion->getId()) ?>"><?php echo $funcion->getId() ?></a></td>
        <td class="center"><?php echo $funcion->getCodigo() ?></td>
        <td class="center"><?php echo $funcion->getAplicacion() ?></td>
        <td class="center"><?php echo $funcion->getDescripcion() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Funcion/edit?id='.$funcion->getId(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_funcion',
                        array('id'=>$funcion->getId()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
