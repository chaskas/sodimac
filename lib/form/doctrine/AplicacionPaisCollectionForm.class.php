<?php

/**
 * AplicacionPaisCollection form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AplicacionPaisCollectionForm extends sfForm
{
  public function configure()
  {
    if (!$aplicacion = $this->getOption('aplicacion'))
    {
      throw new InvalidArgumentException('You must provide a aplicacion object.');
    }
 
    for ($i = 0; $i < $this->getOption('size', 1); $i++)
    {
      $AplicacionPais = new AplicacionPais();
      $AplicacionPais->aplicacion = $aplicacion;
 
      $form = new AplicacionPaisForm($AplicacionPais);
 
      $this->embedForm($i, $form);
    }

  }
}