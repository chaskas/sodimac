<?php

/**
 * TipoPregunta actions.
 *
 * @package    sodimac
 * @subpackage TipoPregunta
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TipoPreguntaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipos = Doctrine_Core::getTable('TipoPregunta')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TipoPreguntaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TipoPreguntaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipo_pregunta = Doctrine_Core::getTable('TipoPregunta')->find(array($request->getParameter('id_tipo_preg'))), sprintf('Object tipo_pregunta does not exist (%s).', $request->getParameter('id_tipo_preg')));
    $this->form = new TipoPreguntaForm($tipo_pregunta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipo_pregunta = Doctrine_Core::getTable('TipoPregunta')->find(array($request->getParameter('id_tipo_preg'))), sprintf('Object tipo_pregunta does not exist (%s).', $request->getParameter('id_tipo_preg')));
    $this->form = new TipoPreguntaForm($tipo_pregunta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipo_pregunta = Doctrine_Core::getTable('TipoPregunta')->find(array($request->getParameter('id_tipo_preg'))), sprintf('Object tipo_pregunta does not exist (%s).', $request->getParameter('id_tipo_preg')));
    $tipo_pregunta->delete();

    $this->redirect('TipoPregunta/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipo_pregunta = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('TipoPregunta/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
