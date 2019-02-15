<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "appplugins".
 *
 * @property int $APluId Id
 * @property string $APluNomb Nombre
 * @property string $APluLice Licenciamiento
 * @property string $ApluDesc Descripción del uso
 * @property int $AppId_fk Id secuencia de aplicaciones
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
          // Se elimina AppId_fk de los campos requeridos, esto para que funcione como un modelo 1:N en Aplicaciones
            [['APluNomb', 'APluLice', 'ApluDesc', 'AppId_fk'], 'required'],
            [['AppId_fk'], 'integer'],
            [['APluNomb'], 'string', 'max' => 50],
            [['APluLice'], 'string', 'max' => 100],
            [['ApluDesc'], 'string', 'max' => 200],
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
            'ApluDesc' => 'Descripción del uso',
            'AppId_fk' => 'Id secuencia de aplicaciones',
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
