<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "interfaces".
 *
 * @property int $INTEID
 * @property string $INTENOM
 * @property string $INTEDESC
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
            [['INTENOM'], 'required'],
            [['INTENOM'], 'string', 'max' => 60],
            [['INTEDESC'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INTEID' => 'Inteid',
            'INTENOM' => 'Intenom',
            'INTEDESC' => 'Intedesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['INTEID' => 'INTEID']);
    }
}
