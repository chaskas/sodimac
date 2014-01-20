<?php

/**
 * Pais actions.
 *
 * @package    sodimac
 * @subpackage Pais
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PaisActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->paises = Doctrine_Core::getTable('Pais')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PaisForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PaisForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($pais = Doctrine_Core::getTable('Pais')->find(array($request->getParameter('id_pais'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id_pais')));
    $this->form = new PaisForm($pais);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($pais = Doctrine_Core::getTable('Pais')->find(array($request->getParameter('id_pais'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id_pais')));
    $this->form = new PaisForm($pais);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pais = Doctrine_Core::getTable('Pais')->find(array($request->getParameter('id_pais'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id_pais')));
    $pais->delete();

    $this->redirect('Pais/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pais = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Pais/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
