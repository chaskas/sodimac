<?php

/**
 * Servicios actions.
 *
 * @package    sodimac
 * @subpackage Servicios
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->servicios = Doctrine_Core::getTable('ServiciosTienda')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ServiciosTiendaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ServiciosTiendaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($servicios_tienda = Doctrine_Core::getTable('ServiciosTienda')->find(array($request->getParameter('id_servicio_tienda'))), sprintf('Object servicios_tienda does not exist (%s).', $request->getParameter('id_servicio_tienda')));
    $this->form = new ServiciosTiendaForm($servicios_tienda);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($servicios_tienda = Doctrine_Core::getTable('ServiciosTienda')->find(array($request->getParameter('id_servicio_tienda'))), sprintf('Object servicios_tienda does not exist (%s).', $request->getParameter('id_servicio_tienda')));
    $this->form = new ServiciosTiendaForm($servicios_tienda);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($servicios_tienda = Doctrine_Core::getTable('ServiciosTienda')->find(array($request->getParameter('id_servicio_tienda'))), sprintf('Object servicios_tienda does not exist (%s).', $request->getParameter('id_servicio_tienda')));
    $servicios_tienda->delete();

    $this->redirect('Servicios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $servicios_tienda = $form->save();

      $this->redirect('Servicios/edit?id_servicio_tienda='.$servicios_tienda->getIdServicioTienda());
    }
  }
}
