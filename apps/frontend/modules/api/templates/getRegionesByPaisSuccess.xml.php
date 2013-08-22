<?xml version="1.0" encoding="utf-8"?>
<regiones>
<?php foreach ($regiones as $region): ?>
  <region>
		<id><?php echo $region->getId() ?></id>
		<id_region><?php echo $region->getIdRegion() ?></id_region>
		<desc_region><?php echo $region->getDescRegion() ?></desc_region>
		<id_pais><?php echo $region->getIdPais() ?></id_pais>
  </region>
<?php endforeach ?>
</regiones>
