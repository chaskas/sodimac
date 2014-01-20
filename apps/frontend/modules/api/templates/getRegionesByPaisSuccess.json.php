[
<?php $nb = count($regiones); $i = 0; ?>
<?php foreach ($regiones as $region): ++$i ?>
	{
		"id": "<?php echo $region->getId(); ?>",
		"id_region": "<?php echo $region->getIdRegion(); ?>",
		"desc_region": "<?php echo $region->getDescRegion(); ?>",
		"id_pais": "<?php echo $region->getIdPais(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]