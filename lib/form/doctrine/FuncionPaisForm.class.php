<?php

/**
 * FuncionPais form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FuncionPaisForm extends BaseFuncionPaisForm
{
  public function configure()
  {
    $id = $this->getObject()->getIdFuncion();

    $paises = "";

    if(isset($id))
    {
      $funcion_pais_actuales = Doctrine_Core::getTable('FuncionPais')
        ->createQuery('a')
        ->where('a.id_funcion = ?', $id)
        ->execute();

      $ArrayIdPaisesActuales = array();
      foreach ($funcion_pais_actuales as $s) {
        array_push($ArrayIdPaisesActuales,$s->getIdPais());
      }

      $paises = Doctrine_Core::getTable('Pais')
        ->createQuery('b')
        ->whereNotIn('b.id_pais', $ArrayIdPaisesActuales);

    } else {
      $paises = Doctrine_Core::getTable('Pais')
        ->createQuery('b');
    }

  	$this->widgetSchema['id_pais'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'Pais',
        'add_empty'=>'',
        'query'=> $paises,
        'expanded' => false, 
        'multiple' => false
  	));

  	$this->validatorSchema['id_pais']     = new sfValidatorDoctrineChoice(array(
        'model' => 'Pais', 
        'column' => 'id_pais', 
        'multiple' => false
    ));

    $this->validatorSchema['id_pais']->setOption('required', false);
    $this->validatorSchema['id_funcion']->setOption('required', false);

  	$this->widgetSchema['id_pais']->setLabel('País');
  }
}
