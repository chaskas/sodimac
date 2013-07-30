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
        <td><a href="<?php echo url_for('CabeceraRespuestas/edit?id_enc_cab_resp='.$cabecera->getIdEncCabResp()) ?>"><?php echo $cabecera->getIdEncCabResp() ?></a></td>
        <td><?php echo $cabecera->getNroBoleta() ?></td>
        <td><?php echo $cabecera->getFechaCompraFormatted() ?></td>
        <td><?php echo $cabecera->getIdTienda() ?></td>
        <td>
          <?php //link_to 'play', status_play_path(station.id), :class => 'btn btn-mini' ?>
          <?php //link_to 'stop', status_stop_path(station.id), :class => 'btn btn-mini' ?>
          <?php //link_to t('.edit', :default => t("helpers.links.edit")),edit_station_path(station), :class => 'btn btn-mini' ?>
          <?php //link_to t('.destroy', :default => t("helpers.links.destroy")), station_path(station), :method => :delete, :data => { :confirm => t('.confirm', :default => t("helpers.links.confirm", :default => 'Are you sure?')) }, :class => 'btn btn-mini btn-danger' ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>