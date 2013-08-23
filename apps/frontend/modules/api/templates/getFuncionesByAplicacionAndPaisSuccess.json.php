[
<?php $nb = count($funciones); $i = 0; ?>
<?php foreach ($funciones as $funcion): ++$i ?>
	{
		"id_funcion": "<?php echo $funcion->getId(); ?>",
		"desc_funcion": "<?php echo $funcion->getDescripcion(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]