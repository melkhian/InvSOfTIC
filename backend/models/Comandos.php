<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "comandos".
 *
 * @property int $COMAID
 * @property string $COMANOM
 * @property string $COMADESC
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
            [['COMANOM'], 'required'],
            [['COMANOM'], 'string', 'max' => 60],
            [['COMADESC'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COMAID' => 'Comaid',
            'COMANOM' => 'Comanom',
            'COMADESC' => 'Comadesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntecomas()
    {
        return $this->hasMany(Intecoma::className(), ['COMAID' => 'COMAID']);
    }
}
