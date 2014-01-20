[
<?php $nb = count($funciones); $i = 0; ?>
<?php foreach ($funciones as $funcion): ++$i ?>
	{
		"id_funcion": "<?php echo $funcion->getId(); ?>",
		"cod_funcion": "<?php echo $funcion->getCodigo(); ?>",
		"desc_funcion": "<?php echo $funcion->getDescripcion(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]