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
  	$form = new AplicacionPaisCollectionForm(null, array(
      'aplicacion' => $this->getObject(),
      'size'    => 1
    ));
   
    $this->embedForm('paises', $form);

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
