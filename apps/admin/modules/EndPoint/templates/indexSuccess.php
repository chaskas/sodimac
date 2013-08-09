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

