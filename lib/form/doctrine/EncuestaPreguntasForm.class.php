<?php

/**
 * EncuestaPreguntas form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EncuestaPreguntasForm extends BaseEncuestaPreguntasForm
{
  public function configure()
  {
  	$this->widgetSchema['id_tipo_preg']->setLabel('Tipo Pregunta');
  	$this->widgetSchema['valor_defecto']->setLabel('Valor por defecto');
  	$this->widgetSchema['desc_pregunta']->setLabel('Descripción');
  	$this->widgetSchema['estado']->setLabel('Estado');
  	$this->widgetSchema['id_pais']->setLabel('País');
  }
}
