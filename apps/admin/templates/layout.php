<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <!-- <link rel="shortcut icon" href="/favicon.ico" /> -->
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo url_for('@homepage'); ?>">
            <?php echo image_tag('logo.png'); ?>
          </a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if(in_array($sf_context->getModuleName(),array('Preguntas','TipoPregunta','Respuestas','CabeceraRespuestas'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('Preguntas/index'); ?>">Encuestas</a>
              </li>
              <li <?php if(in_array($sf_context->getModuleName(),array('OportunidadCMR'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('OportunidadCMR/index'); ?>">Oportunidad CMR</a>
              </li>
              <li <?php if(in_array($sf_context->getModuleName(),array('Tiendas','TipoTienda','Servicios'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('Tiendas/index'); ?>">Tiendas</a>
              </li>
              <li <?php if(in_array($sf_context->getModuleName(),array('EndPoint'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('EndPoint/index'); ?>">End Point</a>
              </li>
              <li <?php if(in_array($sf_context->getModuleName(),array('Aplicacion','Funcion'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('Aplicacion/index'); ?>">Aplicaciones</a>
              </li>
              <li <?php if(in_array($sf_context->getModuleName(),array('Pais','Region'))) echo "class='active'" ?>>
                <a href="<?php echo url_for('Pais/index'); ?>">Configuración</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span3">
          <?php if(has_slot('sidebar')): ?>
            <?php include_slot('sidebar'); ?>
          <?php endif; ?>
        </div>
        <div class="span9">
          <?php if ($sf_user->hasFlash('success')): ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Éxito,</strong> <?php echo $sf_user->getFlash('success') ?>
            </div>
          <?php endif ?>
          <?php if ($sf_user->hasFlash('error')): ?>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Error,</strong> <?php echo $sf_user->getFlash('error') ?>
            </div>
          <?php endif ?>
          <?php echo $sf_content ?>
        </div>
      </div>
    </div>
    
  </body>
</html>