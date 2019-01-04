<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "intecoma".
 *
 * @property int $IcomId Id
 * @property int $IntiId_fk Interfaz
 * @property int $ComId_fk Comando
 * @property string $IcomFunc Funcionalidad
 * @property string $IcomDesc Descripción
 *
 * @property Interfaces $intiIdFk
 * @property Comandos $comIdFk
 * @property Rolintecoma[] $rolintecomas
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
            [['IntiId_fk', 'ComId_fk', 'IcomFunc'], 'required'],
            [['IntiId_fk', 'ComId_fk'], 'integer'],
            [['IcomFunc'], 'string', 'max' => 50],
            [['IcomDesc'], 'string', 'max' => 100],
            [['IntiId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Interfaces::className(), 'targetAttribute' => ['IntiId_fk' => 'IntId']],
            [['ComId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Comandos::className(), 'targetAttribute' => ['ComId_fk' => 'ComId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IcomId' => 'Id',
            'IntiId_fk' => 'Interfaz',
            'ComId_fk' => 'Comando',
            'IcomFunc' => 'Funcionalidad',
            'IcomDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntiIdFk()
    {
        return $this->hasOne(Interfaces::className(), ['IntId' => 'IntiId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComIdFk()
    {
        return $this->hasOne(Comandos::className(), ['ComId' => 'ComId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintecomas()
    {
        return $this->hasMany(Rolintecoma::className(), ['IComid_fk' => 'IcomId']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function IntiId_fk()
    {
        $data = Interfaces::findOne($this->IntiId_fk);

        return $data['IntNomb'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function ComId_fk()
    {
        $data = Comandos::findOne($this->ComId_fk);

        return $data['ComNomb'];
    }
}
