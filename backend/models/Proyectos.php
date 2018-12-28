<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proyectos".
 *
 * @property int $ProId
 * @property string $ProNomb Nombre
 * @property string $ProDesc Descripción
 * @property string $ProObje Objetivos
 * @property int $UsuId_fk Funcionario que Aprueba
 * @property int $Tiposid_fk1 ¿Funcionario Aprueba?
 * @property string $ProFechApro Fecha Aprobación del Proyecto
 * @property string $ProDocu Ruta Documento del Proyecto
 * @property string $ProFechInic Fecha Planteada Inicio Proyecto
 * @property string $ProFechFina Fecha Planteada Fin Proyecto
 * @property int $TiposId_fk2 Estado
 * @property string $ProFinProy Observación del Estado Final
 *
 * @property Cambioalcance[] $cambioalcances
 * @property Tipos $tiposidFk1
 * @property Tipos $tiposIdFk2
 * @property User $usuIdFk
 * @property Requerimientos[] $requerimientos
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProNomb', 'ProDesc', 'ProObje', 'UsuId_fk', 'Tiposid_fk1', 'ProFechApro', 'ProDocu', 'ProFechInic', 'ProFechFina', 'TiposId_fk2', 'ProFinProy'], 'required'],
            [['UsuId_fk', 'Tiposid_fk1', 'TiposId_fk2'], 'integer'],
            [['ProFechApro', 'ProFechInic', 'ProFechFina'], 'safe'],
            [['ProNomb'], 'string', 'max' => 50],
            [['ProDesc'], 'string', 'max' => 100],
            [['ProObje', 'ProFinProy'], 'string', 'max' => 1000],
            [['ProDocu'], 'string', 'max' => 500],
            [['Tiposid_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['Tiposid_fk1' => 'TiposId']],
            [['TiposId_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk2' => 'TiposId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProId' => 'Pro ID',
            'ProNomb' => 'Nombre',
            'ProDesc' => 'Descripción',
            'ProObje' => 'Objetivos',
            'UsuId_fk' => 'Funcionario que Aprueba',
            'Tiposid_fk1' => '¿Funcionario Aprueba?',
            'ProFechApro' => 'Fecha Aprobación del Proyecto',
            'ProDocu' => 'Ruta Documento del Proyecto',
            'ProFechInic' => 'Fecha Planteada Inicio Proyecto',
            'ProFechFina' => 'Fecha Planteada Fin Proyecto',
            'TiposId_fk2' => 'Estado',
            'ProFinProy' => 'Observación del Estado Final',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCambioalcances()
    {
        return $this->hasMany(Cambioalcance::className(), ['ProId_fk' => 'ProId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposidFk1()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'Tiposid_fk1']);
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
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['ProId_fk' => 'ProId']);
    }
}
