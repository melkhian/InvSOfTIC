<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appaceptacion".
 *
 * @property int $AAceId Id
 * @property string $AAceNomb Nombre del Funcionario
 * @property string $AAceCarg Cargo
 * @property string $AAceArea Área
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appaceptacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appaceptacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAceNomb', 'AAceCarg', 'AAceArea'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AAceNomb', 'AAceCarg', 'AAceArea'], 'string', 'max' => 100],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AAceId' => 'Id',
            'AAceNomb' => 'Nombre del Funcionario',
            'AAceCarg' => 'Cargo',
            'AAceArea' => 'Área',
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
