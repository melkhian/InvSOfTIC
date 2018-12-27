<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "roles".
 *
 * @property string $ROLID Id
 * @property string $ROLNOM Nombre
 * @property string $ROLDESC Descripción
 *
 * @property Rolinte[] $rolintes
 * @property Usuarol[] $usuarols
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
            [['ROLNOM'], 'required'],
            [['ROLNOM'], 'string', 'max' => 60],
            [['ROLDESC'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ROLID' => 'Id',
            'ROLNOM' => 'Nombre',
            'ROLDESC' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolintes()
    {
        return $this->hasMany(Rolinte::className(), ['ROLID' => 'ROLID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarols()
    {
        return $this->hasMany(Usuarol::className(), ['ROLID' => 'ROLID']);
    }
}
