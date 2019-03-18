<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appaplicaciones".
 *
 * @property int $AAplId Id
 * @property string $AAplLengServ Lenguaje/Servicio
 * @property string $AAplVersApli Versión
 * @property string $AAplBibl Bibliotecas
 * @property string $AAplObse1 Observaciones
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appaplicaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appaplicaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAplLengServ', 'AAplVersApli', 'AAplBibl', 'AAplObse1'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AAplLengServ', 'AAplVersApli'], 'string', 'max' => 100],
            [['AAplBibl', 'AAplObse1'], 'string', 'max' => 500],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AAplId' => 'Id',
            'AAplLengServ' => 'Lenguaje/Servicio',
            'AAplVersApli' => 'Versión',
            'AAplBibl' => 'Bibliotecas',
            'AAplObse1' => 'Observaciones',
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
