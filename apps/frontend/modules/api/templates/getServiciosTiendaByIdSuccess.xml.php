<?xml version="1.0" encoding="utf-8"?>
<servicios>
<?php foreach ($servicios as $servicio): ?>
  <servicio>
  	<desc_servicio><?php echo $servicio->getServicios(); ?></desc_servicio>
  </servicio>
<?php endforeach ?>
</servicios>