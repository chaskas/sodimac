<?php

/**
 * Tienda form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TiendaForm extends BaseTiendaForm
{
  public function configure()
  {
  	$this->widgetSchema['id_pais']->setLabel('País');
  	$this->widgetSchema['id_tipo_tienda']->setLabel('Tipo');
  	$this->widgetSchema['id_region']->setLabel('Región');
  	$this->widgetSchema['id_region']->setLabel('Región');
  	$this->widgetSchema['busc_producto']->setLabel('Busca Producto???????');
  }
}
