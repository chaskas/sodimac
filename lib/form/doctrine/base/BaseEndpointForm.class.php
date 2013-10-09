<?php

/**
 * Endpoint form base class.
 *
 * @method Endpoint getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEndpointForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_endpoint'   => new sfWidgetFormInputHidden(),
      'cod_endpoint'  => new sfWidgetFormInputText(),
      'desc_endpoint' => new sfWidgetFormInputText(),
      'host'          => new sfWidgetFormInputText(),
      'puerto'        => new sfWidgetFormInputText(),
      'resto_url'     => new sfWidgetFormInputText(),
      'id_pais'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'version'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_endpoint'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_endpoint')), 'empty_value' => $this->getObject()->get('id_endpoint'), 'required' => false)),
      'cod_endpoint'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'desc_endpoint' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'host'          => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'puerto'        => new sfValidatorInteger(array('required' => false)),
      'resto_url'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'id_pais'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
      'version'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('endpoint[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Endpoint';
  }

}
