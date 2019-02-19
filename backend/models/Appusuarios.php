<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appusuarios".
 *
 * @property int $AUsuId Id
 * @property string $AUsuUsua Usuario
 * @property string $AUsuDesc Descripción
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appusuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appusuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AUsuUsua', 'AUsuDesc'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AUsuUsua'], 'string', 'max' => 50],
            [['AUsuDesc'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AUsuId' => 'Id',
            'AUsuUsua' => 'Usuario',
            'AUsuDesc' => 'Descripción',
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
