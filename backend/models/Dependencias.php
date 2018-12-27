<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dependencias".
 *
 * @property int $DEPID
 * @property string $DEPNOMBENT
 * @property string $DEPENCARGADO
 * @property string $DEPCARGO
 * @property string $DEPTELEFONO
 * @property string $DEPDIRECCION
 * @property int $DEPTIPO
 * @property string $DEPMAIL
 *
 * @property Appdepend[] $appdepends
 */
class Dependencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DEPNOMBENT', 'DEPENCARGADO', 'DEPCARGO', 'DEPTELEFONO', 'DEPDIRECCION', 'DEPTIPO', 'DEPMAIL'], 'required'],
            [['DEPTIPO'], 'integer'],
            [['DEPNOMBENT', 'DEPENCARGADO', 'DEPMAIL'], 'string', 'max' => 50],
            [['DEPCARGO', 'DEPDIRECCION'], 'string', 'max' => 30],
            [['DEPTELEFONO'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DEPID' => 'Depid',
            'DEPNOMBENT' => 'Depnombent',
            'DEPENCARGADO' => 'Depencargado',
            'DEPCARGO' => 'Depcargo',
            'DEPTELEFONO' => 'Deptelefono',
            'DEPDIRECCION' => 'Depdireccion',
            'DEPTIPO' => 'Deptipo',
            'DEPMAIL' => 'Depmail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppdepends()
    {
        return $this->hasMany(Appdepend::className(), ['DEPID' => 'DEPID']);
    }
}
