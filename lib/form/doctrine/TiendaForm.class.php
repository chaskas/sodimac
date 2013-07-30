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

  	$this->widgetSchema['id_pais']->setLabel('País');
  	$this->widgetSchema['id_tipo_tienda']->setLabel('Tipo');
  	$this->widgetSchema['id_region']->setLabel('Región');
  	$this->widgetSchema['id_region']->setLabel('Región');
  	$this->widgetSchema['busc_producto']->setLabel('Busca Producto???????');
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
