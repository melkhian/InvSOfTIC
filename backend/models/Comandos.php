<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "comandos".
 *
 * @property int $ComId Id
 * @property string $ComNomb Nombre
 * @property string $ComDesc Descripción
 *
 * @property Intecoma[] $intecomas
 */
class Comandos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comandos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ComNomb', 'ComDesc'], 'required'],
            [['ComNomb'], 'string', 'max' => 50],
            [['ComDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ComId' => 'Id',
            'ComNomb' => 'Nombre',
            'ComDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['ComId_fk' => 'ComId']);
    }
}
