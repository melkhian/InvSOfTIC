<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "versdocrequerimientos".
 *
 * @property int $VDReqId
 * @property int $ReqId_fk Requerimiento
 * @property string $VDReqDocu Ruta ubicación de la Versión
 * @property string $VDReqFechSist Fecha sistema
 *
 * @property Requerimientos $reqIdFk
 */
class Versdocrequerimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'versdocrequerimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ReqId_fk', 'VDReqDocu', 'VDReqFechSist'], 'required'],
            [['ReqId_fk'], 'integer'],
            [['VDReqFechSist'], 'safe'],
            [['VDReqDocu'], 'string', 'max' => 500],
            [['ReqId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Requerimientos::className(), 'targetAttribute' => ['ReqId_fk' => 'ReqId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'VDReqId' => 'Id',
            'ReqId_fk' => 'Requerimiento',
            'VDReqDocu' => 'Ruta ubicación de la Versión',
            'VDReqFechSist' => 'Fecha sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqIdFk()
    {
        return $this->hasOne(Requerimientos::className(), ['ReqId' => 'ReqId_fk']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ReqId_fk()
    {
        $data = Requerimientos::findOne($this->ReqId_fk);

        return $data['ReqDesc'];
    }
}
