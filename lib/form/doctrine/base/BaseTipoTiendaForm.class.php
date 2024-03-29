<?php

/**
 * TipoTienda form base class.
 *
 * @method TipoTienda getObject() Returns the current form's model object
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTipoTiendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_tienda'   => new sfWidgetFormInputHidden(),
      'desc_tipo_tienda' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_tienda'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tipo_tienda')), 'empty_value' => $this->getObject()->get('id_tipo_tienda'), 'required' => false)),
      'desc_tipo_tienda' => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_tienda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoTienda';
  }

}
