<?php

/**
 * Tienda filter form base class.
 *
 * @package    sodimac
 * @subpackage filter
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTiendaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(),
      'direccion'      => new sfWidgetFormFilterInput(),
      'latitud'        => new sfWidgetFormFilterInput(),
      'longitud'       => new sfWidgetFormFilterInput(),
      'telefono'       => new sfWidgetFormFilterInput(),
      'horario'        => new sfWidgetFormFilterInput(),
      'id_region'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Region'), 'add_empty' => true)),
      'id_tipo_tienda' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoTienda'), 'add_empty' => true)),
      'id_pais'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'gerente'        => new sfWidgetFormFilterInput(),
      'busc_producto'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'latitud'        => new sfValidatorPass(array('required' => false)),
      'longitud'       => new sfValidatorPass(array('required' => false)),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'horario'        => new sfValidatorPass(array('required' => false)),
      'id_region'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Region'), 'column' => 'id_region')),
      'id_tipo_tienda' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoTienda'), 'column' => 'id_tipo_tienda')),
      'id_pais'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id_pais')),
      'gerente'        => new sfValidatorPass(array('required' => false)),
      'busc_producto'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tienda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tienda';
  }

  public function getFields()
  {
    return array(
      'id_tienda'      => 'Number',
      'nombre'         => 'Text',
      'direccion'      => 'Text',
      'latitud'        => 'Text',
      'longitud'       => 'Text',
      'telefono'       => 'Text',
      'horario'        => 'Text',
      'id_region'      => 'ForeignKey',
      'id_tipo_tienda' => 'ForeignKey',
      'id_pais'        => 'ForeignKey',
      'gerente'        => 'Text',
      'busc_producto'  => 'Number',
    );
  }
}
