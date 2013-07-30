<?php

/**
 * OportunidadCmr form base class.
 *
 * @method OportunidadCmr getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
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
      'id_pais'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_opor_cmr'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_opor_cmr')), 'empty_value' => $this->getObject()->get('id_opor_cmr'), 'required' => false)),
      'sku'             => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'precio_internet' => new sfValidatorInteger(array('required' => false)),
      'precio_cmr'      => new sfValidatorInteger(array('required' => false)),
      'fecha_vigencia'  => new sfValidatorDateTime(array('required' => false)),
      'id_pais'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
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
