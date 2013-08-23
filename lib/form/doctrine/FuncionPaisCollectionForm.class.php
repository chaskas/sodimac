<?php

/**
 * FuncionPaisCollection form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FuncionPaisCollectionForm extends sfForm
{
  public function configure()
  {
    if (!$funcion = $this->getOption('funcion'))
    {
      throw new InvalidArgumentException('You must provide a funcion object.');
    }
 
    for ($i = 0; $i < $this->getOption('size', 1); $i++)
    {
      $FuncionPais = new FuncionPais();
      $FuncionPais->funcion = $funcion;
 
      $form = new FuncionPaisForm($FuncionPais);
 
      $this->embedForm($i, $form);
    }

  }
}