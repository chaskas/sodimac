<?php

/**
 * TipoPregunta form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TipoPreguntaForm extends BaseTipoPreguntaForm
{
	public function configure()
  {
  	$this->widgetSchema['desc_tipo_preg']->setLabel('Descripción');
  }
}
