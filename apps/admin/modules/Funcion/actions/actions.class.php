<?php

/**
 * Funcion actions.
 *
 * @package    sodimac
 * @subpackage Funcion
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FuncionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->funciones = Doctrine_Core::getTable('Funcion')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new FuncionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new FuncionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($funcion = Doctrine_Core::getTable('Funcion')->find(array($request->getParameter('id'))), sprintf('Object funcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new FuncionForm($funcion);

    $this->paises = Doctrine_Core::getTable('FuncionPais')
      ->createQuery('a')
      ->where('id_funcion = ?', $funcion->getId())
      ->execute();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($funcion = Doctrine_Core::getTable('Funcion')->find(array($request->getParameter('id'))), sprintf('Object funcion does not exist (%s).', $request->getParameter('id')));
    $this->form = new FuncionForm($funcion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($funcion = Doctrine_Core::getTable('Funcion')->find(array($request->getParameter('id'))), sprintf('Object funcion does not exist (%s).', $request->getParameter('id')));
    $funcion->delete();

    $this->redirect('Funcion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $funcion = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Funcion/edit?id='.$funcion->getId());
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
