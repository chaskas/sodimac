<h1>Encuesta cabecera respuestass List</h1>

<table>
  <thead>
    <tr>
      <th>Id enc cab resp</th>
      <th>Nro boleta</th>
      <th>Fecha compra</th>
      <th>Id tienda</th>
      <th>Rut</th>
      <th>Dv</th>
      <th>Nombre completo</th>
      <th>Ciudad</th>
      <th>Telefono</th>
      <th>Celular</th>
      <th>Email</th>
      <th>Edad</th>
      <th>Sexo</th>
      <th>Compra para</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($encuesta_cabecera_respuestass as $encuesta_cabecera_respuestas): ?>
    <tr>
      <td><a href="<?php echo url_for('CabeceraRespuestas/edit?id_enc_cab_resp='.$encuesta_cabecera_respuestas->getIdEncCabResp()) ?>"><?php echo $encuesta_cabecera_respuestas->getIdEncCabResp() ?></a></td>
      <td><?php echo $encuesta_cabecera_respuestas->getNroBoleta() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getFechaCompra() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getIdTienda() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getRut() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getDv() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getNombreCompleto() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getCiudad() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getTelefono() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getCelular() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getEmail() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getEdad() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getSexo() ?></td>
      <td><?php echo $encuesta_cabecera_respuestas->getCompraPara() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('CabeceraRespuestas/new') ?>">New</a>
