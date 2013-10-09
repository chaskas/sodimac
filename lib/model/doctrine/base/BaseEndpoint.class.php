<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Endpoint', 'doctrine');

/**
 * BaseEndpoint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_endpoint
 * @property string $cod_endpoint
 * @property string $desc_endpoint
 * @property string $host
 * @property integer $puerto
 * @property string $resto_url
 * @property integer $id_pais
 * @property integer $version
 * @property Pais $Pais
 * 
 * @method integer  getIdEndpoint()    Returns the current record's "id_endpoint" value
 * @method string   getCodEndpoint()   Returns the current record's "cod_endpoint" value
 * @method string   getDescEndpoint()  Returns the current record's "desc_endpoint" value
 * @method string   getHost()          Returns the current record's "host" value
 * @method integer  getPuerto()        Returns the current record's "puerto" value
 * @method string   getRestoUrl()      Returns the current record's "resto_url" value
 * @method integer  getIdPais()        Returns the current record's "id_pais" value
 * @method integer  getVersion()       Returns the current record's "version" value
 * @method Pais     getPais()          Returns the current record's "Pais" value
 * @method Endpoint setIdEndpoint()    Sets the current record's "id_endpoint" value
 * @method Endpoint setCodEndpoint()   Sets the current record's "cod_endpoint" value
 * @method Endpoint setDescEndpoint()  Sets the current record's "desc_endpoint" value
 * @method Endpoint setHost()          Sets the current record's "host" value
 * @method Endpoint setPuerto()        Sets the current record's "puerto" value
 * @method Endpoint setRestoUrl()      Sets the current record's "resto_url" value
 * @method Endpoint setIdPais()        Sets the current record's "id_pais" value
 * @method Endpoint setVersion()       Sets the current record's "version" value
 * @method Endpoint setPais()          Sets the current record's "Pais" value
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEndpoint extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('endpoint');
        $this->hasColumn('id_endpoint', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('cod_endpoint', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('desc_endpoint', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('host', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('puerto', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('resto_url', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
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
        $this->hasColumn('version', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Pais', array(
             'local' => 'id_pais',
             'foreign' => 'id_pais',
             'onDelete' => 'SET NULL'));
    }
}