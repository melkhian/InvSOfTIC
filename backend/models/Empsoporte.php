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
 * @property int $TiposId_fk1 Cargo de la persona contacto
 * @property string $ESopTelePers Teléfono Contacto
 * @property string $ESopTeleOfic Número de teléfono oficina del contacto
 * @property string $ESopCorr Correo Contacto
 * @property int $TiposId_fk2 Tipo de Empresa
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Aplicaciones[] $aplicaciones0
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk2
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
            [['ESopNit', 'ESopNomb', 'ESopDire', 'ESopCont', 'TiposId_fk1', 'ESopTelePers', 'ESopTeleOfic', 'ESopCorr', 'TiposId_fk2'], 'required'],
            [['TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['ESopNit'], 'string', 'max' => 30],
            [['ESopNomb', 'ESopDire', 'ESopCont', 'ESopCorr'], 'string', 'max' => 50],
            [['ESopTelePers', 'ESopTeleOfic'], 'string', 'max' => 50],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['ESopNit', 'ESopCorr'], 'unique'],
            [['ESopCorr'], 'email'],
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
            'TiposId_fk1' => 'Cargo de la persona contacto',
            'ESopTelePers' => 'Teléfono Contacto',
            'ESopTeleOfic' => 'Número de teléfono oficina del contacto',
            'ESopCorr' => 'Correo Contacto',
            'TiposId_fk2' => 'Tipo de Empresa',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk2']);
    }
}
