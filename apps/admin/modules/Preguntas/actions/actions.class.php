<?php

/**
 * Preguntas actions.
 *
 * @package    sodimac
 * @subpackage Preguntas
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PreguntasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->preguntas = Doctrine_Core::getTable('EncuestaPreguntas')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EncuestaPreguntasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EncuestaPreguntasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($encuesta_preguntas = Doctrine_Core::getTable('EncuestaPreguntas')->find(array($request->getParameter('id_enc_preg'))), sprintf('Object encuesta_preguntas does not exist (%s).', $request->getParameter('id_enc_preg')));
    $this->form = new EncuestaPreguntasForm($encuesta_preguntas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($encuesta_preguntas = Doctrine_Core::getTable('EncuestaPreguntas')->find(array($request->getParameter('id_enc_preg'))), sprintf('Object encuesta_preguntas does not exist (%s).', $request->getParameter('id_enc_preg')));
    $this->form = new EncuestaPreguntasForm($encuesta_preguntas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($encuesta_preguntas = Doctrine_Core::getTable('EncuestaPreguntas')->find(array($request->getParameter('id_enc_preg'))), sprintf('Object encuesta_preguntas does not exist (%s).', $request->getParameter('id_enc_preg')));
    $encuesta_preguntas->delete();

    $this->redirect('Preguntas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $encuesta_preguntas = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('Preguntas/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }
}
