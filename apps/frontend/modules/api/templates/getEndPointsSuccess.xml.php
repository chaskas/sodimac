<?xml version="1.0" encoding="utf-8"?>
<endpoints>
<?php foreach ($endpoints as $endpoint): ?>
  <endpoint>
		<id_endpoint><?php echo $endpoint->getIdEndpoint() ?></id_endpoint>
		<cod_endpoint><?php echo $endpoint->getCodEndpoint() ?></cod_endpoint>
		<desc_endpoint><?php echo $endpoint->getDescEndpoint() ?></desc_endpoint>
		<host><?php echo $endpoint->getHost() ?></host>
		<puerto><?php echo $endpoint->getPuerto() ?></puerto>
		<resto_url><?php echo $endpoint->getRestoUrl() ?></resto_url>
		<id_pais><?php echo $endpoint->getIdPais() ?></id_pais>
  </endpoint>
<?php endforeach ?>
</endpoints>
