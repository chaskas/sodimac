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
