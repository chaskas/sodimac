[
<?php $nb = count($preguntas); $i = 0; ?>
<?php foreach ($preguntas as $pregunta): ++$i ?>
	{
	  "id_enc_preg": "<?php echo utf8_decode($pregunta->getIdEncPreg()) ?>",
	  "id_tipo_preg": "<?php echo utf8_decode($pregunta->getIdTipoPreg()) ?>",
	  "valor_defecto": "<?php echo utf8_decode($pregunta->getValorDefecto()) ?>",
	  "desc_pregunta": "<?php echo utf8_decode($pregunta->getDescPregunta()) ?>",
	  "estado": "<?php echo utf8_decode($pregunta->getEstado()) ?>",
	  "id_pais": "<?php echo utf8_decode($pregunta->getIdPais()) ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]