<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getModuleName() == 'Preguntas') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Preguntas/index') ?>"><i class="icon-chevron-right"></i>Preguntas</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'TipoPregunta') echo "class='active'" ?>>
  	<a href="<?php echo url_for('TipoPregunta/index') ?>"><i class="icon-chevron-right"></i>Tipos de Pregunta</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'CabeceraRespuestas') echo "class='active'" ?>>
  	<a href="<?php echo url_for('CabeceraRespuestas/index') ?>"><i class="icon-chevron-right"></i>Cabeceras</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'Respuestas') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Respuestas/index') ?>"><i class="icon-chevron-right"></i>Respuestas</a>
  </li>
</ul>
<?php end_slot(); ?>