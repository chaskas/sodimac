<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">End Point</a>
      <div class="pull-right">
        <a href="<?php echo url_for('EndPoint/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripción</th>
      <th>Host</th>
      <th>País</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($endpoints as $endpoint): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('EndPoint/edit?id_endpoint='.$endpoint->getIdEndpoint()) ?>"><?php echo $endpoint->getIdEndpoint() ?></a></td>
        <td><?php echo $endpoint->getDescEndpoint() ?></td>
        <td><?php echo $endpoint->getHost() ?></td>
        <td class="center"><?php echo $endpoint->getPais() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'EndPoint/edit?id_endpoint='.$endpoint->getIdEndpoint(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_endpoint',
                        array('id_endpoint'=>$endpoint->getIdEndpoint()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

