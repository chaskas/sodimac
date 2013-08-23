[
<?php $nb = count($paises); $i = 0; ?>
<?php foreach ($paises as $pais): ++$i ?>
	{
		"id_pais": "<?php echo $pais->getIdPais(); ?>",
		"desc_pais": "<?php echo $pais->getPais(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]