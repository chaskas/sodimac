<?php

/**
 * EndPoint actions.
 *
 * @package    sodimac
 * @subpackage EndPoint
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EndPointActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->endpoints = Doctrine_Core::getTable('Endpoint')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EndpointForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EndpointForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($endpoint = Doctrine_Core::getTable('Endpoint')->find(array($request->getParameter('id_endpoint'))), sprintf('Object endpoint does not exist (%s).', $request->getParameter('id_endpoint')));
    $this->form = new EndpointForm($endpoint);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($endpoint = Doctrine_Core::getTable('Endpoint')->find(array($request->getParameter('id_endpoint'))), sprintf('Object endpoint does not exist (%s).', $request->getParameter('id_endpoint')));
    $this->form = new EndpointForm($endpoint);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($endpoint = Doctrine_Core::getTable('Endpoint')->find(array($request->getParameter('id_endpoint'))), sprintf('Object endpoint does not exist (%s).', $request->getParameter('id_endpoint')));
    $endpoint->delete();

    $this->redirect('EndPoint/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $endpoint = $form->save();

      $this->redirect('EndPoint/edit?id_endpoint='.$endpoint->getIdEndpoint());
    }
  }
}
