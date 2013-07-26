<?php

/**
 * TipoPregunta form base class.
 *
 * @method TipoPregunta getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipoPreguntaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_preg'   => new sfWidgetFormInputHidden(),
      'desc_tipo_preg' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_preg'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tipo_preg')), 'empty_value' => $this->getObject()->get('id_tipo_preg'), 'required' => false)),
      'desc_tipo_preg' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_pregunta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoPregunta';
  }

}
