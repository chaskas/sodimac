<?xml version="1.0" encoding="utf-8"?>
<paises>
<?php foreach ($paises as $pais): ?>
  <pais>
		<id><?php echo $pais->getIdPais() ?></id>
		<desc_pais><?php echo $pais->getPais() ?></desc_pais>
		<sigla><?php echo $pais->getPais()->getSigla() ?></sigla>
		<signo_moneda><?php echo $pais->getPais()->getSignoMoneda() ?></signo_moneda>
		<con_decimal><?php echo $pais->getPais()->getConDecimal() ?></con_decimal>
  </pais>
<?php endforeach ?>
</paises>
