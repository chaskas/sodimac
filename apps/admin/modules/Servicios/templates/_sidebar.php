<?php slot('sidebar') ?>
<ul class="nav nav-tabs nav-stacked sidenav">
  <li <?php if($sf_context->getModuleName() == 'Tiendas') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Tiendas/index') ?>"><i class="icon-chevron-right"></i>Tiendas</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'TipoTienda') echo "class='active'" ?>>
  	<a href="<?php echo url_for('TipoTienda/index') ?>"><i class="icon-chevron-right"></i>Tipos de Tiendas</a>
  </li>
  <li <?php if($sf_context->getModuleName() == 'Servicios') echo "class='active'" ?>>
  	<a href="<?php echo url_for('Servicios/index') ?>"><i class="icon-chevron-right"></i>Servicios</a>
  </li>
</ul>
<?php end_slot(); ?>