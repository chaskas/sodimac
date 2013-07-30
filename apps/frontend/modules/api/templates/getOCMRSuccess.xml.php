<?xml version="1.0" encoding="utf-8"?>
<ocmrs>
<?php foreach ($ocmrs as $ocmr): ?>
  <ocmr>
  	<id_opor_cmr><?php echo $ocmr->getIdOporCmr() ?></id_opor_cmr>
  	<sku><?php echo $ocmr->getSku() ?></sku>
  	<precio_internet><?php echo $ocmr->getPrecioInternet() ?></precio_internet>
  	<precio_cmr><?php echo $ocmr->getPrecioCmr() ?></precio_cmr>
  	<fecha_vigencia><?php echo $ocmr->getFechaVigencia() ?></fecha_vigencia>
  </ocmr>
<?php endforeach ?>
</ocmrs>