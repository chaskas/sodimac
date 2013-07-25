<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoTienda', 'doctrine');

/**
 * BaseTipoTienda
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_tipo_tienda
 * @property string $desc_tipo_tienda
 * @property Doctrine_Collection $Tienda
 * 
 * @method integer             getIdTipoTienda()     Returns the current record's "id_tipo_tienda" value
 * @method string              getDescTipoTienda()   Returns the current record's "desc_tipo_tienda" value
 * @method Doctrine_Collection getTienda()           Returns the current record's "Tienda" collection
 * @method TipoTienda          setIdTipoTienda()     Sets the current record's "id_tipo_tienda" value
 * @method TipoTienda          setDescTipoTienda()   Sets the current record's "desc_tipo_tienda" value
 * @method TipoTienda          setTienda()           Sets the current record's "Tienda" collection
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoTienda extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_tienda');
        $this->hasColumn('id_tipo_tienda', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('desc_tipo_tienda', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Tienda', array(
             'local' => 'id_tipo_tienda',
             'foreign' => 'id_tipo_tienda'));
    }
}