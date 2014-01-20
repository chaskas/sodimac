<?php

/**
 * Pais filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePaisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_pais'    => new sfWidgetFormFilterInput(),
      'sigla'        => new sfWidgetFormFilterInput(),
      'signo_moneda' => new sfWidgetFormFilterInput(),
      'con_decimal'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'desc_pais'    => new sfValidatorPass(array('required' => false)),
      'sigla'        => new sfValidatorPass(array('required' => false)),
      'signo_moneda' => new sfValidatorPass(array('required' => false)),
      'con_decimal'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('pais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pais';
  }

  public function getFields()
  {
    return array(
      'id_pais'      => 'Number',
      'desc_pais'    => 'Text',
      'sigla'        => 'Text',
      'signo_moneda' => 'Text',
      'con_decimal'  => 'Boolean',
    );
  }
}
