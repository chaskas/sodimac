<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Preguntas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Preguntas/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="center">Id</th>
      <th class="center">Tipo</th>
      <th class="center">Descripción</th>
      <th class="center">Estado</th>
      <th class="center">País</th>
      <th class="center">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($preguntas as $pregunta): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Preguntas/edit?id_enc_preg='.$pregunta->getIdEncPreg()) ?>"><?php echo $pregunta->getIdEncPreg() ?></a></td>
        <td class="center"><?php echo $pregunta->getTipoPregunta() ?></td>
        <td class="desc"><?php echo $pregunta->getDescPregunta() ?></td>
        <td class="center"><?php echo image_tag($pregunta->getEstadoImg()) ?></td>
        <td class="center"><?php echo $pregunta->getPais() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Preguntas/edit?id_enc_preg='.$pregunta->getIdEncPreg(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_pregunta',
                        array('id_enc_preg'=>$pregunta->getIdEncPreg()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>



