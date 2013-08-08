sodimac
=======

###<b>Manual Instalación en Hosting24</b> (shared hosting)

1. Descargar proyecto desde [aquí](https://github.com/chaskas/sodimac/archive/master.zip )

2. Descomprimir y renombrar a sodimac

3. Editar el archivo web/index.php:

    Donde dice:

        // require_once(dirname(__FILE__).'/../../sf_projects/sodimac/config/ProjectConfiguration.class.php');
        require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

    Reemplazar por:

    require_once(dirname(__FILE__).'/../../sf_projects/sodimac/config/ProjectConfiguration.class.php');
    // require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

4. Editar el archivo web/admin.php:

    Donde dice:

    // require_once(dirname(__FILE__).'/../../sf_projects/sodimac/config/ProjectConfiguration.class.php');
    require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

    Reemplazar por:

    require_once(dirname(__FILE__).'/../../sf_projects/sodimac/config/ProjectConfiguration.class.php');
    // require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

5. Editar el archivo config/ProjectConfiguration.class.php:

    Donde dice:

    //$this->setWebDir( $this->getRootDir().'/public_html/sodimac' );

    Reemplazar por:

    $this->setWebDir( $this->getRootDir().'/public_html/sodimac' );

6. Loguear mediante FTP al hosting y posicionarse en el root
7. Crear el directorio sf_projects
8. Entrar en el directorio sf_projects
9. Subir el sodimac y dejarlo dentro de sf_projects
10. 
