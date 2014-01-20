<?xml version="1.0" encoding="utf-8"?>
<preguntas>
<?php foreach ($preguntas as $pregunta): ?>
  <pregunta>
  	<id_enc_preg><?php echo $pregunta->getIdEncPreg(); ?></id_enc_preg>
  	<id_tipo_preg><?php echo $pregunta->getIdTipoPreg(); ?></id_tipo_preg>
  	<valor_defecto><?php echo $pregunta->getValorDefecto(); ?></valor_defecto>
  	<desc_pregunta><?php echo $pregunta->getDescPregunta(); ?></desc_pregunta>
  	<estado><?php echo $pregunta->getEstado(); ?></estado>
  	<id_pais><?php echo $pregunta->getIdPais(); ?></id_pais>
  </pregunta>
<?php endforeach ?>
</preguntas>