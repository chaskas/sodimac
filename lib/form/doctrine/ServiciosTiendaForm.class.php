<?php

/**
 * ServiciosTienda form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosTiendaForm extends BaseServiciosTiendaForm
{
  public function configure()
  {
  	$this->widgetSchema['desc_servicio']->setLabel('Nombre');

  	$this->widgetSchema['estado'] = new sfWidgetFormChoice(array(
  		'choices' => array('ACT'=>'Activo','INA'=>'Inactivo')
  		));
  }
}
