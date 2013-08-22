<?php

/**
 * Region form base class.
 *
 * @method Region getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'id_region'   => new sfWidgetFormInputText(),
      'desc_region' => new sfWidgetFormInputText(),
      'id_pais'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'id_region'   => new sfValidatorInteger(),
      'desc_region' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'id_pais'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Region', 'column' => array('id_region', 'id_pais')))
    );

    $this->widgetSchema->setNameFormat('region[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Region';
  }

}
