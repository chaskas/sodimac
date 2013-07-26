<?php

/**
 * EncuestaRespuestas form base class.
 *
 * @method EncuestaRespuestas getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestaRespuestasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_enc_resp'     => new sfWidgetFormInputHidden(),
      'id_enc_preg'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaPreguntas'), 'add_empty' => true)),
      'id_enc_cab_resp' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaCabeceraRespuestas'), 'add_empty' => true)),
      'valor_resp'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id_enc_resp'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_enc_resp')), 'empty_value' => $this->getObject()->get('id_enc_resp'), 'required' => false)),
      'id_enc_preg'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaPreguntas'), 'required' => false)),
      'id_enc_cab_resp' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaCabeceraRespuestas'), 'required' => false)),
      'valor_resp'      => new sfValidatorString(array('max_length' => 300, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuesta_respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaRespuestas';
  }

}
