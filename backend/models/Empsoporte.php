<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empsoporte".
 *
 * @property int $ESopId Id
 * @property string $ESopNit NIT
 * @property string $ESopNomb Nombre
 * @property string $ESopDire Dirección
 * @property string $ESopCont Persona Contacto
 * @property string $ESopTele Teléfono Contacto
 * @property string $ESopCorr Correo Contacto
 *
 * @property Aplicaciones[] $aplicaciones
 */
class Empsoporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empsoporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESopNit', 'ESopNomb', 'ESopDire', 'ESopCont', 'ESopTele', 'ESopCorr'], 'required'],
            [['ESopNit'], 'string', 'max' => 30],
            [['ESopNomb', 'ESopDire', 'ESopCont', 'ESopCorr'], 'string', 'max' => 50],
            [['ESopTele'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ESopId' => 'Id',
            'ESopNit' => 'NIT',
            'ESopNomb' => 'Nombre',
            'ESopDire' => 'Dirección',
            'ESopCont' => 'Persona Contacto',
            'ESopTele' => 'Teléfono Contacto',
            'ESopCorr' => 'Correo Contacto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['ESopId_fk' => 'ESopId']);
    }
}
