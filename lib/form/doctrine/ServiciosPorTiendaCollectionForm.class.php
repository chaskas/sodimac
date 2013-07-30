<?php

/**
 * ServiciosPorTiendaCollection form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosPorTiendaCollectionForm extends sfForm
{
  public function configure()
  {
    if (!$tienda = $this->getOption('tienda'))
    {
      throw new InvalidArgumentException('You must provide a tienda object.');
    }
 
    for ($i = 0; $i < $this->getOption('size', 1); $i++)
    {
      $servicio = new ServiciosPorTienda();
      $servicio->tienda = $tienda;
 
      $form = new ServiciosPorTiendaForm($servicio);
 
      $this->embedForm($i, $form);
    }

    //$this->mergePostValidator(new ServiciosPorTiendaValidatorSchema());
  }
}