<?php

/**
 * Aplicacion form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AplicacionForm extends BaseAplicacionForm
{
  public function configure()
  {
  	$this->widgetSchema['descripcion']->setLabel('Descripción');
  }
}
