<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "interfaces".
 *
 * @property int $IntId Id
 * @property string $IntNomb Nombre
 * @property string $IntDesc Descripción
 *
 * @property Intecoma[] $intecomas
 */
class Interfaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interfaces';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IntNomb', 'IntDesc'], 'required'],
            [['IntNomb'], 'string', 'max' => 50],
            [['IntDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IntId' => 'Id',
            'IntNomb' => 'Nombre',
            'IntDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['IntiId_fk' => 'IntId']);
    }
}
