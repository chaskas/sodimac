<?php

/**
 * EncuestaCabeceraRespuestas form base class.
 *
 * @method EncuestaCabeceraRespuestas getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestaCabeceraRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_enc_cab_resp' => new sfWidgetFormInputHidden(),
      'nro_boleta'      => new sfWidgetFormInputText(),
      'fecha_compra'    => new sfWidgetFormDate(),
      'id_tienda'       => new sfWidgetFormInputText(),
      'rut'             => new sfWidgetFormInputText(),
      'dv'              => new sfWidgetFormInputText(),
      'nombre_completo' => new sfWidgetFormInputText(),
      'ciudad'          => new sfWidgetFormInputText(),
      'telefono'        => new sfWidgetFormInputText(),
      'celular'         => new sfWidgetFormInputText(),
      'email'           => new sfWidgetFormInputText(),
      'edad'            => new sfWidgetFormInputText(),
      'sexo'            => new sfWidgetFormInputText(),
      'compra_para'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_enc_cab_resp' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_enc_cab_resp')), 'empty_value' => $this->getObject()->get('id_enc_cab_resp'), 'required' => false)),
      'nro_boleta'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'fecha_compra'    => new sfValidatorDate(array('required' => false)),
      'id_tienda'       => new sfValidatorInteger(array('required' => false)),
      'rut'             => new sfValidatorInteger(array('required' => false)),
      'dv'              => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nombre_completo' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ciudad'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'telefono'        => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'celular'         => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'email'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'edad'            => new sfValidatorInteger(array('required' => false)),
      'sexo'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'compra_para'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuesta_cabecera_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaCabeceraRespuestas';
  }

}
