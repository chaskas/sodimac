<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Cabeceras</a>
      <div class="pull-right">
        <a href="<?php echo url_for('CabeceraRespuestas/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nro Boleta</th>
      <th>Fecha Compra</th>
      <th>Tienda</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cabeceras as $cabecera): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('CabeceraRespuestas/edit?id_enc_cab_resp='.$cabecera->getIdEncCabResp()) ?>"><?php echo $cabecera->getIdEncCabResp() ?></a></td>
        <td class="center"><?php echo $cabecera->getNroBoleta() ?></td>
        <td class="center"><?php echo $cabecera->getFechaCompraFormatted() ?></td>
        <td class="center"><?php echo $cabecera->getIdTienda() ?></td>
        <td class="center">
          <?php echo link_to(
                        'Editar',
                        'CabeceraRespuestas/edit?id_enc_cab_resp='.$cabecera->getIdEncCabResp(),
                        array('class'=>'btn btn-mini')); ?>
          <?php echo link_to(
                        'Eliminar',
                        'delete_cabecera_respuestas',
                        array('id_enc_cab_resp'=>$cabecera->getIdEncCabResp()),
                        array('method'=>'delete','confirm' => '¿Estás seguro?','class'=>'btn btn-danger btn-mini')); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>