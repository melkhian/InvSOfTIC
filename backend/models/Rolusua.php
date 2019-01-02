<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rolusua".
 *
 * @property int $RUsuId Id
 * @property int $RolId_fk Rol
 * @property int $UsuId_fk Usuario
 * @property string $RUsuCadu Fecha de Caducidad
 *
 * @property Roles $rolIdFk
 * @property User $usuIdFk
 */
class Rolusua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolusua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolId_fk', 'UsuId_fk', 'RUsuCadu'], 'required'],
            [['RolId_fk', 'UsuId_fk'], 'integer'],
            [['RUsuCadu'], 'safe'],
            [['RolId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['RolId_fk' => 'RolId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RUsuId' => 'Id',
            'RolId_fk' => 'Rol',
            'UsuId_fk' => 'Usuario',
            'RUsuCadu' => 'Fecha de Caducidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolIdFk()
    {
        return $this->hasOne(Roles::className(), ['RolId' => 'RolId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }
}
