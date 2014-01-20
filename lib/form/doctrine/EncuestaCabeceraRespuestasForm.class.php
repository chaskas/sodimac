<?php

/**
 * EncuestaCabeceraRespuestas form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EncuestaCabeceraRespuestasForm extends BaseEncuestaCabeceraRespuestasForm
{
  public function configure()
  {

    $form = new EncuestaRespuestasCollectionForm(null, array(
      'cabecera' => $this->getObject(),
      'size'    => $this->getOption('nRespuestas'),
    ));
   
    $this->embedForm('Respuestas', $form);

    $years = range(1900,date('Y'));
    $this->widgetSchema['fecha_compra'] = new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/img/calendar.png",buttonImageOnly: true,changeMonth: true,changeYear: true}', 'culture' => 'es'));
    $this->widgetSchema['fecha_compra']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['fecha_compra']->getOption('date_widget')->setOption('years', array_combine($years, $years));


  	$this->widgetSchema['nro_boleta']->setLabel('N° Boleta');
  	$this->widgetSchema['fecha_compra']->setLabel('Fecha Compra');
  	$this->widgetSchema['id_tienda']->setLabel('Tienda');
  	$this->widgetSchema['rut']->setLabel('Rut');
  	$this->widgetSchema['dv']->setLabel('Dígito Verificador');
  	$this->widgetSchema['nombre_completo']->setLabel('Nombre Completo');
  	$this->widgetSchema['ciudad']->setLabel('Ciudad');
  	$this->widgetSchema['telefono']->setLabel('Teléfono');
  	$this->widgetSchema['celular']->setLabel('Celular');
  	$this->widgetSchema['email']->setLabel('Email');
  	$this->widgetSchema['edad']->setLabel('Edad');
  	$this->widgetSchema['sexo']->setLabel('Sexo');
  	$this->widgetSchema['compra_para']->setLabel('Compra para');
  }
}
