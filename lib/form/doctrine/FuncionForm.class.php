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
  	$form = new FuncionPaisCollectionForm(null, array(
      'funcion' => $this->getObject(),
      'size'    => 1
    ));
   
    $this->embedForm('paises', $form);

  	$this->widgetSchema['id_aplicacion']->setLabel('Aplicación');
  	$this->widgetSchema['descripcion']->setLabel('Descripción');
    $this->widgetSchema['codigo']->setLabel('Código');
  }

  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $forms)
    {
      $paises = $this->getValue('paises');
      $forms = $this->embeddedForms;
      
      if (!isset($paises[0]['id_pais']))
      {
        unset($forms['paises']);
      }
    }
   
    return parent::saveEmbeddedForms($con, $forms);
  }
}
