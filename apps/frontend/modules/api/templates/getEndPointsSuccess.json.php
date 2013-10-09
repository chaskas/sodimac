[
<?php $nb = count($endpoints); $i = 0; ?>
<?php foreach ($endpoints as $endpoint): ++$i ?>
	{
		"id_endpoint": "<?php echo utf8_decode($endpoint->getIdEndpoint()); ?>",
		"cod_endpoint": "<?php echo utf8_decode($endpoint->getCodEndpoint()); ?>",
		"desc_endpoint": "<?php echo utf8_decode($endpoint->getDescEndpoint()); ?>",
		"version": "<?php echo utf8_decode($endpoint->getVersion()); ?>",
		"host": "<?php echo utf8_decode($endpoint->getHost()); ?>",
		"puerto": "<?php echo utf8_decode($endpoint->getPuerto()); ?>",
		"resto_url": "<?php echo utf8_decode($endpoint->getRestoUrl()); ?>",
		"id_pais": "<?php echo utf8_decode($endpoint->getIdPais()); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]