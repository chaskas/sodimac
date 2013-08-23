[
<?php $nb = count($paises); $i = 0; ?>
<?php foreach ($paises as $pais): ++$i ?>
	{
		"id_pais": "<?php echo $pais->getIdPais(); ?>",
		"desc_pais": "<?php echo $pais->getPais(); ?>"
		"signo_moneda": "<?php echo $pais->getPais()->getSignoMoneda(); ?>",
		"con_decimal": "<?php echo $pais->getPais()->getConDecimal() ? '1' : '0'; ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]