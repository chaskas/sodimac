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
      <th>Id</th>
      <th>Tipo</th>
      <th>Valor defecto</th>
      <th>Descripción</th>
      <th>Estado</th>
      <th>País</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($preguntas as $pregunta): ?>
      <tr>
        <td><a href="<?php echo url_for('Preguntas/edit?id_enc_preg='.$pregunta->getIdEncPreg()) ?>"><?php echo $pregunta->getIdEncPreg() ?></a></td>
        <td><?php echo $pregunta->getIdTipoPreg() ?></td>
        <td><?php echo $pregunta->getValorDefecto() ?></td>
        <td><?php echo $pregunta->getDescPregunta() ?></td>
        <td><?php echo $pregunta->getEstado() ?></td>
        <td><?php echo $pregunta->getIdPais() ?></td>
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


