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
            [['DepId_fk', 'AppId_fk', 'ADepCantUsua'], 'required'],
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
        parent::afterSave($insert, $changedAttributes);

        $table = $this->getTableSchema();
        $pk = $table->primaryKey; //---------------------- [ADepID]
        $x = implode(",", $pk);
        $UsuId_fk = Yii::$app->user->identity->id;
        $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]        
        $AudIp = Yii::$app->getRequest()->getUserIP();
        $AudFechHora = new \yii\db\Expression('NOW()');      


        $MaxId = (new \yii\db\Query())
        ->select($pk)
        ->from($AudMod)
        ->orderBy($pk[0]." DESC")          
        ->createCommand()
        ->execute();


        $queryId = (new \yii\db\Query())
        ->select('ADepId')
        ->from($AudMod)
        ->where([$pk[0]=>$MaxId])
        ->createCommand();    
        $rows1 = $queryId->queryOne();
        $resultId = implode(",", $rows1);  



        $queryAll = (new \yii\db\Query())
        ->select('*')
        ->from($AudMod)
        ->where([$pk[0]=>$MaxId])
        ->createCommand();    
        $rows2 = $queryAll->queryOne();
        $resultAll = implode(",", $rows2);
    

        $connection = Yii::$app->db;


        // if (Yii::$app->controller->action->id == 'create') 
        if (!$insert){
            $AudAcci =  'update';
            // $xx = $this->getOldAttribute('ADepCantUsua');

            if(!isset($changedAttributes['ADepId'])){
                $oldAttributes[0] = '-';
            }else{
                $oldAttributes[0] = $changedAttributes['ADepId'];
            } 
            // $oldAttributes[0] = $$changedAttributes['ADepId'];
            // $oldAttributes[0] = '1';

            if(!isset($changedAttributes['DepId_fk'])){
                $oldAttributes[1] = '-';
            }else{
                $oldAttributes[1] = $changedAttributes['DepId_fk'];
            } 
            // $oldAttributes[1] = $changedAttributes['DepId_fk'];


            if(!isset($changedAttributes['AppId_fk'])){
                $oldAttributes[2] = '-';
            }else{
                $oldAttributes[2] = $changedAttributes['AppId_fk'];
            } 
            // $oldAttributes[2] = $changedAttributes['AppId_fk'];


            if(!isset($changedAttributes['ADepCantUsua'])){
                $oldAttributes[3] = '-';
            }else{
                $oldAttributes[3] = $changedAttributes['ADepCantUsua'];
            } 
            // $oldAttributes[3] = $changedAttributes['ADepCantUsua'];


            if(!isset($changedAttributes['ADepFechSist'])){
                $oldAttributes[4] = '-';
            }else{
                $oldAttributes[4] = $changedAttributes['ADepFechSist'];
            }            


            foreach ($rows2 as $key => $value) {
                if ($key == 'ADepId' and $value != $oldAttributes[0]) {
                    $var[0] = $oldAttributes[0];
                }
                if ($key == 'DepId_fk' and $value != $oldAttributes[1]) {
                    $var[1] = $oldAttributes[1];
                }
                if ($key == 'AppId_fk' and $value != $oldAttributes[2]) {
                    $var[2] = $oldAttributes[2];
                }
                if ($key == 'ADepCantUsua' and $value != $oldAttributes[3]) {
                    $var[3] = $oldAttributes[3];
                }
                if ($key == 'ADepFechSist' and $value != $oldAttributes[4]) {
                    $var[4] = $oldAttributes[4];
                }
            }
            if (!isset($var)) {
                $total = 'No Change';
            }else{
               $total = implode(",",$var); 
            }
            // $total = implode(",", $oldAttributes);
            $connection->createCommand()->insert('auditorias', 
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci, 
                                        'AudDatoAnte' => $total,
                                        'AudDatoDesp' => $resultAll,                                   
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,                                                                    
                                    ])
                                    ->execute(); 

        }
        if ($insert)
        {        
            $AudAcci =  'create';
            $connection->createCommand()->insert('auditorias', 
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci, 
                                        'AudDatoAnte' => ' ',
                                        'AudDatoDesp' => $resultId,                                   
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,                                                                    
                                    ])
                                    ->execute();                
        }            
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
