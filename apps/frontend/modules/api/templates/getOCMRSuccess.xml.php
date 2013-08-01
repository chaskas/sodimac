<?xml version="1.0" encoding="utf-8"?>
<ocmrs>
<?php foreach ($ocmrs as $ocmr): ?>
  <ocmr>
  	<id_opor_cmr><?php echo $ocmr->getIdOporCmr() ?></id_opor_cmr>
  	<sku><?php echo $ocmr->getSku() ?></sku>
  	<nombre_producto><?php echo $ocmr->getNombreProducto() ?></nombre_producto>
  	<precio_internet><?php echo $ocmr->getPrecioInternet() ?></precio_internet>
  	<unidad_med_int><?php echo $ocmr->getUnidadMedInt() ?></unidad_med_int>
  	<precio_cmr><?php echo $ocmr->getPrecioCmr() ?></precio_cmr>
  	<unidad_med_cmr><?php echo $ocmr->getUnidadMedCmr() ?></unidad_med_cmr>
  	<fecha_vigencia><?php echo $ocmr->getFechaVigHasFormatted() ?></fecha_vigencia>
  </ocmr>
<?php endforeach ?>
</ocmrs>