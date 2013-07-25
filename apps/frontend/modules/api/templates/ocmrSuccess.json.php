[
<?php $nb = count($ocmrs); $i = 0; ?>
<?php foreach ($ocmrs as $ocmr): ++$i ?>
	{
	  "id_opor_cmr": "<?php echo $ocmr->getIdOporCmr(); ?>",
	  "sku": "<?php echo $ocmr->getSku(); ?>",
	  "precio_internet": "<?php echo $ocmr->getPrecioInternet(); ?>",
	  "precio_cmr": "<?php echo $ocmr->getPrecioCmr(); ?>",
	  "fecha_vigencia": "<?php echo $ocmr->getFechaVigencia(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]