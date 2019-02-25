<?php

namespace backend\models;
use backend\models\AuditTrail;
use Yii;

/**
 * This is the model class for table "requerimientos".
 *
 * @property int $ReqId Id
 * @property int $AppId_fk Aplicación
 * @property string $ReqDesc Descripción
 * @property int $TiposId_fk1 Tipo de Requerimiento
 * @property int $UsuId_fk Funcionario que Aprueba
 * @property int $Tiposid_fk2 ¿Funcionario Aprueba?
 * @property int $TiposId_fk3 ¿Usuario Aprueba?
 * @property string $ReqFechTomaRequ Fecha toma de Requerimiento
 * @property string $ReqFechSist Fecha del sistema
 * @property int $TiposId_fk4 Prioridad
 *
 * @property Estrequerimientos[] $estrequerimientos
 * @property Aplicaciones $appIdFk
 * @property Tipos $tiposIdFk1
 * @property Tipos $tiposidFk2
 * @property Tipos $tiposIdFk3
 * @property Tipos $tiposIdFk4
 * @property User $usuIdFk
 * @property Versdocrequerimientos[] $versdocrequerimientos
 */
class Requerimientos extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            'sammaye\audittrail\LoggableBehavior'
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requerimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AppId_fk', 'ReqDesc', 'TiposId_fk1', 'UsuId_fk', 'Tiposid_fk2', 'TiposId_fk3', 'ReqFechTomaRequ', 'ReqFechSist', 'TiposId_fk4'], 'required'],
            [['AppId_fk', 'TiposId_fk1', 'UsuId_fk', 'Tiposid_fk2', 'TiposId_fk3', 'TiposId_fk4'], 'integer'],
            [['ReqFechTomaRequ', 'ReqFechSist'], 'safe'],
            [['ReqDesc'], 'string', 'max' => 50],
            [['AppId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Aplicaciones::className(), 'targetAttribute' => ['AppId_fk' => 'AppId']],
            [['TiposId_fk1'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk1' => 'TiposId']],
            [['Tiposid_fk2'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['Tiposid_fk2' => 'TiposId']],
            [['TiposId_fk3'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk3' => 'TiposId']],
            [['TiposId_fk4'], 'exist', 'skipOnError' => true, 'targetClass' => Tipos::className(), 'targetAttribute' => ['TiposId_fk4' => 'TiposId']],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ReqId' => 'Id',
            'AppId_fk' => 'Aplicación',
            'ReqDesc' => 'Descripción',
            'TiposId_fk1' => 'Tipo de Requerimiento',
            'UsuId_fk' => 'Funcionario que Aprueba',
            'Tiposid_fk2' => '¿Funcionario Aprueba?',
            'TiposId_fk3' => '¿Usuario Aprueba?',
            'ReqFechTomaRequ' => 'Fecha toma de Requerimiento',
            'ReqFechSist' => 'Fecha del sistema ',
            'TiposId_fk4' => 'Prioridad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstrequerimientos()
    {
        return $this->hasMany(Estrequerimientos::className(), ['ReqId_fk' => 'ReqId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
     public function getAppIdFk()
     {
         return $this->hasOne(Aplicaciones::className(), ['AppId' => 'AppId_fk']);
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
    public function getTiposidFk2()
    {
        return $this->hasOne(Tipos::className(), ['TiposId' => 'Tiposid_fk2']);
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
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVersdocrequerimientos()
    {
        return $this->hasMany(Versdocrequerimientos::className(), ['ReqId_fk' => 'ReqId']);
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function AppId_fk()
    {
        $data = Aplicaciones::findOne($this->AppId_fk);

        return $data['AppNomb'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function TiposId_fk1()
    {
        $data = Tipos::findOne($this->TiposId_fk1);

        return $data['TiposDesc'];
    }

    //Cambió para mostrar en grilla los valores descriptivos de las llaves foráneas

    public function UsuId_fk()
    {
        $data = User::findOne($this->UsuId_fk);

        return $data['username'];
    }
    // public function behaviors()
    // {
    //     return array(
    //     // Classname => path to Class
    //     'ActiveRecordLogableBehavior'=>
    //         'application.behaviors.ActiveRecordLogableBehavior',
    //     );
    // }

}
?>
