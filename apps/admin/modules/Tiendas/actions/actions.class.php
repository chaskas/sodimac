<?php

/**
 * Tiendas actions.
 *
 * @package    sodimac
 * @subpackage Tiendas
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TiendasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tiendas = Doctrine_Core::getTable('Tienda')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TiendaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TiendaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tienda = Doctrine_Core::getTable('Tienda')->find(array($request->getParameter('id_tienda'))), sprintf('Object tienda does not exist (%s).', $request->getParameter('id_tienda')));
    $this->form = new TiendaForm($tienda);

    $this->servicios = Doctrine_Core::getTable('ServiciosPorTienda')
      ->createQuery('a')
      ->where('id_tienda = ?', $tienda->getIdTienda())
      ->execute();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tienda = Doctrine_Core::getTable('Tienda')->find(array($request->getParameter('id_tienda'))), sprintf('Object tienda does not exist (%s).', $request->getParameter('id_tienda')));
    $this->form = new TiendaForm($tienda);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tienda = Doctrine_Core::getTable('Tienda')->find(array($request->getParameter('id_tienda'))), sprintf('Object tienda does not exist (%s).', $request->getParameter('id_tienda')));
    $tienda->delete();

    $this->redirect('Tiendas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tienda = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Tiendas/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
