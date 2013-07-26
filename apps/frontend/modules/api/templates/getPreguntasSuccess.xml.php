<?xml version="1.0" encoding="utf-8"?>
<preguntas>
<?php foreach ($preguntas as $preguntas): ?>
  <pregunta>
  	<id_enc_preg><?php echo $preguntas->getIdEncPreg(); ?></id_enc_preg>
  	<id_tipo_preg><?php echo $preguntas->getIdTipoPreg(); ?></id_tipo_preg>
  	<valor_defecto><?php echo $preguntas->getValorDefecto(); ?></valor_defecto>
  	<desc_pregunta><?php echo $preguntas->getDescPregunta(); ?></desc_pregunta>
  	<estado><?php echo $preguntas->getEstado(); ?></estado>
  	<id_pais><?php echo $preguntas->getIdPais(); ?></id_pais>
  </pregunta>
<?php endforeach ?>
</preguntas>