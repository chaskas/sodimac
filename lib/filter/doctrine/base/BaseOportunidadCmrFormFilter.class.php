<?php

/**
 * OportunidadCmr filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOportunidadCmrFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sku'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio_internet' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio_cmr'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_vigencia'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sku'             => new sfValidatorPass(array('required' => false)),
      'precio_internet' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_cmr'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_vigencia'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
    );
  }
}
