<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Region', 'doctrine');

/**
 * BaseRegion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_region
 * @property string $desc_region
 * @property integer $id_pais
 * @property Pais $Pais
 * @property Doctrine_Collection $Tienda
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getIdRegion()    Returns the current record's "id_region" value
 * @method string              getDescRegion()  Returns the current record's "desc_region" value
 * @method integer             getIdPais()      Returns the current record's "id_pais" value
 * @method Pais                getPais()        Returns the current record's "Pais" value
 * @method Doctrine_Collection getTienda()      Returns the current record's "Tienda" collection
 * @method Region              setId()          Sets the current record's "id" value
 * @method Region              setIdRegion()    Sets the current record's "id_region" value
 * @method Region              setDescRegion()  Sets the current record's "desc_region" value
 * @method Region              setIdPais()      Sets the current record's "id_pais" value
 * @method Region              setPais()        Sets the current record's "Pais" value
 * @method Region              setTienda()      Sets the current record's "Tienda" collection
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('region');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('id_region', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'autoincrement' => false,
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('desc_region', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
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


        $this->index('region_index', array(
             'fields' => 
             array(
              0 => 'id_region',
              1 => 'id_pais',
             ),
             'primary' => true,
             'type' => 'unique',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Pais', array(
             'local' => 'id_pais',
             'foreign' => 'id_pais',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Tienda', array(
             'local' => 'id',
             'foreign' => 'id_region'));
    }
}