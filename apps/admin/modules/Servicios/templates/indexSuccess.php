<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Servicios</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Servicios/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="center">Id</th>
      <th class="center">Nombre</th>
      <th class="center">Estado</th>
      <th class="center">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($servicios as $servicio): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Servicios/edit?id_servicio_tienda='.$servicio->getIdServicioTienda()) ?>"><?php echo $servicio->getIdServicioTienda() ?></a></td>
        <td><?php echo $servicio->getDescServicio() ?></td>
        <td class="center"><?php echo image_tag($servicio->getEstadoImg()) ?></td>
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