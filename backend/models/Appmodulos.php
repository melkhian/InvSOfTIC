<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appmodulos".
 *
 * @property int $AModId Id
 * @property int $AppId_fk Aplicación
 * @property string $AModDesc Descripción
 *
 * @property Aplicaciones $appIdFk
 */
class Appmodulos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appmodulos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppId_fk', 'AModDesc'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AModDesc'], 'string', 'max' => 100],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
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
            'AModDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdFk()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
    }
}
