<?php

/**
 * CabeceraRespuestas actions.
 *
 * @package    sodimac
 * @subpackage CabeceraRespuestas
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CabeceraRespuestasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->cabeceras = Doctrine_Core::getTable('EncuestaCabeceraRespuestas')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EncuestaCabeceraRespuestasForm(null, array('nRespuestas' => 1));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EncuestaCabeceraRespuestasForm(null, array('nRespuestas' => 1));

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($encuesta_cabecera_respuestas = Doctrine_Core::getTable('EncuestaCabeceraRespuestas')->find(array($request->getParameter('id_enc_cab_resp'))), sprintf('Object encuesta_cabecera_respuestas does not exist (%s).', $request->getParameter('id_enc_cab_resp')));
    $this->form = new EncuestaCabeceraRespuestasForm($encuesta_cabecera_respuestas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($encuesta_cabecera_respuestas = Doctrine_Core::getTable('EncuestaCabeceraRespuestas')->find(array($request->getParameter('id_enc_cab_resp'))), sprintf('Object encuesta_cabecera_respuestas does not exist (%s).', $request->getParameter('id_enc_cab_resp')));
    $this->form = new EncuestaCabeceraRespuestasForm($encuesta_cabecera_respuestas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($encuesta_cabecera_respuestas = Doctrine_Core::getTable('EncuestaCabeceraRespuestas')->find(array($request->getParameter('id_enc_cab_resp'))), sprintf('Object encuesta_cabecera_respuestas does not exist (%s).', $request->getParameter('id_enc_cab_resp')));
    $encuesta_cabecera_respuestas->delete();

    $this->redirect('CabeceraRespuestas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $encuesta_cabecera_respuestas = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('CabeceraRespuestas/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
