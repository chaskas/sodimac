<?php

/**
 * Funcion filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFuncionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_aplicacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aplicacion'), 'add_empty' => true)),
      'descripcion'   => new sfWidgetFormFilterInput(),
      'codigo'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_aplicacion' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Aplicacion'), 'column' => 'id')),
      'descripcion'   => new sfValidatorPass(array('required' => false)),
      'codigo'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('funcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcion';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'id_aplicacion' => 'ForeignKey',
      'descripcion'   => 'Text',
      'codigo'        => 'Text',
    );
  }
}
