<?php

/**
 * EncuestaRespuestasCollection form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EncuestaRespuestasCollectionForm extends sfForm
{
  public function configure()
  {
    if (!$cabecera = $this->getOption('cabecera'))
    {
      throw new InvalidArgumentException('You must provide a cabecera object.');
    }
 
    for ($i = 0; $i < $this->getOption('size', 1); $i++)
    {
      $respuesta = new EncuestaRespuestas();
      $respuesta->EncuestaCabeceraRespuestas = $cabecera;
 
      $form = new EncuestaRespuestasForm($respuesta);
 
      $this->embedForm($i, $form);
    }
  }
}