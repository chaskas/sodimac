{
	"id_tienda": "<?php echo utf8_decode($tienda->getIdTienda()) ?>",
	"nombre": "<?php echo utf8_decode($tienda->getNombre()) ?>",
	"direccion": "<?php echo utf8_decode($tienda->getDireccion()) ?>",
	"latitud": "<?php echo utf8_decode($tienda->getLatitud()) ?>",
	"longitud": "<?php echo utf8_decode($tienda->getLongitud()) ?>",
	"telefono": "<?php echo utf8_decode($tienda->getTelefono()) ?>",
	"horario": "<?php echo utf8_decode($tienda->getHorario()) ?>",
	"id_region": "<?php echo utf8_decode($tienda->getRegion()->getIdRegion()) ?>",
	"id_tipo_tienda": "<?php echo utf8_decode($tienda->getIdTipoTienda()) ?>",
	"id_pais": "<?php echo utf8_decode($tienda->getIdPais()) ?>",
	"gerente": "<?php echo utf8_decode($tienda->getGerente()) ?>",
	"busc_producto": "<?php echo utf8_decode($tienda->getBuscProducto()) ?>",
	"servicios":
		[
		<?php $nb = count($servicios); $i = 0; ?>
		<?php foreach ($servicios as $servicio): ++$i ?>
			{
				"desc_servicio": "<?php echo utf8_decode($servicio->getServicios()) ?>"
			}
			<?php echo $nb == $i ? '' : ',' ?>
		<?php endforeach; ?>
		]
}


