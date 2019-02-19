<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appdirectorios".
 *
 * @property int $ADirId Id
 * @property string $ADirDirec Directorio
 * @property string $ADirDesc Descripción
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appdirectorios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appdirectorios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ADirDirec', 'ADirDesc'], 'required'],
            [['AppId_fk'], 'integer'],
            [['ADirDirec'], 'string', 'max' => 100],
            [['ADirDesc'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ADirId' => 'Id',
            'ADirDirec' => 'Directorio',
            'ADirDesc' => 'Descripción',
            'AppId_fk' => 'Aplicación',
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
