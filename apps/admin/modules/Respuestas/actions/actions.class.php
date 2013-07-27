<?php

/**
 * Respuestas actions.
 *
 * @package    sodimac
 * @subpackage Respuestas
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RespuestasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->respuestas = Doctrine_Core::getTable('EncuestaRespuestas')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EncuestaRespuestasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EncuestaRespuestasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($encuesta_respuestas = Doctrine_Core::getTable('EncuestaRespuestas')->find(array($request->getParameter('id_enc_resp'))), sprintf('Object encuesta_respuestas does not exist (%s).', $request->getParameter('id_enc_resp')));
    $this->form = new EncuestaRespuestasForm($encuesta_respuestas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($encuesta_respuestas = Doctrine_Core::getTable('EncuestaRespuestas')->find(array($request->getParameter('id_enc_resp'))), sprintf('Object encuesta_respuestas does not exist (%s).', $request->getParameter('id_enc_resp')));
    $this->form = new EncuestaRespuestasForm($encuesta_respuestas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($encuesta_respuestas = Doctrine_Core::getTable('EncuestaRespuestas')->find(array($request->getParameter('id_enc_resp'))), sprintf('Object encuesta_respuestas does not exist (%s).', $request->getParameter('id_enc_resp')));
    $encuesta_respuestas->delete();

    $this->redirect('Respuestas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $encuesta_respuestas = $form->save();

      $this->redirect('Respuestas/edit?id_enc_resp='.$encuesta_respuestas->getIdEncResp());
    }
  }
}
