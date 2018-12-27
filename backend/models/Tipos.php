<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipos".
 *
 * @property int $TIPOSID
 * @property int $TIPOID
 * @property string $TIPOSDESC
 * @property int $TIPOSVALOR
 *
 * @property Empdistdes[] $empdistdes
 * @property Requerimientos[] $requerimientos
 * @property Tipo $tIPO
 */
class Tipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIPOID', 'TIPOSDESC', 'TIPOSVALOR'], 'required'],
            [['TIPOID', 'TIPOSVALOR'], 'integer'],
            [['TIPOSDESC'], 'string', 'max' => 100],
            [['TIPOID'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['TIPOID' => 'TIPOID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIPOSID' => 'Tiposid',
            'TIPOID' => 'Tipoid',
            'TIPOSDESC' => 'Tiposdesc',
            'TIPOSVALOR' => 'Tiposvalor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpdistdes()
    {
        return $this->hasMany(Empdistdes::className(), ['TIPOSID' => 'TIPOSID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['TIPOSID' => 'TIPOSID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPO()
    {
        return $this->hasOne(Tipo::className(), ['TIPOID' => 'TIPOID']);
    }
}
