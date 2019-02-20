<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "apparchivos".
 *
 * @property int $AArcId Id
 * @property string $AArcDirec Directorio
 * @property string $AArcNombArch Nombre del archivo
 * @property string $AArcVari Variable / Tipo de variable
 * @property string $AArcNombVari Nombre de la Variable
 * @property string $AArcDescPara Descripción
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Apparchivos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apparchivos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AArcDirec', 'AArcNombArch', 'AArcVari', 'AArcNombVari', 'AArcDescPara'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AArcDirec', 'AArcNombArch', 'AArcVari', 'AArcNombVari'], 'string', 'max' => 100],
            [['AArcDescPara'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AArcId' => 'Id',
            'AArcDirec' => 'Directorio',
            'AArcNombArch' => 'Nombre del archivo',
            'AArcVari' => 'Variable / Tipo de variable',
            'AArcNombVari' => 'Nombre de la Variable',
            'AArcDescPara' => 'Descripción',
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
