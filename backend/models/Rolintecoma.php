<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rolintecoma".
 *
 * @property int $RIComId
 * @property int $RolId_fk Rol
 * @property int $IComid_fk Funcionalidad
 *
 * @property Roles $rolIdFk
 * @property Intecoma $iComidFk
 */
class Rolintecoma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rolintecoma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolId_fk', 'IComid_fk'], 'required'],
            [['RolId_fk', 'IComid_fk'], 'integer'],
            [['RolId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['RolId_fk' => 'RolId']],
            [['IComid_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Intecoma::className(), 'targetAttribute' => ['IComid_fk' => 'IcomId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RIComId' => 'Ricom ID',
            'RolId_fk' => 'Rol',
            'IComid_fk' => 'Funcionalidad',
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
    public function getIComidFk()
    {
        return $this->hasOne(Intecoma::className(), ['IcomId' => 'IComid_fk']);
    }
}
