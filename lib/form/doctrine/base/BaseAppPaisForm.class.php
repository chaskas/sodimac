<?php

/**
 * AppPais form base class.
 *
 * @method AppPais getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAppPaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_aplicacion' => new sfWidgetFormInputHidden(),
      'id_pais'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_aplicacion' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_aplicacion')), 'empty_value' => $this->getObject()->get('id_aplicacion'), 'required' => false)),
      'id_pais'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_pais')), 'empty_value' => $this->getObject()->get('id_pais'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'AppPais', 'column' => array('id_aplicacion', 'id_pais')))
    );

    $this->widgetSchema->setNameFormat('app_pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AppPais';
  }

}
