<?php

/**
 * Endpoint form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EndpointForm extends BaseEndpointForm
{
  public function configure()
  {
  	$this->widgetSchema['desc_endpoint']->setLabel('Descripción');
  	$this->widgetSchema['resto_url']->setLabel('Resto URL');
  	$this->widgetSchema['id_pais']->setLabel('País');
  	$this->widgetSchema['cod_endpoint']->setLabel('Código');
  }
}
