<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tienda', 'doctrine');

/**
 * BaseTienda
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_tienda
 * @property string $nombre
 * @property string $direccion
 * @property string $latitud
 * @property string $longitud
 * @property string $telefono
 * @property string $horario
 * @property integer $id_region
 * @property integer $id_tipo_tienda
 * @property integer $id_pais
 * @property string $gerente
 * @property integer $busc_producto
 * @property TipoTienda $TipoTienda
 * @property Pais $Pais
 * @property Region $Region
 * @property Doctrine_Collection $ServiciosPorTienda
 * 
 * @method integer             getIdTienda()           Returns the current record's "id_tienda" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method string              getDireccion()          Returns the current record's "direccion" value
 * @method string              getLatitud()            Returns the current record's "latitud" value
 * @method string              getLongitud()           Returns the current record's "longitud" value
 * @method string              getTelefono()           Returns the current record's "telefono" value
 * @method string              getHorario()            Returns the current record's "horario" value
 * @method integer             getIdRegion()           Returns the current record's "id_region" value
 * @method integer             getIdTipoTienda()       Returns the current record's "id_tipo_tienda" value
 * @method integer             getIdPais()             Returns the current record's "id_pais" value
 * @method string              getGerente()            Returns the current record's "gerente" value
 * @method integer             getBuscProducto()       Returns the current record's "busc_producto" value
 * @method TipoTienda          getTipoTienda()         Returns the current record's "TipoTienda" value
 * @method Pais                getPais()               Returns the current record's "Pais" value
 * @method Region              getRegion()             Returns the current record's "Region" value
 * @method Doctrine_Collection getServiciosPorTienda() Returns the current record's "ServiciosPorTienda" collection
 * @method Tienda              setIdTienda()           Sets the current record's "id_tienda" value
 * @method Tienda              setNombre()             Sets the current record's "nombre" value
 * @method Tienda              setDireccion()          Sets the current record's "direccion" value
 * @method Tienda              setLatitud()            Sets the current record's "latitud" value
 * @method Tienda              setLongitud()           Sets the current record's "longitud" value
 * @method Tienda              setTelefono()           Sets the current record's "telefono" value
 * @method Tienda              setHorario()            Sets the current record's "horario" value
 * @method Tienda              setIdRegion()           Sets the current record's "id_region" value
 * @method Tienda              setIdTipoTienda()       Sets the current record's "id_tipo_tienda" value
 * @method Tienda              setIdPais()             Sets the current record's "id_pais" value
 * @method Tienda              setGerente()            Sets the current record's "gerente" value
 * @method Tienda              setBuscProducto()       Sets the current record's "busc_producto" value
 * @method Tienda              setTipoTienda()         Sets the current record's "TipoTienda" value
 * @method Tienda              setPais()               Sets the current record's "Pais" value
 * @method Tienda              setRegion()             Sets the current record's "Region" value
 * @method Tienda              setServiciosPorTienda() Sets the current record's "ServiciosPorTienda" collection
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTienda extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tienda');
        $this->hasColumn('id_tienda', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 70,
             ));
        $this->hasColumn('direccion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('latitud', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('longitud', 'string', 25, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('telefono', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('horario', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('id_region', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_tipo_tienda', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_pais', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('gerente', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('busc_producto', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TipoTienda', array(
             'local' => 'id_tipo_tienda',
             'foreign' => 'id_tipo_tienda'));

        $this->hasOne('Pais', array(
             'local' => 'id_pais',
             'foreign' => 'id_pais'));

        $this->hasOne('Region', array(
             'local' => 'id_region',
             'foreign' => 'id_region'));

        $this->hasMany('ServiciosPorTienda', array(
             'local' => 'id_tienda',
             'foreign' => 'id_tienda'));
    }
}