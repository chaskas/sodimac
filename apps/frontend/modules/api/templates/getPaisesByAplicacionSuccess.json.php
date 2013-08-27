[
<?php $nb = count($paises); $i = 0; ?>
<?php foreach ($paises as $pais): ++$i ?>
	{
		"id_pais": "<?php echo utf8_decode($pais->getIdPais()) ?>",
		"desc_pais": "<?php echo utf8_decode($pais->getPais()) ?>"
		"sigla": "<?php echo utf8_decode($pais->getPais()->getSigla()) ?>",
		"signo_moneda": "<?php echo utf8_decode($pais->getPais()->getSignoMoneda()) ?>",
		"con_decimal": "<?php echo $pais->getPais()->getConDecimal() ? '1' : '0'; ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]
