<?php

/**
 * Region form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegionForm extends BaseRegionForm
{
  public function configure()
  {
  	$this->widgetSchema['id_region']->setLabel('Código');
  	$this->widgetSchema['desc_region']->setLabel('Nombre');
  	$this->widgetSchema['id_pais']->setLabel('País');
  }
}
