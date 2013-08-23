<?php

/**
 * Funcion form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FuncionForm extends BaseFuncionForm
{
  public function configure()
  {
  	$this->widgetSchema['id_aplicacion']->setLabel('Aplicación');
  	$this->widgetSchema['descripcion']->setLabel('Descripción');
  }
}
