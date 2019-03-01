<?php
namespace backend\models;

use yii\base\Model;
use backend\models\User;

/**
 * Signup form
 */
class RegistroForm extends Model
{
    public $id;
    public $usuiden;
    public $usuprimnomb;
    public $ususegunomb;
    public $usuprimapel;
    public $ususeguapel;
    public $usutelepers;
    public $username;
    public $usuteleofic;
    public $email;

    public $depid_fk;
    public $tiposid_fk1;
    public $tiposid_fk2;
    public $status;


    public $password,$password_copy;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuiden', 'usuprimnomb', 'usuprimapel', 'usutelepers', 'username', 'usuteleofic', 'email', 'depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status'], 'required'],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\backend\models\User', 'message' => 'Esta dirección de correo electrónico ya se ha asignado.'],
            [['password','email'], 'required'],
            ['password', 'string', 'min' => 6],
            ['password_copy', 'compare', 'compareAttribute' => 'password', 'message' => 'Las contraseñas no coinciden'],
            [['depid_fk', 'tiposid_fk1', 'tiposid_fk2', 'status'], 'integer'],
            [['usuiden', 'usutelepers', 'usuteleofic'], 'string', 'max' => 20],
            [['usuprimnomb', 'ususegunomb', 'usuprimapel', 'ususeguapel'], 'string', 'max' => 30],
            [['username', 'email'], 'string', 'max' => 255],
            [['username','usuiden'], 'unique' , 'targetClass' => '\backend\models\User'],

        ];
    }

    public function attributeLabels()
    {
        return [
          'id'=>'Id',
          'usuiden'=>'Número de Identificación',
          'username'=>'Nombre de Usuario',
          'usuprimnomb'=>'Primer Nombre',
          'ususegunomb'=>'Segundo Nombre',
          'usuprimapel'=>'Primer Apellido',
          'ususeguapel'=>'Segundo Apellido',
          'usutelepers'=>'Teléfono Personal',
          'usuteleofic'=>'Teléfono Oficina',
          'email'=>'Correo Electrónico',
          'depid_fk'=>'Departamento',
          'tiposid_fk1'=>'Cargo',
          'tiposid_fk2'=>'Tipo de Contrato',
          'status'=>'Estado',
            // 'cedula_funcionario' => 'Cédula o Nit sin dígito de verificación',
          'password' => 'Contraseña',
            // 'id_rol' => 'Tipo de usuario',
          'password_copy' => 'Confirmación de contraseña',
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function registro()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->usuiden  =$this->usuiden;
        $user->usuprimnomb  =$this->usuprimnomb;
        $user->ususegunomb  =$this->ususegunomb;
        $user->usuprimapel  =$this->usuprimapel;
        $user->ususeguapel  =$this->ususeguapel;
        $user->usutelepers  =$this->usutelepers;
        $user->username  =$this->username;
        $user->usuteleofic  =$this->usuteleofic;
        $user->email  =$this->email;

        $user->depid_fk  =$this->depid_fk;
        $user->tiposid_fk1  =$this->tiposid_fk1;
        $user->tiposid_fk2  =$this->tiposid_fk2;
        $user->status  =$this->status;

        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
