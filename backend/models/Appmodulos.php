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
            ->orderBy($pk[0]."DESC")
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

            if(!isset($changedAttributes['AModId']))
            {
                $oldAttributes[$i] = "Id => ".$idSelect;
                $i++;
            }
            else
            {
                $oldAttributes[$i] = "Id => ".$changedAttributes['AModId'];
                $i++;
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

            if(!isset($changedAttributes['AModNomb']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Nombre => ".$changedAttributes['AModNomb'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AModDesc']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Descripción => ".$changedAttributes['AModDesc'];
                $i++;
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['TiposId_fk']))
            {

            }
            else
            {
                if ($changedAttributes['TiposId_fk'] != $rows['TiposId_fk'])
                {
                    $oldAttributes[$i] = "Esta Instalado? => ".$changedAttributes['TiposId_fk'];
                    $i++;
                }
            }

            //---------------------------------------------------------------//

            if(!isset($changedAttributes['AModObse']))
            {

            }
            else
            {
                $oldAttributes[$i] = "Observaciones => ".$changedAttributes['AModObse'];
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
            // echo '<br>';
            // print_r($changedAttributes['AppId_fk']);
            // die();
            foreach ($rows as $key => $value)
            {
                if ($key == 'AModId')
                {
                    $var[0] = "Id => ".$rows['AModId'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AppId_fk' and $value != $changedAttributes['AppId_fk'])
                {
                    $var[1] = "AppId => ".$rows['AppId_fk'];
                }

                //---------------------------------------------------------------//


                if ($key == 'AModNomb' and isset($changedAttributes['AModNomb']))
                {
                    $var[2] = "Nombre => ".$rows['AModNomb'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AModDesc' and isset($changedAttributes['AModDesc']))
                {
                    $var[3] = "Descripción => ".$rows['AModDesc'];
                }

                //---------------------------------------------------------------//

                if ($key == 'TiposId_fk' and $value != $changedAttributes['TiposId_fk'])
                {
                    $var[4] = "Esta instalado => ".$rows['TiposId_fk'];
                }

                //---------------------------------------------------------------//

                if ($key == 'AModObse' and isset($changedAttributes['AModObse']))
                {
                    $var[5] = "Observaciones => ".$rows['AModObse'];
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
            ->from('Appmodulos')
            ->orderBy($pk[0]." DESC")
            ->createCommand()
            ->execute();

            //---------------------------------------------//

            $queryId = (new \yii\db\Query())
            ->select($pk)
            ->from('Appmodulos')
            ->where([$pk[0] => $MaxId])
            ->createCommand();
            $rows1 = $queryId->queryOne();
            // $resultId = implode(",", $rows1);

            // foreach ($rows1 as $key => $value)
            // {
                // if ($rows1 == 'AModId')
                // {
                //     $var[0] = "Id => ".$rows1['AModId'];
                // }
            // }

            // $resultId = implode(",", $var);

            //-----------------------------------------------//

            $connection->createCommand()->insert('auditorias',
                                    // ['AudId'=> $AudId],
                                    [
                                        'UsuId_fk' => Yii::$app->user->identity->id,
                                        'AudMod' => $AudMod,
                                        'AudAcci' => $AudAcci,
                                        'AudDatoAnte' => ' ',
                                        'AudDatoDesp' => '',
                                        'AudIp'=> $AudIp,
                                        'AudFechHora'=> $AudFechHora,
                                    ])
                                    ->execute();
        }
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

    public function TiposId_fk()
    {
        $data = Tipos::findOne($this->TiposId_fk);

        return $data['TiposDesc'];
    }

    public function AppId_fk()
    {
    $data = Aplicaciones::findOne($this->AppId_fk);

    return $data['AppNomb'];
    }
}
