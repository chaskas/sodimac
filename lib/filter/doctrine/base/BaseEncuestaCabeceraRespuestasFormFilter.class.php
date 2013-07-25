<?php

/**
 * EncuestaCabeceraRespuestas filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestaCabeceraRespuestasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nro_boleta'      => new sfWidgetFormFilterInput(),
      'fecha_compra'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_tienda'       => new sfWidgetFormFilterInput(),
      'rut'             => new sfWidgetFormFilterInput(),
      'dv'              => new sfWidgetFormFilterInput(),
      'nombre_completo' => new sfWidgetFormFilterInput(),
      'ciudad'          => new sfWidgetFormFilterInput(),
      'telefono'        => new sfWidgetFormFilterInput(),
      'celular'         => new sfWidgetFormFilterInput(),
      'email'           => new sfWidgetFormFilterInput(),
      'edad'            => new sfWidgetFormFilterInput(),
      'sexo'            => new sfWidgetFormFilterInput(),
      'compra_para'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nro_boleta'      => new sfValidatorPass(array('required' => false)),
      'fecha_compra'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'id_tienda'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rut'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dv'              => new sfValidatorPass(array('required' => false)),
      'nombre_completo' => new sfValidatorPass(array('required' => false)),
      'ciudad'          => new sfValidatorPass(array('required' => false)),
      'telefono'        => new sfValidatorPass(array('required' => false)),
      'celular'         => new sfValidatorPass(array('required' => false)),
      'email'           => new sfValidatorPass(array('required' => false)),
      'edad'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sexo'            => new sfValidatorPass(array('required' => false)),
      'compra_para'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuesta_cabecera_respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaCabeceraRespuestas';
  }

  public function getFields()
  {
    return array(
      'id_enc_cab_resp' => 'Number',
      'nro_boleta'      => 'Text',
      'fecha_compra'    => 'Date',
      'id_tienda'       => 'Number',
      'rut'             => 'Number',
      'dv'              => 'Text',
      'nombre_completo' => 'Text',
      'ciudad'          => 'Text',
      'telefono'        => 'Text',
      'celular'         => 'Text',
      'email'           => 'Text',
      'edad'            => 'Number',
      'sexo'            => 'Text',
      'compra_para'     => 'Text',
    );
  }
}
