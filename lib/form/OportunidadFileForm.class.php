<?php

/**
 * ServiciosPorTiendaCollection form.
 *
 * @package    sodimac
 * @subpackage form
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OportunidadFileForm extends sfForm
{

  protected static $mime_types = array(
    'application/vnd.ms-excel',
    'application/msexcel',
    'application/x-msexcel',
    'application/x-ms-excel',
    'application/x-excel',
    'application/x-dos_ms_excel',
    'application/xls',
    'application/x-xls',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    );

  public function configure()
  {
    $this->widgetSchema['file'] = new sfWidgetFormInputFile();

    $this->widgetSchema['file']->setLabel('Archivo Excel');

    $this->validatorSchema['file'] = new sfValidatorFile(array(
            'max_size' => 500000,
            'mime_types' => self::$mime_types,
            'path' => sfConfig::get('sf_upload_dir').'/excel',
            'required' => true,
        ));

    $this->widgetSchema['id_pais'] = new sfWidgetFormDoctrineChoice(array(
        'model'=>'Pais',
        'expanded' => false, 
        'multiple' => false
    ));

    $this->validatorSchema['id_pais'] = new sfValidatorDoctrineChoice(array(
        'model'  => 'Pais',
        'column' => 'id_pais'
    ));
    
    $this->widgetSchema['id_pais']->setLabel('País');

    $this->widgetSchema->setNameFormat('file[%s]');
  }
}