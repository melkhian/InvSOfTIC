<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appbasedatos".
 *
 * @property int $ABasId Id
 * @property string $ABasMane Manejador
 * @property string $ABasVersBD Versión
 * @property string $ABasPuer1 Puerto
 * @property string $ABasObse2 Observaciones
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appbasedatos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appbasedatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ABasMane', 'ABasVersBD', 'ABasPuer1', 'ABasObse2'], 'required'],
            [['AppId_fk'], 'integer'],
            [['ABasMane'], 'string', 'max' => 200],
            [['ABasVersBD', 'ABasPuer1'], 'string', 'max' => 50],
            [['ABasObse2'], 'string', 'max' => 500],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ABasId' => 'Id',
            'ABasMane' => 'Manejador',
            'ABasVersBD' => 'Versión',
            'ABasPuer1' => 'Puerto',
            'ABasObse2' => 'Observaciones',
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
