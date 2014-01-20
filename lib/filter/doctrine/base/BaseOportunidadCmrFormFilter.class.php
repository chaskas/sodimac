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
      'nombre_producto' => new sfWidgetFormFilterInput(),
      'precio_internet' => new sfWidgetFormFilterInput(),
      'unidad_med_int'  => new sfWidgetFormFilterInput(),
      'precio_cmr'      => new sfWidgetFormFilterInput(),
      'unidad_med_cmr'  => new sfWidgetFormFilterInput(),
      'fecha_vig_des'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_vig_has'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_pais'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'sku'             => new sfValidatorPass(array('required' => false)),
      'nombre_producto' => new sfValidatorPass(array('required' => false)),
      'precio_internet' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unidad_med_int'  => new sfValidatorPass(array('required' => false)),
      'precio_cmr'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'unidad_med_cmr'  => new sfValidatorPass(array('required' => false)),
      'fecha_vig_des'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_vig_has'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'nombre_producto' => 'Text',
      'precio_internet' => 'Number',
      'unidad_med_int'  => 'Text',
      'precio_cmr'      => 'Number',
      'unidad_med_cmr'  => 'Text',
      'fecha_vig_des'   => 'Date',
      'fecha_vig_has'   => 'Date',
      'id_pais'         => 'ForeignKey',
    );
  }
}
