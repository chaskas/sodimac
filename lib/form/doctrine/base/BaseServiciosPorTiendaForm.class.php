<?php

/**
 * ServiciosPorTienda form base class.
 *
 * @method ServiciosPorTienda getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiciosPorTiendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tienda'          => new sfWidgetFormInputHidden(),
      'id_servicio_tienda' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_tienda'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tienda')), 'empty_value' => $this->getObject()->get('id_tienda'), 'required' => false)),
      'id_servicio_tienda' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_servicio_tienda')), 'empty_value' => $this->getObject()->get('id_servicio_tienda'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_por_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiciosPorTienda';
  }

}
