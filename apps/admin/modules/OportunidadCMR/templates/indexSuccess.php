<h1>Oportunidad cmrs List</h1>

<table>
  <thead>
    <tr>
      <th>Id opor cmr</th>
      <th>Sku</th>
      <th>Precio internet</th>
      <th>Precio cmr</th>
      <th>Fecha vigencia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($oportunidad_cmrs as $oportunidad_cmr): ?>
    <tr>
      <td><a href="<?php echo url_for('OportunidadCMR/edit?id_opor_cmr='.$oportunidad_cmr->getIdOporCmr()) ?>"><?php echo $oportunidad_cmr->getIdOporCmr() ?></a></td>
      <td><?php echo $oportunidad_cmr->getSku() ?></td>
      <td><?php echo $oportunidad_cmr->getPrecioInternet() ?></td>
      <td><?php echo $oportunidad_cmr->getPrecioCmr() ?></td>
      <td><?php echo $oportunidad_cmr->getFechaVigencia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('OportunidadCMR/new') ?>">New</a>
