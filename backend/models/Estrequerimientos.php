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
            [['ReqId_fk', 'TiposId_fk', 'EReqEsta', 'EReqFech', 'EReqFechSist'], 'required'],
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

}
