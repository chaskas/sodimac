<?php

/**
 * OportunidadCmr form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OportunidadCmrForm extends BaseOportunidadCmrForm
{
  public function configure()
  {
  	$years = range(1900,date('Y'));
    $this->widgetSchema['fecha_vig_des'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/img/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['fecha_vig_des']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['fecha_vig_des']->getOption('date_widget')->setOption('years', array_combine($years, $years));

    $this->widgetSchema['fecha_vig_has'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/img/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['fecha_vig_has']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['fecha_vig_has']->getOption('date_widget')->setOption('years', array_combine($years, $years));

		$this->widgetSchema['sku']->setLabel('SKU');
  	$this->widgetSchema['precio_cmr']->setLabel('Precio CMR');
  	$this->widgetSchema['precio_internet']->setLabel('Precio Internet');
    $this->widgetSchema['fecha_vig_des']->setLabel('Vigencia desde');
  	$this->widgetSchema['fecha_vig_has']->setLabel('Vigencia hasta');
    $this->widgetSchema['unidad_med_int']->setLabel('Unidad Med Int');
    $this->widgetSchema['unidad_med_cmr']->setLabel('Unidad Med CMR');
    $this->widgetSchema['nombre_producto']->setLabel('Nombre producto');

  }
}
