<?php

/**
 * EncuestaPreguntas form base class.
 *
 * @method EncuestaPreguntas getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEncuestaPreguntasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_enc_preg'   => new sfWidgetFormInputHidden(),
      'id_tipo_preg'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'), 'add_empty' => true)),
      'valor_defecto' => new sfWidgetFormTextarea(),
      'desc_pregunta' => new sfWidgetFormTextarea(),
      'estado'        => new sfWidgetFormInputText(),
      'id_pais'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_enc_preg'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_enc_preg')), 'empty_value' => $this->getObject()->get('id_enc_preg'), 'required' => false)),
      'id_tipo_preg'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'), 'required' => false)),
      'valor_defecto' => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'desc_pregunta' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'estado'        => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'id_pais'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('encuesta_preguntas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaPreguntas';
  }

}
