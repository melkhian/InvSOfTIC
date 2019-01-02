<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $usuiden Número de Identificación
 * @property string $usuprimnomb Primer Nombre
 * @property string $ususegunomb Segundo Nombre
 * @property string $usuprimapel Primer Apellido
 * @property string $ususeguapel Segundo Apellido
 * @property string $usutelepers Teléfono Personal
 * @property string $username Usuario
 * @property string $usuteleofic Teléfono Oficina
 * @property string $email Correo
 * @property int $depid_fk Dependencia
 * @property int $tiposid_fk1 Cargo
 * @property int $tiposid_fk2 Tipo de Contrato
 * @property int $status Estado
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Proyectos[] $proyectos
 * @property Requerimientos[] $requerimientos
 * @property Rolusua[] $rolusuas
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'username', 'usuteleofic', 'email', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status', 'created_at', 'updated_at'], 'integer'],
            [['usuiden', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel'], 'string', 'max' => 30],
            [['username', 'email', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuiden' => 'Número de Identificación',
            'usuprimnomb' => 'Primer Nombre',
            'ususegunomb' => 'Segundo Nombre',
            'usuprimapel' => 'Primer Apellido',
            'ususeguapel' => 'Segundo Apellido',
            'usutelepers' => 'Teléfono Personal',
            'username' => 'Usuario',
            'usuteleofic' => 'Teléfono Oficina',
            'email' => 'Correo',
            'depid_fk' => 'Dependencia',
            'tiposid_fk1' => 'Cargo',
            'tiposid_fk2' => 'Tipo de Contrato',
            'status' => 'Estado',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyectos()
    {
        return $this->hasMany(Proyectos::className(), ['UsuId_fk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequerimientos()
    {
        return $this->hasMany(Requerimientos::className(), ['UsuId_fk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolusuas()
    {
        return $this->hasMany(Rolusua::className(), ['UsuId_fk' => 'id']);
    }
}
