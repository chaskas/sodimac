<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Tipos de pregunta</a>
      <div class="pull-right">
        <a href="<?php echo url_for('TipoPregunta/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripción</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipos as $tipo): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('TipoPregunta/edit?id_tipo_preg='.$tipo->getIdTipoPreg()) ?>"><?php echo $tipo->getIdTipoPreg() ?></a></td>
        <td><?php echo $tipo->getDescTipoPreg() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'TipoPregunta/edit?id_tipo_preg='.$tipo->getIdTipoPreg(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_tipo_pregunta',
                        array('id_tipo_preg'=>$tipo->getIdTipoPreg()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


