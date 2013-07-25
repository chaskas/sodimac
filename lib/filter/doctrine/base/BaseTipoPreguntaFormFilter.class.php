<?php

/**
 * TipoPregunta filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTipoPreguntaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_tipo_preg' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_tipo_preg' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_pregunta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoPregunta';
  }

  public function getFields()
  {
    return array(
      'id_tipo_preg'   => 'Number',
      'desc_tipo_preg' => 'Text',
    );
  }
}
