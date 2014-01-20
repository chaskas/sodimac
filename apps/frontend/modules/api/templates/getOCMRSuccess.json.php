[
<?php $nb = count($ocmrs); $i = 0; ?>
<?php foreach ($ocmrs as $ocmr): ++$i ?>
	{
	  "id_opor_cmr": "<?php echo utf8_decode($ocmr->getIdOporCmr()); ?>",
	  "sku": "<?php echo utf8_decode($ocmr->getSku()); ?>",
	  "nombre_producto": "<?php echo utf8_decode($ocmr->getNombreProducto()); ?>",
	  "precio_internet": "<?php echo utf8_decode($ocmr->getPrecioInternet()); ?>",
	  "unidad_med_int": "<?php echo utf8_decode($ocmr->getUnidadMedInt()); ?>",
	  "precio_cmr": "<?php echo utf8_decode($ocmr->getPrecioCmr()); ?>",
	  "unidad_med_cmr": "<?php echo utf8_decode($ocmr->getUnidadMedCmr()); ?>",
	  "fecha_vigencia": "<?php echo utf8_decode($ocmr->getFechaVigHasFormatted()); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]