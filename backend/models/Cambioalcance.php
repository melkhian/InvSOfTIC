<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cambioalcance".
 *
 * @property int $CAlcId
 * @property int $ProId_fk Proyecto
 * @property string $CAlcDesc Descripción
 * @property string $CAlcFechApro Fecha de Aprobación
 * @property string $CAlcFechInic Fecha de Inicio
 * @property string $CAlcFechFina Fecha Final
 * @property string $CAlcFechSist Fecha del Sistema
 *
 * @property Proyectos $proIdFk
 */
class Cambioalcance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cambioalcance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProId_fk', 'CAlcDesc', 'CAlcFechApro', 'CAlcFechInic', 'CAlcFechFina', 'CAlcFechSist'], 'required'],
            [['ProId_fk'], 'integer'],
            [['CAlcFechApro', 'CAlcFechInic', 'CAlcFechFina', 'CAlcFechSist'], 'safe'],
            [['CAlcDesc'], 'string', 'max' => 100],
            [['ProId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectos::className(), 'targetAttribute' => ['ProId_fk' => 'ProId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CAlcId' => 'Calc ID',
            'ProId_fk' => 'Proyecto',
            'CAlcDesc' => 'Descripción',
            'CAlcFechApro' => 'Fecha de Aprobación',
            'CAlcFechInic' => 'Fecha de Inicio',
            'CAlcFechFina' => 'Fecha Final',
            'CAlcFechSist' => 'Fecha del Sistema',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProIdFk()
    {
        return $this->hasOne(Proyectos::className(), ['ProId' => 'ProId_fk']);
    }
}
