<?php

/**
 * OportunidadCMR actions.
 *
 * @package    sodimac
 * @subpackage OportunidadCMR
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OportunidadCMRActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->oportunidad_cmrs = Doctrine_Core::getTable('OportunidadCmr')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OportunidadCmrForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new OportunidadCmrForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $this->form = new OportunidadCmrForm($oportunidad_cmr);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $this->form = new OportunidadCmrForm($oportunidad_cmr);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $oportunidad_cmr->delete();

    $this->redirect('OportunidadCMR/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $oportunidad_cmr = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('OportunidadCMR/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
