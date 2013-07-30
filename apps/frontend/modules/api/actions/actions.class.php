<?php

/**
 * api actions.
 *
 * @package    sodimac
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes Ocmr action
  *
  * @param sfRequest $request A request object
  */
  public function executeGetOCMR(sfWebRequest $request)
  {
    $this->ocmrs = Doctrine_Core::getTable('OportunidadCmr')
      ->createQuery('a')
      ->execute();
  }

  public function executeGetPreguntas(sfWebRequest $request)
  {
    $this->preguntas = Doctrine_Core::getTable('EncuestaPreguntas')
      ->createQuery('a')
      ->execute();
  }

  public function executeSetRespuesta(sfWebRequest $request)
  {
    $data     = $this->getPayload($request);
    $format   = $request->getRequestFormat();
    $response = $this->getResponse();

    if (!empty($data))
    {
      $nRespuestas = count($data['Respuestas']);
      $form = new EncuestaCabeceraRespuestasForm(null, array('nRespuestas' => $nRespuestas));
      //$form = new EncuestaCabeceraRespuestasForm();

      // Disable this protection
      $form->disableLocalCSRFProtection();
      unset($form[$form->getCSRFFieldName()]);

      $form->bind($data);

      if ($form->isValid())
      {
        $form->save(); // Persist a new Pony
        $response->setStatusCode(201); // 201 = Created
        // It's a good practice that to add the new ressource location in headers
        //$response->addHttpMeta('Location', $this->generateUrl('pony_show', array('slug' => $form->getObject()->slug, 'sf_format' => $format), true));
      }
      else
      {
        // var_dump($data);
        // foreach($form['EncuestaCabeceraRespuestas'] as $key=>$field) {
        //   echo $key."<br/>";
        // }

        $response->setStatusCode(406); // Invalid. We should provide debug info in the response body here.
      }
    }
    else
    {
      $response->setStatusCode(400); // No payload, bad request
    }

    return sfView::NONE;
  }

  protected function getPayload($request)
  {
    $payload = $request->getContent();
    $format  = $request->getRequestFormat();
    $data    = '';
    
    if (!empty($payload))
    {
      if ($format == 'json')
      {
        $data = (array) json_decode($payload,true);
      }
      elseif ($format == 'xml')
      {
        $parser = Doctrine_Parser::getParser($format);
        $data = $parser->prepareData( simplexml_load_string($payload) );
      }
      else
      {
        throw new sfException("This format isn't supported yet.");
      }
    }

    return $data;
  }

  public function executeGetEndPoints(sfWebRequest $request)
  {
    $this->endpoints = Doctrine_Core::getTable('Endpoint')
      ->createQuery('a')
      ->execute();
  }
}
