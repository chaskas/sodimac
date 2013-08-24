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
      ->where('fecha_vig_des <= ?', date("Y-m-d"))
      ->andWhere('fecha_vig_has >= ?', date("Y-m-d"))
      ->execute();
  }

  public function executeGetPreguntas(sfWebRequest $request)
  {
    $this->preguntas = Doctrine_Core::getTable('EncuestaPreguntas')
      ->createQuery('a')
      ->where('a.estado = ?','ACT')
      ->execute();
  }

  public function executeSetRespuesta(sfWebRequest $request)
  {
    $data     = $this->getPayload($request);
    $format   = $request->getRequestFormat();
    $response = $this->getResponse();

    $codes = array(0 => 'Ingreso Exitoso', 1 => 'Error Inserción en Base de Datos', 2 => 'Error en Comunicación con Base de Datos', 3 => 'Error Desconocido');

    if (!empty($data))
    {
      $nRespuestas = count($data['Respuestas']);
      $form = new EncuestaCabeceraRespuestasForm(null, array('nRespuestas' => $nRespuestas));

      $form->disableLocalCSRFProtection();
      unset($form[$form->getCSRFFieldName()]);

      $form->bind($data);

      if ($form->isValid())
      {
        $form->save(); 
        $response->setStatusCode(201);
        
        $this->key = 0;
        $this->code = $codes[0];

      }
      else
      {
        $response->setStatusCode(406); 
        $this->key = 1;
        $this->code = $codes[1];
      }
    }
    else
    {
      $response->setStatusCode(400); // No payload, bad request
      $this->key = 3;
      $this->code = $codes[3];
    }

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

  public function executeGetTiendas(sfWebRequest $request)
  {
    $this->tiendas = Doctrine_Core::getTable('Tienda')
      ->createQuery('a')
      ->execute();
  }

  public function executeGetServiciosTiendaById(sfWebRequest $request)
  {
    $tienda = Doctrine_Core::getTable('Tienda')->find(array($request->getParameter('id')));
    $response = $this->getResponse();

    if($tienda != null){
      $servicios_inactivos = Doctrine_Core::getTable('ServiciosTienda')
        ->createQuery('a')
        ->where('a.estado = ?','INA')
        ->execute();

      $arr_id_servicios_inactivos = array();
      foreach ($servicios_inactivos as $s) {
        array_push($arr_id_servicios_inactivos,$s->getIdServicioTienda());
      }

      //var_dump($arr_id_servicios_inactivos);

      $this->servicios = Doctrine_Core::getTable('ServiciosPorTienda')
      ->createQuery('a')
      ->where('id_tienda = ?', $tienda->getIdTienda())
      ->andWhereNotIn('id_servicio_tienda', $arr_id_servicios_inactivos)
      ->execute();

    } else {
      $response->setStatusCode(400);
      return sfView::NONE;
    }
  }

  public function executeGetTiendaById(sfWebRequest $request)
  {
    $this->tienda = Doctrine_Core::getTable('Tienda')->find(array($request->getParameter('id')));
    $response = $this->getResponse();

    if($this->tienda != null){
      $servicios_inactivos = Doctrine_Core::getTable('ServiciosTienda')
        ->createQuery('a')
        ->where('a.estado = ?','INA')
        ->execute();

      $arr_id_servicios_inactivos = array();
      foreach ($servicios_inactivos as $s) {
        array_push($arr_id_servicios_inactivos,$s->getIdServicioTienda());
      }

      //var_dump($arr_id_servicios_inactivos);

      $this->servicios = Doctrine_Core::getTable('ServiciosPorTienda')
      ->createQuery('a')
      ->where('id_tienda = ?', $this->tienda->getIdTienda())
      ->andWhereNotIn('id_servicio_tienda', $arr_id_servicios_inactivos)
      ->execute();

    } else {
      $response->setStatusCode(400);
      return sfView::NONE;
    }
  }

  public function executeGetRegionesByPais(sfWebRequest $request)
  {
    $this->getResponse()->setContentType('application/json');
    $this->regiones = Doctrine_Core::getTable('Region')->findByIdPais($request->getParameter('id'));
  }

  public function executeGetPaisesByAplicacion(sfWebRequest $request)
  {
    $app = Doctrine_Core::getTable('Aplicacion')->findOneByCodigo($request->getParameter('codigo'));
    
    $this->paises = Array();

    if($app != null)
    {
      $this->paises = Doctrine_Core::getTable('AplicacionPais')->findByIdAplicacion($app->getId());
    }
  }
  public function executeGetRegiones(sfWebRequest $request)
  {
    $this->regiones = Doctrine_Core::getTable('Region')->findAll();
  }
  public function executeGetFuncionesByAplicacionAndPais(sfWebRequest $request)
  {

    $app = Doctrine_Core::getTable('Aplicacion')->findOneByCodigo($request->getParameter('codigo'));

    $this->funciones = Array();

    if($app != null)
    {
      $this->funciones = Doctrine_Query::create()
                                ->select('f.id, f.descripcion')
                                ->from('Funcion f')
                                ->leftJoin('f.FuncionPais p ON p.id_funcion = f.id')
                                ->where('f.id_aplicacion = ?', $app->getId())
                                ->andWhere('p.id_pais = ?',$request->getParameter('idPais'))
                                ->execute();
    }

  }
}
