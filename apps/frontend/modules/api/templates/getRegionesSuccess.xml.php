<?xml version="1.0" encoding="utf-8"?>
<zonas>
<?php foreach ($regiones as $region): ?>
  <zona>
  	<id_zona><?php echo $region->getIdRegion() ?></id_zona>
  	<desc_zona><?php echo $region->getDescRegion() ?></desc_zona>
  	<id_pais><?php echo $region->getIdPais() ?></id_pais>
  </zona>
<?php endforeach ?>
</zonas>