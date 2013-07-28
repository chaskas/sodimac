<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getModuleName() == 'Pais') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Pais/index') ?>"><i class="icon-chevron-right"></i>País</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'Region') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Region/index') ?>"><i class="icon-chevron-right"></i>Región</a>
  </li>
</ul>
<?php end_slot(); ?>