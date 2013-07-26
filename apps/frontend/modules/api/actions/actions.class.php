<?php

/**
 * api actions.
 *
 * @package    sodimac
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes Ocmr action
  *
  * @param sfRequest $request A request object
  */
  public function executeOcmr(sfWebRequest $request)
  {
    $this->ocmrs = Doctrine_Core::getTable('OportunidadCmr')
      ->createQuery('a')
      ->execute();
  }

  public function executeGetPreguntas(sfWebRequest $request)
  {
    $this->preguntas = Doctrine_Core::getTable('EncuestaPreguntas')
      ->createQuery('a')
      ->execute();
  }
}
