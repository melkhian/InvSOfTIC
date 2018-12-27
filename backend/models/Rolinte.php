<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rolinte".
 *
 * @property int $ROLINTEID
 * @property int $INTECOMID
 * @property string $ROLID
 * @property string $ROLINTEDESC
 */
class Rolinte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolinte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INTECOMID', 'ROLID'], 'required'],
            [['INTECOMID', 'ROLID'], 'integer'],
            [['ROLINTEDESC'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ROLINTEID' => 'Rolinteid',
            'INTECOMID' => 'Intecomid',
            'ROLID' => 'Rolid',
            'ROLINTEDESC' => 'Rolintedesc',
        ];
    }
}
