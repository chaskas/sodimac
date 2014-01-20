<?php

/**
 * Funcion form base class.
 *
 * @method Funcion getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFuncionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'id_aplicacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aplicacion'), 'add_empty' => false)),
      'descripcion'   => new sfWidgetFormInputText(),
      'codigo'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_aplicacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Aplicacion'))),
      'descripcion'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'codigo'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Funcion', 'column' => array('id_aplicacion', 'codigo')))
    );

    $this->widgetSchema->setNameFormat('funcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcion';
  }

}
