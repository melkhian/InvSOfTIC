<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $usuiden Número de Identificación
 * @property string $usuprimnomb Primer Nombre
 * @property string $ususegunomb Segundo Nombre
 * @property string $usuprimapel Primer Apellido
 * @property string $ususeguapel Segndo Apellido
 * @property string $usutelepers Teléfono Personal
 * @property string $usuteleofic Teléfono Oficina
 * @property int $depid_fk Dependencia
 * @property int $tiposid_fk1 Cargo
 * @property int $tiposid_fk2 Tipo de Contrato
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
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'usuteleofic', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2'], 'required'],
            [['status', 'created_at', 'updated_at', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['usuiden', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel'], 'string', 'max' => 30],
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
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'usuiden' => 'Número de Identificación',
            'usuprimnomb' => 'Primer Nombre',
            'ususegunomb' => 'Segundo Nombre',
            'usuprimapel' => 'Primer Apellido',
            'ususeguapel' => 'Segndo Apellido',
            'usutelepers' => 'Teléfono Personal',
            'usuteleofic' => 'Teléfono Oficina',
            'depid_fk' => 'Dependencia',
            'tiposid_fk1' => 'Cargo',
            'tiposid_fk2' => 'Tipo de Contrato',
        ];
    }
}
