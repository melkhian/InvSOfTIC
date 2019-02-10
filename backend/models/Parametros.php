<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%parametros}}".
 *
 * @property int $ParId Id
 * @property string $ParHead Imagen del Header
 * @property string $ParFoot Imagen del Footer
 * @property int $ParMult Número de multisesiones permitidas
 * @property int $ParFall Número de intentos fallidos antes de bloquear Usuario
 * @property int $TiposId_fk Estado del Aplicativo
 * @property string $ParNemo Nemotecnia configurable de Contraseña
 * @property int $ParTiemExpi
 *
 * @property Tipos $tiposIdFk
 */
class Parametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%parametros}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParHead', 'ParFoot', 'ParMult', 'ParFall', 'TiposId_fk', 'ParNemo', 'ParTiemExpi'], 'required'],
            [['ParMult', 'ParFall', 'TiposId_fk', 'ParTiemExpi'], 'integer'],
            [['ParHead', 'ParFoot'], 'string', 'max' => 200],
            [['ParNemo'], 'string', 'max' => 50],
            [['TiposId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ParId' => 'Par ID',
            'ParHead' => 'Par Head',
            'ParFoot' => 'Par Foot',
            'ParMult' => 'Par Mult',
            'ParFall' => 'Par Fall',
            'TiposId_fk' => 'Tipos Id Fk',
            'ParNemo' => 'Par Nemo',
            'ParTiemExpi' => 'Par Tiem Expi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk']);
    }
}
