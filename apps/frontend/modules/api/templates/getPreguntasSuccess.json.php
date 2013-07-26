[
<?php $nb = count($preguntas); $i = 0; ?>
<?php foreach ($preguntas as $pregunta): ++$i ?>
	{
	  "id_enc_preg": "<?php echo $pregunta->getIdEncPreg(); ?>",
	  "id_tipo_preg": "<?php echo $pregunta->getIdTipoPreg(); ?>",
	  "valor_defecto": "<?php echo $pregunta->getValorDefecto(); ?>",
	  "desc_pregunta": "<?php echo $pregunta->getDescPregunta(); ?>",
	  "estado": "<?php echo $pregunta->getEstado(); ?>",
	  "id_pais": "<?php echo $pregunta->getIdPais(); ?>"
	}
	<?php echo $nb == $i ? '' : ',' ?>
<?php endforeach ?>]