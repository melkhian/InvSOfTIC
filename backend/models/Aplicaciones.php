<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "aplicaciones".
 *
 * @property int $AppId Id
 * @property string $AppNomb Nombre
 * @property string $AppDesc Descripción
 * @property string $AppVers Versión de Aplicación
 * @property int $TiposId_fk1 Tipo de Licencia
 * @property string $AppNumeLice Número de Licencia
 * @property int $TiposId_fk2 Nivel Administrativo
 * @property int $TiposId_fk3 Propiedad
 * @property int $EDDesId_fk Empresa Distribuidora
 * @property int $TiposId_fk4 Sistema Operativo
 * @property int $TiposId_fk5 Relación con Aplicativo
 * @property string $AppInteApp Aplicativo Relacionado
 * @property int $ESopId_fk Empresa de Soporte
 * @property int $TiposId_fk6 Método copia de seguridad
 * @property int $TiposId_fk7 Política copia de seguridad
 * @property string $AppVersBD Versión Base de Datos
 * @property string $AppBaseDato Base de Datos
 *
 * @property Empdistribuidora $eDDesIdFk
 * @property Empsoporte $eSopIdFk
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposIdFk2
 * @property Tipos $tiposIdFk3
 * @property Tipos $tiposIdFk4
 * @property Tipos $tiposIdFk5
 * @property Tipos $tiposIdFk6
 * @property Tipos $tiposIdFk7
 * @property Appdependencias[] $appdependencias
 * @property Appmodulos[] $appmodulos
 */
class Aplicaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aplicaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppNomb', 'AppDesc', 'AppVers', 'TiposId_fk1', 'AppNumeLice', 'TiposId_fk2', 'TiposId_fk3', 'EDDesId_fk', 'TiposId_fk4', 'TiposId_fk5', 'ESopId_fk', 'TiposId_fk6', 'TiposId_fk7', 'AppVersBD', 'AppBaseDato'], 'required'],
            [['TiposId_fk1', 'TiposId_fk2', 'TiposId_fk3', 'EDDesId_fk', 'TiposId_fk4', 'TiposId_fk5', 'ESopId_fk', 'TiposId_fk6', 'TiposId_fk7'], 'integer'],
            [['AppNomb', 'AppNumeLice'], 'string', 'max' => 50],
            [['AppDesc', 'AppVers', 'AppInteApp', 'AppVersBD', 'AppBaseDato'], 'string', 'max' => 100],
            [['EDDesId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Empdistribuidora::className(), 'targetAttribute' => ['EDDesId_fk' => 'EDisId']],
            [['ESopId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Empsoporte::className(), 'targetAttribute' => ['ESopId_fk' => 'ESopId']],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['TiposId_fk3'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk3' => 'TiposId']],
            [['TiposId_fk4'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk4' => 'TiposId']],
            [['TiposId_fk5'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk5' => 'TiposId']],
            [['TiposId_fk6'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk6' => 'TiposId']],
            [['TiposId_fk7'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk7' => 'TiposId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AppId' => 'Id',
            'AppNomb' => 'Nombre',
            'AppDesc' => 'Descripción',
            'AppVers' => 'Versión de Aplicación',
            'TiposId_fk1' => 'Tipo de Licencia',
            'AppNumeLice' => 'Número de Licencia',
            'TiposId_fk2' => 'Nivel Administrativo',
            'TiposId_fk3' => 'Propiedad',
            'EDDesId_fk' => 'Empresa Distribuidora',
            'TiposId_fk4' => 'Sistema Operativo',
            'TiposId_fk5' => 'Relación con Aplicativo',
            'AppInteApp' => 'Aplicativo Relacionado',
            'ESopId_fk' => 'Empresa de Soporte',
            'TiposId_fk6' => 'Método copia de seguridad',
            'TiposId_fk7' => 'Política copia de seguridad',
            'AppVersBD' => 'Versión Base de Datos',
            'AppBaseDato' => 'Base de Datos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEDDesIdFk()
    {
        return $this->hasOne(Empdistribuidora::className(), ['EDisId' => 'EDDesId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getESopIdFk()
    {
        return $this->hasOne(Empsoporte::className(), ['ESopId' => 'ESopId_fk']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk3()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk4()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk5()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk6()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk6']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposIdFk7()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'TiposId_fk7']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppdependencias()
    {
        return $this->hasMany(Appdependencias::className(), ['AppId_fk' => 'AppId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppmodulos()
    {
        return $this->hasMany(Appmodulos::className(), ['AppId_fk' => 'AppId']);
    }
}
