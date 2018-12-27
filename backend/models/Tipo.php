<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $TIPOID
 * @property string $TIPODESC
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
            [['TIPODESC'], 'required'],
            [['TIPODESC'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIPOID' => 'Tipoid',
            'TIPODESC' => 'Tipodesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipos::className(), ['TIPOID' => 'TIPOID']);
    }
}
