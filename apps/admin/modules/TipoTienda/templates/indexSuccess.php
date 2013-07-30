<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Tipos de tiendas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('TipoTienda/new') ?>" class="btn btn-primary">Nuevo</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Tipo</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipos as $tipo): ?>
      <tr>
        <td><a href="<?php echo url_for('TipoTienda/edit?id_tipo_tienda='.$tipo->getIdTipoTienda()) ?>"><?php echo $tipo->getIdTipoTienda() ?></a></td>
        <td><?php echo $tipo->getDescTipoTienda() ?></td>
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