<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property int $DepId Id
 * @property string $DepNomb Nombre
 * @property string $DepEnca Encargado de Dependencia
 * @property int $TiposId_fk1 Cargo del Encargado
 * @property string $DepTele Teléfono de Dependencia
 * @property string $DepDire Dirección de Dependencia
 * @property int $TiposId_fk2 Tipo de Dependencia
 * @property string $DepCorr Correo del Encargado
 *
 * @property Appdependencias[] $appdependencias
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk2
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepNomb', 'DepEnca', 'TiposId_fk1', 'DepTele', 'DepDire', 'TiposId_fk2', 'DepCorr'], 'required'],
            [['TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['DepNomb', 'DepEnca', 'DepDire', 'DepCorr'], 'string', 'max' => 100],
            ['DepCorr', 'email'],
            [['DepCorr'], 'unique'],
            [['DepTele'], 'string', 'max' => 20],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DepId' => 'Id',
            'DepNomb' => 'Nombre',
            'DepEnca' => 'Encargado de Dependencia',
            'TiposId_fk1' => 'Cargo del Encargado',
            'DepTele' => 'Teléfono de Dependencia',
            'DepDire' => 'Dirección de Dependencia',
            'TiposId_fk2' => 'Tipo de Dependencia',
            'DepCorr' => 'Correo del Encargado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppdependencias()
    {
        return $this->hasMany(Appdependencias::className(), ['DepId_fk' => 'DepId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

            public function TiposId_fk1()
        {
            $data = Tipos::findOne($this->TiposId_fk1);

            return $data['TiposDesc'];
        }
}
