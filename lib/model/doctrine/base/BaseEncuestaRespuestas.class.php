<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EncuestaRespuestas', 'doctrine');

/**
 * BaseEncuestaRespuestas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_enc_resp
 * @property integer $id_enc_preg
 * @property integer $id_enc_cab_resp
 * @property string $valor_resp
 * @property EncuestaCabeceraRespuestas $EncuestaCabeceraRespuestas
 * @property EncuestaPreguntas $EncuestaPreguntas
 * 
 * @method integer                    getIdEncResp()                  Returns the current record's "id_enc_resp" value
 * @method integer                    getIdEncPreg()                  Returns the current record's "id_enc_preg" value
 * @method integer                    getIdEncCabResp()               Returns the current record's "id_enc_cab_resp" value
 * @method string                     getValorResp()                  Returns the current record's "valor_resp" value
 * @method EncuestaCabeceraRespuestas getEncuestaCabeceraRespuestas() Returns the current record's "EncuestaCabeceraRespuestas" value
 * @method EncuestaPreguntas          getEncuestaPreguntas()          Returns the current record's "EncuestaPreguntas" value
 * @method EncuestaRespuestas         setIdEncResp()                  Sets the current record's "id_enc_resp" value
 * @method EncuestaRespuestas         setIdEncPreg()                  Sets the current record's "id_enc_preg" value
 * @method EncuestaRespuestas         setIdEncCabResp()               Sets the current record's "id_enc_cab_resp" value
 * @method EncuestaRespuestas         setValorResp()                  Sets the current record's "valor_resp" value
 * @method EncuestaRespuestas         setEncuestaCabeceraRespuestas() Sets the current record's "EncuestaCabeceraRespuestas" value
 * @method EncuestaRespuestas         setEncuestaPreguntas()          Sets the current record's "EncuestaPreguntas" value
 * 
 * @package    sodimac
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEncuestaRespuestas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('encuesta_respuestas');
        $this->hasColumn('id_enc_resp', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_enc_preg', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_enc_cab_resp', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valor_resp', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('EncuestaCabeceraRespuestas', array(
             'local' => 'id_enc_cab_resp',
             'foreign' => 'id_enc_cab_resp'));

        $this->hasOne('EncuestaPreguntas', array(
             'local' => 'id_enc_preg',
             'foreign' => 'id_enc_preg'));
    }
}