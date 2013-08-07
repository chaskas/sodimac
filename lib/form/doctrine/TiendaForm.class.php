<?php

/**
 * Tienda form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TiendaForm extends BaseTiendaForm
{
  public function configure()
  {
  	$form = new ServiciosPorTiendaCollectionForm(null, array(
      'tienda' => $this->getObject(),
      'size'    => 1,
    ));
   
    $this->embedForm('servicios', $form);

    $this->widgetSchema['id_tienda'] = new sfWidgetFormInput();

    $this->widgetSchema['busc_producto'] = new sfWidgetFormChoice(array(
      'choices' => array('0'=>'No','1'=>'Si')
      ));

    $this->widgetSchema['id_tienda']->setLabel('ID');
    $this->widgetSchema['id_pais']->setLabel('País');
    $this->widgetSchema['id_tipo_tienda']->setLabel('Tipo');
    $this->widgetSchema['id_region']->setLabel('Región');
    $this->widgetSchema['id_region']->setLabel('Región');
    $this->widgetSchema['busc_producto']->setLabel('Buscador de Producto');

    $this->validatorSchema['id_tienda'] = new sfValidatorInteger(array('min' => 1),array('min'=>'Debe ser mayor que %min%'));

  }

  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $forms)
    {
      $servicios = $this->getValue('servicios');
      $forms = $this->embeddedForms;
      if (!isset($servicios[0]['id_servicio_tienda']))
      {
        unset($forms['servicios']);
      }
    }
   
    return parent::saveEmbeddedForms($con, $forms);
  }
}
