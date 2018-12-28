<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empdistribuidora".
 *
 * @property int $EDisId
 * @property string $EDisNit NIT
 * @property string $EDisNomb Nombre
 * @property string $EDisDire Dirección
 * @property string $EDisCont Persona Contacto
 * @property string $EDisTele Teléfono Contacto
 * @property string $EDisCorr Correo Contacto
 * @property int $TiposId_fk Tipo de Empresa Distribuidora
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Tipos $tiposIdFk
 */
class Empdistribuidora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empdistribuidora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EDisNit', 'EDisNomb', 'EDisDire', 'EDisCont', 'EDisTele', 'EDisCorr', 'TiposId_fk'], 'required'],
            [['TiposId_fk'], 'integer'],
            [['EDisNit'], 'string', 'max' => 30],
            [['EDisNomb', 'EDisDire', 'EDisCont', 'EDisCorr'], 'string', 'max' => 50],
            [['EDisTele'], 'string', 'max' => 20],
            [['TiposId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EDisId' => 'Edis ID',
            'EDisNit' => 'NIT',
            'EDisNomb' => 'Nombre',
            'EDisDire' => 'Dirección',
            'EDisCont' => 'Persona Contacto',
            'EDisTele' => 'Teléfono Contacto',
            'EDisCorr' => 'Correo Contacto',
            'TiposId_fk' => 'Tipo de Empresa Distribuidora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['EDDesId_fk' => 'EDisId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk']);
    }
}
