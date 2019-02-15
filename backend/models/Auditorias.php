<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%auditorias}}".
 *
 * @property int $AudId Id
 * @property int $UsuId_fk Usuario
 * @property string $AudMod Modelo
 * @property string $AudAcci Acción
 * @property string $AudDatoAnte Dato Anterior
 * @property string $AudDatoDesp Dato Actual
 * @property string $AudIp Ip
 * @property string $AudFechHora Fecha Acción
 *
 * @property User $usuIdFk
 */
class Auditorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auditorias}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsuId_fk', 'AudMod', 'AudAcci', 'AudDatoAnte', 'AudDatoDesp', 'AudIp', 'AudFechHora'], 'required'],
            [['UsuId_fk'], 'integer'],
            [['AudFechHora'], 'safe'],
            [['AudMod'], 'string', 'max' => 200],
            [['AudAcci', 'AudDatoAnte', 'AudIp'], 'string', 'max' => 100],
            [['AudDatoDesp'], 'string', 'max' => 5000],
            [['UsuId_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UsuId_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AudId' => 'Id',
            'UsuId_fk' => 'Usuario',
            'AudMod' => 'Modelo',
            'AudAcci' => 'Acción',
            'AudDatoAnte' => 'Dato Anterior',
            'AudDatoDesp' => 'Dato Actual',
            'AudIp' => 'Ip',
            'AudFechHora' => 'Fecha Acción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuIdFk()
    {
        return $this->hasOne(User::className(), ['id' => 'UsuId_fk']);
    }

        public function UsuId_fk()
    {
        $data = User::findOne($this->UsuId_fk);

        return $data['username'];
    }

    //     public function AudMod()
    // {
    //     $data = Auditorias::findOne($this->AudMod);

    //     return $data['AudMod'];
    // }
}
