<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "apphardware".
 *
 * @property int $AHarId Id
 * @property string $AHarTipoHard Tipo
 * @property string $AHarProc Procesador
 * @property string $AHarMemo Memoria
 * @property string $AHarEspaDisc Espacio en Disco
 * @property string $AHarObse Observaciones
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Apphardware extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apphardware';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AHarTipoHard', 'AHarProc', 'AHarMemo', 'AHarEspaDisc', 'AHarObse', 'AppId_fk'], 'required'],
            [['AppId_fk'], 'integer'],
            [['AHarTipoHard', 'AHarMemo'], 'string', 'max' => 100],
            [['AHarProc', 'AHarEspaDisc'], 'string', 'max' => 50],
            [['AHarObse'], 'string', 'max' => 500],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AHarId' => 'Id',
            'AHarTipoHard' => 'Tipo',
            'AHarProc' => 'Procesador',
            'AHarMemo' => 'Memoria',
            'AHarEspaDisc' => 'Espacio en Disco',
            'AHarObse' => 'Observaciones',
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
