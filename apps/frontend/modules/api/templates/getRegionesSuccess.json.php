[
<?php $nb = count($regiones); $i = 0; ?>
<?php foreach ($regiones as $region): ++$i ?>
	{
	  "id_zona": "<?php echo utf8_decode($region->getIdRegion()); ?>",
	  "desc_zona": "<?php echo utf8_decode($region->getDescRegion()); ?>",
	  "id_pais": "<?php echo utf8_decode($region->getIdPais()); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]