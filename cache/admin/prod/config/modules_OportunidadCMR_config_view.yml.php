<?php
// auto-generated by sfViewConfigHandler
// date: 2013/07/25 15:07:05
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Mantenedor de Servicios Móviles', false, false);

  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('styles.css', '', array ());
  $response->addJavascript('jquery.js', '', array ());
  $response->addJavascript('bootstrap.min.js', '', array ());


