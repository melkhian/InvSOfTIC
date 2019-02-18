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
        if (!$insert)
        {

            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [ADepID]            
            $idSelect = $_GET['id'];
            $UsuId_fk = Yii::$app->user->identity->id;
            $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]        
            $AudIp = Yii::$app->getRequest()->getUserIP();
            $AudFechHora = new \yii\db\Expression('NOW()');      
            $connection = Yii::$app->db;


            $MaxId = (new \yii\db\Query()) 
            ->select($pk)
            ->from($AudMod)
            ->orderBy($pk[0]." DESC")          
            ->createCommand()
            ->execute();


            $queryAll = (new \yii\db\Query())
            ->select('*')
            ->from($AudMod)
            ->where(['ADepId' => $idSelect])
            ->createCommand();    
            $rows = $queryAll->queryOne();
            $resultAll = implode(",", $rows);


            $i=0;

            //---------------------------------------------------------------//
            
            if(!isset($changedAttributes['ADepId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "ADepId => ".$changedAttributes['ADepId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepId_fk']))
            {
                
            }
            else
            {
                if ($changedAttributes['DepId_fk'] != $rows['DepId_fk']) 
                {
                    $oldAttributes[$i] = "DepId => ".$changedAttributes['DepId_fk'];
                    $i++;
                }            
            } 

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AppId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['AppId_fk'] != $rows['AppId_fk']) 
                {
                    $oldAttributes[$i] = "AppId => ".$changedAttributes['AppId_fk'];
                    $i++;
                }
            } 

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ADepCantUsua']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "CantUsua => ".$changedAttributes['ADepCantUsua'];
                $i++;
            }             

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ADepFechSist']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "FechSist => ".$changedAttributes['ADepFechSist'];                
            }  

            //---------------------------------------------------------------//          

            if (!isset($oldAttributes)) 
            {
                $total = 'no change';
            }
            else
            {
                $total = implode(",",$oldAttributes); 
            }

            //---------------------------------------------------------------//

            foreach ($rows as $key => $value) 
            {
                if ($key == 'ADepId') 
                {
                    $var[0] = "Id => ".$rows['ADepId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'DepId_fk') 
                {
                    $var[1] = "DepId => ".$rows['DepId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppId_fk') 
                {
                    $var[2] = "AppId => ".$rows['AppId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ADepCantUsua') 
                {
                    $var[3] = "CantUsua => ".$rows['ADepCantUsua'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ADepFechSist') 
                {
                    $var[4] = "FechSista => ".$rows['ADepFechSist'];
                }

                //---------------------------------------------------------------//

            }

            if (!isset($var)) 
            {
                $result = 'No Change';
            }
            else
            {
               $result = implode(",",$var); 
            }

                //---------------------------------------------------------------//

            $connection->createCommand()->insert('auditorias', 
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci, 
                                        'AudDatoAnte' => $total,
                                        'AudDatoDesp' => $result,                                   
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,                                                                    
                                    ])
                                    ->execute(); 

        }
        if ($insert)
        {        
            $connection = Yii::$app->db;
            $AudAcci =  'create';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey;
            $UsuId_fk = Yii::$app->user->identity->id;
            $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]        
            $AudIp = Yii::$app->getRequest()->getUserIP();
            $AudFechHora = new \yii\db\Expression('NOW()');  

        //---------------------------------------------------------------------------//


            $MaxId = (new \yii\db\Query()) 
            ->select($pk)
            ->from($AudMod)
            ->orderBy($pk[0]." DESC")          
            ->createCommand()
            ->execute();

            //---------------------------------------------//

            $queryId = (new \yii\db\Query())
            ->select('ADepId')
            ->from($AudMod)
            ->where([$pk[0]=>$MaxId])
            ->createCommand();    
            $rows1 = $queryId->queryOne();            
            $resultId = implode(",", $rows1);


            //-----------------------------------------------//    

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
