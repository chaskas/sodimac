<?php

/**
 * Aplicacion actions.
 *
 * @package    sodimac
 * @subpackage Aplicacion
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AplicacionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->aplicaciones = Doctrine_Core::getTable('Aplicacion')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AplicacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AplicacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($aplicacion = Doctrine_Core::getTable('Aplicacion')->find(array($request->getParameter('id'))), sprintf('Object aplicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AplicacionForm($aplicacion);

    $this->paises = Doctrine_Core::getTable('AplicacionPais')
      ->createQuery('a')
      ->where('id_aplicacion = ?', $aplicacion->getId())
      ->execute();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($aplicacion = Doctrine_Core::getTable('Aplicacion')->find(array($request->getParameter('id'))), sprintf('Object aplicacion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AplicacionForm($aplicacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($aplicacion = Doctrine_Core::getTable('Aplicacion')->find(array($request->getParameter('id'))), sprintf('Object aplicacion does not exist (%s).', $request->getParameter('id')));
    $aplicacion->delete();

    $this->redirect('Aplicacion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $aplicacion = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Aplicacion/edit?id='.$aplicacion->getId());
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
