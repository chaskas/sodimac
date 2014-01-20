<?php

/**
 * Pais form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PaisForm extends BasePaisForm
{
  public function configure()
  {

  	$this->widgetSchema['id_pais'] = new sfWidgetFormInput();

  	$this->validatorSchema['id_pais'] = new sfValidatorString(array('max_length' => 4, 'required' => true));

  	$this->widgetSchema['id_pais']->setLabel('Código');
  	$this->widgetSchema['desc_pais']->setLabel('Nombre');
  }
}
