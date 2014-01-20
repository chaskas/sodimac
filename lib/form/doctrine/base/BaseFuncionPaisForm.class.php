<?php

/**
 * FuncionPais form base class.
 *
 * @method FuncionPais getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFuncionPaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_funcion' => new sfWidgetFormInputHidden(),
      'id_pais'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_funcion' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_funcion')), 'empty_value' => $this->getObject()->get('id_funcion'), 'required' => false)),
      'id_pais'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pais')), 'empty_value' => $this->getObject()->get('id_pais'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'FuncionPais', 'column' => array('id_funcion', 'id_pais')))
    );

    $this->widgetSchema->setNameFormat('funcion_pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FuncionPais';
  }

}
