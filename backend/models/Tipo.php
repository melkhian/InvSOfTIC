<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $TipoId Id
 * @property string $TipoDesc Descripción
 *
 * @property Tipos[] $tipos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoDesc'], 'required'],
            [['TipoDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TipoId' => 'Id',
            'TipoDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipos::className(), ['TipoId_fk' => 'TipoId']);
    }
}
