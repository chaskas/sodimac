<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <!-- <link rel="shortcut icon" href="/favicon.ico" /> -->
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
              <li <?php if(in_array($sf_context->getModuleName(),array('Preguntas','TipoPregunta'))) echo "class='active'" ?>><a href="<?php echo url_for('Preguntas/index'); ?>">Encuestas</a></li>
              <li <?php if(in_array($sf_context->getModuleName(),array('OportunidadCMR'))) echo "class='active'" ?>><a href="<?php echo url_for('OportunidadCMR/index'); ?>">Oportunidad CMR</a></li>
              <li><a href="#">Tiendas</a></li>
              <li><a href="#">End Point</a></li>
              <li <?php if(in_array($sf_context->getModuleName(),array('Pais'))) echo "class='active'" ?>><a href="<?php echo url_for('Pais/index'); ?>">Configuración</a></li>
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
          <?php echo $sf_content ?>
        </div>
      </div>
    </div>
    <?php include_javascripts() ?>
  </body>
</html>