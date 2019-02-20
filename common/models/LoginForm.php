<?php
namespace common\models;
use yii\helpers\Html;
use Yii;
use yii\base\Model;
use backend\models\Rolusua;


/**
 * Login form
 */
class LoginForm extends Model
{
    public $username ='';
    public $password = '';
    public $rememberMe = true;
    public $reCaptcha ='';
    public $id;
    public $fecha_actual;
    public $data;
    public $fechaCad;
    public $status;


    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            // ['RUsuCadu','exist','targetClass'=> Rolusua::class, 'targetAttribute' => ['RUsuCadu' => 'RUsuCadu']],
            // ['RUsuCadu', 'validateRolusua'],

             [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LeFaIUUAAAAAJCMIw8Y_zrv28SVitGpW6F-AWpw', 'uncheckedMessage' => 'Please confirm that you are not a bot.']
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
     public function validatePassword($attribute, $params)
     {
       if (!$this->hasErrors()) {
         $user = $this->getUser();

         //Validación para comparar la fecha actual con la fecha de caducidad del ROL
         if($user){
           $id = $user->id;
           $fecha_actual = strtotime(date("d-m-Y",time()));
           $data = LoginForm::RUsuId($id);
           $fechaCad = strtotime($data);
           $status = LoginForm::Status($id);
           $parstatus = LoginForm::ParStatus();
           $userRol = LoginForm::UserRol($id);
           // print_r($parstatus);
           // die();
         }

          //Validación para verificar si el aplicativo está HABILITADO para los usuarios
         if ($parstatus == 150 && $userRol != 1) {
           $this->addError($attribute, 'El aplicativo se encuentra DESHABILITADO');
         }elseif (!$user || !$user->validatePassword($this->password)) {
           $this->addError($attribute, 'Nombre de Usuario o contraseña incorrectos.');

           //Validación para verificar antes del login si el Usuario está o no HABILITADO

         } elseif ($status !=10) {
           $this->addError($attribute, 'Su cuenta se encuentra DESHABILITADA');
         }
         //Validación para verificar antes del login si el Usuario tiene ROL asignado
         elseif (empty($data)) {
           $this->addError($attribute, 'Su Usuario NO tiene ROL asignado');
         }
         //Validación para verificar antes del login si a la fecha su ROL ha expirado o no
         elseif ($fecha_actual > $fechaCad) {
           $this->addError($attribute, 'A la fecha su ROL a expirado');
         }

       }
     }

    public static function RUsuId($id)
    {
      // $IdUser = Yii::$app->user->identity->id;
      $query = (new \yii\db\Query())
      ->select('RUsuCadu')
      ->from('rolusua')
      ->innerJoin('user','user.id = rolusua.UsuId_fk')
      ->where(['id' => $id]);
      $command = $query->createCommand();
      $rows = $command->queryScalar();
      return $rows;
    }

    public static function ParStatus()
    {
      $query = (new \yii\db\Query())
      ->select('TiposId_fk')
      ->from('parametros')
      ->orderby(['ParId'=> SORT_DESC])
      ->limit(1);
      $command = $query->createCommand();
      $rows = $command->queryScalar();
      return $rows;
    }

    public static function Status($id)
    {
      // $IdUser = Yii::$app->user->identity->id;
      $query = (new \yii\db\Query())
      ->select('status')
      ->from('user')
      ->where(['id' => $id]);
      $command = $query->createCommand();
      $rows = $command->queryScalar();
      return $rows;
    }

    public static function UserRol($id)
    {
      // $IdUser = Yii::$app->user->identity->id;
      $query = (new \yii\db\Query())
      ->select('RolId')
      ->from('roles')
      ->where(['RolId' => $id]);
      $command = $query->createCommand();
      $rows = $command->queryScalar();
      return $rows;
    }
    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }

        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
