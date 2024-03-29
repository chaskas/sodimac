<?php

/**
 * Region filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRegionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_region'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_region' => new sfWidgetFormFilterInput(),
      'id_pais'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_region'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_region' => new sfValidatorPass(array('required' => false)),
      'id_pais'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id_pais')),
    ));

    $this->widgetSchema->setNameFormat('region_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Region';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'id_region'   => 'Number',
      'desc_region' => 'Text',
      'id_pais'     => 'ForeignKey',
    );
  }
}
