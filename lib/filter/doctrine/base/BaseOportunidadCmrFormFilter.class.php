<?php

/**
 * OportunidadCmr filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOportunidadCmrFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sku'             => new sfWidgetFormFilterInput(),
      'precio_internet' => new sfWidgetFormFilterInput(),
      'precio_cmr'      => new sfWidgetFormFilterInput(),
      'fecha_vigencia'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_pais'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'sku'             => new sfValidatorPass(array('required' => false)),
      'precio_internet' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_cmr'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_vigencia'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'id_pais'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id_pais')),
    ));

    $this->widgetSchema->setNameFormat('oportunidad_cmr_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OportunidadCmr';
  }

  public function getFields()
  {
    return array(
      'id_opor_cmr'     => 'Number',
      'sku'             => 'Text',
      'precio_internet' => 'Number',
      'precio_cmr'      => 'Number',
      'fecha_vigencia'  => 'Date',
      'id_pais'         => 'ForeignKey',
    );
  }
}
