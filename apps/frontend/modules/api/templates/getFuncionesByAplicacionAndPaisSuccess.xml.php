<?xml version="1.0" encoding="utf-8"?>
<funciones>
<?php foreach ($funciones as $funcion): ?>
  <funcion>
  	<id_funcion><?php echo $funcion->getId() ?></id_funcion>
  	<desc_funcion><?php echo $funcion->getDescripcion() ?></desc_funcion>
  </funcion>
<?php endforeach ?>
</funciones>