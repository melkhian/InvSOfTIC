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
 * @property int $UsuId_fk Cargo de la persona contacto
 * @property string $ESopTelePers Teléfono Contacto
 * @property string $ESopTeleOfic Número de teléfono oficina del contacto
 * @property string $ESopCorr Correo Contacto
 * @property int $TiposId_fk Tipo de Empresa
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Aplicaciones[] $aplicaciones0
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
            [['ESopNit', 'ESopNomb', 'ESopDire', 'ESopCont', 'UsuId_fk', 'ESopTelePers', 'ESopTeleOfic', 'ESopCorr', 'TiposId_fk'], 'required'],
            [['UsuId_fk', 'TiposId_fk'], 'integer'],
            [['ESopNit'], 'string', 'max' => 30],
            [['ESopNomb', 'ESopDire', 'ESopCont', 'ESopCorr'], 'string', 'max' => 50],
            [['ESopTelePers', 'ESopTeleOfic'], 'string', 'max' => 20],
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
            'UsuId_fk' => 'Cargo de la persona contacto',
            'ESopTelePers' => 'Teléfono Contacto',
            'ESopTeleOfic' => 'Número de teléfono oficina del contacto',
            'ESopCorr' => 'Correo Contacto',
            'TiposId_fk' => 'Tipo de Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['ESopId1' => 'ESopId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones0()
    {
        return $this->hasMany(Aplicaciones::className(), ['ESopId2' => 'ESopId']);
    }
}
