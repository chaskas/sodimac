<?php

/**
 * OportunidadCMR actions.
 *
 * @package    sodimac
 * @subpackage OportunidadCMR
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OportunidadCMRActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->oportunidad_cmrs = Doctrine_Core::getTable('OportunidadCmr')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OportunidadCmrForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new OportunidadCmrForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($this->oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $this->form = new OportunidadCmrForm($this->oportunidad_cmr);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $this->form = new OportunidadCmrForm($oportunidad_cmr);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->find(array($request->getParameter('id_opor_cmr'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('id_opor_cmr')));
    $oportunidad_cmr->delete();

    $this->redirect('OportunidadCMR/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $oportunidad_cmr = $form->save();
      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('OportunidadCMR/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extraño.');
  }

  public function executeGetData(sfWebRequest $request)
  {
    $data = new Sodimac($request->getParameter('sku'));

    $this->forward404Unless($oportunidad_cmr = Doctrine_Core::getTable('OportunidadCmr')->findOneBySku(array($request->getParameter('sku'))), sprintf('Object oportunidad_cmr does not exist (%s).', $request->getParameter('sku')));

    if($data->isValid())
    {

      $oportunidad_cmr->setNombreProducto($data->getNombreProducto());
      $oportunidad_cmr->setPrecioInternet($data->getPrecioInternet());
      $oportunidad_cmr->setPrecioCMR($data->getPrecioCMR());
      $oportunidad_cmr->setUnidadMedInt($data->getUnidadMedInt());
      $oportunidad_cmr->setUnidadMedCMR($data->getUnidadMedCMR());

      $oportunidad_cmr->save();
      $this->getUser()->setFlash('success', 'Datos obtenidos!.');

    } else {

      $this->getUser()->setFlash('error', 'SKU no encontrado.');

    }
    
    $this->redirect('OportunidadCMR/edit?id_opor_cmr='.$oportunidad_cmr->getIdOporCmr());

  }

  public function executeNewFromFile(sfWebRequest $request)
  {
    $this->form_file = new OportunidadFileForm();
  }

  public function executeCreateFromFile(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form_file = new OportunidadFileForm();

    $this->processFileForm($request, $this->form_file);

    $this->setTemplate('newFromFile');
  }

  protected function processFileForm(sfWebRequest $request, sfForm $form_file)
  {
    $form_file->bind($request->getParameter($form_file->getName()), $request->getFiles($form_file->getName()));
    if ($form_file->isValid())
    {

      $file = $form_file->getValue('file');
 
      $filename = sha1($file->getOriginalName());
      $extension = $file->getExtension($file->getOriginalExtension());
      $file->save(sfConfig::get('sf_upload_dir').'/excel/'.$filename.$extension);

      $excel = new sfPhpExcel();
      $objReader = PHPExcel_IOFactory::createReader('Excel2007');
      $objPHPExcel = $objReader->load(sfConfig::get('sf_upload_dir').'/excel/'.$filename.$extension);

      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

        
        foreach ($worksheet->getRowIterator() as $row) {

          if(1 == $row->getRowIndex ()) continue;
          $cellIterator = $row->getCellIterator();
          $cellIterator->setIterateOnlyExistingCells(false);

          $ocmr = new OportunidadCMR();

          foreach ($cellIterator as $key => $cell) {
            if (!is_null($cell)) {    

              if($key == 0)
              {
                $ocmr->setSku(str_replace('-', '', $cell->getCalculatedValue()));
                $data = new Sodimac($ocmr->getSku());

                if ($data->isValid()) {
                  $ocmr->setNombreProducto($data->getNombreProducto());
                  $ocmr->setPrecioInternet($data->getPrecioInternet());
                  $ocmr->setPrecioCMR($data->getPrecioCMR());
                  $ocmr->setUnidadMedInt($data->getUnidadMedInt());
                  $ocmr->setUnidadMedCMR($data->getUnidadMedCMR());
                }
              }
              if($key == 1){$ocmr->setFechaVigDes(gmdate ( 'Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell->getCalculatedValue())));}
              if($key == 2){$ocmr->setFechaVigHas(gmdate ( 'Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell->getCalculatedValue())));}
            }
          }
          $ocmr->setIdPais($form_file->getValue('id_pais'));
          $ocmr->save();
        }
      }

      $this->getUser()->setFlash('success', 'se ha guardado correctamente.');
      $this->redirect('OportunidadCMR/index');
    }
    $this->getUser()->setFlash('error', 'se ha producido algo extrañoooooo.');
  }

}
