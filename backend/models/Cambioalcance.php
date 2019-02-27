<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cambioalcance".
 *
 * @property int $CAlcId Id
 * @property int $ProId_fk Proyecto
 * @property string $CAlcDesc Descripción
 * @property string $CAlcFechApro Fecha de Aprobación
 * @property string $CAlcFechInic Fecha de Inicio
 * @property string $CAlcFechFina Fecha Final
 * @property string $CAlcFechSist Fecha del Sistema
 *
 * @property Proyectos $proIdFk
 */
class Cambioalcance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cambioalcance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProId_fk', 'CAlcDesc', 'CAlcFechApro', 'CAlcFechInic', 'CAlcFechFina', 'CAlcFechSist'], 'required'],
            [['ProId_fk'], 'integer'],
            [['CAlcFechApro', 'CAlcFechInic', 'CAlcFechFina', 'CAlcFechSist'], 'safe'],
            ['CAlcFechInic', 'compare', 'compareAttribute'=>'CAlcFechFina', 'operator'=>'<='],
            [['CAlcDesc'], 'string', 'max' => 500],
            [['ProId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectos::className(), 'targetAttribute' => ['ProId_fk' => 'ProId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CAlcId' => 'Id',
            'ProId_fk' => 'Proyecto',
            'CAlcDesc' => 'Descripción',
            'CAlcFechApro' => 'Fecha de Aprobación',
            'CAlcFechInic' => 'Fecha de Inicio',
            'CAlcFechFina' => 'Fecha Final',
            'CAlcFechSist' => 'Fecha del Sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProIdFk()
    {
        return $this->hasOne(Proyectos::className(), ['ProId' => 'ProId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ProId_fk()
    {
        $data = Proyectos::findOne($this->ProId_fk);

        return $data['ProNomb'];
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
            
            if(!isset($changedAttributes['CAlcId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['CAlcId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProId_fk']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProId_fk'] != $rows['ProId_fk']) 
                {
                    $oldAttributes[$i] = "proyecto => ".$changedAttributes['ProId_fk'];
                    $i++;
                }            
            } 

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['CAlcDesc']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['CAlcDesc'];
                $i++;                
            }  

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['CAlcFechApro']))
            {
                
            }
            else
            {
                if ($changedAttributes['CAlcFechApro'] != $rows['CAlcFechApro']) 
                {
                    $oldAttributes[$i] = "fecha => ".$changedAttributes['CAlcFechApro'];
                    $i++;   
                }                
            }             

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['CAlcFechInic']))
            {
                
            }
            else
            {
                if ($changedAttributes['CAlcFechInic'] != $rows['CAlcFechInic']) 
                {
                    $oldAttributes[$i] = "Fechaini => ".$changedAttributes['CAlcFechInic'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['CAlcFechFina']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Fechafin => ".$changedAttributes['CAlcFechFina'];
                $i++;
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['CAlcFechSist']))
            {
                
            }
            else
            {
                if ($changedAttributes['CAlcFechSist'] != $rows['CAlcFechSist']) 
                {
                    $oldAttributes[$i] = "Fechasis => ".$changedAttributes['CAlcFechSist'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//


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
                if ($key == 'CAlcId') 
                {
                    $var[0] = "Id => ".$rows['CAlcId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProId_fk' and $value != ($changedAttributes['ProId_fk'])) 
                {
                    $var[1] = "proyecto => ".$rows['ProId_fk'];
                }

                //---------------------------------------------------------------//
                

                if ($key == 'CAlcDesc' and isset($changedAttributes['CAlcDesc'])) 
                {
                    $var[2] = "Descripción => ".$rows['CAlcDesc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'CAlcFechApro' and isset($changedAttributes['CAlcFechApro']))
                {                    
                    $var[3] = "fecha => ".$rows['CAlcFechApro'];
                }

                //---------------------------------------------------------------//

                if ($key == 'CAlcFechInic' and isset($changedAttributes['CAlcFechInic'])) 
                {
                    $var[4] = "Fechaini => ".$rows['CAlcFechInic'];
                }

                //---------------------------------------------------------------//

                if ($key == 'CAlcFechFina' and isset($changedAttributes['CAlcFechFina']))
                {
                    $var[5] = "Fechafin => ".$rows['CAlcFechFina'];
                }

                //---------------------------------------------------------------//

                if ($key == 'CAlcFechSist' and isset($changedAttributes['CAlcFechSist'])) 
                {
                    $var[6] = "fechasis => ".$rows['CAlcFechSist'];
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
                if ($key == $pk[0]) 
                {
                    $var[0] = "Id => ".$rows1[$pk[0]];
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
}
