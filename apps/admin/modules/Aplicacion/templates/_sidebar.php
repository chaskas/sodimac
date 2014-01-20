<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getModuleName() == 'Aplicacion') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Aplicacion/index') ?>"><i class="icon-chevron-right"></i>Aplicaciones</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'Funcion') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Funcion/index') ?>"><i class="icon-chevron-right"></i>Funciones</a>
  </li>
</ul>
<?php end_slot(); ?>