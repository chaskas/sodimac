[
<?php $nb = count($ocmrs); $i = 0; ?>
<?php foreach ($ocmrs as $ocmr): ++$i ?>
	{
	  "id_opor_cmr": "<?php echo utf8_decode($ocmr->getIdOporCmr()); ?>",
	  "sku": "<?php echo utf8_decode($ocmr->getSku()); ?>",
	  "precio_internet": "<?php echo utf8_decode($ocmr->getPrecioInternet()); ?>",
	  "precio_cmr": "<?php echo utf8_decode($ocmr->getPrecioCmr()); ?>",
	  "fecha_vigencia": "<?php echo utf8_decode($ocmr->getFechaVigencia()); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]