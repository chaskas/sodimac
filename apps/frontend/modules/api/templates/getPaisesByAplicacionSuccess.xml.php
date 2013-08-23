<?xml version="1.0" encoding="utf-8"?>
<paises>
<?php foreach ($paises as $pais): ?>
  <pais>
		<id><?php echo $pais->getIdPais() ?></id>
		<desc_pais><?php echo $pais->getPais() ?></desc_pais>
  </pais>
<?php endforeach ?>
</paises>
