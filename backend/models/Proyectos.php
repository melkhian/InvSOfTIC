<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proyectos".
 *
 * @property int $ProId
 * @property string $ProNomb Nombre
 * @property string $ProDesc Descripción
 * @property string $ProObje Objetivos
 * @property int $UsuId_fk Funcionario que Aprueba
 * @property int $Tiposid_fk1 ¿Funcionario Aprueba?
 * @property string $ProFechApro Fecha Aprobación del Proyecto
 * @property string $ProDocu Ruta Documento del Proyecto
 * @property string $ProFechInic Fecha Planteada Inicio Proyecto
 * @property string $ProFechFina Fecha Planteada Fin Proyecto
 * @property int $TiposId_fk2 Estado
 * @property string $ProFinProy Observación del Estado Final
 *
 * @property Cambioalcance[] $cambioalcances
 * @property Tipos $tiposidFk1
 * @property Tipos $tiposIdFk2
 * @property User $usuIdFk
 * @property Requerimientos[] $requerimientos
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProNomb', 'ProDesc', 'ProObje', 'UsuId_fk', 'Tiposid_fk1', 'ProFechApro', 'ProDocu', 'ProFechInic', 'ProFechFina', 'TiposId_fk2', 'ProFinProy'], 'required'],
            [['UsuId_fk', 'Tiposid_fk1', 'TiposId_fk2'], 'integer'],
            [['ProFechApro', 'ProFechInic', 'ProFechFina'], 'safe'],
            ['ProFechFina', 'compare', 'compareAttribute'=>'ProFechInic', 'operator'=>'>='],
            [['ProNomb'], 'string', 'max' => 50],
            [['ProDesc'], 'string', 'max' => 1000],
            [['ProObje', 'ProFinProy'], 'string', 'max' => 1000],
            [['ProDocu'], 'string', 'max' => 500],
            [['Tiposid_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['Tiposid_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProId' => 'Id',
            'ProNomb' => 'Nombre',
            'ProDesc' => 'Descripción',
            'ProObje' => 'Objetivos',
            'UsuId_fk' => 'Funcionario que Aprueba',
            'Tiposid_fk1' => '¿Funcionario Aprueba?',
            'ProFechApro' => 'Fecha Aprobación del Proyecto',
            'ProDocu' => 'Ruta Documento del Proyecto',
            'ProFechInic' => 'Fecha Planteada Inicio Proyecto',
            'ProFechFina' => 'Fecha Planteada Fin Proyecto',
            'TiposId_fk2' => 'Estado',
            'ProFinProy' => 'Observación del Estado Final',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCambioalcances()
    {
        return $this->hasMany(Cambioalcance::className(), ['ProId_fk' => 'ProId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'Tiposid_fk1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['ProId_fk' => 'ProId']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function UsuId_fk()
    {
        $data = User::findOne($this->UsuId_fk);

        return $data['username'];
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
            
            if(!isset($changedAttributes['ProId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['ProId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProNomb']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProNomb'] != $rows['ProNomb']) 
                {
                    $oldAttributes[$i] = "nombre => ".$changedAttributes['ProNomb'];
                    $i++;
                }            
            } 

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProDesc']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['ProDesc'];
                $i++;                
            }  

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProObje']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProObje'] != $rows['ProObje']) 
                {
                    $oldAttributes[$i] = "Objetivos => ".$changedAttributes['ProObje'];
                    $i++;   
                }                
            }             

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['UsuId_fk']))
            {
                
            }
            else
            {
                if ($changedAttributes['UsuId_fk'] != $rows['UsuId_fk']) 
                {
                    $oldAttributes[$i] = "Funcionario => ".$changedAttributes['UsuId_fk'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['tiposid_fk1']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "Aprueba => ".$changedAttributes['tiposid_fk1'];
                $i++;
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['ProFechApro']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProFechApro'] != $rows['ProFechApro']) 
                {
                    $oldAttributes[$i] = "Fecha => ".$changedAttributes['ProFechApro'];
                    $i++;
                }            
            }   

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['ProDocu']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "ruta => ".$changedAttributes['ProDocu'];
                $i++;
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['ProFechInic']))
            {
                
            }
            else
            {
                $oldAttributes[$i] = "fechaini => ".$changedAttributes['ProFechInic'];
                $i++;
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['ProFechFina']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProFechFina'] != $rows['ProFechFina']) 
                {
                    $oldAttributes[$i] = "fechafin => ".$changedAttributes['ProFechFina'];
                    $i++;
                }
            }             

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk2']))
            {
                
            }
            else
            {
                if ($changedAttributes['TiposId_fk2'] != $rows['TiposId_fk2']) 
                {
                    $oldAttributes[$i] = "estado => ".$changedAttributes['TiposId_fk2'];
                    $i++;
                }
            }             

            //---------------------------------------------------------------// 

            if(!isset($changedAttributes['ProFinProy']))
            {
                
            }
            else
            {
                if ($changedAttributes['ProFinProy'] != $rows['ProFinProy']) 
                {
                    $oldAttributes[$i] = "observacion => ".$changedAttributes['ProFinProy'];
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
                if ($key == 'ProId') 
                {
                    $var[0] = "Id => ".$rows['ProId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProNomb' and isset($changedAttributes['ProNomb'])) 
                {
                    $var[1] = "nombre => ".$rows['ProNomb'];
                }

                //---------------------------------------------------------------//
                

                if ($key == 'ProDesc' and isset($changedAttributes['ProDesc'])) 
                {
                    $var[2] = "Descripción => ".$rows['ProDesc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProObje' and isset($changedAttributes['ProObje']))
                {                    
                    $var[3] = "Objetivos => ".$rows['ProObje'];
                }

                //---------------------------------------------------------------//

                if ($key == 'UsuId_fk' and $value != ($changedAttributes['UsuId_fk'])) 
                {
                    $var[4] = "Funcionario => ".$rows['UsuId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk1' and $value != $changedAttributes['TiposId_fk1'])
                {
                    $var[5] = "Aprueba => ".$rows['TiposId_fk1'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProFechApro' and isset($changedAttributes['ProFechApro'])) 
                {
                    $var[6] = "fecha => ".$rows['ProFechApro'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProDocu' and isset($changedAttributes['ProDocu'])) 
                {
                    $var[7] = "ruta => ".$rows['ProDocu'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProFechInic' and isset($changedAttributes['ProFechInic'])) 
                {
                    $var[8] = "fechaini => ".$rows['ProFechInic'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProFechFina' and isset($changedAttributes['ProFechFina'])) 
                {
                    $var[9] = "fechafin => ".$rows['ProFechFina'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk2' and $value != ($changedAttributes['TiposId_fk2'])) 
                {
                    $var[10] = "estado => ".$rows['TiposId_fk2'];
                }

                //---------------------------------------------------------------//

                if ($key == 'ProFinProy' and isset($changedAttributes['ProFinProy'])) 
                {
                    $var[11] = "observacion => ".$rows['ProFinProy'];
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
