<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appdependencias".
 *
 * @property int $ADepId
 * @property int $DepId_fk Dependencia
 * @property int $AppId_fk Aplicación
 * @property string $ADepCantUsua Cantidad de Usuarios
 * @property string $ADepFechSist Fecha del Sistema
 *
 * @property Dependencias $depIdFk
 * @property Aplicaciones $appIdFk
 */
class Appdependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appdependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepId_fk', 'AppId_fk', 'ADepCantUsua', 'ADepFechSist'], 'required'],
            [['DepId_fk', 'AppId_fk'], 'integer'],
            [['ADepFechSist'], 'safe'],
            [['ADepCantUsua'], 'string', 'max' => 10],
            [['DepId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencias::className(), 'targetAttribute' => ['DepId_fk' => 'DepId']],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ADepId' => 'Adep ID',
            'DepId_fk' => 'Dependencia',
            'AppId_fk' => 'Aplicación',
            'ADepCantUsua' => 'Cantidad de Usuarios',
            'ADepFechSist' => 'Fecha del Sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepIdFk()
    {
        return $this->hasOne(Dependencias::className(), ['DepId' => 'DepId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdFk()
    {
        return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
    }
}
