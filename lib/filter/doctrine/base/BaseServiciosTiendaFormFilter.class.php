<?php

/**
 * ServiciosTienda filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiciosTiendaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_servicio'      => new sfWidgetFormFilterInput(),
      'estado'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_servicio'      => new sfValidatorPass(array('required' => false)),
      'estado'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios_tienda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServiciosTienda';
  }

  public function getFields()
  {
    return array(
      'id_servicio_tienda' => 'Number',
      'desc_servicio'      => 'Text',
      'estado'             => 'Text',
    );
  }
}
