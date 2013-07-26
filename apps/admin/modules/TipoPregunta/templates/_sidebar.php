<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getModuleName() == 'Preguntas') echo "class='active'" ?>><a href="<?php echo url_for('Preguntas/index') ?>"><i class="icon-chevron-right"></i>Preguntas</a></li>
  <li <?php if($sf_context->getModuleName() == 'TipoPregunta') echo "class='active'" ?>><a href="<?php echo url_for('TipoPregunta/index') ?>"><i class="icon-chevron-right"></i>Tipos de Pregunta</a></li>
</ul>
<?php end_slot(); ?>