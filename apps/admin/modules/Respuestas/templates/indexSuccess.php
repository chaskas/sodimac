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
        <td><a href="<?php echo url_for('Respuestas/edit?id_enc_resp='.$respuesta->getIdEncResp()) ?>"><?php echo $respuesta->getIdEncResp() ?></a></td>
        <td><?php echo $respuesta->getIdEncPreg() ?></td>
        <td><?php echo $respuesta->getIdEncCabResp() ?></td>
        <td><?php echo $respuesta->getValorResp() ?></td>
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