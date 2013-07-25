<?php

/**
 * OportunidadCmr form base class.
 *
 * @method OportunidadCmr getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOportunidadCmrForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_opor_cmr'     => new sfWidgetFormInputHidden(),
      'sku'             => new sfWidgetFormInputText(),
      'precio_internet' => new sfWidgetFormInputText(),
      'precio_cmr'      => new sfWidgetFormInputText(),
      'fecha_vigencia'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_opor_cmr'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_opor_cmr')), 'empty_value' => $this->getObject()->get('id_opor_cmr'), 'required' => false)),
      'sku'             => new sfValidatorString(array('max_length' => 7)),
      'precio_internet' => new sfValidatorInteger(),
      'precio_cmr'      => new sfValidatorInteger(),
      'fecha_vigencia'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('oportunidad_cmr[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OportunidadCmr';
  }

}
