<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipos".
 *
 * @property int $TiposId
 * @property int $TipoId_fk Tipo
 * @property string $TiposDesc Descripción
 * @property int $TiposValo Valor
 *
 * @property Aplicaciones[] $aplicaciones
 * @property Aplicaciones[] $aplicaciones0
 * @property Aplicaciones[] $aplicaciones1
 * @property Aplicaciones[] $aplicaciones2
 * @property Aplicaciones[] $aplicaciones3
 * @property Aplicaciones[] $aplicaciones4
 * @property Aplicaciones[] $aplicaciones5
 * @property Dependencias[] $dependencias
 * @property Dependencias[] $dependencias0
 * @property Empdistribuidora[] $empdistribuidoras
 * @property Estrequerimiento[] $estrequerimientos
 * @property Proyectos[] $proyectos
 * @property Proyectos[] $proyectos0
 * @property Requerimientos[] $requerimientos
 * @property Requerimientos[] $requerimientos0
 * @property Requerimientos[] $requerimientos1
 * @property Requerimientos[] $requerimientos2
 * @property Tipo $tipos
 */
class Tipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoId_fk', 'TiposDesc', 'TiposValo'], 'required'],
            [['TipoId_fk', 'TiposValo'], 'integer'],
            [['TiposDesc'], 'string', 'max' => 100],
            [['TiposId'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['TiposId' => 'TipoId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TiposId' => 'Tipos ID',
            'TipoId_fk' => 'Tipo',
            'TiposDesc' => 'Descripción',
            'TiposValo' => 'Valor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones0()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones1()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk3' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones2()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk4' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones3()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk5' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones4()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk6' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAplicaciones5()
    {
        return $this->hasMany(Aplicaciones::className(), ['TiposId_fk7' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencias()
    {
        return $this->hasMany(Dependencias::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencias0()
    {
        return $this->hasMany(Dependencias::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpdistribuidoras()
    {
        return $this->hasMany(Empdistribuidora::className(), ['TiposId_fk' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstrequerimientos()
    {
        return $this->hasMany(Estrequerimiento::className(), ['TiposId_fk' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyectos::className(), ['Tiposid_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos0()
    {
        return $this->hasMany(Proyectos::className(), ['TiposId_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk1' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos0()
    {
        return $this->hasMany(Requerimientos::className(), ['Tiposid_fk2' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos1()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk3' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos2()
    {
        return $this->hasMany(Requerimientos::className(), ['TiposId_fk4' => 'TiposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasOne(Tipo::className(), ['TipoId' => 'TiposId']);
    }
}
