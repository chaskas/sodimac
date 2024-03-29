<?php

/**
 * Endpoint filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEndpointFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_endpoint'  => new sfWidgetFormFilterInput(),
      'desc_endpoint' => new sfWidgetFormFilterInput(),
      'host'          => new sfWidgetFormFilterInput(),
      'puerto'        => new sfWidgetFormFilterInput(),
      'resto_url'     => new sfWidgetFormFilterInput(),
      'id_pais'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'version'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cod_endpoint'  => new sfValidatorPass(array('required' => false)),
      'desc_endpoint' => new sfValidatorPass(array('required' => false)),
      'host'          => new sfValidatorPass(array('required' => false)),
      'puerto'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'resto_url'     => new sfValidatorPass(array('required' => false)),
      'id_pais'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id_pais')),
      'version'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('endpoint_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Endpoint';
  }

  public function getFields()
  {
    return array(
      'id_endpoint'   => 'Number',
      'cod_endpoint'  => 'Text',
      'desc_endpoint' => 'Text',
      'host'          => 'Text',
      'puerto'        => 'Number',
      'resto_url'     => 'Text',
      'id_pais'       => 'ForeignKey',
      'version'       => 'Number',
    );
  }
}
