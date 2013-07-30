<?php

/**
 * ServiciosPorTienda form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosPorTiendaForm extends BaseServiciosPorTiendaForm
{
  public function configure()
  {
    $id_tienda = $this->getObject()->getIdTienda();

    $servicios = "";

    if(isset($id_tienda))
    {
      $servicios_actuales = Doctrine_Core::getTable('ServiciosPorTienda')
        ->createQuery('a')
        ->where('a.id_tienda = ?', $id_tienda)
        ->execute();

      $ArIdServAct = [];
      foreach ($servicios_actuales as $s) {
        array_push($ArIdServAct,$s->getIdServicioTienda());
      }

      $servicios = Doctrine_Core::getTable('ServiciosTienda')
        ->createQuery('b')
        ->whereNotIn('b.id_servicio_tienda', $ArIdServAct);

    } else {
      $servicios = Doctrine_Core::getTable('ServiciosTienda')
        ->createQuery('b');
    }

  	$this->widgetSchema['id_servicio_tienda'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'ServiciosTienda',
        'add_empty'=>'',
        'query'=> $servicios,
        'expanded' => false, 'multiple' => false
  	));

  	$this->validatorSchema['id_servicio_tienda']     = new sfValidatorDoctrineChoice(array(
        'model' => 'ServiciosTienda', 
        'column' => 'id_servicio_tienda', 
        'multiple' => false,));

    $this->validatorSchema['id_tienda']->setOption('required', false);
    $this->validatorSchema['id_servicio_tienda']->setOption('required', false);

  	$this->widgetSchema['id_servicio_tienda']->setLabel('Servicio');
  }
}
