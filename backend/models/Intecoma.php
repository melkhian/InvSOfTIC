<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "intecoma".
 *
 * @property int $INTECOMID Id
 * @property int $INTEID Interfaz Id
 * @property int $COMAID Comando Id
 * @property string $INTECOMADESC
 *
 * @property Interfaces $iNTE
 * @property Comandos $cOMA
 * @property Rolinte[] $rolintes
 */
class Intecoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'intecoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INTEID', 'COMAID'], 'required'],
            [['INTEID', 'COMAID'], 'integer'],
            [['INTECOMADESC'], 'string', 'max' => 1000],
            [['INTEID'], 'exist', 'skipOnError' => true, 'targetClass' => Interfaces::className(), 'targetAttribute' => ['INTEID' => 'INTEID']],
            [['COMAID'], 'exist', 'skipOnError' => true, 'targetClass' => Comandos::className(), 'targetAttribute' => ['COMAID' => 'COMAID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'INTECOMID' => 'Id',
            'INTEID' => 'Interfaz Id',
            'COMAID' => 'Comando Id',
            'INTECOMADESC' => 'Intecomadesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getINTE()
    {
        return $this->hasOne(Interfaces::className(), ['INTEID' => 'INTEID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCOMA()
    {
        return $this->hasOne(Comandos::className(), ['COMAID' => 'COMAID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintes()
    {
        return $this->hasMany(Rolinte::className(), ['INTECOMID' => 'INTECOMID']);
    }
}
