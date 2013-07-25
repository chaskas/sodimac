<?php

/**
 * Tienda form base class.
 *
 * @method Tienda getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTiendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tienda'      => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'direccion'      => new sfWidgetFormInputText(),
      'latitud'        => new sfWidgetFormInputText(),
      'longitud'       => new sfWidgetFormInputText(),
      'telefono'       => new sfWidgetFormInputText(),
      'horario'        => new sfWidgetFormInputText(),
      'id_region'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
      'id_tipo_tienda' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTienda'), 'add_empty' => true)),
      'id_pais'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'gerente'        => new sfWidgetFormInputText(),
      'busc_producto'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tienda'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tienda')), 'empty_value' => $this->getObject()->get('id_tienda'), 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'direccion'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'latitud'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'longitud'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'telefono'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'horario'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'id_region'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'required' => false)),
      'id_tipo_tienda' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTienda'), 'required' => false)),
      'id_pais'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
      'gerente'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'busc_producto'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tienda';
  }

}
