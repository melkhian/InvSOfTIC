<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property int $DepId Id
 * @property string $DepNomb Nombre
 * @property string $DepEnca Encargado de Dependencia
 * @property int $TiposId_fk1 Cargo del Encargado
 * @property string $DepTele Teléfono de Dependencia
 * @property string $DepDire Dirección de Dependencia
 * @property int $TiposId_fk2 Tipo de Dependencia
 * @property string $DepCorr Correo del Encargado
 *
 * @property Appdependencias[] $appdependencias
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk2
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepNomb', 'DepEnca', 'TiposId_fk1', 'DepTele', 'DepDire', 'TiposId_fk2', 'DepCorr'], 'required'],
            [['TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['DepNomb', 'DepEnca', 'DepDire', 'DepCorr'], 'string', 'max' => 100],
            ['DepCorr', 'email'],
            [['DepCorr'], 'unique'],
            [['DepTele'], 'string', 'max' => 20],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DepId' => 'Id',
            'DepNomb' => 'Nombre',
            'DepEnca' => 'Encargado de Dependencia',
            'TiposId_fk1' => 'Cargo del Encargado',
            'DepTele' => 'Teléfono de Dependencia',
            'DepDire' => 'Dirección de Dependencia',
            'TiposId_fk2' => 'Tipo de Dependencia',
            'DepCorr' => 'Correo del Encargado',
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

            // print_r($pk);
            // die();
            $MaxId = (new \yii\db\Query()) 
            ->select($pk)
            ->from($AudMod)
            ->orderBy($pk[0]." DESC")          
            ->createCommand()
            ->execute();


            $queryAll = (new \yii\db\Query())
            ->select('*')
            ->from($AudMod)
            ->where([$pk[0] => $idSelect])
            ->createCommand();    
            $rows = $queryAll->queryOne();
            $resultAll = implode(",", $rows);

            $i=0;

            //---------------------------------------------------------------//
            
            if(!isset($changedAttributes['DepId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['DepId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepNomb']))
            {
                
            }
            else
            {
                if ($changedAttributes['DepNomb'] != $rows['DepNomb']) 
                {
                    $oldAttributes[$i] = "Nombre => ".$changedAttributes['DepNomb'];
                    $i++;
                }            
            } 

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepEnca']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Encargado => ".$changedAttributes['DepEnca'];
                $i++;                
            }  

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk1']))
            {
                
            }
            else
            {
                if ($changedAttributes['TiposId_fk1'] != $rows['TiposId_fk1']) 
                {
                    $oldAttributes[$i] = "Cargo => ".$changedAttributes['TiposId_fk1'];
                    $i++;   
                }                
            }             

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepTele']))
            {
                
            }
            else
            {
                if ($changedAttributes['DepTele'] != $rows['DepTele']) 
                {
                    $oldAttributes[$i] = "Teléfono => ".$changedAttributes['DepTele'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepDire']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Dirección => ".$changedAttributes['DepDire'];
                $i++;
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['TiposId_fk2']))
            {
                
            }
            else
            {
                if ($changedAttributes['TiposId_fk2'] != $rows['TiposId_fk2']) 
                {
                    $oldAttributes[$i] = "Tipo => ".$changedAttributes['TiposId_fk2'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['DepCorr']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Correo => ".$changedAttributes['DepCorr'];
                $i++;
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

            // ------------------------------------------------------------------//
            // print_r($rows['AppId_fk']);

            foreach ($rows as $key => $value) 
            {
                if ($key == 'DepId') 
                {
                    $var[0] = "Id => ".$rows['DepId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'DepNomb' and isset($changedAttributes['DepNomb'])) 
                {
                    $var[1] = "Nombre => ".$rows['DepNomb'];
                }

                //---------------------------------------------------------------//
                

                if ($key == 'DepEnca' and isset($changedAttributes['DepEnca'])) 
                {
                    $var[2] = "Encargado => ".$rows['DepEnca'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk1' and $value != $changedAttributes['TiposId_fk1'])
                {                    
                    $var[3] = "Cargo => ".$rows['TiposId_fk1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'DepTele' and isset($changedAttributes['DepTele'])) 
                {
                    $var[4] = "Telefono => ".$rows['DepTele'];
                }

                //---------------------------------------------------------------//

                if ($key == 'DepDire' and isset($changedAttributes['DepDire'])) 
                {
                    $var[5] = "Dirección => ".$rows['DepDire'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2' and $value != $changedAttributes['TiposId_fk2']) 
                {
                    $var[6] = "Tipo => ".$rows['TiposId_fk2'];
                }

                //---------------------------------------------------------------//

                if ($key == 'DepCorr' and isset($changedAttributes['DepCorr'])) 
                {
                    $var[7] = "Correo => ".$rows['DepCorr'];
                }

                //---------------------------------------------------------------//

            }
            // echo '<pre>';
            // print_r($oldAttributes);
            // print_r($var);
            // echo '</pre>';
            // die();
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
            ->select($pk)
            ->from($AudMod)
            ->where([$pk[0] => $MaxId])
            ->createCommand();    
            $rows1 = $queryId->queryOne();            
            // $resultId = implode(",", $rows1);

            foreach ($rows1 as $key => $value) 
            {
                if ($key == 'DepId') 
                {
                    $var[0] = "Id => ".$rows1['DepId'];
                }
            }

            $resultId = implode(",", $var);

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
    public function getAppdependencias()
    {
        return $this->hasMany(Appdependencias::className(), ['DepId_fk' => 'DepId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

            public function TiposId_fk1()
        {
            $data = Tipos::findOne($this->TiposId_fk1);

            return $data['TiposDesc'];
        }
}
