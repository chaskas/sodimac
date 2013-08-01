[
<?php $nb = count($servicios); $i = 0; ?>
<?php foreach ($servicios as $servicio): ++$i ?>
	{
	  "desc_servicio": "<?php echo utf8_decode($servicio->getServicios()) ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]