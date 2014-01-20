sodimac
=======

###<b>Manual Instalación en Hosting24</b> (shared hosting)

1. Descargar proyecto desde [aquí](https://github.com/chaskas/sodimac/archive/master.zip )

2. Descomprimir y renombrar a **sodimac**.

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

6. Editar el archivo config/databases.yml y poner los datos de conexión a la base de datos:

        # You can find more information about this file on the symfony website:
        # http://www.symfony-project.org/reference/1_4/en/07-Databases
        
        all:
          doctrine:
            class: sfDoctrineDatabase
            param:
              dsn:      mysql:host=localhost;dbname=NOMBRE_BASE_DE_DATOS
              username: NOMBRE_DE_USUARIO_BD
              password: PASSWORD_BD

7. Eliminar el archivo web/frontend_dev.php y web/admin_dev.php.
8. Loguear mediante FTP al hosting y posicionarse en el root (/).
9. Crear el directorio **sf_projects**
10. Subir el directorio **sodimac** dentro de **sf_projects**.
11. Una vez arriba, acceder a **sodimac**.
12. Crear el directorio **cache** y otorgarle permisos 777.
13. Crear el directorio **log** y otorgarle permisos 777.
14. Mover el directorio **web** dentro de **/public_html**, una vez hecho esto renombrar **web** a **sodimac**
15. Acceder a PhpMyAdmin e importar el archivo data/sql/schema.sql a la base de datos.
16. Probar la aplicación:

        http://www.dominio.cl/sodimac/admin
        
17. Insertar algunos datos y luego probar la API:

        http://www.dominio.cl/sodimac/api/get/ocmr/json
        
18. Hemos Terminado!.
