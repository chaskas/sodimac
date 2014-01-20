<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getActionName() != 'newFromFile') echo "class='active'" ?>>
  	<a href="<?php echo url_for('OportunidadCMR/index') ?>"><i class="icon-chevron-right"></i>Oportunidad CMR</a>
  </li>
  <li <?php if($sf_context->getActionName() == 'newFromFile') echo "class='active'" ?>>
  	<a href="<?php echo url_for('OportunidadCMR/newFromFile') ?>"><i class="icon-chevron-right"></i>Cargar Excel</a>
  </li>
</ul>
<?php end_slot(); ?>