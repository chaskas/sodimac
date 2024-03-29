<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ServiciosPorTienda', 'doctrine');

/**
 * BaseServiciosPorTienda
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_tienda
 * @property integer $id_servicio_tienda
 * @property Tienda $tienda
 * @property ServiciosTienda $servicios
 * 
 * @method integer            getIdTienda()           Returns the current record's "id_tienda" value
 * @method integer            getIdServicioTienda()   Returns the current record's "id_servicio_tienda" value
 * @method Tienda             getTienda()             Returns the current record's "tienda" value
 * @method ServiciosTienda    getServicios()          Returns the current record's "servicios" value
 * @method ServiciosPorTienda setIdTienda()           Sets the current record's "id_tienda" value
 * @method ServiciosPorTienda setIdServicioTienda()   Sets the current record's "id_servicio_tienda" value
 * @method ServiciosPorTienda setTienda()             Sets the current record's "tienda" value
 * @method ServiciosPorTienda setServicios()          Sets the current record's "servicios" value
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseServiciosPorTienda extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('servicios_por_tienda');
        $this->hasColumn('id_tienda', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('id_servicio_tienda', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));


        $this->index('servicios_por_tienda_index', array(
             'fields' => 
             array(
              0 => 'id_tienda',
              1 => 'id_servicio_tienda',
             ),
             'type' => 'unique',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tienda as tienda', array(
             'local' => 'id_tienda',
             'foreign' => 'id_tienda',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ServiciosTienda as servicios', array(
             'local' => 'id_servicio_tienda',
             'foreign' => 'id_servicio_tienda',
             'onDelete' => 'CASCADE'));
    }
}