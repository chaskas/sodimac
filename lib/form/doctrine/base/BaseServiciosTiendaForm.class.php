<?php

/**
 * ServiciosTienda form base class.
 *
 * @method ServiciosTienda getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiciosTiendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_servicio_tienda' => new sfWidgetFormInputHidden(),
      'desc_servicio'      => new sfWidgetFormInputText(),
      'estado'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_servicio_tienda' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_servicio_tienda')), 'empty_value' => $this->getObject()->get('id_servicio_tienda'), 'required' => false)),
      'desc_servicio'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'estado'             => new sfValidatorString(array('max_length' => 3, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiciosTienda';
  }

}
