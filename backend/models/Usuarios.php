<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $USUID ID
 * @property string $USUNOMB1 PRIMER NOMBRE
 * @property string $USUNOMB2 SEGUNDO NOMBRE
 * @property string $USUAPEL1 PRIMER APELLIDO
 * @property string $USUAPEL2 SEGUNDO APELLIDO
 * @property string $USUIDEN IDENTIFICACION
 * @property string $USUCARG CARGO
 * @property string $USUCORR EMAIL
 * @property string $USUTELEPERS TELEFONO PERSONAL
 * @property string $USUTELEOFIC TELEFONO OFICINA
 * @property int $USUESTA ESTADO
 * @property string $USUCONT CONTRASEÑA
 * @property int $DEPID DEPARTAMENTO ID
 * @property string $AUTHKEY AUTHKEY
 * @property string $ACCESSTOKEN TOKEN
 *
 * @property Usuarol[] $usuarols
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USUNOMB1', 'USUAPEL1', 'USUIDEN', 'USUCARG', 'USUCORR', 'USUTELEPERS', 'USUESTA', 'USUCONT', 'DEPID'], 'required'],
            [['USUESTA', 'DEPID'], 'integer'],
            [['USUNOMB1', 'USUNOMB2', 'USUAPEL1', 'USUAPEL2', 'USUCARG'], 'string', 'max' => 60],
            [['USUIDEN', 'USUTELEPERS', 'USUTELEOFIC'], 'string', 'max' => 20],
            [['USUCORR'], 'string', 'max' => 50],
            [['USUCONT', 'AUTHKEY', 'ACCESSTOKEN'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'USUID' => 'ID',
            'USUNOMB1' => 'PRIMER NOMBRE',
            'USUNOMB2' => 'SEGUNDO NOMBRE',
            'USUAPEL1' => 'PRIMER APELLIDO',
            'USUAPEL2' => 'SEGUNDO APELLIDO',
            'USUIDEN' => 'IDENTIFICACION',
            'USUCARG' => 'CARGO',
            'USUCORR' => 'EMAIL',
            'USUTELEPERS' => 'TELEFONO PERSONAL',
            'USUTELEOFIC' => 'TELEFONO OFICINA',
            'USUESTA' => 'ESTADO',
            'USUCONT' => 'CONTRASEÑA',
            'DEPID' => 'DEPARTAMENTO ID',
            'AUTHKEY' => 'AUTHKEY',
            'ACCESSTOKEN' => 'TOKEN',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarols()
    {
        return $this->hasMany(Usuarol::className(), ['USUID' => 'USUID']);
    }
}
