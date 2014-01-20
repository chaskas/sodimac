<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Paises</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Pais/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Sigla</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($paises as $pais): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Pais/edit?id_pais='.$pais->getIdPais()) ?>"><?php echo $pais->getIdPais() ?></a></td>
        <td class="center"><?php echo $pais->getDescPais() ?></td>
        <td class="center"><?php echo $pais->getSigla() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Pais/edit?id_pais='.$pais->getIdPais(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_pais',
                        array('id_pais'=>$pais->getIdPais()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
