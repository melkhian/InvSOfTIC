<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appplugins".
 *
 * @property int $APluId Id
 * @property string $APluNomb Nombre
 * @property string $APluLice Licenciamiento
 * @property string $APluDesc Descripción del uso
 * @property int $AppId_fk Aplicación
 *
 * @property Aplicaciones $appIdFk
 */
class Appplugins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appplugins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['APluNomb', 'APluLice', 'APluDesc', 'AppId_fk'], 'required'],
            [['AppId_fk'], 'integer'],
            [['APluNomb'], 'string', 'max' => 50],
            [['APluLice'], 'string', 'max' => 100],
            [['APluDesc'], 'string', 'max' => 200],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'APluId' => 'Id',
            'APluNomb' => 'Nombre',
            'APluLice' => 'Licenciamiento',
            'APluDesc' => 'Descripción del uso',
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
