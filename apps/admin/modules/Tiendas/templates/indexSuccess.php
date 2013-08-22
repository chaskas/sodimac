<?php include_partial('sidebar'); ?>
<div class="page-header">
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Tiendas</a>
      <div class="pull-right">
        <a href="<?php echo url_for('Tiendas/new') ?>" class="btn btn-primary">Nueva</a>
      </div>
    </div>
  </div>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Teléfono</th>
      <th>Tipo</th>
      <th>Pais</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tiendas as $tienda): ?>
      <tr>
        <td class="center"><a href="<?php echo url_for('Tiendas/edit?id_tienda='.$tienda->getIdTienda()) ?>"><?php echo $tienda->getIdTienda() ?></a></td>
        <td><?php echo $tienda->getNombre() ?></td>
        <td><?php echo $tienda->getTelefono() ?></td>
        <td class="center"><?php echo $tienda->getTipoTienda() ?></td>
        <td class="center"><?php echo $tienda->getPais() ?></td>
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