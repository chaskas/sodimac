<?php

/**
 * EncuestaRespuestas form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EncuestaRespuestasForm extends BaseEncuestaRespuestasForm
{
  public function configure()
  {

  	$this->widgetSchema['id_enc_preg']->setLabel('Pregunta');
  	$this->widgetSchema['valor_resp']->setLabel('Respuesta');
  	$this->widgetSchema['id_enc_cab_resp']->setLabel('Id Cabecera');

  	unset(
            $this['id_enc_cab_resp']
    );
  }
}
