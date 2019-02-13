<?php

namespace backend\models;

use Yii;
use backend\models\Auditorias;
/**
 * This is the model class for table "appdependencias".
 *
 * @property int $ADepId Id
 * @property int $DepId_fk Dependencia
 * @property int $AppId_fk Aplicación
 * @property int $ADepCantUsua Cantidad de Usuarios
 * @property string $ADepFechSist Fecha del Sistema
 *
 * @property Dependencias $depIdFk
 * @property Aplicaciones $appIdFk
 */
class Appdependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appdependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepId_fk', 'AppId_fk', 'ADepCantUsua', 'ADepFechSist'], 'required'],
            [['DepId_fk', 'AppId_fk', 'ADepCantUsua'], 'integer'],
            [['ADepFechSist'], 'safe'],
            [['DepId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencias::className(), 'targetAttribute' => ['DepId_fk' => 'DepId']],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ADepId' => 'Id',
            'DepId_fk' => 'Dependencia',
            'AppId_fk' => 'Aplicación',
            'ADepCantUsua' => 'Cantidad de Usuarios',
            'ADepFechSist' => 'Fecha del Sistema',
        ];
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
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepIdFk()
    {
        return $this->hasOne(Dependencias::className(), ['DepId' => 'DepId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdFk()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
    }

    public function AppId_fk()
    {
    $data = Aplicaciones::findOne($this->AppId_fk);

    return $data['AppNomb'];
    }

    public function DepId_fk()
    {
    $data = Dependencias::findOne($this->DepId_fk);

    return $data['DepNomb'];
    }
}
