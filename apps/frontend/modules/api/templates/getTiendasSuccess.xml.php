<?xml version="1.0" encoding="utf-8"?>
<tiendas>
<?php foreach ($tiendas as $tienda): ?>
	<tienda>
	  <id_tienda><?php echo $tienda->getIdTienda(); ?></id_tienda>
		<nombre><?php echo $tienda->getNombre(); ?></nombre>
		<direccion><?php echo $tienda->getDireccion(); ?></direccion>
		<latitud><?php echo $tienda->getLatitud(); ?></latitud>
		<longitud><?php echo $tienda->getLongitud(); ?></longitud>
		<telefono><?php echo $tienda->getTelefono(); ?></telefono>
		<horario><?php echo $tienda->getHorario(); ?></horario>
		<id_region><?php echo $tienda->getIdRegion(); ?></id_region>
	  <id_tipo_tienda><?php echo $tienda->getIdTipoTienda(); ?></id_tipo_tienda>
	  <id_pais><?php echo $tienda->getIdPais(); ?></id_pais>
	  <gerente><?php echo $tienda->getGerente(); ?></gerente>
		<busc_producto><?php echo $tienda->getBuscProducto(); ?></busc_producto>
	</tienda>
<?php endforeach ?>
</tiendas>