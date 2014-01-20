<?php

/**
 * Region actions.
 *
 * @package    sodimac
 * @subpackage Region
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->regiones = Doctrine_Core::getTable('Region')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RegionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RegionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($region = Doctrine_Core::getTable('Region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegionForm($region);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($region = Doctrine_Core::getTable('Region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegionForm($region);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($region = Doctrine_Core::getTable('Region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $region->delete();

    $this->redirect('Region/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $region = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Region/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
