<?php

/**
 * EncuestaRespuestas filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestaRespuestasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_enc_preg'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaPreguntas'), 'add_empty' => true)),
      'id_enc_cab_resp' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EncuestaCabeceraRespuestas'), 'add_empty' => true)),
      'valor_resp'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_enc_preg'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EncuestaPreguntas'), 'column' => 'id_enc_preg')),
      'id_enc_cab_resp' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EncuestaCabeceraRespuestas'), 'column' => 'id_enc_cab_resp')),
      'valor_resp'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuesta_respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaRespuestas';
  }

  public function getFields()
  {
    return array(
      'id_enc_resp'     => 'Number',
      'id_enc_preg'     => 'ForeignKey',
      'id_enc_cab_resp' => 'ForeignKey',
      'valor_resp'      => 'Text',
    );
  }
}
