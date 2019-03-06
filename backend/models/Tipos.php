<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipos".
 *
 * @property int $TiposId Id
 * @property int $TipoId_fk Tipo
 * @property string $TiposDesc Descripción
 * @property int $TiposValo Valor
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Aplicaciones[] $aplicaciones0
 * @property Aplicaciones[] $aplicaciones1
 * @property Aplicaciones[] $aplicaciones2
 * @property Aplicaciones[] $aplicaciones3
 * @property Aplicaciones[] $aplicaciones4
 * @property Aplicaciones[] $aplicaciones5
 * @property Dependencias[] $dependencias
 * @property Dependencias[] $dependencias0
 * @property Empdistribuidora[] $empdistribuidoras
 * @property Estrequerimientos[] $estrequerimientos
 * @property Proyectos[] $proyectos
 * @property Proyectos[] $proyectos0
 * @property Requerimientos[] $requerimientos
 * @property Requerimientos[] $requerimientos0
 * @property Requerimientos[] $requerimientos1
 * @property Requerimientos[] $requerimientos2
 * @property Tipo $tipoIdFk
 */
class Tipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoId_fk', 'TiposDesc'], 'required'],
            [['TipoId_fk'], 'integer'],
            [['TiposDesc'], 'string', 'max' => 100],
            [['TiposValo'], 'string', 'max' => 50],
            [['TipoId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['TipoId_fk' => 'TipoId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TiposId' => 'Id',
            'TipoId_fk' => 'Tipo',
            'TiposDesc' => 'Descripción',
            'TiposValo' => 'Valor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones0()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones1()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk3' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones2()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk4' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones3()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk5' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones4()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk6' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones5()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk7' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencias()
    {
        return $this->hasMany(Dependencias::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencias0()
    {
        return $this->hasMany(Dependencias::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpdistribuidoras()
    {
        return $this->hasMany(Empdistribuidora::className(), ['TiposId_fk' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstrequerimientos()
    {
        return $this->hasMany(Estrequerimientos::className(), ['TiposId_fk' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyectos::className(), ['Tiposid_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos0()
    {
        return $this->hasMany(Proyectos::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos0()
    {
        return $this->hasMany(Requerimientos::className(), ['Tiposid_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos1()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk3' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos2()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk4' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoIdFk()
    {
        return $this->hasOne(Tipo::className(), ['TipoId' => 'TipoId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function TipoId_fk()
    {
        $data = Tipo::findOne($this->TipoId_fk);

        return $data['TipoDesc'];
    }

     public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if (!$insert)
        {

            $AudAcci =  'update';
            $table = $this->getTableSchema();
            $pk = $table->primaryKey; //---------------------- [ADepID]
            // echo "<pre>";
            // print_r($table);
            // echo "</pre>";
            // die();
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

            if(!isset($changedAttributes['TiposId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['TiposId'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TipoId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['TipoId_fk'] != $rows['TipoId_fk'])
                {
                    $oldAttributes[$i] = "Tipo => ".$changedAttributes['TipoId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposDesc']))
            {

            }
            else
            {
                if ($changedAttributes['TiposDesc'] != $rows['TiposDesc'])
                {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['TiposDesc'];
                $i++;
                }
            }

            //---------------------------------------------------------------//            

            if(!isset($changedAttributes['TiposValo']))
            {

            }
            else
            {
                if ($changedAttributes['TiposValo'] != $rows['TiposValo'])
                {
                $oldAttributes[$i] = "Valor => ".$changedAttributes['TiposValo'];
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
                if ($key == 'TiposId')
                {
                    $var[0] = "Id => ".$rows['TiposId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TipoId_fk' and $value != ($changedAttributes['TipoId_fk']))
                {
                    $var[1] = "Tipo => ".$rows['TipoId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'TiposDesc' and isset($changedAttributes['TiposDesc']))
                {
                    $var[2] = "Descripción => ".$rows['TiposDesc'];
                }

                //---------------------------------------------------------------//
                
                if ($key == 'TiposValo' and isset($changedAttributes['TiposValo']))
                {
                    $var[2] = "Valor => ".$rows['TiposValo'];
                }

                //---------------------------------------------------------------//

                //--------------------------------------------------------------

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
