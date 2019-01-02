<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property int $RolId Id
 * @property string $RolNomb Nombre
 * @property string $RolDesc Descripción
 *
 * @property Rolintecoma[] $rolintecomas
 * @property Rolusua[] $rolusuas
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolNomb', 'RolDesc'], 'required'],
            [['RolNomb', 'RolDesc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RolId' => 'Id',
            'RolNomb' => 'Nombre',
            'RolDesc' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintecomas()
    {
        return $this->hasMany(Rolintecoma::className(), ['RolId_fk' => 'RolId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolusuas()
    {
        return $this->hasMany(Rolusua::className(), ['RolId_fk' => 'RolId']);
    }
}
