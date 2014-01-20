<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Respuestas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Respuestas/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Id Pregunta</th>
      <th>Id Cabecera</th>
      <th>Respuesta</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($respuestas as $respuesta): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Respuestas/edit?id_enc_resp='.$respuesta->getIdEncResp()) ?>"><?php echo $respuesta->getIdEncResp() ?></a></td>
        <td class="center"><?php echo $respuesta->getIdEncPreg() ?></td>
        <td class="center"><?php echo $respuesta->getIdEncCabResp() ?></td>
        <td class="center"><?php echo $respuesta->getValorResp() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'Respuestas/edit?id_enc_resp='.$respuesta->getIdEncResp(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_respuestas',
                        array('id_enc_resp'=>$respuesta->getIdEncResp()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>