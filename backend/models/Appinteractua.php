<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appinteractua".
 *
 * @property int $AIntId Id
 * @property string $AIntOtroCual Otro
 * @property int $AppId_fk Aplicación
 * @property int $AppId_fk1 Aplicación
 *
 * @property Aplicaciones $appIdFk
 * @property Aplicaciones $appIdFk1
 */
class Appinteractua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appinteractua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['AIntOtroCual', 'AppId_fk', 'AppId_fk1'], 'required'],
            [['AppId_fk', 'AppId_fk1'], 'integer'],
            [['AIntOtroCual'], 'string', 'max' => 100],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
            [['AppId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk1' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AIntId' => 'Id',
            'AIntOtroCual' => 'Cuál',
            'AppId_fk' => 'Aplicación',
            'AppId_fk1' => 'Aplicación',
        ];
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
    public function getAppIdFk1()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk1']);
    }
}
