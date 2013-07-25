<?php

/**
 * EncuestaPreguntas filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEncuestaPreguntasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_preg'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'), 'add_empty' => true)),
      'valor_defecto' => new sfWidgetFormFilterInput(),
      'desc_pregunta' => new sfWidgetFormFilterInput(),
      'estado'        => new sfWidgetFormFilterInput(),
      'id_pais'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_tipo_preg'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoPregunta'), 'column' => 'id_tipo_preg')),
      'valor_defecto' => new sfValidatorPass(array('required' => false)),
      'desc_pregunta' => new sfValidatorPass(array('required' => false)),
      'estado'        => new sfValidatorPass(array('required' => false)),
      'id_pais'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id_pais')),
    ));

    $this->widgetSchema->setNameFormat('encuesta_preguntas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EncuestaPreguntas';
  }

  public function getFields()
  {
    return array(
      'id_enc_preg'   => 'Number',
      'id_tipo_preg'  => 'ForeignKey',
      'valor_defecto' => 'Text',
      'desc_pregunta' => 'Text',
      'estado'        => 'Text',
      'id_pais'       => 'ForeignKey',
    );
  }
}
