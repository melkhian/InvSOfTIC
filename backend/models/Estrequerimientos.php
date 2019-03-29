<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estrequerimientos".
 *
 * @property int $EReqId Id
 * @property int $ReqId_fk Requerimiento
 * @property int $TiposId_fk Estado
 * @property string $EReqEsta Observación del estado
 * @property string $EReqFech Fecha del Cambio de Estado
 * @property string $EReqFechSist Fecha de sistema
 *
 * @property Requerimientos $reqIdFk
 * @property Tipos $tiposIdFk
 */
class Estrequerimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estrequerimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TiposId_fk', 'EReqEsta', 'EReqFech', 'EReqFechSist'], 'required'],
            [['ReqId_fk', 'TiposId_fk'], 'integer'],
            [['EReqFech', 'EReqFechSist'], 'safe'],
            [['EReqEsta'], 'string', 'max' => 500],
            [['ReqId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Requerimientos::className(), 'targetAttribute' => ['ReqId_fk' => 'ReqId']],
            [['TiposId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EReqId' => 'Id',
            'ReqId_fk' => 'Requerimiento',
            'TiposId_fk' => 'Estado',
            'EReqEsta' => 'Observación del estado',
            'EReqFech' => 'Fecha del Cambio de Estado',
            'EReqFechSist' => 'Fecha de sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqIdFk()
    {
        return $this->hasOne(Requerimientos::className(), ['ReqId' => 'ReqId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ReqId_fk()
    {
        $data = Requerimientos::findOne($this->ReqId_fk);

        return $data['ReqDesc'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function TiposId_fk()
    {
        $data = Tipos::findOne($this->TiposId_fk);

        return $data['TiposDesc'];
    }

     public function afterSave($insert, $changedAttributes){}
    // {
    //     parent::afterSave($insert, $changedAttributes);
    //     if (!$insert)
    //     {
    //
    //         $AudAcci =  'update';
    //         $table = $this->getTableSchema();
    //         $pk = $table->primaryKey; //---------------------- [ADepID]
    //         // echo "<pre>";
    //         // print_r($table);
    //         // echo "</pre>";
    //         // die();
    //         $idSelect = $_GET['id'];
    //         $UsuId_fk = Yii::$app->user->identity->id;
    //         $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
    //         $AudIp = Yii::$app->getRequest()->getUserIP();
    //         $AudFechHora = new \yii\db\Expression('NOW()');
    //         $connection = Yii::$app->db;
    //
    //         // print_r($pk);
    //         // die();
    //         $MaxId = (new \yii\db\Query())
    //         ->select($pk)
    //         ->from($AudMod)
    //         ->orderBy($pk[0]." DESC")
    //         ->createCommand()
    //         ->execute();
    //
    //
    //         $queryAll = (new \yii\db\Query())
    //         ->select('*')
    //         ->from($AudMod)
    //         ->where([$pk[0] => $idSelect])
    //         ->createCommand();
    //         $rows = $queryAll->queryOne();
    //         $resultAll = implode(",", $rows);
    //
    //         $i=0;
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['EReqId']))
    //         {
    //             $oldAttributes[$i] = "Id => ".$idSelect;
    //             $i++;
    //         }
    //         else
    //         {
    //             $oldAttributes[$i] = "Id => ".$changedAttributes['EReqId'];
    //             $i++;
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['ReqId_fk']))
    //         {
    //
    //         }
    //         else
    //         {
    //             if ($changedAttributes['ReqId_fk'] != $rows['ReqId_fk'])
    //             {
    //                 $oldAttributes[$i] = "Requerimiento => ".$changedAttributes['ReqId_fk'];
    //                 $i++;
    //             }
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['TiposId_fk']))
    //         {
    //
    //         }
    //         else
    //         {
    //             if ($changedAttributes['TiposId_fk'] != $rows['TiposId_fk'])
    //             {
    //             $oldAttributes[$i] = "Estado => ".$changedAttributes['TiposId_fk'];
    //             $i++;
    //             }
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['EReqEsta']))
    //         {
    //
    //         }
    //         else
    //         {
    //             if ($changedAttributes['EReqEsta'] != $rows['EReqEsta'])
    //             {
    //                 $oldAttributes[$i] = "Observacion => ".$changedAttributes['EReqEsta'];
    //                 $i++;
    //             }
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['EReqFech']))
    //         {
    //
    //         }
    //         else
    //         {
    //             if ($changedAttributes['EReqFech'] != $rows['EReqFech'])
    //             {
    //                 $oldAttributes[$i] = "Fecha => ".$changedAttributes['EReqFech'];
    //                 $i++;
    //             }
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         if(!isset($changedAttributes['EReqFechSist']))
    //         {
    //
    //         }
    //         else
    //         {
    //             $oldAttributes[$i] = "fechasis => ".$changedAttributes['EReqFechSist'];
    //             $i++;
    //         }
    //
    //         //---------------------------------------------------------------//
    //
    //         //---------------------------------------------------------------//
    //
    //         if (!isset($oldAttributes))
    //         {
    //             $total = 'no change';
    //         }
    //         else
    //         {
    //             $total = implode(",",$oldAttributes);
    //         }
    //
    //         // ------------------------------------------------------------------//
    //         // print_r($rows['AppId_fk']);
    //
    //         foreach ($rows as $key => $value)
    //         {
    //             if ($key == 'EReqId')
    //             {
    //                 $var[0] = "Id => ".$rows['EReqId'];
    //             }
    //
    //             //---------------------------------------------------------------//
    //
    //             if ($key == 'ReqId_fk' and $value != ($changedAttributes['ReqId_fk']))
    //             {
    //                 $var[1] = "Requerimiento => ".$rows['ReqId_fk'];
    //             }
    //
    //             //---------------------------------------------------------------//
    //
    //
    //             if ($key == 'TiposId_fk' and $value != ($changedAttributes['TiposId_fk']))
    //             {
    //                 $var[2] = "Estado => ".$rows['TiposId_fk'];
    //             }
    //
    //             //---------------------------------------------------------------//
    //
    //             if ($key == 'EReqEsta' and isset($changedAttributes['EReqEsta']))
    //             {
    //                 $var[3] = "Observacion => ".$rows['EReqEsta'];
    //             }
    //
    //             //---------------------------------------------------------------//
    //
    //             if ($key == 'EReqFech' and isset($changedAttributes['EReqFech']))
    //             {
    //                 $var[4] = "Fecha => ".$rows['EReqFech'];
    //             }
    //
    //             //---------------------------------------------------------------//
    //
    //             if ($key == 'EReqFechSist' and isset($changedAttributes['EReqFechSist']))
    //             {
    //                 $var[5] = "fechasis => ".$rows['EReqFechSist'];
    //             }
    //
    //             //--------------------------------------------------------------
    //
    //         }
    //         // echo '<pre>';
    //         // print_r($oldAttributes);
    //         // print_r($var);
    //         // echo '</pre>';
    //         // die();
    //         if (!isset($var))
    //         {
    //             $result = 'No Change';
    //         }
    //         else
    //         {
    //            $result = implode(",",$var);
    //         }
    //
    //             //---------------------------------------------------------------//
    //
    //         $connection->createCommand()->insert('auditorias',
    //                                 // ['AudId'=> $AudId],
    //                                 [
    //                                     'UsuId_fk' => Yii::$app->user->identity->id,
    //                                     'AudMod' => $AudMod,
    //                                     'AudAcci' => $AudAcci,
    //                                     'AudDatoAnte' => $total,
    //                                     'AudDatoDesp' => $result,
    //                                     'AudIp'=> $AudIp,
    //                                     'AudFechHora'=> $AudFechHora,
    //                                 ])
    //                                 ->execute();
    //
    //     }
    //     if ($insert)
    //     {
    //         $connection = Yii::$app->db;
    //         $AudAcci =  'create';
    //         $table = $this->getTableSchema();
    //         $pk = $table->primaryKey;
    //         $UsuId_fk = Yii::$app->user->identity->id;
    //         $AudMod = Yii::$app->controller->id; //------------------ [appdependencias]
    //         $AudIp = Yii::$app->getRequest()->getUserIP();
    //         $AudFechHora = new \yii\db\Expression('NOW()');
    //
    //     //---------------------------------------------------------------------------//
    //
    //
    //         $MaxId = (new \yii\db\Query())
    //         ->select($pk)
    //         ->from($AudMod)
    //         ->orderBy($pk[0]." DESC")
    //         ->createCommand()
    //         ->execute();
    //
    //         //---------------------------------------------//
    //
    //         $queryId = (new \yii\db\Query())
    //         ->select($pk)
    //         ->from($AudMod)
    //         ->where([$pk[0] => $MaxId])
    //         ->createCommand();
    //         $rows1 = $queryId->queryOne();
    //         // $resultId = implode(",", $rows1);
    //
    //         foreach ($rows1 as $key => $value)
    //         {
    //             if ($key == $pk[0])
    //             {
    //                 $var[0] = "Id => ".$rows1[$pk[0]];
    //             }
    //         }
    //
    //         $resultId = implode(",", $var);
    //
    //         //-----------------------------------------------//
    //
    //         $connection->createCommand()->insert('auditorias',
    //                                 // ['AudId'=> $AudId],
    //                                 [
    //                                     'UsuId_fk' => Yii::$app->user->identity->id,
    //                                     'AudMod' => $AudMod,
    //                                     'AudAcci' => $AudAcci,
    //                                     'AudDatoAnte' => ' ',
    //                                     'AudDatoDesp' => $resultId,
    //                                     'AudIp'=> $AudIp,
    //                                     'AudFechHora'=> $AudFechHora,
    //                                 ])
    //                                 ->execute();
    //     }
    // }

}
