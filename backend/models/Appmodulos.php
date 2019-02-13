<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%appmodulos}}".
 *
 * @property int $AModId Id
 * @property int $AppId_fk Aplicación
 * @property string $AModNomb Nombre del módulo
 * @property string $AModDesc Descripción
 * @property int $TiposId_fk ¿Está instalado?
 * @property string $AModObse Observaciones
 *
 * @property Aplicaciones $appIdFk
 * @property Tipos $tiposIdFk
 */
class Appmodulos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appmodulos}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppId_fk', 'AModNomb', 'AModDesc', 'TiposId_fk', 'AModObse'], 'required'],
            [['AppId_fk', 'TiposId_fk'], 'integer'],
            [['AModNomb'], 'string', 'max' => 50],
            [['AModDesc'], 'string', 'max' => 500],
            [['AModObse'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
            [['TiposId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AModId' => 'Id',
            'AppId_fk' => 'Aplicación',
            'AModNomb' => 'Nombre del módulo',
            'AModDesc' => 'Descripción',
            'TiposId_fk' => '¿Está instalado?',
            'AModObse' => 'Observaciones',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdFk()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        // $log = new Auditorias();
        // $log->description=  'User ' . Yii::app()->user->Name
        //                         . ' changed ' . $name . ' for '
        //                         . get_class($this->Owner)
        //                         . '[' . $this->Owner->getPrimaryKey() .'].';
        // $AudId = 'null';
        $table=$this->getTableSchema();
        $pk = $table->primaryKey; //---------------------- [ADepID]
        $x = implode(",", $pk);
        $UsuId_fk = Yii::$app->user->identity->id;
        $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
        $AudAcci =  'create';
        // $log->model=        get_class($this->Owner);
        // $log->idModel=      $this->Owner->getPrimaryKey();
        $AudIp = Yii::$app->getRequest()->getUserIP();
        $AudFechHora = new \yii\db\Expression('NOW()');//new CDbExpression('NOW()');
        
        $MaxId = (new \yii\db\Query())
        ->select($pk)
        ->from($AudMod)
        ->orderBy($pk[0]." DESC")          
        ->createCommand()
        ->execute();

        $query = (new \yii\db\Query())
        ->select('*')
        ->from($AudMod)
        ->where([$pk[0]=>$MaxId])
        ->createCommand();
        // ->execute();
        $rows = $query->queryOne();
        $string = implode(",", $rows);
        // print_r($rows); 
        // $log->save();        
        Yii::$app->db->createCommand()->insert('auditorias', 
                                // ['AudId'=> $AudId],
                                [
                                    'UsuId_fk' => Yii::$app->user->identity->id,
                                    'AudMod' => $AudMod,
                                    'AudAcci' => $AudAcci, 
                                    'AudDatoAnte' => 'empty',
                                    'AudDatoDesp' => $string,                                   
                                    'AudIp'=> $AudIp,
                                    'AudFechHora'=> $AudFechHora,                                                                    
                                ])
                                ->execute();
        parent::afterSave($insert, $changedAttributes);
     //  die;
     /* $priority range low =1 normal =2 high=3*/
     //background($name, $data = null, $priority = self::NORMAL, $unique = null)
     
    }
}
