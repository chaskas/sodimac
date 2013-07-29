<?php

/**
 * TipoTienda actions.
 *
 * @package    sodimac
 * @subpackage TipoTienda
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TipoTiendaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipos = Doctrine_Core::getTable('TipoTienda')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoTiendaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoTiendaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipo_tienda = Doctrine_Core::getTable('TipoTienda')->find(array($request->getParameter('id_tipo_tienda'))), sprintf('Object tipo_tienda does not exist (%s).', $request->getParameter('id_tipo_tienda')));
    $this->form = new TipoTiendaForm($tipo_tienda);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipo_tienda = Doctrine_Core::getTable('TipoTienda')->find(array($request->getParameter('id_tipo_tienda'))), sprintf('Object tipo_tienda does not exist (%s).', $request->getParameter('id_tipo_tienda')));
    $this->form = new TipoTiendaForm($tipo_tienda);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipo_tienda = Doctrine_Core::getTable('TipoTienda')->find(array($request->getParameter('id_tipo_tienda'))), sprintf('Object tipo_tienda does not exist (%s).', $request->getParameter('id_tipo_tienda')));
    $tipo_tienda->delete();

    $this->redirect('TipoTienda/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipo_tienda = $form->save();

      $this->redirect('TipoTienda/edit?id_tipo_tienda='.$tipo_tienda->getIdTipoTienda());
    }
  }
}
